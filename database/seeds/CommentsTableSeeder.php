<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1500; $i++) {
            DB::table('comments')->insert([
                'body' => $faker->sentence(rand(5, 30)),
                'user_id' => rand(1, 100),
                'question_id' => rand(1, 1000),
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime()
            ]);
        }

        for ($i = 0; $i < 5000; $i++) {
            DB::table('comments')->insert([
                'body' => $faker->sentence(rand(5, 30)),
                'user_id' => rand(1, 100),
                'answer_id' => rand(1, 3000),
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime()
            ]);
        }
    }
}
