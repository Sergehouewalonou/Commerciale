<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table='Categories';

    protected $fillable = [
        'libelle',
        'description',
        'option'

       
    ];


    public function produit(){
        
        return $this->hasMany(Produit::class);
    }

}
