<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Получение письма', 'Отправка письма', 'Получение посылки', 'Отправка посылки'];

        foreach ($names as $name) {
            DB::table('tasks')->insert([
                'name' => $name,
            ]);
        }

    }
}
