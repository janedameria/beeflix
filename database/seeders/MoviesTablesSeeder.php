<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Storage;

use Illuminate\Support\Facades\DB;
class MoviesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(
           [ 
            [
                'genre_id' => '1',
                'title' => 'While You Were Sleeping',
                'photo' => 'https://asianwiki.com/images/1/1f/While_You_Were_Sleeping-CP1-2.jpg',
                'description' =>  'Hong-Joo (Bae Suzy) lives with her mother and helps her run a pork restaurant. Hong-Joo is haunted by seeing the future deaths of others in her dreams. Whats worse is that she does not know when the deaths will happen, but she tries to stop her dreams from becoming reality. One night, Hong-Joo dreams about the death of her own mother.

                Meanwhile, Jae-Chan (Lee Jong-Suk) is a rookie prosecutor. He meets Yoo-Beom (Lee Sang-Yeob) at the prosecutors’ office. Yoo-Beom was Jae-Chan’s private tutor when Jae-Chan was a student, but an incident caused Jae-Chan to dislike him. Yoo-Beom was a prosecutor, but he now works as a lawyer. He takes on any case that brings him money.',
                'rating' => 5
            ],
            [
                'genre_id' => '1',
                'title' => 'Romance is a Bonus Book',
                'photo' => 'https://asianwiki.com/images/c/c8/Romance_is_a_Bonus_Book-P2.jpg',
                'description' =>  'Cha Eun-Ho (Lee Jong-Suk) is a genius writer and the youngest chief editor ever at his publishing company. He is smart and handsome. He is also even tempered at work, but he has a warm heart and a reasonable personality.

                Kang Dan-Yi (Lee Na-Young) used to be a popular copywriter, but she is not anymore. She is now broke and unemployed. Even though she tries to find a job, due to her impressive career and excellent educational background, she is unable to find a new job. Finally, Kang Dan-Yi gets a job at a publishing company by lying about her background. Cha Eun-Ho is the chief editor at that publishing company. They begin to develop romantic feelings for each other. ',
                'rating' => 5
            ],
            [
                'genre_id' => '1',
                'title' => 'W',
                'photo' => 'https://i.pinimg.com/originals/41/64/e4/4164e491b828c0ecd4278bee0fa0f333.jpg',
                'description' =>  'Oh Sung Moo, the father of cardiothoracic surgeon Oh Yeon Joo, mysteriously goes missing while writing the last chapter of his webtoon "W". Yeon Joo goes to his office looking, but a hand from his monitor suddenly pulls her in, and she finds herself on the rooftop of a building, next to a man bloodied. She manages to save the person, only to realize that he is Kang Cheol, the main character of her fathers webtoon. Yeon Joo later discovers she can only enter and leave the webtoon depending on Kang Cheols feelings.',
                'rating' => 5
            ],
            [
                'genre_id' => '1',
                'title' => 'School 2013',
                'photo' => 'https://img.reelgood.com/content/show/df575708-c37a-4df5-b78d-7e2376be2291/poster-780.jpg',
                'description' =>  'Teacher Lee Yoon tries to help the most-eligible students to the most-problematic at Seung Ri High.',
                'rating' => 5
            ],
            [
                'genre_id' => '1',
                'title' => 'Doctor Stranger',
                'photo' => 'https://i.pinimg.com/originals/7d/52/4b/7d524b2d46f4e71925948310e3198075.jpg',
                'description' =>  'As a child, Park Hoon and his father were kidnapped by North Korea. In North Korea, he was trained to become a doctor by his father who was already a doctor. Park Hoon became a genius-like heart surgeon. He then flees to South Korea. Park Hoon begins to work as a doctor in South Koreas top hospital Myeongwoo University Hospital, but he feels like a complete outsider. To bring his love from North Korea, he does anything to make money. ',
                'rating' => 4
            ],
            [
                'genre_id' => '1',
                'title' => 'Pinocchio',
                'photo' => 'https://asianwiki.com/images/0/0f/Pinocchio_%28Korean_Drama%29-p1.jpg',
                'description' =>  'As a child, Ha-Myeong (Lee Jong-Suk) grew up in a family with his firefighter father, mother and older brother. Ha-Myeong and his older brother (Yoon Gyun-Sang) both possess higher than normal intellect and are proud of their father. A fire at a waste facility though destroys his family. His mother dies a short time later and Ha-Myeong ends up being scooped out of the ocean by an unknown man (Byun Hee-Bong).',
                'rating' => 5
            ],
            [
                'genre_id' => '1',
                'title' => 'Goblin',
                'photo' => 'https://i.pinimg.com/originals/2f/90/7d/2f907d05055cff0f3ee0172e6582783a.jpg',
                'description' =>  'Kim Shin was once an unbeatable general in Goryeos military who died a tragic death. He now possesses immortality but is tired of living while everyone else around him dies. For 900 years, Kim Shin has searched for his bride, a mortal who can pull out the sword and end his life. One day, he encounters Ji Eun Tak, a positive, upbeat high school student who can see the dead and has gone through tragic events, yet still stays strong. She claims to be the Goblins bride who can end his immortal life, but what appears to be an easy task, only gets complicated, as the two fall in love.',
                'rating' => 5
            ],
            [
                'genre_id' => '3',
                'title' => 'Masterchef Australia',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BYmJiMGIwMWYtMzZmOS00NGEyLWE2ZjktOWM0NDdjNTgzZTBjXkEyXkFqcGdeQXVyMTAwMzM3NDI3._V1_.jpg',
                'description' =>  'Top Australian chefs judge passionate home cooks who participate in competitive culinary challenges to develop their cooking skills and win the title of the best chef.',
                'rating' => 4
            ]
            ,
            [
                'genre_id' => '3',
                'title' => 'Running Man',
                'photo' => 'https://i.pinimg.com/originals/5e/0f/79/5e0f79e406bab899714536e34de7767e.jpg',
                'description' =>  'Running Man is a reality-variety show that stars Yoo Jae Suk and many other celebrities. In each episode, they must complete missions at famous landmarks to win the race. The missions almost always feature running, hence the title, and the name tag ripping game is filled with tension as each member struggles to survive.',
                'rating' => 4
            ] ,
            [
                'genre_id' => '3',
                'title' => 'American Idol',
                'photo' => 'https://i.pinimg.com/originals/d5/00/4f/d5004f21e5a7f1f92b4affc2dd69ab98.jpg',
                'description' =>  'Several participants from America showcase their singing talent in front of a panel of esteemed judges to win the title and a record label deal.',
                'rating' => 4
            ],
            [
                'genre_id' => '3',
                'title' => 'Dancing With the Stars',
                'photo' => 'https://i.pinimg.com/originals/fb/f4/fb/fbf4fbd34ed258425170ba3161fc54ce.jpg',
                'description' =>  'A celebrity is paired with a professional dancer to perform predetermined dances and compete against each other.',
                'rating' => 4
            ],
            [
                'genre_id' => '3',
                'title' => 'Delicious Rendezvous',
                'photo' => 'https://i.mydramalist.com/qb8b8f.jpg',
                'description' =>  'The show develops new menus using local specialties and sells food at meeting places with lots of transient visitors,  such as rest areas, airports, and railway stations. Baek Jong Won, Yang Se Hyeong,  Kim Hee Chul, and Kim Dong Jun, also known as the Farmvengers, and the main cast. The goal is not just to develop and sell food, but to promote consumption and improve the perception of local specialties. It is to give hope to peasants and inform the power of home products to people. Enjoy the look into local food while serious supply and demand issues are brought to the attention of the viewers and the visitors to the rest stops.',
                'rating' => 4
            ],
           
           [
               'genre_id' => '2',
               'title' => 'Spirited Away',
               'photo' => 'https://vistapointe.net/images/spirited-away-1.jpg',
               'description' =>  'In this animated feature by noted Japanese director Hayao Miyazaki, 10-year-old Chihiro (Rumi Hiiragi) and her parents (Takashi Naitô, Yasuko Sawaguchi) stumble upon a seemingly abandoned amusement park. After her mother and father are turned into giant pigs, Chihiro meets the mysterious Haku (Miyu Irino), who explains that the park is a resort for supernatural beings who need a break from their time spent in the earthly realm, and that she must work there to free herself and her parents.',
               'rating' => 4
           ],
           
            [
                'genre_id' => '2',
                'title' => 'Spongebob Squarepants',
                'photo' => 'https://img.reelgood.com/content/show/2a3749d1-4ff9-4be8-a706-1048804a6e64/poster-780.jpg',
                'description' =>  'A yellow sea sponge named SpongeBob SquarePants, who enjoys being a cook at Krusty Krab, lives in the Pacific Ocean. He embarks on various adventures with his friends at Bikini Bottom.',
                'rating' => 4
            ],
            [
                'genre_id' => '2',
                'title' => 'Jimmy Neutron',
                'photo' => 'https://quotecatalog.imgix.net/assets/title-tP9a3Z8H8iLcFBmHg3xNmvrp/original.jpg?w=400&h=600&fit=crop',
                'description' =>  'Ten-year-old Jimmy is a genius inventor but lacks social skills. However, when adults from his hometown are abducted by aliens, Jimmy sets out to rescue them with the help of friends.',
                'rating' => 4
            ]
            ,
            [
                'genre_id' => '2',
                'title' => 'Kungfu Panda',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BODJkZTZhMWItMDI3Yy00ZWZlLTk4NjQtOTI1ZjU5NjBjZTVjXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg',
                'description' =>  'When Po the Panda, a kung fu enthusiast, gets selected as the Dragon Warrior, he decides to team up with the Furious Five and destroy the evil forces that threaten the Valley of Peace.',
                'rating' => 4
            ] ,
            [
                'genre_id' => '2',
                'title' => 'Shrek',
                'photo' => 'https://i.pinimg.com/originals/3f/ff/7d/3fff7d528eb55f35fc2278d04fa22b1a.png',
                'description' =>  'Shrek, an ogre, embarks on a journey with a donkey to rescue Princess Fiona from a vile lord and regain his swamp.',
                'rating' => 3
            ] ,
            [
                'genre_id' => '2',
                'title' => 'kikis delivery service',
                'photo' => 'https://images-na.ssl-images-amazon.com/images/I/71D%2BUquoSsL._AC_SL1500_.jpg',
                'description' =>  'In this anime feature, 13-year-old Kiki moves to a seaside town with her talking cat, Jiji, to spend a year alone, in accordance with her villages tradition for witches in training. After learning to control her broomstick, Kiki sets up a flying courier service and soon becomes a fixture in the community. But when the insecure young witch begins questioning herself and loses her magic abilities, she must overcome her self-doubt to get her powers back.',
                'rating' => 3
            ]
           ]
        );
    }
}
