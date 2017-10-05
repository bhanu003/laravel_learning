<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $fillable = ['title','body'];
}

public function comments()
{
	
	return $this->hasMany(Comment::class);
}

public function addComment($body)
{
	$this->comments()->create(compact('body'));
	
	/*  Comment::create([
		'body'=>request('body'),
		'article_id'=>$this->id
		]); */
}