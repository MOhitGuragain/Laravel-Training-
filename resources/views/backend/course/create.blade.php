@extends('backend.master')
@section('content')
<h2 class ="text-2xl font-semibold mb-6">Add New Course</h2>
<form action="{{ route('courses.store') }}" method="POST" class="space-y-6>
    @csrf
    <div>
        <label for="course_name" class="block text-sm font-medium text-gray-700">Course Name</label>
        <input type="text" name="course_name" id="course_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
    </div>
    <div>
        <label for="course_code" class="block text-sm font-medium text-gray-700">Course Code</label>
        <input type="text" name="course_code" id="course_code" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>  
    </div>
    <div>
        <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
        <input type="text" name="duration" id="duration" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>      
    </div>
    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Course</button>
    </div> 
</form> 
    @endsection

