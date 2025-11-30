@extends ('backend.master')
@section('content')
      <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <a href="{{ route('students.index') }}" class="stat-card text-white rounded-xl p-6 shadow-lg block">
    <div class="flex justify-between items-start">
        <div>
            <p class="text-blue-100">Total Students</p>
            <h3 class="text-3xl font-bold mt-2">1,248</h3>
        </div>
        <div class="bg-white bg-opacity-20 p-3 rounded-lg">
            <i class="fas fa-user-graduate text-xl"></i>
        </div>
    </div>

    <div class="mt-4 flex items-center">
        <span class="text-green-300 text-sm flex items-center">
            <i class="fas fa-arrow-up mr-1"></i> 5.2%
        </span>
        <span class="text-blue-100 text-sm ml-2">Since last month</span>
    </div>
</a>
    
                    <a href ="{{ route('teachers.index') }}" class="bg-white rounded-xl p-6 shadow-sm card">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-500">Total Teachers</p>
                                <h3 class="text-3xl font-bold text-gray-800 mt-2">84</h3>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <i class="fas fa-chalkboard-teacher text-blue-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-green-500 text-sm flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 2.1%
                            </span>
                            <span class="text-gray-500 text-sm ml-2">Since last month</span>
                        </div>
                    </a>
                    
                    <a href="{{ route('courses.index') }}" class="bg-white rounded-xl p-6 shadow-sm card">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-500">Courses</p>
                                <h3 class="text-3xl font-bold text-gray-800 mt-2">32</h3>
                            </div>
                            <div class="bg-green-100 p-3 rounded-lg">
                                <i class="fas fa-book text-green-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-green-500 text-sm flex items-center">
                                <i class="fas fa-plus mr-1"></i> 1 New
                            </span>
                        </div>
                    </a>
                    
                    <a href="{{ route('subjects.index') }}" class="bg-white rounded-xl p-6 shadow-sm card">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-500">Subjects</p>
                                <h3 class="text-3xl font-bold text-gray-800 mt-2">5</h3>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-lg">
                                <i class="fas fa-calendar-check text-purple-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-green-500 text-sm flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 1
                            </span>
                            <span class="text-gray-500 text-sm ml-2">This Semester</span>
                        </div>
                    </a>
                </div>
                
                <!-- Charts and Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Student Progress -->
                    <div class="lg:col-span-2 bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold text-gray-800">Student Progress</h3>
                            <select class="text-sm border border-gray-300 rounded-lg px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>This Week</option>
                                <option>This Month</option>
                                <option>This Semester</option>
                            </select>
                        </div>
                        
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Mathematics</span>
                                    <span>85%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 85%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Science</span>
                                    <span>72%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full progress-bar" style="width: 72%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>English</span>
                                    <span>90%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full progress-bar" style="width: 90%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>History</span>
                                    <span>68%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full progress-bar" style="width: 68%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-800 mb-6">Recent Activity</h3>
                        
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                    <i class="fas fa-user-plus text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">New student enrolled</p>
                                    <p class="text-xs text-gray-500">Sarah Johnson joined Grade 10</p>
                                    <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="bg-green-100 p-2 rounded-lg mr-3">
                                    <i class="fas fa-book text-green-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">New course added</p>
                                    <p class="text-xs text-gray-500">Computer Science added to curriculum</p>
                                    <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="bg-purple-100 p-2 rounded-lg mr-3">
                                    <i class="fas fa-calendar-alt text-purple-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Parent-teacher meeting</p>
                                    <p class="text-xs text-gray-500">Scheduled for next Friday</p>
                                    <p class="text-xs text-gray-400 mt-1">Yesterday</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="bg-yellow-100 p-2 rounded-lg mr-3">
                                    <i class="fas fa-chart-line text-yellow-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Monthly report generated</p>
                                    <p class="text-xs text-gray-500">Student performance report for October</p>
                                    <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Upcoming Events -->
                <div class="mt-8 bg-white rounded-xl p-6 shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Upcoming Events</h3>
                        <button class="text-sm text-blue-600 font-medium flex items-center">
                            View All <i class="fas fa-chevron-right ml-1 text-xs"></i>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-300 transition">
                            <div class="flex items-start">
                                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">
                                    Nov 15
                                </div>
                                <div class="ml-3">
                                    <h4 class="font-medium text-gray-800">Science Fair</h4>
                                    <p class="text-sm text-gray-500 mt-1">Annual science competition</p>
                                    <p class="text-xs text-gray-400 mt-2 flex items-center">
                                        <i class="far fa-clock mr-1"></i> 10:00 AM - 3:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-300 transition">
                            <div class="flex items-start">
                                <div class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">
                                    Nov 20
                                </div>
                                <div class="ml-3">
                                    <h4 class="font-medium text-gray-800">Sports Day</h4>
                                    <p class="text-sm text-gray-500 mt-1">Inter-class sports competition</p>
                                    <p class="text-xs text-gray-400 mt-2 flex items-center">
                                        <i class="far fa-clock mr-1"></i> 9:00 AM - 4:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-300 transition">
                            <div class="flex items-start">
                                <div class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">
                                    Nov 25
                                </div>
                                <div class="ml-3">
                                    <h4 class="font-medium text-gray-800">Parent-Teacher Meeting</h4>
                                    <p class="text-sm text-gray-500 mt-1">Quarterly review meeting</p>
                                    <p class="text-xs text-gray-400 mt-2 flex items-center">
                                        <i class="far fa-clock mr-1"></i> 1:00 PM - 5:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection