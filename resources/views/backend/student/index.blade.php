@extends ('backend.master')
@section('content')

<div class="p-6">
    <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden shadow-md">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Student Code</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">First Name</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Last Name</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">email</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Phone Number</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Date of Birth</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Address</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Course</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Enrollment Date</th> 
                <th class="py-3 px-4 border-b border-gray-300 text-left">Semester</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
            <tr class="border-b hover:bg-gray-100 transition">
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->student_code }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->first_name }}</td>
                <td class="py-3 px-4 border-b border_gray-300">{{ $student->last_name }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->email }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->phone_number }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->date_of_birth }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->address }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->course }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->enrollment_date }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $student->semester }}</td>  
            </tr>
            @endforeach
        </tbody>

        <tfoot class="bg-gray-100">
            <tr>
                <td class="py-3 px-4 font-semibold" colspan="4">Total: {{ count($students) }} students</td>
            </tr>
        </tfoot>
    </table>
</div>
<a href="{{ route('students.create') }}" 
   class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 mt-4 inline-block">
    Add New Student
</a>

@endsection
