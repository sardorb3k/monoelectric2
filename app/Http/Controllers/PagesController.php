<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PagesRepositoryInterface;
use App\Models\Pages;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    private $pages;
    public function __construct(Pages $pages)
    {
        $this->pages = $pages;
        // $this->middleware('auth');
    }

    public function index()
    {
        $pages = $this->pages->paginate(10);
        return view('dashboard.pages.index', compact('pages'));
    }

    public function show($id)
    {
        $page = $this->pages->where('slug', $id)->first();
        return view('dashboard.pages.show', compact('page'));
    }

    public function create()
    {
        return view('dashboard.pages.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'pagename_tr' => 'nullable',
                'pagename_en' => 'required',
                'pagename_ru' => 'required',
                'content_tr' => 'nullable',
                'content_ru' => 'nullable',
                'content_en' => 'nullable',
            ]);
            $this->pages->create([
                'title_en' => $request->pagename_en,
                'title_tr' => $request->pagename_tr,
                'title_ru' => $request->pagename_ru,
                'slug' => Str::slug($request->pagename_en, '-'),
                'status' => 'active',
                'content_tr' => htmlspecialchars(trim(str_replace("&nbsp;", '', preg_replace('/\s\s+/', '', $request->content_tr))), ENT_QUOTES),
                'content_ru' => htmlspecialchars(trim(str_replace("&nbsp;", '', preg_replace('/\s\s+/', '', $request->content_ru))), ENT_QUOTES),
                'content_en' => htmlspecialchars(trim(str_replace("&nbsp;", '', preg_replace('/\s\s+/', '', $request->content_en))), ENT_QUOTES),
            ]);
            return redirect()->route('dashboard.pages.index')->with('success', 'Page created successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('dashboard.pages.index')->with('error', 'Error creating page');
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
                'pagename_tr' => 'required',
                'pagename_en' => 'required',
                'pagename_ru' => 'required',
                'pagestatus' => 'required',
                'content_tr' => 'nullable',
                'content_ru' => 'nullable',
                'content_en' => 'nullable',
            ]);
            $page = $this->pages->find($id);
            $page->update([
                'title_en' => $request->pagename_en,
                'title_tr' => $request->pagename_tr,
                'title_ru' => $request->pagename_ru,
                'status' => $request->pagestatus,
                'content_tr' => htmlspecialchars(trim(str_replace("&nbsp;", '', preg_replace('/\s\s+/', '', $request->content_tr))), ENT_QUOTES),
                'content_ru' => htmlspecialchars(trim(str_replace("&nbsp;", '', preg_replace('/\s\s+/', '', $request->content_ru))), ENT_QUOTES),
                'content_en' => htmlspecialchars(trim(str_replace("&nbsp;", '', preg_replace('/\s\s+/', '', $request->content_en))), ENT_QUOTES),
            ]);


            return redirect()->route('dashboard.pages.index')->with('success', 'Page updated successfully.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('dashboard.pages.index')->with('error', 'Page not updated.');
        }
    }

    public function destroy($id)
    {
        $page = $this->pages->find($id);
        $page->delete();
        return redirect()->route('dashboard.pages.index')->with('success', 'Page deleted successfully.');
    }
}
