<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        $num_comics = Comic::count();

        return view('comics.index', compact('comics', 'num_comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $method = 'POST';
        $route = route('comics.store');
        $comic = null;

        return view('comics.create-edit', compact('method', 'route', 'comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        $data = $request->all();
        $comic = new Comic();

        /////////// Senza fillable() ///////
        // $comic->title = $data['title'];
        // $comic->slug = Helper::createSlug($comic['title'], new Comic());
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];

        $data['slug'] = Helper::createSlug($comic['title'], new Comic());
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $method = 'PUT';
        $route = route('comics.update', $comic);

        return view('comics.create-edit', compact('comic', 'method', 'route'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $data = $request->all();

        if ($data['title'] === $comic->title) {
            $data['slug'] = $comic->slug;
        } else {
            $data['slug'] = Helper::createSlug($comic['title'], new Comic());
        }

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('delete_message', 'L\' eliminazione di' . $comic->title . 'é avvenuta con successo');
    }
}
