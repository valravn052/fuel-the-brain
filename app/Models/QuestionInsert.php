<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionInsert extends Model
{
    use HasFactory;
    protected $table = "reading_question";
    protected $guarded = [];
}
