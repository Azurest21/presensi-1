<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = "dosen";
    protected $primaryKey = "nidn";
    protected $fillable = [
        'namadosen', 'nip', 'nidn','user_id'];

        public function Matkul(){
            return $this->hasMany(Matkul::class);
        }
        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
