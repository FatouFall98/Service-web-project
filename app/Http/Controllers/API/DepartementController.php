<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Departements;

class DepartementController extends Controller
{
    
    public function index()
    {
       $departements = Departements::with('regions')->get();
       
        return $departements ; 
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
