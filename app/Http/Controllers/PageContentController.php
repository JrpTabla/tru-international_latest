<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageContent;

class PageContentController extends Controller
{
    public function index()
    {
        $pageContents = PageContent::all();
        return view('page_contents.index', compact('pageContents'));
    }
}
