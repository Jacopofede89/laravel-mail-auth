<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\EventDeleteMail;

use App\Videogame;

use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getVideogames(){
        
        $videogames = Videogame::all();
        return json_encode($videogames);
    }

    public function deleteVideogame($id){

        $videogame = Videogame::findOrFail($id);
        $videogame -> delete();

        $this -> sendDeleteEmail($videogame);
        return json_encode($videogame);
    }

    private function sendDeleteEmail($videogame){
        
        Mail::to(Auth::user()-> email)->send(new EventDeleteMail($videogame));
        
        Mail::to('Admin@jmail.com')->send(new EventDeleteMail($videogame));
    }
}
