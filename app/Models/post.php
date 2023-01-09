<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class post extends Model
{
    use HasFactory, Sluggable;


    // protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id'];
    protected $with = ['category','user'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function scopefilter($query,array $filters)
    {
        //menggunakan versi isset
    $query->when($filters['search'] ?? false, function($query,$search) {
        return $query->Where('title','like','%' .$search . '%')
        ->orWhere('body','like','%' .$search . '%');
    });
    //menggunakan versi calback
    $query->when($filters['category'] ?? false, function($query,$category) {
        return $query->whereHas('category',function($query) use ($category) {
            $query->where('slug',$category);
        });
    });
//menggunakan versi arrow function
    $query->when($filters['author'] ?? false,fn($query,$author) =>
    $query->whereHash('author',fn($query) =>
    $query->where('username',$author)
            )
        );
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
