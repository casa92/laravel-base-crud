<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //richiamo tutti i fumetti dal database
        $comics = Comic::all();

        $data = [
            'comics' => $comics
        ];

        return view('comics.index', $data);

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
        // con request accedo a dati immessi nel form
        $form_input_data = $request->all();
        
        // salvare il nuovo item nel database
        $new_comic = new Comic();
        $new_comic->title = $form_input_data['title'];
        $new_comic->series = $form_input_data['series'];
        $new_comic->type = $form_input_data['type'];
        $new_comic->sale_date = $form_input_data['sale_date'];
        $new_comic->price = $form_input_data['price'];
        $new_comic->thumb = $form_input_data['thumb'];
        $new_comic->description = $form_input_data['description'];
        
        //forma abbreviata
        //per usare fill bisogna andare nel model (Comic) ed indicare le colonne su cui usare fill
        // $new_comic->fill($form_input_data);

        //salva la nuova riga nel database
        $new_comic->save();
        
        //mostra la view dell'oggetto appena creato, ovvero reindirizzo l'utente su un'altra rotta (show)
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
        $comic = Comic::find($id);
        if(!$comic) {
            abort('404');
        }

        $data = [
            'comic'=>$comic
        ];
        return view('comics.show', $data);

        // versione abbreviata
        // $comic = Comic::findOrFail($id);
        // return view('comics.show', compact('comic'))
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
