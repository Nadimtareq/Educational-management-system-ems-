<?php

namespace App\lib;

use App\Model\Student\Result;

class Helper {
    public function getHighestMark($exam_id, $subject_id)
    {
        $highest_mark = Result::where('exams_id', $exam_id)->where('subjects_id', $subject_id)->max('mark');
        return $highest_mark;
    }
}