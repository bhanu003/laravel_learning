<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
}

public function article()
{
	return $tis->belongsTo(Article::class);
}