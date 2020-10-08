<?php

use App\Genre;
use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder {
    
    //Preserve initial movie data
    public function run () {
        Movie::create([
            'title' => 'The Little Mermaid',
            'release_date' => '1989-11-17',
            'runtime' => 83,
            'plot' => "A mermaid princess makes a Faustian bargain in an attempt to become human and win a prince's love.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 1, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 1, 'genre' => 'Family']);
        Genre::create(['movie_id' => 1, 'genre' => 'Fantasy']);
        Movie::create([
            'title' => 'Beauty And The Beast',
            'release_date' => '1991-11-22',
            'runtime' => 84,
            'plot' => "A prince cursed to spend his days as a hideous monster sets out to regain his humanity by earning a young woman's love.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 2, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 2, 'genre' => 'Family']);
        Genre::create(['movie_id' => 2, 'genre' => 'Fantasy']);
        Movie::create([
            'title' => 'Aladdin',
            'release_date' => '1992-11-25',
            'runtime' => 90,
            'plot' => "A kindhearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 3, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 3, 'genre' => 'Adventure']);
        Genre::create(['movie_id' => 3, 'genre' => 'Comedy']);
        Movie::create([
            'title' => 'The Lion King',
            'release_date' => '1994-06-24',
            'runtime' => 88,
            'plot' => "Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 4, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 4, 'genre' => 'Adventure']);
        Genre::create(['movie_id' => 4, 'genre' => 'Drama']);
        Movie::create([
            'title' => 'Pocahontas',
            'release_date' => '1995-06-23',
            'runtime' => 81,
            'plot' => "An English soldier and the daughter of an Algonquin chief share a romance when English colonists invade seventeenth century Virginia.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 5, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 5, 'genre' => 'Adventure']);
        Genre::create(['movie_id' => 5, 'genre' => 'Drama']);
        Movie::create([
            'title' => 'The Hunchback of Notre Dame',
            'release_date' => '1996-06-21',
            'runtime' => 91,
            'plot' => "A deformed bell-ringer must assert his independence from a vicious government minister in order to help his friend, a gypsy dancer.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 6, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 6, 'genre' => 'Drama']);
        Genre::create(['movie_id' => 6, 'genre' => 'Family']);
        Movie::create([
            'title' => 'Hercules',
            'release_date' => '1997-06-27',
            'runtime' => 93,
            'plot' => "The son of Zeus and Hera is stripped of his immortality as an infant and must become a true hero in order to reclaim it.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 7, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 7, 'genre' => 'Adventure']);
        Genre::create(['movie_id' => 7, 'genre' => 'Comedy']);
        Movie::create([
            'title' => 'Mulan',
            'release_date' => '1998-06-19',
            'runtime' => 87,
            'plot' => "To save her father from death in the army, a young maiden secretly goes in his place and becomes one of China's greatest heroines in the process.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 8, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 8, 'genre' => 'Adventure']);
        Genre::create(['movie_id' => 8, 'genre' => 'Family']);
        Movie::create([
            'title' => 'Tarzan',
            'release_date' => '1999-06-18',
            'runtime' => 88,
            'plot' => "A man raised by gorillas must decide where he really belongs when he discovers he is a human.",
            'age_rating' => 'G'
        ]);
        Genre::create(['movie_id' => 9, 'genre' => 'Animation']);
        Genre::create(['movie_id' => 9, 'genre' => 'Adventure']);
        Genre::create(['movie_id' => 9, 'genre' => 'Family']);
    }
    
}
