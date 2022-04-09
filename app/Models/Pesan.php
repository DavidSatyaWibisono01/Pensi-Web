<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pengunjung_id','isi'
    ];

    public function dataPengunjung(){
        return $this->hasOne(Pengunjung::class, 'id', 'pengunjung_id')->withdefault([
            'name' => 'Nama Pengunjung sudah dihapus',
        ]);
    }
}
