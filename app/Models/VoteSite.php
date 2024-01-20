<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteSite extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'is_active', 'url', 'vote_interval', 'is_active', ];

}
