<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WritingTopic extends Model
{   
    protected $table = 'writing_topic';
    protected $fillable = ['topic_name'];
}
