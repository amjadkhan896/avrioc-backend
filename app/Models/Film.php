<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';
    protected $primaryKey = 'id';

/**
 * Get the user that owns the phone.
 */
public function filmGenre()
{
    return $this->belongsTo('App\Models\Genre', 'genre', 'id');
}
}