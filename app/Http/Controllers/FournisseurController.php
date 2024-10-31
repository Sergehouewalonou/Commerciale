<?php

namespace App\Http\Controllers;

use App\Models\v;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class FournisseurController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $four = Fournisseur::all();

       return view('admin/pages/fournisseur.index',['fournisseurs'=>$four]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/pages/fournisseur.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'string | required | max:91',
            'contact'=>'string | required | max:22',
            'adresse'=>'string | required | max:191',
        ]);

        $fourni = new Fournisseur ;

        $fourni->nom=$request->nom;
        $fourni->contact=$request->contact;
        $fourni->adresse=$request->adresse;

        $fourni->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(v $v)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(v $v)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, v $v)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(v $v)
    {
        //
    }

    /**
     * action button
     */
    public function action(Request $request, Fournisseur $fournisseur)
    {
            if($fournisseur->status=='Disponible')
            {
                $newfours = 'Indisponible';
            }
            else
            {
                $newfours = 'Disponible';
            }
    
            $fournisseur->update([
                'status' => $newfours,
            ]);
    
           return back();
    }

}
