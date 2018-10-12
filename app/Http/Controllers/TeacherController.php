<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;
use DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $teachers = Teacher::all();
        $subjects = Subject::all();
        return view('teachers.index', compact('teachers', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers = Teacher::all();
        $subjects = Subject::all();
       
        return view('teachers.create', compact('teachers', 'subjects'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(),[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'subject_id'=>'required',
        ]);


        Teacher::create(request(['firstname', 'lastname', 'email', 'subject_id']));

        session()->flash("success_message", "You have created");
        return redirect('/teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        $q=$request->q;
        
            if($q != ""){
                //use orwhere ->orWhere('lastname ','LIKE','%'.$q.'%')
            $teachers = Teacher::where( 'firstname', 'LIKE', '%' . $q . '%' )->get();
           
           
            } 
            return view('teachers.index', compact('teachers'));
          
            
          
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
