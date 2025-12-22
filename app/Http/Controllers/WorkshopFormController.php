<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopFormController extends Controller
{
    //
   public function index()
    {
        return view('html101');
    }

    public function store(Request $request)
    {
        // ยังไม่ต้อง upload ไฟล์ => ไม่ต้องแตะ $request->file('image')

        $data = $request->validate([
            'fname'   => ['required','string','max:100'],
            'lname'   => ['required','string','max:100'],
            'date'    => ['required','string','max:20'], // dd/mm/yyyy (มาจาก datepicker)
            'age'     => ['required','string','max:10'], // เดิมเป็น text
            'gender'  => ['required','string','max:20'],
            'address' => ['required','string','max:500'],
            'color'   => ['required','string','max:50'],
            'music'   => ['required','string','max:50'],
            'consent' => ['accepted'],
        ]);

         return view('result', compact('data'));
    }

}
