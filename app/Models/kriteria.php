<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $table = "kriteria";
    protected $primaryKey = "id";
    protected $fillable = [
        'kriteria'];

        public function subkriteria(){
            return $this->hasMany(subkriteria::class);
        } 
}
