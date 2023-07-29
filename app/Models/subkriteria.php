<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subkriteria extends Model
{
    use HasFactory;
    protected $table = "smart";
    protected $primaryKey = "id";
    protected $fillable = [
        'kriteria_id', 'subkriteria', 'point', 'bobot'];

        public function kriteria(){
            return $this->belongsTo(kriteria::class);
        }
}
