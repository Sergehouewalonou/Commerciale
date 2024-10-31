<?php

namespace App\Http\Controllers;

use App\Models\v;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class ProduitController extends Controller
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
        $prode = Produit::where('status','active')->get();

        return view('admin/pages/produits.index',['produits'=>$prode]);
        

    }
    
    public function affiche()
    {
       $inde = Produit::where('status','Désactive')->get();
       
       return view('admin/pages/produits.desactive',['produits'=>$inde]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $cate = Categorie::All();
        
        $four = Fournisseur::All();

        return view('admin/pages/produits.create',['cates'=>$cate,'fours'=>$four]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'string | max:90 | required',
            'description'=>'string | max:191 | required',
            'prix'=>'string | max:90 | required',
            'quantite'=>'string | max:90 | required',
            'categorie_id'=>'required',
            'fournisseur_id'=>'required',
        ]);

        $prod = new Produit ;
        
        $prod->nom=$request->nom;
        $prod->description=$request->description;
        $prod->prix=$request->prix;
        $prod->quantite=$request->quantite;
        $prod->categorie_id=$request->categorie_id;
        $prod->fournisseur_id=$request->fournisseur_id;

        $prod->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        return view('admin/pages/produits.show',compact('produit'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {

        $cate = Categorie::All();
        
        $four = Fournisseur::All();

        return view('admin/pages/produits.edit',['produit'=>$produit,'cates'=>$cate,'fours'=>$four]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        $request->validate([

            'nom'=>'string | max:90 | required',
            'description'=>'string | max:191 | required',
            'prix'=>'string | max:90 | required',
            'quantite'=>'string | max:90 | required',
            'categorie_id'=>'required',
            'fournisseur_id'=>'required',

        ]);

        $produit->update([

            'nom'=>$request->nom,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'quantite'=>$request->quantite,
            'categorie_id'=>$request->categorie_id,
            'fournisseur_id'=>$request->fournisseur_id,

        ]);

        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(v $v)
    {
        //
    }

    public function actione(Request $request, Produit $produit)
    {
            if($produit->status=='active')
            {
                $newprod = 'Désactive';
            }
            else
            {
                $newprod = 'active';
            }
    
            $produit->update([
                'status' => $newprod,
            ]);
    
            return back();
        
  

    }
}
