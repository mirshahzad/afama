<?php

namespace App\Http\Controllers;

use App\Complaint;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        $complaint = new Complaint();
        $file = $request->file('vid');
        $fileName = $file->getClientOriginalName();
        $path = public_path().'/uploads/';
        //$request->file('images')->move("uploads", $fileName);
        //Complaint::create($request->all());
        $file->move($path, $fileName);
        $complaint->Name = $request->input('Name');
        $complaint->Address = $request->input('Address');
        $complaint->CNIC = $request->input('CNIC');
        $complaint->Mobile = $request->input('Mobile');
        $complaint->Email = $request->input('Email');
        $complaint->Subject = $request->input('Subject');
        $complaint->AreaName = $request->input('AreaName');
        $complaint->Complain = $request->input('Complain');
        $complaint->Suggestion = $request->input('Suggestion');
        $complaint->Status = $request->input('Status');
        $complaint->Upload = $fileName;
        $complaint->save();


        return 'Your request is submitted successfully.';
    }
}
