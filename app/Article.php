<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $fillable = ['title','body','user_id'];


public function comments()
{
	
	return $this->hasMany(Comment::class);
}

public function user()
{
	return $this->belongsTo(User::class);
}

public function addComment($body)
{
	$this->comments()->create(compact('body'));
	//$article->addComment(request('body'), \Auth::user()->id);
	
	/*  Comment::create([
		'body'=>request('body'),
		'article_id'=>$this->id
		]); */
}
}