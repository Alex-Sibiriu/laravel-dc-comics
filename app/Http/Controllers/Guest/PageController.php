<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        $last_comic = Comic::orderByDesc('created_at')->first();
        $updated_comic = Comic::orderByDesc('updated_at')->first();
        return view('home', compact('last_comic', 'updated_comic'));
    }

    public function show_latest()
    {
        $comic = Comic::orderBy('sale_date', 'desc')->first();

        return view('comics.show', compact('comic'));
    }
}
