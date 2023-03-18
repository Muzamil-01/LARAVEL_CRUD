<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Employee::all();
        $employees = Employee::all();
        $data = compact('employees');
        return view('welcome')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'fname' => 'required',
                'city' => 'required',
                'image' => 'required',
            ]
        );
        $employees = new Employee();
        $employees->name = $request['name'];
        $employees->fname = $request['fname'];
        $employees->city = $request['city'];
        if ($request->has('image')) {
            $file = $request->file('image');
            $ext = $file->extension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/users/', $filename);
            $image = "uploads/users/" . $filename;
        }
        $employees->image = $image;
        $employees->save();
        redirect('/employess/view');
    }
    public function add_view()
    {
        return view('add');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
