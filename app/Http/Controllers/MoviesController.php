<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::All();

        $data = [
            'movies' => $movies
        ];

        // dd($movies);

        return view('pages.movie.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|max:50'
        ],
        [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.max' => 'Attenzione! Il campo titolo è di massimo 50 caratteri'
        ]
    
    );

        $new_movie = new Movie();
        $new_movie->fill($data);
        $new_movie->save();

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodotto_singolo = Movie::findOrFail($id);

        // dd($movies);

        return view('pages.movie.show', compact('prodotto_singolo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Movie::findOrFail($id);

        return view('pages.movie.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $comic = Movie::findOrFail($id);
        $comic->update($data);

        return redirect()->route('movies.show', $comic->id)->with('success', "Hai Modificato con successo il fumetto: $comic->title ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('movies.index')->with('success', "Hai cancellato con successo il fumetto: $movie->title ");
    }
}
