<?php

namespace App\Http\Controllers\Arcade\Game2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HighScores;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

use Session;

class HighScoresController extends Controller
{



    public function index()
    {
    	// $highScores = HighScores::all();
     //  $results = DB::table('high_scores')
     //  ->orderBy('highscore', 'desc')
     //  ->take(20)
     //  ->get();
    	// return view('arcade.game2.highScores.show',compact('highScores'));
      // return view('arcade.game2.highScores.show',['results' => $results]);
      session_start();

      // return view('arcade.game2.addScore', ['var' => $this->var]); 
      return view('arcade.game2.addScore', ['var' => $_SESSION['var']]); 
    }

    // public function insert(){
    // 	  // $art = new Painting;
    //     // $art->name = 'Mona Lisa';
    //     // $art->artist = 'Leonardo de Vinci';
    //     // $art->price = 300000000;
    //     // $art->save();
    // }

    public function addScore(){
      session_start();
      $_SESSION['var'] = $_POST['var'];
      // exit();
      // $this->var = $_POST['var'];
      // $this->var += 10;
     //  echo '<script type="text/javascript">',
     // 'window.location = "http://my.app/arcade/game2/addScore";',
     // '</script>';
     // return view('arcade.game2.addScore');     
     return response()->json(['status' => 'ok']);
    }

    public function highScores(Request $req){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $highscore = $req->input('highscore');

        $highScore = new HighScores;
        $highScore->name = $req->input('name');;
        $highScore->highScore = ((int)$highscore);
        $highScore->message = $req->input('message');;
        $highScore->save();
      }

      $highScores = HighScores::all();
      $results = DB::table('high_scores')
      ->orderBy('highscore', 'desc')
      ->take(20)
      ->get();

      return view('arcade.game2.highScores.show',['results' => $results]);
    }
}
