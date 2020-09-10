<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Stap 1: Maak je model
    //  Let op; Ik maak gebruik van Eloquent Models


    // Geeft aan welke velden ingevuld moeten worden, Id & Timestamps worden automatisch ingevuld.
    protected $fillable = [
        'name', 'detail'
    ];
}
