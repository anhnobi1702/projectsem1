<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialProduct extends Model
{
    protected $fillable = ['material_id','product_id'];
    public function getName(){
        return $this->belongsTo(Material::class, 'material_id', 'id');
    }
    use HasFactory;
}
