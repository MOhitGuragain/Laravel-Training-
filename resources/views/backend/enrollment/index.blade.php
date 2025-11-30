@extends('backend.master')
@section('content')
<div class="p-6">
<h2 class="text-2xl font-semibold mb-6">Enrollments List</h2>
<table class="min-w-full bg-white border border-gray-300">
    <thead class="bg-blue-600 text-white">
        <tr class="text-center">
            <th class="py-4 px-3">#</th>
            <th class="py-4 px-3">Student</th>
            <th class="py-4 px-3">Course</th>
            <th class="py-4 px-3">Enrollment Date</th>
            <th class="py-4 px-3">Actions</th>
        </tr>
    </thead>

    <!-- Table Body -->
    <tbody class="text-gray-700">
        @forelse($enrollments as $enrollment)
        <tr class="text-center border-b hover:bg-blue-50 transition">

            <td class="py-3 px-3">{{ $loop->iteration }}</td>

            <td class="py-3 px-3 font-semibold">
                {{ $enrollment->student->student_code }}
            </td>

            <td class="py-3 px-3">
                {{ $enrollment->course->course_name }}
            </td>

            <td class="py-3 px-3">
                {{ $enrollment->enrollment_date }}
            </td>

            <!-- Action Buttons -->
            <td class="py-3 px-3 flex gap-2 justify-center">
                <a href="{{ route('enrollments.edit', $enrollment->id) }}"
                   class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 shadow transition">
                    Edit
                </a>

                <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this enrollment?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 shadow transition">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="py-4 px-3 text-center text-gray-500">No enrollments found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
<a href="{{ route('enrollments.create') }}" class="mt-6 inline-block px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
    Add New Enrollment
</a>
@endsection