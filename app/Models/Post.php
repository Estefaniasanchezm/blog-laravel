<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



use App\Models\User;
use App\Models\Categoria;

class Post extends Model
{
    use HasFactory;
    //protected $fillable = ['name', 'slug', 'extract', 'body', 'categoria_id'];
    protected $guarded =  ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
