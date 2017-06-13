<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HighScores extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'high_scores';
    protected $fillable = array(
        'name',
        'highscore',
        'message'
    );
}
