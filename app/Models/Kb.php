<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kb extends Model
{
    use HasFactory;

    protected $table = 'kb';
    protected $fillable = [
        'No_HP',
        'alamat',
        'rt',
        'id_keluarga',
        'II_1',
        'II_1_a_1',
        'II_1_a_2',
        'II_1_b_1',
        'II_1_b_2',
        'II_2',
        'II_3',
        'II_3_a',
        'II_3_a_1',
        'II_3_b',
        'II_4',
        'II_4_a',
        'II_5',
        'II_5_a',
        'II_5_b',
        'II_6',
        'II_7',
        'II_8',
        'II_9_a',
        'II_9_b',
        'II_9_c',
    ];
}
