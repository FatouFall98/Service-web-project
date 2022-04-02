<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Bureaudevotes;

class BureaudevotesController extends Controller
{
    public function index()
    {
       $bureaudevotes = Bureaudevotes::with('arrondissements')->get();
       
        return $bureaudevotes ; 
    }    
}
