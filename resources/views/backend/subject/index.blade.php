@extends('backend.master')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="mb-8 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-lg mb-4">
                <i class="fas fa-book text-white text-2xl"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Subject List</h2>
            <p class="text-gray-600">Manage all academic subjects and their details</p>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <!-- Table Header -->
                    <thead class="bg-gradient-to-r from-blue-600 via-blue-500 to-blue-600">
                        <tr>
                            <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-purple-500">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-hashtag text-purple-200"></i>
                                    <span>ID</span>
                                </div>
                            </th>
                            <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-purple-500">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-bookmark text-purple-200"></i>
                                    <span>Subject Name</span>
                                </div>
                            </th>
                            <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-purple-500">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-code text-purple-200"></i>
                                    <span>Code</span>
                                </div>
                            </th>
                            <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-purple-500">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-clock text-purple-200"></i>
                                    <span>Credit Hours</span>
                                </div>
                            </th>
                            <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-purple-500">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-graduation-cap text-purple-200"></i>
                                    <span>Course</span>
                                </div>
                            </th>
                            <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-purple-500">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-chalkboard-teacher text-purple-200"></i>
                                    <span>Teacher</span>
                                </div>
                            </th>
                            <th class="py-5 px-6 text-left font-semibold text-white text-sm uppercase tracking-wider border-b border-purple-500">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-cogs text-purple-200"></i>
                                    <span>Actions</span>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach($subjects as $subject)
                        <tr class="group hover:bg-gradient-to-r hover:from-purple-50 hover:to-indigo-50 transition-all duration-300 transform hover:scale-[1.002]">
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-purple-100 text-purple-600 rounded-lg font-medium text-sm">
                                    {{ $subject->id }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center shadow-sm">
                                        <i class="fas fa-book-open text-white text-sm"></i>
                                    </div>
                                    <span class="font-semibold text-gray-800">{{ $subject->subject_name }}</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-medium border border-purple-200">
                                    <i class="fas fa-hashtag mr-1 text-xs"></i>
                                    {{ $subject->subject_code }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center space-x-3">
                                    <div class="flex space-x-1">
                                        @for ($i = 0; $i < $subject->credit_hours; $i++)
                                        <div class="w-2 h-6 bg-gradient-to-b from-green-500 to-green-600 rounded-full"></div>
                                        @endfor
                                    </div>
                                    <span class="font-medium text-gray-700">{{ $subject->credit_hours }} credit{{ $subject->credit_hours > 1 ? 's' : '' }}</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                                    <i class="fas fa-graduation-cap mr-1 text-xs"></i>
                                    {{ $subject->course->course_name }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                @if($subject->teacher)
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full flex items-center justify-center shadow-sm">
                                        <i class="fas fa-user text-white text-xs"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">
                                        {{ $subject->teacher->first_name ?? '' }} {{ $subject->teacher->last_name ?? '' }}
                                    </span>
                                </div>
                                @else
                                <span class="text-sm text-gray-400 italic">Not assigned</span>
                                @endif
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex gap-3">
                                    <a href="{{ route('subjects.edit', $subject->id) }}"
                                       class="px-4 py-2 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-xl hover:from-yellow-600 hover:to-yellow-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center gap-2 group-hover:transform group-hover:scale-105">
                                        <i class="fas fa-edit text-sm"></i> 
                                        <span>Edit</span>
                                    </a>

                                    <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST"
                                          onsubmit="return confirm('Delete this subject?')" class="inline-block">
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Add New Subject Button -->
        <div class="mt-6 text-center">
            <a href="{{ route('subjects.create') }}" 
               class="inline-flex items-center gap-3 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-8 py-4 rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-semibold">
                <i class="fas fa-plus-circle text-lg"></i>
                <span>Add New Subject</span>
            </a>
        </div>

        <!-- Stats Footer -->
        @if($subjects->count() > 0)
        <div class="mt-8 bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                <div class="p-4">
                    <div class="text-2xl font-bold text-purple-600">{{ $subjects->count() }}</div>
                    <div class="text-gray-600 text-sm">Total Subjects</div>
                </div>
                <div class="p-4 border-l border-gray-100">
                    <div class="text-2xl font-bold text-blue-600">{{ $subjects->unique('course_id')->count() }}</div>
                    <div class="text-gray-600 text-sm">Courses Covered</div>
                </div>
                <div class="p-4 border-l border-gray-100">
                    @php
                        $totalCredits = $subjects->sum('credit_hours');
                        $avgCredits = $subjects->avg('credit_hours');
                    @endphp
                    <div class="text-2xl font-bold text-green-600">{{ $totalCredits }}</div>
                    <div class="text-gray-600 text-sm">Total Credit Hours</div>
                </div>
                <div class="p-4 border-l border-gray-100">
                    <div class="text-2xl font-bold text-orange-600">{{ number_format($avgCredits, 1) }}</div>
                    <div class="text-gray-600 text-sm">Avg Credits/Subject</div>
                </div>
            </div>
        </div>
        @endif
    </div>
</body>
@endsection