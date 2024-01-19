<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    public function post(){
        return
            $this -> belongsto(Post::class);
    }
    public function commentairs(){
        return
            $this -> hasMany(Commentaire::class);
    }
    public function user(){
        return
            $this -> belongsto(User::class);
    }
}
