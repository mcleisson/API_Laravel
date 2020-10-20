<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filmes;
use Illuminate\Support\Facades\DB;

class FilmesController extends Controller
{
    
    public function index()
    {
        $filmes = DB::select('select * from filmes')
        //return view('filmes.index', ['filmes' => $filmes]);
        return ('$filmes');
    }
    
    public function store(Request $request)
    {
        //Filmes::create($request->all());
    }

    public function show($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
