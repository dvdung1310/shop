<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('categories')->latest()->paginate(10);
        return view('backend.products.index', compact('products'));
    }

    // Hiển thị form thêm sản phẩm
    public function create()
    {
        $categories = Category::all();
        return view('backend.products.create', compact('categories'));
    }

    // Xử lý lưu sản phẩm mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'album.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categories' => 'required|array',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            //dặt tên cho file img1
            $filename = time() . '_' . $file->getClientOriginalName();
            //định nghĩa dẫn ssex upload
            $path_upload = 'uploads/products/';
            $request->file('image')->move($path_upload, $filename);
            $imagePath = $path_upload . $filename;
            $product->image = $imagePath;
        }

        // Xử lý album ảnh
        if ($request->hasFile('album')) {
            $albumPaths = [];
            foreach ($request->file('album') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path_upload = 'uploads/products/';
                $image->move($path_upload, $filename);
                $imagePath = $path_upload . $filename;
                $albumPaths[] = $imagePath;
            }
            $product->album = json_encode($albumPaths);
        }

        $product->save();

        // Gán danh mục
        $product->categories()->attach($request->categories);

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    // Hiển thị form chỉnh sửa sản phẩm
    public function edit($id)
    {
        $product = Product::with('categories')->findOrFail($id);
        $categories = Category::all();
        return view('backend.products.edit', compact('product', 'categories'));
    }

    // Xử lý cập nhật sản phẩm
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $id,
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'album.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;

        // Xử lý ảnh đại diện
        $imagePath = $product->image;
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'uploads/products/';
            $request->file('image')->move($path_upload, $filename);
            $imagePath = $path_upload . $filename;
            $product->image = $imagePath;
        }

        // Xử lý album ảnh
        if ($request->hasFile('album')) {
            // xử lý xóa ảnh cũ
            if ($product->album) {
                $oldAlbum = json_decode($product->album, true);
                foreach ($oldAlbum as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }
            }
            // xử lý thêm ảnh mới
            $albumPaths = [];
            foreach ($request->file('album') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path_upload = 'uploads/products/';
                $image->move($path_upload, $filename);
                $imagePath = $path_upload . $filename;
                $albumPaths[] = $imagePath;
                $product->album = json_encode($albumPaths);
            }
        }

        $product->save();
        // Cập nhật danh mục
        $product->categories()->sync($request->categories);

        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được cập nhật!');
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Xóa ảnh
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        if ($product->album) {
            foreach (json_decode($product->album) as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }

        $product->categories()->detach();
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã bị xóa!');
    }
}
