@extends('backend.master')
@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>

<body class="bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
    <div class="p-6 max-w-7xl mx-auto">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary-600 to-blue-500 rounded-2xl blur opacity-30"></div>
                        <div class="relative bg-gradient-to-r from-primary-600 to-blue-500 p-4 rounded-2xl shadow-xl mr-4">
                            <i class="fas fa-chalkboard-teacher text-white text-2xl"></i>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Teachers Management</h1>
                        <p class="text-gray-600 mt-1">Manage all teacher information in one place</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-gradient-to-r from-primary-500 to-blue-500 text-white shadow-md hover:shadow-lg transition-all duration-300">
                        <i class="fas fa-users mr-2"></i>
                        {{ $teachers->count() }} Teachers
                    </span>
                </div>
            </div>
        </div>

        <!-- Success Alert -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 rounded-xl shadow-sm flex items-center animate-fade-in">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-500 text-xl mr-3"></i>
                </div>
                <div>
                    <p class="font-medium text-green-800">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <!-- Controls Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 mb-6 transform transition-all duration-300 hover:shadow-2xl">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <!-- Search Form -->
                <form method="GET" action="{{ route('teachers.index') }}" class="flex-1 w-full md:w-auto">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input 
                            type="text" 
                            name="search" 
                            value="{{ $search ?? '' }}" 
                            placeholder="Search by name, code, or email" 
                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300 shadow-sm hover:shadow focus:shadow-lg"
                        >
                    </div>
                </form>

                <!-- Add Teacher Button -->
                <a href="{{ route('teachers.create') }}" 
                   class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-6 py-3 rounded-xl hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center font-medium shadow-lg">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Add New Teacher
                </a>
            </div>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transform transition-all duration-300 hover:shadow-2xl">
            <!-- Table Header -->
            <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-primary-600 via-primary-500 to-blue-500">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-white flex items-center">
                        <i class="fas fa-list mr-2"></i>
                        Teachers List
                    </h3>
                    <div class="text-primary-100 text-sm">
                        <i class="fas fa-filter mr-1"></i>
                        Sorted by ID
                    </div>
                </div>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center group cursor-pointer">
                                    <i class="fas fa-hashtag mr-2 text-gray-400"></i>
                                    <span>ID</span>
                                    <i class="fas fa-sort ml-2 text-gray-400 group-hover:text-primary-500 transition"></i>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-id-card mr-2 text-gray-400"></i>
                                    Teacher Code
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-user-tie mr-2 text-gray-400"></i>
                                    Name
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-address-book mr-2 text-gray-400"></i>
                                    Contact
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-graduation-cap mr-2 text-gray-400"></i>
                                    Qualification
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>
                                    Address
                                </div>
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-cogs mr-2 text-gray-400"></i>
                                    Actions
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse($teachers as $teacher)
                        <tr class="group hover:bg-gradient-to-r hover:from-primary-50 hover:to-blue-50 transition-all duration-300">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center justify-center w-10 h-10 bg-gradient-to-br from-primary-100 to-blue-100 text-primary-700 rounded-xl font-bold text-sm shadow-sm group-hover:scale-110 transition-transform">
                                    #{{ $teacher->id }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-3 py-1.5 bg-gradient-to-r from-primary-100 to-blue-100 text-primary-700 rounded-full text-sm font-medium border border-primary-200 shadow-sm group-hover:shadow transition">
                                    <i class="fas fa-hashtag mr-1 text-xs"></i>
                                    {{ $teacher->teacher_code }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-blue-500 rounded-xl flex items-center justify-center shadow-sm group-hover:shadow-md transition">
                                        <i class="fas fa-user-tie text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-gray-900">{{ $teacher->first_name }} {{ $teacher->last_name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="space-y-1">
                                    <div class="text-sm text-gray-900 flex items-center">
                                        <i class="fas fa-envelope mr-2 text-primary-500"></i>
                                        {{ $teacher->email }}
                                    </div>
                                    <div class="text-sm text-gray-500 flex items-center">
                                        <i class="fas fa-phone mr-2 text-green-500"></i>
                                        {{ $teacher->phone }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-3 py-1 bg-gradient-to-r from-purple-100 to-purple-50 text-purple-700 rounded-full text-sm font-medium border border-purple-200">
                                    <i class="fas fa-graduation-cap mr-1 text-xs"></i>
                                    {{ $teacher->qualification }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700 max-w-xs">
                                <div class="truncate group-hover:whitespace-normal group-hover:overflow-visible transition-all" title="{{ $teacher->address }}">
                                    <i class="fas fa-home mr-2 text-gray-400"></i>
                                    {{ $teacher->address }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <a href="{{ route('teachers.edit', $teacher->id) }}" 
                                       class="px-4 py-2 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white rounded-xl hover:from-yellow-600 hover:to-yellow-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center gap-2 group-hover:transform group-hover:scale-105">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this teacher?')" class="inline-block">
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
                            <td colspan="7" class="px-6 py-16 text-center">
                                <div class="flex flex-col items-center justify-center text-gray-400">
                                    <div class="w-20 h-20 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center shadow-inner mb-4">
                                        <i class="fas fa-chalkboard-teacher text-3xl text-gray-300"></i>
                                    </div>
                                    <p class="text-xl font-medium text-gray-500 mb-2">No teachers found</p>
                                    <p class="text-gray-400 mb-4">Try adjusting your search or add a new teacher</p>
                                    <a href="{{ route('teachers.create') }}" 
                                       class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-6 py-2 rounded-xl hover:shadow-lg transition-all duration-300 flex items-center font-medium">
                                        <i class="fas fa-plus-circle mr-2"></i>
                                        Add First Teacher
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gradient-to-r from-gray-50 to-gray-100">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="text-sm text-gray-700 mb-2 md:mb-0">
                        Showing <span class="font-medium">{{ $teachers->firstItem() ?? 0 }}</span> to 
                        <span class="font-medium">{{ $teachers->lastItem() ?? 0 }}</span> of 
                        <span class="font-medium">{{ $teachers->total() }}</span> teachers
                    </div>
                    <div class="text-sm font-semibold text-gray-700">
                        Total: <span class="text-primary-600">{{ $teachers->count() }}</span> teachers
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                {{ $teachers->withQueryString()->links() }}
            </div>
        </div>

        <!-- Quick Stats -->
        @if($teachers->count() > 0)
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl shadow-lg border border-blue-100 p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="flex items-center">
                    <div class="p-3 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md mr-4">
                        <i class="fas fa-users text-lg"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Teachers</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $teachers->total() }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl shadow-lg border border-green-100 p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="flex items-center">
                    <div class="p-3 rounded-xl bg-gradient-to-r from-green-500 to-green-600 text-white shadow-md mr-4">
                        <i class="fas fa-graduation-cap text-lg"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Qualifications</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $teachers->unique('qualification')->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl shadow-lg border border-purple-100 p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="flex items-center">
                    <div class="p-3 rounded-xl bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-md mr-4">
                        <i class="fas fa-search text-lg"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Search Status</p>
                        <p class="text-2xl font-bold text-gray-800">{{ $search ? 'Filtered' : 'All' }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</body>
@endsection