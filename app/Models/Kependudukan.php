<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model
{
    use HasFactory;

    protected $table = 'kependudukan';
    protected $fillable = [
        'id_keluarga',
        'I_1',
        'I_2',
        'I_2a',
        'I_3',
        'I_4',
        'I_5',
        'I_456',
        'I_7',
        'I_8',
        'I_9',
        'I_10',
        'I_11',
        'I_12',
        'I_13',
        'I_14',
        'I_15',
        'I_16',
    ];
}
