<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ambientes;
class ambienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
public function index()
    {
        $ambiente=ambientes::all();
        return view ('Ambientes', compact('ambiente'));
    }


}
