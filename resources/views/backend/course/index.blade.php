@extends('backend.master')
@section('content')
<h2 class="text-2xl font-semibold mb-6">Course List</h2>
<div class="p-6">
    <div class="overflow-hidden rounded-xl shadow-lg border border-gray-200">

        <table class="min-w-full border-collapse">
            <!-- Table Header -->
            <thead class="bg-gradient-to-r from-blue-600 to-blue-500 text-white">
                <tr>
                    <th class="py-4 px-4 text-left font-semibold">ID</th>
                    <th class="py-4 px-4 text-left font-semibold">Course Name</th>
                    <th class="py-4 px-4 text-left font-semibold">Course Code</th>
                    <th class="py-4 px-4 text-left font-semibold">Duration (Years)</th>
                    <th class="py-4 px-4 text-left font-semibold">Actions</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="bg-white">
                @forelse ($courses as $course)
                <tr class="border-b hover:bg-blue-50 transition duration-200">
                    <td class="py-3 px-4">{{ $course->id }}</td>
                    <td class="py-3 px-4 font-medium">{{ $course->course_name }}</td>
                    <td class="py-3 px-4">{{ $course->course_code }}</td>
                    <td class="py-3 px-4">{{ $course->duration_years }}</td>

                    <td class="py-3 px-4 flex gap-2">
                        <a href="{{ route('courses.edit', $course->id) }}"
                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 shadow transition flex items-center gap-1">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure?')" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 shadow transition flex items-center gap-1">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="5" class="py-4 px-4 text-center text-gray-500">
                        No courses found.
                    </td>
                </tr>
                @endforelse
            </tbody>

</table>
    </div>
    <a href="{{ route('courses.create') }}" 
   class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 mt-4 inline-block">
    Add New Course
</a>
    @endsection