<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $fillable = [
      'id',  'title' , 'subject' , 'image' , 'user_id'
    ];
    public function user(){
      return $this->belongsTo(User::class);
    }
}
