<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Superhero;

class SuperheroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // versió 1

        /*
        DB::table('superheroes')->insert([
            'heroname' => 'Superman',
            'realname' => 'Clark Ken',
            'gender' => 'male',
            'planet_id' =>1
        ]); */

        // versió 2
       
        $superheroes = [
            [                
                
                'realname' => 'Jon Watts',
                'nationality' => 'U.S.A',
                'planet_id' => 1,
            ],
            [                
                
                'realname' => 'Shady El-Hamus',
                'nationality' => 'netherlands',
                'planet_id' => 2,
            ],
            [               
                
                'realname' => 'Phillip Noyce',
                'nationality' => 'U.S.A',
                'planet_id' => 3,
            ],
            [                  
               
                'realname' => 'Guy Ritchie',
                'nationality' => 'U.S.A',
                'planet_id' => 4,
            ],
            [               
                
                'realname' => 'Ilya Naishuller',
                'nationality' => 'U.S.A',
                'planet_id' => 5,
            ],
            [               
                
                'realname' => 'Shawn Levy',
                'nationality' => 'U.S.A',
                'planet_id' => 6,
            ],
            [               
                
                'realname' => 'James Gunn',
                'nationality' => 'U.S.A',
                'planet_id' => 7,
            ],
            [               
                
                'realname' => 'Scott Derrickson',
                'nationality' => 'U.S.A',
                'planet_id' => 8,
            ],
            [               
                
                'realname' => 'Megan Park',
                'nationality' => 'U.S.A',
                'planet_id' => 9,
            ],
            [               
                
                'realname' => 'Simon McQuoid',
                'nationality' => 'U.S.A',
                'planet_id' => 10,
            ],
            [               
                
                'realname' => 'Andy Serkis',
                'nationality' => 'U.S.A',
                'planet_id' => 11,
            ],
            [               
                
                'realname' => 'Steven Soderbergh',
                'nationality' => 'U.S.A',
                'planet_id' => 12,
            ],
            [               
                
                'realname' => 'Adam Salky',
                'nationality' => 'U.S.A',
                'planet_id' => 13,
            ],
            [               
                
                'realname' => 'Paco Caballero',
                'nationality' => 'Espanya',
                'planet_id' => 14,
            ],
            [               
                
                'realname' => 'Adam McKay',
                'nationality' => 'U.S.A',
                'planet_id' => 15,
            ],
        ];

        Superhero::insert($superheroes);

    }
}

