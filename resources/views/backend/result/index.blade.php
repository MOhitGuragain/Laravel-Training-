@extends('backend.master')
@section('content')
<div class="p-6 max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="mb-8 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl shadow-lg mb-4">
            <i class="fas fa-chart-line text-white text-2xl"></i>
        </div>
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Results List</h2>
        <p class="text-gray-600">Manage and track student academic performance</p>
    </div>

    <!-- Main Content Card -->
    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
        <!-- Table Container -->
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <!-- Table Header -->
                <thead class="bg-gradient-to-r from-emerald-600 via-emerald-500 to-emerald-600">
                    <tr>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-hashtag text-emerald-200"></i>
                                <span>#</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-user-graduate text-emerald-200"></i>
                                <span>Student</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-clipboard-list text-emerald-200"></i>
                                <span>Exam</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-book text-emerald-200"></i>
                                <span>Subject</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-trophy text-emerald-200"></i>
                                <span>Obtained</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-chart-bar text-emerald-200"></i>
                                <span>Full Marks</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-bullseye text-emerald-200"></i>
                                <span>Pass Marks</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-star text-emerald-200"></i>
                                <span>Grade</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-comment text-emerald-200"></i>
                                <span>Remarks</span>
                            </div>
                        </th>
                        <th class="py-5 px-4 text-center font-semibold text-white text-sm uppercase tracking-wider border-b border-emerald-500">
                            <div class="flex items-center justify-center space-x-2">
                                <i class="fas fa-cogs text-emerald-200"></i>
                                <span>Actions</span>
                            </div>
                        </th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">
                    @forelse($results as $result)
                    <tr class="group hover:bg-gradient-to-r hover:from-emerald-50 hover:to-green-50 transition-all duration-300 text-center">
                        <td class="py-4 px-4">
                            <span class="inline-flex items-center justify-center w-8 h-8 bg-emerald-100 text-emerald-600 rounded-lg font-medium text-sm">
                                {{ $loop->iteration }}
                            </span>
                        </td>

                        <td class="py-4 px-4">
                            <div class="flex flex-col items-center space-y-1">
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-sm">
                                    <i class="fas fa-user text-white text-xs"></i>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">{{ $result->student->student_code }}</span>
                            </div>
                        </td>

                        <td class="py-4 px-4">
                            <span class="inline-flex items-center px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium border border-indigo-200">
                                <i class="fas fa-file-alt mr-1 text-xs"></i>
                                {{ $result->exam->exam_name }}
                            </span>
                        </td>

                        <td class="py-4 px-4">
                            <span class="inline-flex items-center px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">
                                <i class="fas fa-book-open mr-1 text-xs"></i>
                                {{ $result->subject->subject_name }}
                            </span>
                        </td>

                        <td class="py-4 px-4">
                            <span class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 text-white rounded-xl font-bold text-sm shadow-sm">
                                {{ $result->obtained_marks }}
                            </span>
                        </td>

                        <td class="py-4 px-4">
                            <span class="text-sm font-medium text-gray-700">{{ $result->full_marks }}</span>
                        </td>

                        <td class="py-4 px-4">
                            <span class="inline-flex items-center px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm font-medium">
                                {{ $result->pass_marks }}
                            </span>
                        </td>

                        <td class="py-4 px-4">
                            @php
                                $gradeColor = match($result->grade) {
                                    'A' => 'from-green-500 to-green-600',
                                    'B' => 'from-blue-500 to-blue-600',
                                    'C' => 'from-yellow-500 to-yellow-600',
                                    'D' => 'from-orange-500 to-orange-600',
                                    'F' => 'from-red-500 to-red-600',
                                    default => 'from-gray-500 to-gray-600'
                                };
                            @endphp
                            <span class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br {{ $gradeColor }} text-white rounded-xl font-bold text-lg shadow-sm">
                                {{ $result->grade }}
                            </span>
                        </td>

                        <td class="py-4 px-4">
                            @php
                                $remarksColor = match(strtolower($result->remarks)) {
                                    'excellent', 'outstanding' => 'text-green-600 bg-green-100 border-green-200',
                                    'good', 'very good' => 'text-blue-600 bg-blue-100 border-blue-200',
                                    'average', 'satisfactory' => 'text-yellow-600 bg-yellow-100 border-yellow-200',
                                    'poor', 'fail' => 'text-red-600 bg-red-100 border-red-200',
                                    default => 'text-gray-600 bg-gray-100 border-gray-200'
                                };
                            @endphp
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium border {{ $remarksColor }}">
                                {{ $result->remarks }}
                            </span>
                        </td>

                        <!-- Action Buttons -->
                        <td class="py-4 px-4">
                            <a href="{{ route('results.show', $result->id) }}" 
                            class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 shadow transition">
                              View
                        </a>
                            <div class="flex gap-2 justify-center">
                                <a href="{{ route('results.edit', $result->id) }}"
                                   class="px-4 py-2 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-xl hover:from-yellow-600 hover:to-yellow-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center gap-2 group-hover:transform group-hover:scale-105">
                                    <i class="fas fa-edit text-sm"></i> 
                                    <span>Edit</span>
                                </a>

                                <form action="{{ route('results.destroy', $result->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this result?')"
                                      class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-4 py-2 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl hover:from-red-600 hover:to-red-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center gap-2 group-hover:transform group-hover:scale-105">
                                        <i class="fas fa-trash text-sm"></i> 
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="py-12 px-6 text-center">
                            <div class="flex flex-col items-center justify-center text-gray-400">
                                <i class="fas fa-chart-line text-5xl mb-4 opacity-50"></i>
                                <p class="text-xl font-medium text-gray-500 mb-2">No results found.</p>
                                <p class="text-gray-400">Get started by adding student results</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add New Result Button -->
    <div class="mt-6 text-center">
        <a href="{{ route('results.create') }}" 
           class="inline-flex items-center gap-3 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-8 py-4 rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-semibold">
            <i class="fas fa-plus-circle text-lg"></i>
            <span>Add New Result</span>
        </a>
    </div>

    <!-- Stats Footer -->
    @if($results->count() > 0)
    <div class="mt-8 bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <div class="p-4">
                <div class="text-2xl font-bold text-emerald-600">{{ $results->count() }}</div>
                <div class="text-gray-600 text-sm">Total Results</div>
            </div>
            <div class="p-4 border-l border-gray-100">
                <div class="text-2xl font-bold text-blue-600">{{ $results->unique('student_id')->count() }}</div>
                <div class="text-gray-600 text-sm">Students</div>
            </div>
            <div class="p-4 border-l border-gray-100">
                <div class="text-2xl font-bold text-indigo-600">{{ $results->unique('exam_id')->count() }}</div>
                <div class="text-gray-600 text-sm">Exams</div>
            </div>
            <div class="p-4 border-l border-gray-100">
                <div class="text-2xl font-bold text-purple-600">{{ $results->unique('subject_id')->count() }}</div>
                <div class="text-gray-600 text-sm">Subjects</div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection