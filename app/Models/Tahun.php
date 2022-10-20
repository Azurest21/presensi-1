<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    use HasFactory;
    protected $table = "tahun";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','tahun', 'keterangan'];

        public function Matkul(){
            return $this->hasMany(Matkul::class);
        }
}
