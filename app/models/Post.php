<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
    'title'      => 'required|max:100',
    'description'       => 'required|min:1'
    );

    public function user()
    {
    return $this->belongsTo('User');
    }
}
