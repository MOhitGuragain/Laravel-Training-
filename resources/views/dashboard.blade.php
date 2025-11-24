<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .sidebar {
            transition: all 0.3s ease;
        }
        
        .sidebar-item {
            transition: all 0.2s ease;
        }
        
        .sidebar-item:hover {
            background-color: rgba(59, 130, 246, 0.1);
            border-left: 4px solid #3b82f6;
        }
        
        .sidebar-item.active {
            background-color: rgba(59, 130, 246, 0.15);
            border-left: 4px solid #3b82f6;
            color: #3b82f6;
        }
        
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .progress-bar {
            transition: width 1s ease-in-out;
        }
        
        .notification-dot {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Dashboard Container -->
    <div class="flex min-h-screen">
        <!-- Sidebar Menu -->
        <div class="sidebar bg-white w-64 shadow-md">
            <!-- Logo and Title -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white"></i>
                    </div>
                    <h1 class="text-xl font-bold text-gray-800 ml-3">EduManage</h1>
                </div>
                <p class="text-sm text-gray-500 mt-2">Student Management System</p>
            </div>
            
            <!-- User Profile -->
            <div class="p-4 border-b border-gray-200 flex items-center">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-blue-600"></i>
                </div>
                <div class="ml-3">
                    <h3 class="font-medium text-gray-800">John Smith</h3>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>
            </div>
            
            <!-- Navigation Menu -->
            <div class="py-4">
                <a href="#" class="sidebar-item active flex items-center py-3 px-6 text-gray-700">
                    <i class="fas fa-tachometer-alt w-5 mr-3"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="#" class="sidebar-item flex items-center py-3 px-6 text-gray-700">
                    <i class="fas fa-user-graduate w-5 mr-3"></i>
                    <span>Students</span>
                    <span class="ml-auto bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">42</span>
                </a>
                
                <a href="#" class="sidebar-item flex items-center py-3 px-6 text-gray-700">
                    <i class="fas fa-chalkboard-teacher w-5 mr-3"></i>
                    <span>Teachers</span>
                    <span class="ml-auto bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">12</span>
                </a>
                
                <a href="#" class="sidebar-item flex items-center py-3 px-6 text-gray-700">
                    <i class="fas fa-book w-5 mr-3"></i>
                    <span>Courses</span>
                </a>
                
                <a href="#" class="sidebar-item flex items-center py-3 px-6 text-gray-700">
                    <i class="fas fa-calendar-alt w-5 mr-3"></i>
                    <span>Schedule</span>
                </a>
                
                <a href="#" class="sidebar-item flex items-center py-3 px-6 text-gray-700">
                    <i class="fas fa-file-invoice-dollar w-5 mr-3"></i>
                    <span>Finance</span>
                </a>
                
                <a href="#" class="sidebar-item flex items-center py-3 px-6 text-gray-700">
                    <i class="fas fa-chart-bar w-5 mr-3"></i>
                    <span>Reports</span>
                </a>
                
                <a href="#" class="sidebar-item flex items-center py-3 px-6 text-gray-700">
                    <i class="fas fa-cog w-5 mr-3"></i>
                    <span>Settings</span>
                </a>
            </div>
            
            <!-- Logout Button -->
            <div class="absolute bottom-0 w-64 p-4 border-t border-gray-200">
                <a href="/logout" class="flex items-center py-2 px-4 text-red-600 rounded-lg hover:bg-red-50 transition">
                    <i class="fas fa-sign-out-alt w-5 mr-3"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <header class="bg-white shadow-sm py-4 px-6 flex justify-between items-center">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
                    <p class="text-sm text-gray-500">Welcome to your student management dashboard</p>
                </div>
                
                <div class="flex items-center space-x-4">
                    <!-- Notifications -->
                    <div class="relative">
                        <button class="p-2 rounded-full hover:bg-gray-100">
                            <i class="fas fa-bell text-gray-600"></i>
                            <span class="notification-dot absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                    </div>
                    
                    <!-- User Menu -->
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white font-medium">
                            JS
                        </div>
                        <span class="ml-2 text-gray-700 font-medium">John</span>
                    </div>
                </div>
            </header>
            
            <!-- Dashboard Content -->
            <main class="p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="stat-card text-white rounded-xl p-6 shadow-lg">
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
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm card">
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
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm card">
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
                                <i class="fas fa-plus mr-1"></i> 3 New
                            </span>
                            <span class="text-gray-500 text-sm ml-2">This semester</span>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm card">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-500">Attendance</p>
                                <h3 class="text-3xl font-bold text-gray-800 mt-2">94%</h3>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-lg">
                                <i class="fas fa-calendar-check text-purple-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span class="text-green-500 text-sm flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 1.5%
                            </span>
                            <span class="text-gray-500 text-sm ml-2">This week</span>
                        </div>
                    </div>
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
            </main>
        </div>
    </div>
</body>
</html>