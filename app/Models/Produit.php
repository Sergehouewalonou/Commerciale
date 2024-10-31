<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table='Produits';

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'quantite',
        'status',
        'categorie_id',
        'fournisseur_id'

       
    ];


    public function categorie(){
        
        return $this->belongsTo(Categorie::class);
    }


    public function fournisseur(){
        
        return $this->belongsTo(Fournisseur::class);
    }


}


