<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merchandise;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Merchandise;
				$data->name = 'Laptop';
				$data->price = 2000000;
				$data->stock = 2;
				$data->save();
    }
}
