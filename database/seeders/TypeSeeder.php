<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<4; $i++){
            $type = new Type();

            $type->title = $faker->sentence(3);
            $type->description = $faker->text(350);
            $type->slug = Str::slug($type->title, '-');

            $type->save();
        }
    }
}
