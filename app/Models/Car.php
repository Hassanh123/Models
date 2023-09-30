<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'leenautos'; // Geef de tabelnaam op

    protected $primaryKey = 'autonummer'; // Geef de primaire sleutel aan

    protected $fillable = ['merk', 'type', 'bouwjaar', 'autonummer'];
    // Specificeer de vulbare velden

    public $timestamps = false; // Zet tijdstempels op 'false' als je geen created_at en updated_at wilt

}
