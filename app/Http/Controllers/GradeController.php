<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index(){
        $grades = Grade::orderBy('id', 'asc')->get();
        return view('admin.grade.index',['grades'=>$grades]);
    }

    public function create() {
        return view('admin.grade.create');
    }

    public function store(Request $request) {
        $grade = new Grade();
        $grade->name = $request->name;
        $grade->save();
        return redirect()->route('admin.grade.index');
    }

    public function edit($id) {
        $grade = Grade::find($id);
        return view('admin.grade.edit', ['grade'=>$grade]);
    }

    public function update(Request $request, $id) {
        $grade = Grade::find($id);
        $grade->name = $request->name;
        $grade->save();
        return redirect()->route('admin.grade.index');
    }

    public function destroy($id) {
        $grade = Grade::find($id);
        $grade->delete();
        return redirect()->route('admin.grade.index');
    }

}
