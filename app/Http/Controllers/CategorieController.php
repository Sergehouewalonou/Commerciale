<?php

namespace App\Http\Controllers;

use App\Models\v;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class CategorieController extends Controller
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
        $indx = Categorie::where('option','active')->get();

        return view('admin/pages/categorie.index',['categories'=>$indx]);
    }


    public function ndisponible(Categorie $categorie)

    {

        $ndispo = Categorie::where('option','Désactive')->get();

        return view('admin/pages/categorie.nomdisponible',['categories'=>$ndispo]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin/pages/categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle'=>'string | required | max:90',
            'description'=>'string | required | max:191',
        ]);

        $cate = new Categorie ;

        $cate->libelle=$request->libelle;
        $cate->description=$request->description;

        $cate->save();

        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        return view('admin/pages/categorie.show',compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('admin/pages/categorie.edit',compact('categorie'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([

            'libelle'=>'string | required | max:90',
            'description'=>'string | required | max:191',

        ]);

        $categorie->update([

            'libelle'=>$request->libelle,
            'description'=>$request->description,

        ]);

        return redirect()->route('categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(v $v)
    {
        //
    }

    public function optione(Request $request, Categorie $categorie)
    {
            if($categorie->option=='active')
            {
                $newcate = 'Désactive';
            }
            else
            {
                $newcate = 'active';
            }
    
            $categorie->update([
                'option' => $newcate,
            ]);
    
            return back();
        
  

    }

}
