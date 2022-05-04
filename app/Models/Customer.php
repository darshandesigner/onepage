<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes; 
    protected $table = "customers";
    protected $primaryKey = "customers_id";


    // Mutator
    public function setNameAttribute($value){
        $this->attribute['name'] = ucwords($value);

    }


    //Accessor
    public function getDobAttribute($value){
        return date("d-M-Y",strtotime($value));

    }
}
