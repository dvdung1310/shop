@extends('dashboard')

@section('content')
    <div class="container">
        <h2 class="mb-4">Thêm Sản Phẩm</h2>
        <form id="form-submit" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-8">
                    <div class="card p-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Giá bán thường (VND)</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ old('price') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="sale_price" class="form-label">Giá khuyến mãi (VND)</label>
                            <input type="number" width="200px" class="form-control" id="sale_price" name="sale_price"
                                value="{{ old('sale_price') }}">
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const form = document.getElementById("form-submit");
                                const priceInput = document.getElementById("price");
                                const salePriceInput = document.getElementById("sale_price");

                                form.addEventListener("submit", function(event) {
                                    const price = parseFloat(priceInput.value);
                                    const salePrice = parseFloat(salePriceInput.value);
                                    if (salePrice > price) {
                                        event.preventDefault(); // Chặn submit
                                        alert("Giá khuyến mãi không được lớn hơn giá bán thường!");
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="mb-3">
                            <label for="categories" class="form-label">Danh mục sản phẩm</label>
                            <div class="form-check">
                                @foreach ($categories as $category)
                                    <input class="form-check-input" type="checkbox" name="categories[]"
                                        value="{{ $category->id }}" id="category_{{ $category->id }}"
                                        @if (isset($product) && in_array($category->id, $product->categories->pluck('id')->toArray())) checked @endif>
                                    <label class="form-check-label" for="category_{{ $category->id }}">
                                        {{ $category->name }}
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="image" class="form-label">Ảnh đại diện</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <div class="mb-3">
                            <label for="gallery" class="form-label">Album ảnh sản phẩm</label>
                            <input type="file" class="form-control" id="album" name="album[]" multiple>
                        </div>

                        <button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
