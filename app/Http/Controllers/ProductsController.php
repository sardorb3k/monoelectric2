<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Colors;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    private $pages;
    public function __construct(Product $pages)
    {
        $this->pages = $pages;
    }

    // home - Our products
    public function our_products()
    {
        $products = $this->pages->paginate(10);
        $category = Category::get();
        $colors = Colors::get();
        return view('products.index',compact('products', 'category', 'colors'));
    }

    // our product show
    public function our_product_show($id)
    {
        try {
            $product = $this->pages->find($id);
            $products = $this->pages->where('category_id',$product->category_id)->paginate(4);
            return view('products.show', compact('product','products'));
        } catch (\Throwable $th) {
            return abort('404');
        }
    }

    // Category
    public function our_product_category_show($id)
    {
        try {
            $products = $this->pages->where('category_id',$id)->paginate(10);
            $category = Category::get();
            $colors = Colors::get();
            return view('products.index',compact('products', 'category', 'colors'));
        } catch (\Throwable $th) {
            return abort('404');
        }
    }

    public function index()
    {
        $data = $this->pages->paginate(10);
        return view('dashboard.products.index', compact('data'));
    }

    public function show($id)
    {
        $product = $this->pages->where('id', $id)->first();
        $category = Category::get();
        $colors = Colors::get();
        return view('dashboard.products.show', compact('product','category', 'colors'));
    }

    public function create()
    {
        $category = Category::get();
        $colors = Colors::get();
        return view('dashboard.products.create', compact('category','colors'));
    }

    public function store(Request $request)
    {
        // dd($request);
        try {
            $request->validate([
                'name' => 'required',
                'productcode' => 'required',
                'quantitybox' => 'required',
                'piecesinbox' => 'required',
                'grossweight' => 'required',
                'volume' => 'required',
                'category' => 'required',
                'colors' => 'required',
                'image' => 'required',
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() .'im.'. $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $image->move($destinationPath, $imagename);
            }
            $this->pages->create([
                'name_en' => $request->name,
                'productcode' => $request->productcode,
                'quantitybox' => $request->quantitybox,
                'piecesinbox' => $request->piecesinbox,
                'grossweight' => $request->grossweight,
                'volume' => $request->volume,
                'category_id' => $request->category,
                'color_id' => $request->colors,
                'image' => $imagename,
            ]);
            return redirect()->route('dashboard.products.index')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('dashboard.products.index')->with('error', 'Error creating Product');
        }
    }

    // public function edit($id)
    // {
    //     return $this->pagesRepository->edit($id);
    // }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'nullable',
                'image' => 'nullable',
                'file' => 'nullable',
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() .'im.'. $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $image->move($destinationPath, $imagename);
            }
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $file = time() .'fl.'. $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $image->move($destinationPath, $file);
            }
            $page = $this->pages->find($id);
            $page->update([
                'name' => $request->name,
                'image' => $imagename ?? $page->image,
                'file' => $file ?? $page->file,
            ]);


            return redirect()->route('dashboard.products.index')->with('success', 'products updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.products.index')->with('error', 'products not updated.');
            dd($e);
        }
    }

    public function destroy($id)
    {
        $page = $this->pages->find($id);
        $page->delete();
        return redirect()->route('dashboard.products.index')->with('success', 'products deleted successfully.');
    }
}
