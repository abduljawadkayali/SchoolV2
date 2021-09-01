<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherLesson extends Model
{
    protected $fillable = [
        'subject_id', 'class_id', 'name', 'body','image',
        'ftitle', 'ftext', 'stitle', 'stext',
        'fVtitle', 'fVurl', 'fVtext', 'thtitle',
        'thtext', 'fourthtitle', 'fourthtext', 'fifthtitle',
        'fifthtext', 'sVtitle', 'sVurl', 'sVtext',
        'sixthtitle', 'sixthtext', 'seventhtitle', 'seventhtext',
        'tVtitle', 'tVurl', 'tVtext', 'fLtitle',
        'fLurl', 'sLtitle', 'sLurl', 'tLtitle',
        'tLurl', 'fourthLtitle', 'fourthLurl', 'fifthLtitle',
        'fifthLurl'
    ];
}
