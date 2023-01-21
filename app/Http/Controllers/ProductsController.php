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
        // $this->middleware('auth');
    }

    // home - Our products
    public function our_products()
    {
        $products = $this->pages->get();
        $category = Category::get();
        $colors = Colors::get();
        return view('products.index',compact('products', 'category', 'colors'));
    }

    // our product show
    public function our_product_show($id)
    {
        try {
            $product = $this->pages->find($id);
            $products = $this->pages->where('category_id',$product->category_id)->get();
            return view('products.show', compact('product','products'));
        } catch (\Throwable $th) {
            return abort('404');
        }
    }

    public function index()
    {
        $pages = $this->pages->paginate(10);
        return view('dashboard.products.index', compact('pages'));
    }

    public function show($id)
    {
        $product = $this->pages->where('id', $id)->first();
        return view('dashboard.products.show', compact('product'));
    }

    public function create()
    {
        $category = Category::get();
        $colors = Colors::get();
        return view('dashboard.products.create', compact('category','colors'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'image' => 'required',
                'file' => 'required',
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
            $this->pages->create([
                'name' => $request->name,
                'image' => $imagename,
                'file' => $file,
            ]);
            return redirect()->route('dashboard.products.index')->with('success', 'Page created successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('dashboard.products.index')->with('error', 'Error creating page');
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
                'name' => 'required',
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
            dd($e);
            return redirect()->route('dashboard.products.index')->with('error', 'products not updated.');
        }
    }

    public function destroy($id)
    {
        $page = $this->pages->find($id);
        $page->delete();
        return redirect()->route('dashboard.products.index')->with('success', 'products deleted successfully.');
    }
}
