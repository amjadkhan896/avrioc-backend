<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

   /**
     * Show the list of films.
     *
     * @param
     * @return
     */
    public function index()
    {
        $perPage = 1;
        $totalFilms = Film::with('filmGenre')->paginate($perPage);
        return response()->json(['filmsData' => $totalFilms]);
    }


     /**
     * Show the single film.
     *
     * @param
     * @return
     */
    public function show($id)
    {
        return response()->json(['filmData' => Film::where('id',$id)->with('filmGenre')->first()]);
    }
}