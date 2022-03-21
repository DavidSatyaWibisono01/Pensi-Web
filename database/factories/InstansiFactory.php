<?php

namespace Database\Factories;
use App\Models\Pengunjung;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class InstansiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data = Pengunjung::select('asal_instansi')->distinct()->get();
        $nama= $data[rand(0,5)]->asal_instansi;
        return [
            'nama_instansi' => $nama
        ];
    }
}
