@extends('backend.master')
@section('content')
<div class="p-6 max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="mb-8 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl shadow-lg mb-4">
            <i class="fas fa-clipboard-list text-white text-2xl"></i>
        </div>
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Exams List</h2>
        <p class="text-gray-600">Manage all academic examinations and schedules</p>
    </div>

    <!-- Main Content Card -->
    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
        <!-- Table Container -->
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <!-- Table Header -->
                <thead class="bg-gradient-to-r from-indigo-600 via-indigo-500 to-indigo-600">
                    <tr>
                        <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-indigo-500">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-list-ol text-indigo-200"></i>
                                <span>S.N.</span>
                            </div>
                        </th>
                        <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-indigo-500">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-clipboard-check text-indigo-200"></i>
                                <span>Exam Name</span>
                            </div>
                        </th>
                        <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-indigo-500">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-graduation-cap text-indigo-200"></i>
                                <span>Course</span>
                            </div>
                        </th>
                        <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-indigo-500">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-calendar-alt text-indigo-200"></i>
                                <span>Year</span>
                            </div>
                        </th>
                        <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-indigo-500">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-layer-group text-indigo-200"></i>
                                <span>Term</span>
                            </div>
                        </th>
                        <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-indigo-500">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-play-circle text-indigo-200"></i>
                                <span>Start Date</span>
                            </div>
                        </th>
                        <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-indigo-500">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-flag-checkered text-indigo-200"></i>
                                <span>End Date</span>
                            </div>
                        </th>
                        <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-indigo-500">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-cogs text-indigo-200"></i>
                                <span>Actions</span>
                            </div>
                        </th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse ($exams as $index => $exam)
                    <tr class="group hover:bg-gradient-to-r hover:from-indigo-50 hover:to-blue-50 transition-all duration-300 transform hover:scale-[1.002]">
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center justify-center w-8 h-8 bg-indigo-100 text-indigo-600 rounded-lg font-medium text-sm">
                                {{ $index + 1 }}
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-lg flex items-center justify-center shadow-sm">
                                    <i class="fas fa-file-alt text-white text-sm"></i>
                                </div>
                                <span class="font-semibold text-gray-800">{{ $exam->exam_name }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium border border-blue-200">
                                <i class="fas fa-book mr-1 text-xs"></i>
                                {{ $exam->course->course_name ?? 'N/A' }}
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                <i class="fas fa-calendar mr-1 text-xs"></i>
                                {{ $exam->exam_year }}
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">
                                <i class="fas fa-layer-group mr-1 text-xs"></i>
                                {{ $exam->exam_term }}
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center shadow-sm">
                                    <i class="fas fa-play text-white text-xs"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">{{ $exam->start_date }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center shadow-sm">
                                    <i class="fas fa-flag text-white text-xs"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">{{ $exam->end_date }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex gap-3">
                                <!-- Edit Button -->
                                <a href="{{ route('exams.edit', $exam->id) }}"
                                   class="px-4 py-2 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-xl hover:from-yellow-600 hover:to-yellow-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center gap-2 group-hover:transform group-hover:scale-105">
                                    <i class="fas fa-edit text-sm"></i> 
                                    <span>Edit</span>
                                </a>

                                <!-- Delete -->
                                <form 
                                    action="{{ route('exams.destroy', $exam->id) }}" 
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this exam?')"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button 
                                        class="px-4 py-2 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl hover:from-red-600 hover:to-red-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center gap-2 group-hover:transform group-hover:scale-105">
                                        <i class="fas fa-trash text-sm"></i> 
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="py-12 px-6 text-center">
                            <div class="flex flex-col items-center justify-center text-gray-400">
                                <i class="fas fa-clipboard-list text-5xl mb-4 opacity-50"></i>
                                <p class="text-xl font-medium text-gray-500 mb-2">No exams found.</p>
                                <p class="text-gray-400">Get started by scheduling your first exam</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>

                <!-- Table Footer -->
                <tfoot class="bg-gray-50 border-t border-gray-200">
                    <tr>
                        <td colspan="8" class="py-4 px-6">
                            <div class="flex justify-between items-center">
                                <div class="text-sm text-gray-600">
                                    <span class="font-medium">{{ $exams->count() }}</span> exams scheduled
                                </div>
                                <div class="text-right font-semibold text-gray-700">
                                    Total Exams: {{ $exams->count() }}
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Add New Exam Button -->
    <div class="mt-6 text-center">
        <a href="{{ route('exams.create') }}" 
           class="inline-flex items-center gap-3 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-8 py-4 rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-semibold">
            <i class="fas fa-plus-circle text-lg"></i>
            <span>Add New Exam</span>
        </a>
    </div>

    <!-- Stats Footer -->
    @if($exams->count() > 0)
    <div class="mt-8 bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <div class="p-4">
                <div class="text-2xl font-bold text-indigo-600">{{ $exams->count() }}</div>
                <div class="text-gray-600 text-sm">Total Exams</div>
            </div>
            <div class="p-4 border-l border-gray-100">
                <div class="text-2xl font-bold text-blue-600">{{ $exams->unique('course_id')->count() }}</div>
                <div class="text-gray-600 text-sm">Courses Covered</div>
            </div>
            <div class="p-4 border-l border-gray-100">
                <div class="text-2xl font-bold text-green-600">{{ $exams->unique('exam_year')->count() }}</div>
                <div class="text-gray-600 text-sm">Academic Years</div>
            </div>
            <div class="p-4 border-l border-gray-100">
                <div class="text-2xl font-bold text-purple-600">{{ $exams->unique('exam_term')->count() }}</div>
                <div class="text-gray-600 text-sm">Exam Terms</div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection