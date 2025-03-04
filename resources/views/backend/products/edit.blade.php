@extends('dashboard')

@section('content')
    <div class="container">
        <h2 class="mb-4">Chỉnh Sửa Sản Phẩm</h2>
        <form id="form-submit" action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card p-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $product->name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Đường dẫn</label>
                            <input type="text" class="form-control" id="name" name="slug"
                                value="{{ old('slug', $product->slug) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Giá bán thường (VND)</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ old('price', $product->price) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="sale_price" class="form-label">Giá khuyến mãi (VND)</label>
                            <input type="number" class="form-control" id="sale_price" name="sale_price"
                                value="{{ old('sale_price', $product->sale_price) }}">
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
                                        @if ($product->categories->contains($category->id)) checked @endif>
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
                            @if ($product->image)
                                <div class="mt-2">
                                    <img src="{{ asset($product->image) }}" alt="Ảnh đại diện" width="100"
                                        class="img-thumbnail">
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="album" class="form-label">Album ảnh sản phẩm</label>
                            <input type="file" class="form-control" id="album" name="album[]" multiple>
                            @if ($product->album)
                                <div class="mt-2">
                                    @foreach (json_decode($product->album) as $img)
                                        <img src="{{ asset($img) }}" alt="Album" width="70"
                                            class="img-thumbnail me-2">
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
