<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','slug','image','tag','tag_id','description','article'
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

}
