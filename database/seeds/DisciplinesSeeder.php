<?php

use Illuminate\Database\Seeder;
use App\Discipline;

class DisciplinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB:insert('INSERT INTO `disciplines` (`name_discipline`,`cost`) VALUES (?,?),['Фізика', '150']');
        DB::table('disciplines')->insert(['name_discipline'=>'Математика', 'cost'=>'225']);
       // Discipline::create(['name_discipline'=>'Фізика', 'cost'=>'150'],['name_discipline'=>'Математика', 'cost'=>'225']);
    }
}
