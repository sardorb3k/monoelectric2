<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    public function index()
    {
        $data = $this->category->paginate(10);
        return view('dashboard.category.index', compact('data'));
    }

    public function show($id)
    {
        $category = $this->category->where('id', $id)->first();
        return view('dashboard.category.show', compact('category'));
    }

    public function create()
    {
        $category = Category::get();
        return view('dashboard.category.create', compact('category'));
    }

    public function store(Request $request)
    {
        // dd($request);
        try {
            $request->validate([
                'name' => 'required',
                'file' => 'required',
            ]);
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $filename = time() .'fc.'. $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $image->move($destinationPath, $filename);
            }
            $this->category->create([
                'name_en' => $request->name,
                'filename' => $filename,
            ]);
            return redirect()->route('dashboard.category.index')->with('success', 'category created successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('dashboard.category.index')->with('error', 'Error creating category');
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
                'file' => 'nullable',
            ]);
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $file = time() .'fc.'. $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $image->move($destinationPath, $file);
            }
            $page = $this->category->find($id);
            $page->update([
                'name_en' => $request->name,
                'file' => $file ?? $page->filename,
            ]);


            return redirect()->route('dashboard.category.index')->with('success', 'category updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.category.index')->with('error', 'category not updated.');
            dd($e);
        }
    }

    public function destroy($id)
    {
        $page = $this->category->find($id);
        $page->delete();
        return redirect()->route('dashboard.category.index')->with('success', 'category deleted successfully.');
    }
}
