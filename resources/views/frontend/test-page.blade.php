
@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <br><br><br>
    
    
    <div class="bg-gray-100 min-h-screen font-sans">
        <!-- Header -->
        <header class="bg-white shadow-md py-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-semibold text-gray-800">Job Portal</h1>
                <nav>
          <ul class="flex space-x-4">
            <li><a href="#" class="text-gray-600 hover:text-blue-500">Home</a></li>
            <li><a href="#" class="text-gray-600 hover:text-blue-500">Jobs</a></li>
            <li><a href="#" class="text-gray-600 hover:text-blue-500">About</a></li>
            <!-- More navigation links -->
        </ul>
    </nav>
</div>
</header>

<!-- Main Content -->
<main class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Job Listing Cards -->

{{-- 
      @foreach ($posts as $key => $post)
        {{$post->title}}
    @endforeach --}}
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-blue-500 text-white text-center py-2">
            <span class="text-sm">Featured</span>
        </div>
        <div class="p-6">
            <h2 class="text-lg font-semibold mb-2">Senior Developer</h2>
            <p class="text-gray-600">Company Name</p>
            <p class="text-gray-700 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus fringilla magna, et lacinia odio.</p>
            <div class="mt-6 flex justify-between items-center">
                <span class="text-blue-500 font-semibold">Full-time</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Now</button>
            </div>
        </div>
    </div>
    <!-- Repeat job listing cards for each job -->
    
        <!-- Sample Job Listing Card -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-lg font-semibold mb-2">UI/UX Designer</h2>
                <p class="text-gray-600">Company Name</p>
                <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <div class="mt-6 flex justify-between items-center">
                    <span class="text-blue-500 font-semibold">Part-time</span>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Now</button>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-lg font-semibold mb-2">UI/UX Designer</h2>
                <p class="text-gray-600">Company Name</p>
            <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <div class="mt-6 flex justify-between items-center">
                <span class="text-blue-500 font-semibold">Part-time</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Now</button>
            </div>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-lg font-semibold mb-2">UI/UX Designer</h2>
            <p class="text-gray-600">Company Name</p>
            <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <div class="mt-6 flex justify-between items-center">
                <span class="text-blue-500 font-semibold">Part-time</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Now</button>
            </div>
        </div>
    </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-lg font-semibold mb-2">UI/UX Designer</h2>
                <p class="text-gray-600">Company Name</p>
                <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <div class="mt-6 flex justify-between items-center">
                    <span class="text-blue-500 font-semibold">Part-time</span>
              <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Now</button>
            </div>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-lg font-semibold mb-2">UI/UX Designer</h2>
            <p class="text-gray-600">Company Name</p>
            <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <div class="mt-6 flex justify-between items-center">
                <span class="text-blue-500 font-semibold">Part-time</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Now</button>
            </div>
          </div>
        </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-lg font-semibold mb-2">UI/UX Designer</h2>
            <p class="text-gray-600">Company Name</p>
            <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <div class="mt-6 flex justify-between items-center">
                <span class="text-blue-500 font-semibold">Part-time</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Now</button>
            </div>
          </div>
        </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-lg font-semibold mb-2">UI/UX Designer</h2>
            <p class="text-gray-600">Company Name</p>
            <p class="text-gray-700 mt-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <div class="mt-6 flex justify-between items-center">
                <span class="text-blue-500 font-semibold">Part-time</span>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Now</button>
            </div>
          </div>
        </div>
        <!-- More job listing cards -->
        
    </div>
</main>


</div>
@include('frontend.layouts.footer')
