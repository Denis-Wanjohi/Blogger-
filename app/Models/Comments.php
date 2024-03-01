<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function blogs(){
        return $this->belongsTo(Blogs::class);
    }
    // public function likes(){
    //     return $this->hasMany(Likes::class);
    // }
}
