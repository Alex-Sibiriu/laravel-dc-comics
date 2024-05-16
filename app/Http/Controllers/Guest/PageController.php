<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function show_latest()
    {
        $comic = Comic::orderBy('sale_date', 'desc')->first();

        return view('comics.show', compact('comic'));
    }
}
