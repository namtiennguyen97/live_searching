<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff =  new Customer();
        $staff->name = 'Nam Nguyen';
        $staff->age = 24;
        $staff->phone = 3212313;
        $staff->address = 'Ha Noi';
        $staff->image = 'gentiana1.gif';
        $staff->save();

        $staff =  new Customer();
        $staff->name = 'Tuan Nguyen';
        $staff->age = 24;
        $staff->phone = 322223;
        $staff->address = 'Dong Anh';
        $staff->image = 'gentiana2.png';
        $staff->save();

        $staff =  new Customer();
        $staff->name = 'Huong';
        $staff->age = 19;
        $staff->phone = 0322313;
        $staff->address = 'Ha Noi';
        $staff->image = 'gentinana3.jpg';
        $staff->save();

        $staff =  new Customer();
        $staff->name = 'Khanh';
        $staff->age = 14;
        $staff->phone = 902313;
        $staff->address = 'Ho Chi Minh';
        $staff->image = 'nier1.jpg';
        $staff->save();

        $staff =  new Customer();
        $staff->name = 'Sephiroth';
        $staff->age = 29;
        $staff->phone = 366622;
        $staff->address = 'Ha Noi';
        $staff->image = 'nier2.jpg';
        $staff->save();

        $staff =  new Customer();
        $staff->name = 'Nam Nguyen';
        $staff->age = 21;
        $staff->phone = 4412313;
        $staff->address = 'Ho Chi Minh';
        $staff->image = 'nier3.jpg';
        $staff->save();

        $staff =  new Customer();
        $staff->name = 'Cloud';
        $staff->age = 24;
        $staff->phone = 3212313;
        $staff->address = 'Ha Noi';
        $staff->image = 'nier2.jpg';
        $staff->save();
    }
}
