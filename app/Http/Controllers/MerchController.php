<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchController extends Controller
{
     
    public $articoli = [
        ['id'=>1, 'title'=>'Luffy', 'img'=>'/media/imgmerch/poster.jpeg', 'genres'=>'poster' ],
        ['id'=>2, 'title'=>'Zoro', 'img'=>'/media/imgmerch/a_Figure1.jpeg', 'genres'=>'action figure'],
        ['id'=>3, 'title'=>'Kimono', 'img'=>'/media/imgmerch/cosplay.jpg', 'genres'=>'cosplay'],
        ['id'=>4, 'title'=>'Felpa OnePiece', 'img'=>'/media/imgmerch/felpa.jpg', 'genres'=>'felpa'],
        ['id'=>5, 'title'=>'Capitolo n. 1180', 'img'=>'/media/imgmerch/manga.jpg', 'genres'=>'manga'],

    ];

    public function articoli(){
         return view('merch.articoli', ['articoli' => $this->articoli]);
    }

public function dettaglioArticoli($id){
   
    foreach($this->articoli as $articolo){
        if($id == $articolo['id'])
            return view('merch.dettaglio-articoli', ['articolo'=> $articolo]);
    }
}


}
