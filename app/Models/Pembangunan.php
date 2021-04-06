<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembangunan extends Model
{
    use HasFactory;

    protected $table = 'pembangunan';
    protected $fillable = [
        'id_keluarga',
        'III_1',
        'III_2',
        'III_3',
        'III_3a',
        'III_3b',
        'III_3c',
        'III_3d',
        'III_5',
        'III_5',
        'III_6',
        'III_7',
        'III_8',
        'III_9',
        'III_10',
        'III_11',
        'III_12',
        'III_13',
        'III_14',
        'III_15',
        'III_16',
        'III_17',
        'III_18a',
        'III_18b',
        'III_18c',
        'III_18d',
        'III_19',
        'III_20',
        'III_21',
        'III_22',
        'III_23',
        'III_24',
        'III_25',
        'III_26',
        'III_27',
        'III_28',
        'III_29',
        'III_30',
        'III_31',
        'III_32',
    ];
}
