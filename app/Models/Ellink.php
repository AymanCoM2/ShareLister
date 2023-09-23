<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ellink extends Model
{
    use HasFactory;

    // TODO : is something like the Health Will be Fillable ?
    // ! i mean Filled From Form Or From CRON job ?
    protected $fillable  = [
        'url',
        'description',
        'health',
    ];

    public function ellists()
    {
        return $this->belongsToMany(Ellist::class);
    }
}
