<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $dates = ['voted_on'];

    protected $casts = [
        'voted_on' => 'datetime',
    ];

    protected $fillable = ['username', 'vote_site_id', 'ip_address', 'voted_on', 'claimed'];

    public function voteSite()
    {
        return $this->belongsTo(VoteSite::class);
    }


}
