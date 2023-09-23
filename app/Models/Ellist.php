<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ellist extends Model
{
    use HasFactory;
    
    protected $fillable  = [
        'title',
        'description',
        'type',
        'isPublic'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ellinks()
    {
        return $this->belongsToMany(Ellink::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
