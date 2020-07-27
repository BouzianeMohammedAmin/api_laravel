<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //    id	'name_ar'	name_en	created_at	update_at	
    protected $tablble = 'categories';
    protected $fillable = [
        'name_ar', 'name_en', 'created_at', 'update_at'
    ];
    /*  protected $hidden =[

    ];
*/
}