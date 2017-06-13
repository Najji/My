<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HighScoresg1 extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'high_scoresg1s';
    protected $fillable = array(
        'name',
        'highscore',
        'message'
    );
}
