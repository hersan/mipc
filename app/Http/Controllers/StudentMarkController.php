<?php

namespace App\Http\Controllers;

use App\Student;
use App\Topic;
use Egulias\EmailValidator\Validation\Error\RFCWarnings;
use Illuminate\Http\Request;

class StudentMarkController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showFormMark(Student $student, Topic $topic)
    {
        $mark = $student->topics()->where('topic_id', $topic->id)->first()->pivot->mark;

        return view('mark.edit', compact('student', 'topic', 'mark'));
    }

    public function updateMark(Student $student, Topic $topic, Request $request)
    {
        $student->topics()->updateExistingPivot($topic->id, ['mark' => $request->mark]);

        return back()->with('success', 'Se agrego la calificación');
    }
}
