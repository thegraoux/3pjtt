<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class uploadcontroller extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(request $request)
    {
        $mail = Auth::user();
        $id = Auth::id();

        if ($request->hasFile('image')) {
            $request->file('image');
            Storage::putFile($id, $request->file('image'));
            $id = Auth::id();
            return Storage::allFiles($id);
        } else {
            return "no file selected";
        }
    }

    public function show()
    {
        $id = Auth::id();
        return Storage::allFiles($id);
    }
}