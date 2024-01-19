<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ["title","body","image","slug",'user_id'];
    public function getRouteKeyName()
    {
            return 'slug';
    }
    public function user(){
        return
            $this -> belongsto(user::class);
    }
    public function commentaires(){
        return
            $this -> hasMany(Commentaire::class);
    }

}