<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index() {
        $exams = Exam::orderBy('id', 'asc')->get();
        return view('admin.exam.index', ['exams' => $exams]);
    }

    public function create() {
        return view('admin.exam.create');
    }

    public function store(Request $request) {
        $exam = new Exam();
        $exam->name = $request->name;
        $exam->save();
        return redirect()->route('admin.exam.index');
    }

    public function edit($id) {
        $exam = Exam::find($id);
        return view('admin.exam.edit', ['exam' => $exam]);
    }

    public function update(Request $request, $id) {
        $exam = Exam::find($id);
        $exam->name = $request->name;
        $exam->save();
        return redirect()->route('admin.exam.index');
    }

    public function destroy($id) {
        $exam = Exam::find($id);
        $exam->delete();
        return redirect()->route('admin.exam.index');
    }
}
