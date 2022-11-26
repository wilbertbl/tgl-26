<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\lesson;
use Illuminate\Http\Request;

class lessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $lesson = lesson::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('class', 'LIKE', "%$keyword%")
                ->orWhere('lesson_name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $lesson = lesson::latest()->paginate($perPage);
        }

        return view('admin.lesson.index', compact('lesson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        lesson::create($requestData);

        return redirect('admin/lesson')->with('flash_message', 'lesson added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $lesson = lesson::findOrFail($id);

        return view('admin.lesson.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $lesson = lesson::findOrFail($id);

        return view('admin.lesson.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $lesson = lesson::findOrFail($id);
        $lesson->update($requestData);

        return redirect('admin/lesson')->with('flash_message', 'lesson updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        lesson::destroy($id);

        return redirect('admin/lesson')->with('flash_message', 'lesson deleted!');
    }
}
