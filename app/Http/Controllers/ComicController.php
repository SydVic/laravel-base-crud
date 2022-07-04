<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // controllo i dati
        $request->validate($this->getValidationRules());

        // salva i dati nel database
        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();
        
        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic_to_edit = Comic::findOrFail($id);

        return view('comics.edit', compact('comic_to_edit'));
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
        // controllo i dati
        $request->validate($this->getValidationRules());

        // salvataggio dati
        $data = $request->all();
        $comic_to_update = Comic::findOrFail($id);
        $comic_to_update->update($data);

        return redirect()->route('comics.show', ['comic' => $comic_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_destroy = Comic::findOrFail($id);
        $comic_to_destroy->delete();

        return redirect()->route('comics.index');
    }
    
    /**
     * getValidationRules
     *
     * @return an array with the validation rules
     */
    private function getValidationRules() {
        return [
            'title' => 'required|max:50|min:5',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:50'
        ];
    }
}
