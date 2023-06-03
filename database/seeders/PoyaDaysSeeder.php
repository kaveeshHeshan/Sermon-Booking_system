<?php

namespace Database\Seeders;

use App\Models\SermonDay;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PoyaDaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        SermonDay::create([
            'title' => 'Duruthu Full Moon Poya Day',
            'description' => 'Duruthu Full Moon Poya Day is on 06/01/2023.',
            'type' => 'Poya Day',
            'date' => '2023-01-06',
        ]);
        
        // 2
        SermonDay::create([
            'title' => 'Navam Full Moon Poya Day',
            'description' => 'Navam Full Moon Poya Day is on 05/02/2023.',
            'type' => 'Poya Day',
            'date' => '2023-02-05',
        ]);
        
        // 3
        SermonDay::create([
            'title' => 'Madin Full Moon Poya Day',
            'description' => 'Madin Full Moon Poya Day is on 06/03/2023.',
            'type' => 'Poya Day',
            'date' => '2023-03-06',
        ]);
        
        // 4
        SermonDay::create([
            'title' => 'Bak Full Moon Poya Day',
            'description' => 'Bak Full Moon Poya Day is on 05/04/2023.',
            'type' => 'Poya Day',
            'date' => '2023-04-05',
        ]);
        
        // 5
        SermonDay::create([
            'title' => 'Vesak Full Moon Poya Day',
            'description' => 'Vesak Full Moon Poya Day is on 05/05/2023.',
            'type' => 'Poya Day',
            'date' => '2023-05-05',
        ]);
        
        // 6
        SermonDay::create([
            'title' => 'Poson Full Moon Poya Day',
            'description' => 'Poson Full Moon Poya Day is on 05/05/2023.',
            'type' => 'Poya Day',
            'date' => '2023-06-03',
        ]);

        // 7
        SermonDay::create([
            'title' => 'Esala Full Moon Poya Day',
            'description' => 'Esala Full Moon Poya Day is on 01/08/2023.',
            'type' => 'Poya Day',
            'date' => '2023-08-01',
        ]);
        
        // 8
        SermonDay::create([
            'title' => 'Adhi Esala Full Moon Poya Day',
            'description' => 'Adhi Esala Full Moon Poya Day is on 03/07/2023.',
            'type' => 'Poya Day',
            'date' => '2023-08-03',
        ]);
        
        // 9
        SermonDay::create([
            'title' => 'Nikini Full Moon Poya Day',
            'description' => 'Nikini Full Moon Poya Day is on 30/08/2023.',
            'type' => 'Poya Day',
            'date' => '2023-08-30',
        ]);
        
        // 10
        SermonDay::create([
            'title' => 'Binara Full Moon Poya Day',
            'description' => 'Binara Full Moon Poya Day is on 30/08/2023.',
            'type' => 'Poya Day',
            'date' => '2023-09-29',
        ]);

        // 11
        SermonDay::create([
            'title' => 'Vap Full Moon Poya Day',
            'description' => 'Vap Full Moon Poya Day is on 28/10/2023.',
            'type' => 'Poya Day',
            'date' => '2023-10-28',
        ]);
        
        // 12
        SermonDay::create([
            'title' => 'Ill Full Moon Poya Day',
            'description' => 'Ill Full Moon Poya Day is on 26/11/2023.',
            'type' => 'Poya Day',
            'date' => '2023-11-26',
        ]);
        
        // 13
        SermonDay::create([
            'title' => 'Unduvap Full Moon Poya Day',
            'description' => 'Unduvap Full Moon Poya Day is on 26/12/2023.',
            'type' => 'Poya Day',
            'date' => '2023-12-26',
        ]);
                
    }
}
