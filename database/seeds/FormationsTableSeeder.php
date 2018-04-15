<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FormationsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {

        DB::table('formations')->insert([
            'id'=>1,
            'name' => 'Développeur&middot;se Web & Mobile',
            'description' => 'Cette formation commence le 1er décembre et apprendra à une quinzaine d\'apprenants HTML/CSS/JS/Souffrance.',
        ]);


        DB::table('formations')->insert([
            'id'=>2,
            'name' => 'Développeur&middot;se Java',
            'description' => 'Cette formation commence le 1er décembre et apprendra à une quinzaine d\'apprenants HTML/CSS/JS/Souffrance.',
        ]);

        DB::table('formations')->insert([
            'id' => 3,
            'name' => 'Réferent&middot;e Digital',
            'description' => 'Cette formation commence le 1er décembre et apprendra à une quinzaine d\'apprenants HTML/CSS/JS/Souffrance.',
        ]);


        for($i=0; $i<50; $i++) {

            DB::table('sessions')->insert([
                'formation_id' => $i%3+1,
                'city'=>$faker->city,
                'year' => Carbon::today()->year,
                'begin_session' => Carbon::today()->addDays(20),
                'end_session' => Carbon::today()->addYear(),
                'application_start_date' => Carbon::today()->subDays(10),
                'application_end_date' => Carbon::today()->addDays(10),
            ]);
        }

    }
}
