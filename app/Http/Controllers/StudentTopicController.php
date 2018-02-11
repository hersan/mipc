<?php

namespace App\Http\Controllers;

use App\Topic;
use App\Student;
use Illuminate\Http\Request;

/**
 * Class StudentTopicController
 *
 * @package App\Http\Controllers
 */
class StudentTopicController extends Controller
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

    /**
     * @param Student $student
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSubscribeForm(Student $student)
    {
        $topics = Topic::all()->pluck('name', 'id');

        return view('subscribe.subscribe_form', compact('student', 'topics'));
    }

    /**
     * @param Student $student
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUnsubscribeForm(Student $student)
    {
        return view('subscribe.unsubscribe_form');
    }

    /**
     * @param Student $student
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subscribe(Student $student, Request $request)
    {
        $student->subscribeToTopics($request->topic);

        return back()->with('success', 'Se agrego el alumno a las materias');
    }

    public function unsubscribe(Student $student, topic $topic)
    {
        try {
            $student->topics()->detach($topic);

            return back()->with('success', 'La materia fue eliminada');
        } catch (\Exception $e) {
            return back()->with('danger', 'Tenemos un problema');
        }
    }
}
