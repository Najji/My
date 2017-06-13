<?php

namespace App\Http\Controllers\Arcade\Game1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HighScoresg1;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

use Session;

class HighScoresg1Controller extends Controller
{
    public function index()
    {
      session_start();
      if (isset($_SESSION['var'])) {
        $var = $_SESSION['var'];
        session_destroy();
        return view('arcade.game1.addScore', ['var' => $var]);
      } else {
        return "URL invalid";
      }
    }

    public function addScore(){
      session_start();
      $_SESSION['var'] = $_POST['var'];

     return response()->json(['status' => 'ok']);
    }

    public function highScores(Request $req){

      if ($_POST) {

        $highscore = $req->input('highscore');

        $highScore = new HighScoresg1;
        $highScore->name = $req->input('name');;
        $highScore->highScore = ((int)$highscore);
        $highScore->message = $req->input('message');;
        $highScore->save();
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
      }
      $highScores = HighScoresg1::all();
      $results = DB::table('high_scoresg1s')
      ->orderBy('highscore', 'desc')
      ->take(20)
      ->get();

      return view('arcade.game1.highScores.show',['results' => $results]);
   
  }
}
