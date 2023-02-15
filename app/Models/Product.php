<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'code',
        'name',
        'description',
        'price',
        'weight',
    ]; 

    public function categories() {

        return $this -> belongsToMany(Category::class);
    }

    public function typology() {

        return $this -> belongsTo(Typology::class);
    }
}
