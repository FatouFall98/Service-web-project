<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Arrondissements;

class ArrondissementController extends Controller
{
    public function index()
    {
        $arrondissements = Arrondissements::with('departements')->get();
       
        return $arrondissements ;
    }    

    public function store(Request $request)
    {
        //
    }

    public function show(Departements $departements)
    {
        //
    }

    public function update(Request $request, Departements $departements)
    {
        //
    }

 
    public function destroy(Departements $departements)
    {
        //
    }
}
