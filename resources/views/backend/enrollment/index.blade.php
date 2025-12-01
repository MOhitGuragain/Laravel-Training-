@extends('backend.master')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="mb-8 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl shadow-xl mb-4">
                <i class="fas fa-user-graduate text-white text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Enrollments</h1>
            <p class="text-gray-600">Track and manage student course enrollments</p>
            
            <!-- Stats Badge -->
            <div class="inline-flex items-center mt-4 px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full shadow-lg">
                <i class="fas fa-users mr-2"></i>
                <span class="font-semibold">{{ $enrollments->count() }} Enrollments</span>
            </div>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <!-- Card Header -->
            <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-blue-600 to-blue-700">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-white flex items-center">
                        <i class="fas fa-list-check mr-2"></i>
                        Enrollments List
                    </h3>
                    <div class="text-blue-100 text-sm">
                        <i class="fas fa-sort mr-1"></i>
                        Latest First
                    </div>
                </div>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <!-- Table Header -->
                    <thead class="bg-gradient-to-r from-blue-50 to-indigo-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-hashtag text-blue-500"></i>
                                    <span>#</span>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-id-card text-blue-500"></i>
                                    <span>Student</span>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-graduation-cap text-blue-500"></i>
                                    <span>Course</span>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-calendar-day text-blue-500"></i>
                                    <span>Enrollment Date</span>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-cogs text-blue-500"></i>
                                    <span>Actions</span>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse($enrollments as $enrollment)
                        <tr class="group hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-700 rounded-lg font-bold text-sm">
                                    {{ $loop->iteration }}
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-sm">
                                        <i class="fas fa-user text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ $enrollment->student->student_code }}</div>
                                        <div class="text-xs text-gray-500">Student ID</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-sm">
                                        <i class="fas fa-book text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ $enrollment->course->course_name }}</div>
                                        <div class="text-xs text-gray-500">Course</div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-sm">
                                        <i class="fas fa-calendar-alt text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ $enrollment->enrollment_year }}</div>
                                        <div class="text-xs text-gray-500">Enrolled Year</div>
                                    </div>
                                </div>
                            </td>

                            <!-- Action Buttons -->
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('enrollments.edit', $enrollment->id) }}"
                                       class="px-4 py-2 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-xl hover:from-yellow-600 hover:to-yellow-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center gap-2 group-hover:transform group-hover:scale-105">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>

                                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this enrollment?');" 
                                          class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="px-4 py-2 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl hover:from-red-600 hover:to-red-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center gap-2 group-hover:transform group-hover:scale-105">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center justify-center text-gray-400">
                                    <div class="w-20 h-20 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center mb-4">
                                        <i class="fas fa-user-graduate text-3xl text-gray-300"></i>
                                    </div>
                                    <p class="text-xl font-medium text-gray-500 mb-2">No enrollments found</p>
                                    <p class="text-gray-400 mb-4">Get started by adding a new enrollment</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Footer -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gradient-to-r from-gray-50 to-gray-100">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="text-sm text-gray-700 mb-2 md:mb-0">
                        Showing <span class="font-medium">{{ $enrollments->count() }}</span> enrollments
                    </div>
                    <div class="text-sm font-semibold text-gray-700">
                        Total: <span class="text-blue-600">{{ $enrollments->count() }}</span> records
                    </div>
                </div>
            </div>
        </div>

        <!-- Add New Enrollment Button -->
        <div class="mt-6 text-center">
            <a href="{{ route('enrollments.create') }}" 
               class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-8 py-3 rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-semibold">
                <i class="fas fa-user-plus text-lg"></i>
                <span>Add New Enrollment</span>
            </a>
        </div>

        <!-- Stats Cards -->
        @if($enrollments->count() > 0)
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl shadow-lg border border-blue-100 p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="flex items-center">
                    <div class="p-3 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md mr-4">
                        <i class="fas fa-user-graduate text-lg"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Enrollments</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $enrollments->count() }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl shadow-lg border border-purple-100 p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="flex items-center">
                    <div class="p-3 rounded-xl bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-md mr-4">
                        <i class="fas fa-graduation-cap text-lg"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Unique Courses</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $enrollments->unique('course_id')->count() }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl shadow-lg border border-green-100 p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="flex items-center">
                    <div class="p-3 rounded-xl bg-gradient-to-r from-green-500 to-green-600 text-white shadow-md mr-4">
                        <i class="fas fa-users text-lg"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Unique Students</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $enrollments->unique('student_id')->count() }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection