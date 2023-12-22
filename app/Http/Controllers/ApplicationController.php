<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmitted;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Tester\ApplicationTester;

class ApplicationController extends Controller
{
    
    public function ApplyApplication2(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'job_title' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            // 'file' => 'required|array',
            // 'file.*' => 'mimes:pdf,jpeg,jpg,png|max:2048',
        ]);
    //    echo '<pre>'; prin_r($request->all());die();
        // $files = [];
        // if ($request->hasFile('file')) {
        //     foreach ($request->file('file') as $file) {
        //         $extension = $file->getClientOriginalExtension();
        //         $filename = time() . '_' . uniqid() . '.' . $extension;
        //         $path = $file->storeAs('resumes', $filename, 'public');
        //         $files['resume_' . $extension] = $path;
        //     }
        // }
    
        // $validatedData = array_merge($validatedData, $files);
    
        Application::create($validatedData);
    
        return redirect()->back()->with('success', 'Application submitted successfully.');
    }




    public function ApplyApplication(Request $request)
    {
        // Validate the incoming request data
        $messages = [
            'file.required' => 'Please select a file to upload.',
            'file.max_mb' => 'The file size should not exceed :max 5 MB.',
            'file.mimes' => 'The file must be a PDF, DOC, DOCX, JPEG, JPG, or PNG.',
            'file.image_dimensions' => 'The image dimensions should not exceed :max_widthx:6000px max_height: 6000 pixels.',
        ];
    
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'job_title' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'message' => 'required',
            'file' => 'required|file|max_mb:5|mimes:pdf,doc,docx,jpeg,jpg,png|image_dimensions:6000,6000', // Adjust the max size (in kilobytes) as needed
        ], $messages);
        
        // If validation fails, redirect back to the form with error messages and input data
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Validation succeeded, continue with processing the application
    
        // Convert the first character of each word in job_title to uppercase
        $jobTitle = ucwords($request->input('job_title'));
        $email = strtolower($request->input('email'));
    
        // File upload and storage logic
        $file = $request->file('file');
        $filePath = $file->store('application_files'); // Change 'application_files' to your desired storage directory
    
        // Application creation
        Application::create([
            'name' => $request->input('name'),
            'job_title' => $jobTitle,
            'email' => $email,
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
            'file' => $filePath,
        ]);
    
        // Send email notification
        // ... Your email sending logic ...
        
    // Send email notification
    // $applicationData = [
    //     'name' => $validatedData['name'],
    //     'job_title' => $jobTitle,
    //     'email' => $email,
    //     'phone' => $validatedData['phone'],
    //     'message' => $validatedData['message'],
    //     'file_path' => $filePath,
    // ];
    // Mail::to($email)->send(new ApplicationSubmitted($applicationData));

    
        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Application submitted successfully.');
    
        // Additional logic or redirect after successful submission
    }

public function ApplyApplication6(Request $request)
{
    // Your existing code...
    // composer require guzzlehttp/guzzle
    // use Illuminate\Support\Facades\Http;

    // Send email notification to Node.js API
    $nodejsUrl = 'http://your-nodejs-api-url';
    $applicationData = [
        'name' => $request->input('name'),
        'job_title' => $jobTitle,
        'email' => $email,
        'phone' => $request->input('phone'),
        'message' => $request->input('message'),
        'file_path' => $filePath,
    ];

    try {
        $response = Http::post($nodejsUrl, $applicationData);
        if ($response->successful()) {
            // Email sent successfully to Node.js API
        } else {
            // Handle the case when the email sending fails
        }
    } catch (\Exception $e) {
        // Handle any exceptions that occur during the API request
    }

    // Your existing code...

    return redirect()->back()->with('success', 'Application submitted successfully.');
    // Additional logic or redirect after successful submission
}
    
    public function ApplyApplication12(ApplyApplicationRequest $request)
    {
        // The validation rules are moved to the ApplyApplicationRequest class
        
        // Convert the first character of each word in job_title to uppercase
        $jobTitle = ucwords($request->input('job_title'));
        $email = strtolower($request->input('email'));
    
        // File upload and storage logic
        $file = $request->file('file');
        $filePath = $file->store('application_files'); // Change 'application_files' to your desired storage directory
    
        // Application creation
        Application::create([
            'name' => $request->input('name'),
            'job_title' => $jobTitle,
            'email' => $email,
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
            'file' => $filePath,
        ]);
    
        // Send email notification
        // ... Your email sending logic ...
        
    // Send email notification
    // $applicationData = [
    //     'name' => $validatedData['name'],
    //     'job_title' => $jobTitle,
    //     'email' => $email,
    //     'phone' => $validatedData['phone'],
    //     'message' => $validatedData['message'],
    //     'file_path' => $filePath,
    // ];
    // Mail::to($email)->send(new ApplicationSubmitted($applicationData));
    
        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Application submitted successfully.');
    
        // Additional logic or redirect after successful submission
    }

public function download($id)
{
    $applications = Application::findOrFail($id);
    $filePath = $applications->file;

    return Storage::download($filePath);
}

public function resumeDonwload(){
    $applications = Application::all();
    return view('download', compact('applications'));
}

    
public function viewApplication(){
    // $application = Application::all();
    $application = Application::select('name', 'file', 'email')->get();
    return view('view-application', compact('application'));

}
}
