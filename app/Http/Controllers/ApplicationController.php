<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        // File upload
        if ($request->hasFile('file'))
        {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs(
                'files',
                $name,
                'public'
            );
        }

        // Validation
        $request->validate([
            'subject' => 'required|max:255',
            'phone' => 'required|max:50',
            'message' => 'required',
            'file' => 'file|mimes:png,jpg,pdf'
        ]);

        // Create Database
        $application = Application::create([
            'user_id' => auth()->user()->id,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'file_url' => $path ?? null,
        ]);

        // redirect
        return redirect()->back();
    }
}

