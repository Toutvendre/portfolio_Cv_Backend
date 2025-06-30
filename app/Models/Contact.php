<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'telephone',
        'service',
        'message',
        'is_read',
        'replied_at',
    ];

    public $timestamps = true;

    protected $casts = [
        'is_read' => 'boolean',
        'replied_at' => 'datetime',
    ];
}
