<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['name'];
   
    function add($req){
        Material::create([
            'name'=>$req->name
        ]);
    }
    use HasFactory;
}
