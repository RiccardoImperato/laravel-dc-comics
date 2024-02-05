<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.list', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
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
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $this->validation($request->all());


        $comic->update($data);

        $comic->save();


        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    public function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|max:50',
                'thumb' => 'nullable|url',
                'series' => 'nullable|max:50',
                'price' => 'nullable|decimal:2,4|min:1',
                'date' => 'date',
                'type' => 'nullable|max:50',
                'description' => 'nullable|max:500',
                'artists' => 'nullable|max:500',
                'writers' => 'nullable|max:500',
            ],
            [
                'title.required' => 'Titolo richiesto: inserisci un titolo per proseguire',
                'title.max' => 'Il titolo può essere al massimo :max caratteri',
                'thumb' => 'Url non valido: inserici l\'url con l\'indirizzo immagine',
                'series.max' => 'La serie può essere al massimo :max caratteri',
                'price' => 'Il prezzo deve avere 2 cifre decimali',
                'price.min' => 'Il prezzo deve essere almeno :min $',
                'type.max' => 'Il tipo può essere al massimo :max caratteri',
                'description' => 'La descrizione può essere al massimo :max caratteri',
                'artists' => 'La lista degli artisti può essere al massimo :max caratteri',
                'writers' => 'La lista degli autori può essere al massimo :max caratteri',
            ]
        )->validate();

        return $validator;
    }
}
