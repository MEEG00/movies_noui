<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
 public function home () {
    return view('welcome');
}
 public $items = [
        ['id'=> 1,
        'name'=>"Whispering Shadows",
        'genre'=> 'Thriller',
        'director'=>"Alexandra Hartman",
        'duration'=>"100 min",
        'desc'=>' A psychological thriller about a detective investigating a series of mysterious murders in a small town, where the shadowy presence of a dark secret begins to unravel.',
        'url'=>'\media\movie1.1.png'],
        ['id'=> 2,
        'name'=>"Midnight Mirage",
        'genre'=>"Drama",
        'director'=>"Julien Lefebvre",
        'duration'=>"90 min",
        'desc'=>'A romantic drama set in the vibrant city of Paris, where two strangers unexpectedly cross paths at midnight and embark on a passionate and transformative journey of self-discovery.',
        'url'=>'\media\movie2.1.png'],
        ['id'=> 3,
        'name'=>"Crimson Horizon",
        'genre'=>"Fantasy",
        'director'=>"Victor Ramirez",
        'duration'=>"210 min",
        'desc'=>'An epic historical adventure that follows a group of warriors on a perilous quest to save their kingdom from an ancient curse, as they battle fierce enemies against the backdrop of a crimson-hued sky.',
        'url'=>'\media\movie3.1.png'],
        ['id'=> 4,
        'name'=>"Frozen Enigma",
        'genre'=>"Sci-fi",
        'director'=>"Elena Petrov",
        'duration'=>"110 min",
        'desc'=>'A sci-fi mystery in which a team of scientists discovers a frozen artifact buried deep in the Arctic ice, unleashing a chain of events that forces them to confront the enigmatic and dangerous power it possesses.',
        'url'=>'\media\movie4.1.png'],
        ['id'=> 5,
        'name'=>"Eternal Echoes",
        'genre'=>"Fantasy",
        'director'=>"Gabriel Morgan",
        'duration'=>"120 min",
        'desc'=>'A poignant fantasy drama revolving around a young artist who stumbles upon a mystical portal that allows her to communicate with departed loved ones, leading her on a soul-searching journey to find closure and inner peace.',
        'url'=>'\media\movie5.1.png'],
        ['id'=> 6,
        'name'=>"Serenade of Secrets",
        'genre'=>"Musical",
        'director'=>"Isabella Rossi",
        'duration'=>"90 min",
        'desc'=>' A musical romance that tells the story of a talented pianist and a gifted violinist who form an instant connection through their shared love for music, but must confront personal secrets that threaten to tear them apart.',
        'url'=>'\media\movie6.1.png'],
    ];



public function movies(){

    return view('movies',['movies'=> $this->items]);
}
 public function info($id){[
    ];
    foreach ($this->items as $item) {
       if ($item['id']== $id) {
        return view('info', ['item'=> $item]); 
       }
      
    }
}
}
