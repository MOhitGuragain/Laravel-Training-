@extends('backend.master')
@section('content')
<div class="p-6">
<h2 class ="text-2xl font-semibold mb-6">Exams List</h2>
    <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden shadow-md">
    <thead class="bg-blue-600 text-white">
   <tr>
                    <th class="py-4 px-4 text-left font-semibold">S.N.</th>
                    <th class="py-4 px-4 text-left font-semibold">Exam Name</th>
                    <th class="py-4 px-4 text-left font-semibold">Course</th>
                    <th class="py-4 px-4 text-left font-semibold">Year</th>
                    <th class="py-4 px-4 text-left font-semibold">Term</th>
                    <th class="py-4 px-4 text-left font-semibold">Start Date</th>
                    <th class="py-4 px-4 text-left font-semibold">End Date</th>
                    <th class="py-4 px-4 text-left font-semibold">Actions</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="bg-white">

                @forelse ($exams as $index => $exam)
                <tr class="border-b hover:bg-blue-50 transition duration-200">

                    <td class="py-3 px-4 text-gray-700">{{ $index + 1 }}</td>

                    <td class="py-3 px-4 font-semibold">{{ $exam->exam_name }}</td>

                    <td class="py-3 px-4">{{ $exam->course->course_name ?? 'N/A' }}</td>

                    <td class="py-3 px-4">{{ $exam->exam_year }}</td>

                    <td class="py-3 px-4">{{ $exam->exam_term }}</td>

                    <td class="py-3 px-4">{{ $exam->start_date }}</td>

                    <td class="py-3 px-4">{{ $exam->end_date }}</td>

                    <td class="py-3 px-4 flex gap-2">
                        
                        <!-- Edit Button -->
                        <a href="{{ route('exams.edit', $exam->id) }}"
                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 shadow transition">
                            Edit
                        </a>

                        <!-- Delete -->
                        <form 
                            action="{{ route('exams.destroy', $exam->id) }}" 
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this exam?')">
                            @csrf
                            @method('DELETE')

                            <button 
                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 shadow transition">
                                Delete
                            </button>
                        </form>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="8" class="py-6 text-center text-gray-500">
                        No exams found.
                    </td>
                </tr>
                @endforelse

            </tbody>

            <!-- Table Footer -->
            <tfoot class="bg-gray-100">
                <tr>
                    <td colspan="8" class="py-4 px-4 text-right font-semibold text-gray-600">
                        Total Exams: {{ $exams->count() }}
                    </td>
                </tr>
            </tfoot>
</table>
</div>
<a href="{{ route('exams.create') }}" 
   class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 mt-4 inline-block">
    Add New Exam
</a>
@endsection
