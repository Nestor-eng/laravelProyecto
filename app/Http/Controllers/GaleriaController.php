<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class GaleriaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('Galeria.index');
    }
    public function create()
    {
        
        return view('Galeria.create');
        
    }
    public function store(Request $request)
    {
       

        return redirect()->route('Galeria.index')->with('success','Cliente Agregado');
    }
}
