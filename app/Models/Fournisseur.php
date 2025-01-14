<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table='Fournisseurs';

    protected $fillable = [
        'nom',
        'contact',
        'adresse',
        'status'

       
    ];


    public function produit(){
        
        return $this->hasMany(Produit::class);
    }


}
