<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EpisodesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert(
        [
            [
                'movie_id' => '1',
                'episode' => 1,
                'title' => 'While You Were Sleeping'
            ],
            [
                'movie_id' => '1',
                'episode' => 2,
                'title' => 'While You Were Sleeping'
            ],
            [
                'movie_id' => '1',
                'episode' => 3,
                'title' => 'The Good, The Bad, and The Weird'
            ],
            [
                'movie_id' => '1',
                'episode' => 4,
                'title' => 'The Good, The Bad, and The Weird'
            ],
            [
                'movie_id' => '1',
                'episode' => 5,
                'title' => 'Secretly, Greatly'
            ],
            [
                'movie_id' => '1',
                'episode' => 6,
                'title' => 'Secretly, Greatly'
            ],
            [
                'movie_id' => '1',
                'episode' => 7,
                'title' => 'A Few Good Men'
            ],



            [
                'movie_id' => '2',
                'episode' => 1,
                'title' => 'You Were Hiding In My House?'
            ],
            [
                'movie_id' => '2',
                'episode' => 2,
                'title' => 'People Calling Me By My Name'
            ],
            [
                'movie_id' => '2',
                'episode' => 3,
                'title' => 'Everybody Turn Their Backs On Me'
            ],[
                'movie_id' => '2',
                'episode' => 4,
                'title' => 'Im Curious Too, About My Feelings'
            ],[
                'movie_id' => '2',
                'episode' => 5,
                'title' => 'I Think I Already Knew It From The Beginning'
            ],


            
            [
                'movie_id' => '3',
                'episode' => 1,
                'title' => 'Oh Sung Moo Has Disappeared!'
            ],
            [
                'movie_id' => '3',
                'episode' => 2,
                'title' => 'Find Her, the Key to My Life'
            ],
            [
                'movie_id' => '3',
                'episode' => 3,
                'title' => 'What Is This World Where You Live in?'
            ],[
                'movie_id' => '3',
                'episode' => 4,
                'title' => 'Ive Come Here. To Your World'
            ],[
                'movie_id' => '3',
                'episode' => 5,
                'title' => 'The End'
            ],
            

            [
                'movie_id' => '4',
                'episode' => 1,
                'title' => 'Dark Night'
            ],
            [
                'movie_id' => '4',
                'episode' => 2,
                'title' => 'Lost Boy'
            ],
            [
                'movie_id' => '4',
                'episode' => 3,
                'title' => 'Dont You Know It Too?'
            ],[
                'movie_id' => '4',
                'episode' => 4,
                'title' => 'Until You Come'
            ],[
                'movie_id' => '4',
                'episode' => 5,
                'title' => 'Yellow Light'
            ]

            ,
            

            [
                'movie_id' => '5',
                'episode' => 1,
                'title' => 'Save My Life'
            ],
            [
                'movie_id' => '5',
                'episode' => 2,
                'title' => 'How Hard Life Is'
            ],
            [
                'movie_id' => '5',
                'episode' => 3,
                'title' => 'How to Be a Great Doctor'
            ],[
                'movie_id' => '5',
                'episode' => 4,
                'title' => 'Who?'
            ],[
                'movie_id' => '5',
                'episode' => 5,
                'title' => 'Forgive Me'
            ]

            
            
            ,
            [
                'movie_id' => '6',
                'episode' => 1,
                'title' => 'The King Has Donkey Ears'
            ],
            [
                'movie_id' => '6',
                'episode' => 2,
                'title' => 'Romeo and Juliet'
            ],
            [
                'movie_id' => '6',
                'episode' => 3,
                'title' => 'The Snow Queen'
            ],[
                'movie_id' => '6',
                'episode' => 4,
                'title' => 'The Ugly Duckling'
            ],[
                'movie_id' => '6',
                'episode' => 5,
                'title' => '	Pinocchio'
            ]
            ,
            


            [
                'movie_id' => '7',
                'episode' => 1,
                'title' => 'Peter Pan'
            ],
            [
                'movie_id' => '7',
                'episode' => 2,
                'title' => 'The North Wind and the Sun'
            ],
            [
                'movie_id' => '7',
                'episode' => 3,
                'title' => 'The Red Shoes'
            ],[
                'movie_id' => '7',
                'episode' => 4,
                'title' => 'The Scarlet Letter'
            ]

            ,
            


            [
                'movie_id' => '8',
                'episode' => 1,
                'title' => 'Auditions (1)'
            ],
            [
                'movie_id' => '8',
                'episode' => 2,
                'title' => 'Auditions (2)'
            ],
            [
                'movie_id' => '8',
                'episode' => 3,
                'title' => 'Top 14 Revealed'
            ],[
                'movie_id' => '8',
                'episode' => 4,
                'title' => '14 Chefs Compete'
            ]

            ,
            


            [
                'movie_id' => '9',
                'episode' => 1,
                'title' => 'The Rat Holds the Briefcase with Money'
            ],
            [
                'movie_id' => '9',
                'episode' => 2,
                'title' => 'Card, Were Going to Trade No'
            ],
            [
                'movie_id' => '9',
                'episode' => 3,
                'title' => 'We Wont Harm You Race'
            ],[
                'movie_id' => '9',
                'episode' => 4,
                'title' => 'Ggannes'
            ]
            

            ,
            


            [
                'movie_id' => '10',
                'episode' => 1,
                'title' => 'Auditions, Part 1'
            ],
            [
                'movie_id' => '10',
                'episode' => 2,
                'title' => 'Auditions, Part 2'
            ],
            [
                'movie_id' => '10',
                'episode' => 3,
                'title' => 'Hollywood Week, Part 1'
            ],[
                'movie_id' => '10',
                'episode' => 4,
                'title' => 'Hollywood Week, Part 2'
            ]


            ,
            


            [
                'movie_id' => '11',
                'episode' => 1,
                'title' => 'Disney Night'
            ],
            [
                'movie_id' => '11',
                'episode' => 2,
                'title' => 'Disney Morning'
            ],
            [
                'movie_id' => '11',
                'episode' => 3,
                'title' => 'Double Elimination'
            ],[
                'movie_id' => '11',
                'episode' => 4,
                'title' => 'Top 10'
            ]

            ,
            


            [
                'movie_id' => '12',
                'episode' => 1,
                'title' => 'Decision! One Hundred (Bag)'
            ],
            [
                'movie_id' => '12',
                'episode' => 2,
                'title' => 'RM Countdown'
            ],
            [
                'movie_id' => '12',
                'episode' => 3,
                'title' => 'Outgoing Race'
            ],[
                'movie_id' => '12',
                'episode' => 4,
                'title' => 'Empty House: Oh My Thief'
            ]
            ,
            


            [
                'movie_id' => '13',
                'episode' => 1,
                'title' => 'Bury and Throw in Double'
            ],
            [
                'movie_id' => '13',
                'episode' => 2,
                'title' => 'Protect your mom: Another ugly rice cake!'
            ],
            [
                'movie_id' => '13',
                'episode' => 3,
                'title' => 'Saw angel and devil: Devils Whisper'
            ],[
                'movie_id' => '13',
                'episode' => 4,
                'title' => 'At the crossroads of choice: Too Much Dilemma'
            ]

            ,
            


            [
                'movie_id' => '14',
                'episode' => 1,
                'title' => 'Best Frenemies'
            ],
            [
                'movie_id' => '14',
                'episode' => 2,
                'title' => 'Born to Be Wild'
            ],
            [
                'movie_id' => '14',
                'episode' => 3,
                'title' => 'Rule of Dumb'
            ],[
                'movie_id' => '14',
                'episode' => 4,
                'title' => 'Driven to Tears'
            ]       ,
            


            [
                'movie_id' => '15',
                'episode' => 1,
                'title' => 'The Original Fry Cook'
            ],
            [
                'movie_id' => '15',
                'episode' => 2,
                'title' => 'The Gift of Gum'
            ],
            [
                'movie_id' => '15',
                'episode' => 3,
                'title' => 'Squid Wood'
            ],[
                'movie_id' => '15',
                'episode' => 4,
                'title' => 'The Pink Purloiner'
            ]

            ,
            


            [
                'movie_id' => '16',
                'episode' => 1,
                'title' => 'Spy Buddies'
            ],
            [
                'movie_id' => '16',
                'episode' => 2,
                'title' => 'Fungus Among Us'
            ],
            [
                'movie_id' => '16',
                'episode' => 3,
                'title' => 'Waiting'
            ],[
                'movie_id' => '16',
                'episode' => 4,
                'title' => 'Rise and Shine'
            ]

            ,
            


            [
                'movie_id' => '17',
                'episode' => 1,
                'title' => 'Krabs à la Mode'
            ],
            [
                'movie_id' => '17',
                'episode' => 2,
                'title' => 'New Digs'
            ],
            [
                'movie_id' => '17',
                'episode' => 3,
                'title' => 'Good Ol Whatshisname'
            ],[
                'movie_id' => '17',
                'episode' => 4,
                'title' => 'Boat Smarts'
            ]


            ,
            


            [
                'movie_id' => '18',
                'episode' => 1,
                'title' => 'Breath of Fresh Squidward'
            ],
            [
                'movie_id' => '18',
                'episode' => 2,
                'title' => 'To Love a Patty'
            ],
            [
                'movie_id' => '18',
                'episode' => 3,
                'title' => 'Bucket Sweet Bucket'
            ],[
                'movie_id' => '18',
                'episode' => 4,
                'title' => 'Roller Cowards"'
            ]  
        ]
        );
    }
}
