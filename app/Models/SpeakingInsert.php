<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeakingInsert extends Model
{
    use HasFactory;
    protected $table = "speaking_topics";
    protected $fillable = ['topic_name'];
}
