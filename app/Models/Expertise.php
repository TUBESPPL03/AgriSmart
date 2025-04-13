<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $fillable = [
        'bidang_keahlian', 'durasi', 'sertifikat'
    ];
}

