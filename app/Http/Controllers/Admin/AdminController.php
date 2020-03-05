<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function viewAdmin()
    {
        return view('page/admin');
    }

//test code pour upload une image
//    public function viewAdminPost()
//    {
//        $request->validate
//        ([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//        $imageName = time().'.'.$request->image->extension();
//
//        $request->image->move(public_path('images/uploaded'), $imageName);
//
//        return back()
//            ->with('success','You have successfully upload a new product.')
//            ->with('image',$imageName);
//
//    }
}
