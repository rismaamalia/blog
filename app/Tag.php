<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama_tag','slug'];
    public $timestamps = true;
    public function artikel(){
        return $this->BelongsToMany('App\Tag', 'artikel_tags', 'tag_id', 'artikel_id');
    }
}
