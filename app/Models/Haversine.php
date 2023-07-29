<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haversine extends Model
{
    use HasFactory;
    protected $table = "haversine";
    protected $primaryKey = "id";
    protected $fillable = [
        'latitude', 'longitude', 'distance'];
}
