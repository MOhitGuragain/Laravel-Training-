@extends('backend.master')
@section('content')
<div class="p-6 max-w-xl mx-auto">
    <h2 class="text-2xl font-semibold mb-6">Add New Enrollment</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('enrollments.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1">Student</label>
            <select name="student_id" class="w-full border px-3 py-2 rounded">
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->student_code }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-1">Course</label>
            <select name="course_id" class="w-full border px-3 py-2 rounded">
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-1">Enrollment Date</label>
            <input type="date" name="enrollment_date" class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700">Save Enrollment</button>
            <a href="{{ route('enrollments.index') }}" class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</a>
        </div>
    </form>

@endsection