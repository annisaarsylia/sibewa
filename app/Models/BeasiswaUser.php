<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeasiswaUser extends Model
{
    use HasFactory;

    protected $guarded = [];

    //
    // Get the Beasiswa that have beasiswa user.
    //
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }
}
