@extends('backend.master')
@section('content')
<h2 class="text-2xl font-semibold mb-6">Course List</h2>
<div class="p-6">
    <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden shadow-md">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-3 px-4 text-left">S.N.</th>
                <th class="py-3 px-4 text-left">Course Name</th>
                <th class="py-3 px-4 text-left">Course Code</th>
                <th class="py-3 px-4 text-left">Duration</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($courses as $course)
            <tr class="border-b hover:bg-gray-100 transition">
                <td class="py-3 px-4">{{ $course->id }}</td>
                <td class="py-3 px-4">{{ $course->course_name }}</td>
                <td class="py-3 px-4">{{ $course->course_code }}</td>
                <td class="py-3 px-4">{{ $course->duration }}</td>
            </tr>
            @endforeach
        </tbody>

        <tfoot class="bg-gray-100">
            <tr>
                <td class="py-3 px-4 font-semibold" colspan="4">Total: {{ count($courses) }} courses</td>
            </tr>
        </tfoot>
    </table>
    <a href="{{ route('courses.create') }}" 
   class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 mt-4 inline-block">
    Add New Course
</a>
    @endsection