<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

   public function user(){
       return $this->belongsTo('App\Models\User');
   }
   //reader
//   public function getNameAttribute($value){
//       return 'hello world - '.$value.'- hello';
//   }
   //preobrazavatel
//    public function setNameAttribute($value){
//       $this->attributes['name']=' | '.$value.' | ';
//    }
}
