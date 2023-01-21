<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PageRepositoryInterface;
use App\Models\Pages;
class PageController extends Controller
{
    private $pages;
    public function __construct(Pages $pages)
    {
        $this->pages = $pages;
    }
    public function index($slug)
    {
        try {
            // Get first page
            $page = $this->pages->where('slug', $slug)->first();
            if ($page) {
                return view('page', compact('page'));
            } else {
                return abort(404);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }
}
