<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Superpower;

class SuperpowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $superpowers = [
            [                
                
                'realname' => 'Tom Holland',
                'planet_id' => 1,
            ],
            [                
                
                'realname' => 'Zendaya',
                'planet_id' => 1,
            ],
            [               
                
                'realname' => 'Benedict Cumberbatch',
                'planet_id' => 1,
            ],
            [                  
               
                'realname' => 'Jonas Smulders',
                'planet_id' => 2,
            ],
            [                  
               
                'realname' => 'Daniel Kolf',
                'planet_id' => 2,
            ],
            [                  
               
                'realname' => 'Sinem Kavus',
                'planet_id' => 2,
            ], [                  
               
                'realname' => 'Naomi Watts',
                'planet_id' => 3,
            ],
            [                  
               
                'realname' => 'Colton Gobb',
                'planet_id' => 3,
            ],
            [                  
               
                'realname' => 'Joshua Bowman',
                'planet_id' => 3,
            ],
            [                  
               
                'realname' => 'Jason Statham',
                'planet_id' => 4,
            ],
            [                  
               
                'realname' => ' Holt McCallany',
                'planet_id' => 4,
            ],
            [                  
               
                'realname' => 'Josh Hartnett',
                'planet_id' => 4,
            ],
            [                  
               
                'realname' => 'Bob Odenkirk',
                'planet_id' => 5,
            ],
            [                  
               
                'realname' => 'Aleksey Serebryakov',
                'planet_id' => 5,
            ],
            [                  
               
                'realname' => 'Connie Nielsen',
                'planet_id' => 5,
            ],
            [                  
               
                'realname' => 'Ryan Reynolds',
                'planet_id' => 6,
            ],
            [                  
               
                'realname' => 'Jodie Comer',
                'planet_id' => 6,
            ],
            [                  
               
                'realname' => 'Idris Elba',
                'planet_id' => 7,
            ],
            [                  
               
                'realname' => 'Margot Robbie',
                'planet_id' => 7,
            ],
            [                  
               
                'realname' => 'Ethan Hawke',
                'planet_id' => 8,
            ],
            [                  
               
                'realname' => ' Mason Thames',
                'planet_id' => 8,
            ],
            [                  
               
                'realname' => 'Jenna Ortega',
                'planet_id' => 9,
            ],
            [                  
               
                'realname' => 'Shailene Woodley',
                'planet_id' => 9,
            ],
            [                  
               
                'realname' => 'Lewis Tan',
                'planet_id' => 10,
            ],
            [                  
               
                'realname' => 'Joe Taslim',
                'planet_id' => 10,
            ],
            [                  
               
                'realname' => 'Tom Hardy',
                'planet_id' => 11,
            ],
            [                  
               
                'realname' => 'Michelle Williams',
                'planet_id' => 11,
            ],
            [                  
               
                'realname' => 'Don Cheadle',
                'planet_id' => 12,
            ],
            [                  
               
                'realname' => 'Benicio del Toro',
                'planet_id' => 12,
            ],
            [                  
               
                'realname' => 'Freida Pinto',
                'planet_id' => 13,
            ],
            [                  
               
                'realname' => 'Logan Marshall-Green',
                'planet_id' => 13,
            ],
            [                  
               
                'realname' => 'Ernesto Alterio',
                'planet_id' => 14,
            ],[                  
               
                'realname' => ' Raúl Arévalo',
                'planet_id' => 14,
            ],
            [                  
               
                'realname' => 'Leonardo DiCaprio',
                'planet_id' => 15,
            ],
            [                  
               
                'realname' => 'Jennifer Lawrence',
                'planet_id' => 15,
            ],
        
           
        ];

        Superpower::insert($superpowers);

    }
}
