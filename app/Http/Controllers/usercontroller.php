<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\student;


class usercontroller extends Controller
{
    function show()
    {
        // return request('search');
        if (request()->has('search')) {
            $data = student::where('name', 'Like', '%' . request('search') . '%')->get();
        } else {
            $data = student::all();
        }
        return view('main', ['members' => $data]);
    }
    function AddData(Request $req)
    {
        $students = new student();
        $students->Name = $req->Name;
        $students->password = $req->password;
        $students->Date = $req->Date;
        $students->save();
        return redirect('crud');
    }
    // function delete(Request $request)
    function delete($id)
    {
        $data = student::find($id);

        // $data = student::find($request->delete_id);
        $data->delete();
        return redirect('crud')->with('flash_message', 'Student deleted!');
    }
    function showdata($id)
    {
        $data = student::find($id);
        return view('main', ['data' => $data]);
    }

    function getstudent()
    {
        if (request()->has('student')) {
            return student::where('id', request('student'))->first();
        }
        // else{
        //     $data = student::all();
        // }
    }
    function update($id, Request $req)
    {
        $data = student::find($req->id);
        $data->Name = $req->Name;
        $data->password = $req->password;
        $data->Date = $req->Date;
        $data->save();
        return redirect('crud');
    }
    function viewrecord($id)
    {
        $data = student::find($id);
        return view('view', ['data' => $data]);
    }
    function updateUser($id, Request $req)
    {

        $data = student::find($req->editid);
        $data->Name = $req->Name;
        $data->password = $req->Password;
        $data->Date = $req->Date;
        $data->save();
        return redirect('crud');
    }
    // function search() 
    //  function search(Request $request){
    // {
    // dd(request()->input('search'));
    // if (request()->has('search')) {
    //     $data->where('name', 'Like', '%' . request()->input('search') . '%');
    // $search = $request->input('search');
    // $data = data::query()
    //     ->where('name', 'LIKE', "%{$search}%")
    //     ->orWhere('id', 'LIKE', "%{$search}%")
    //     ->get();

    // }
    // $data = student::all();
    //     return view('main',['members'=>$data]);
    //     return view('search', compact('data'));
    // }
}
