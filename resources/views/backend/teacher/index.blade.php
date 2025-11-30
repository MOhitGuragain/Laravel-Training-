@extends('backend.master')
@section('content')

<div class="p-6">
    <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden shadow-md">
        <thead class="bg-blue-600 text-white">
            <tr>
               <th class="py-3 px-4 border-b border-gray-300 text-left">Teacher Code</th>
               <th class="py-3 px-4 border-b border-gray-300 text-left">First Name</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Last Name</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Email</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Phone Number</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Qualification</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Address</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($teachers as $teacher)
            <tr class="border-b hover:bg-gray-100 transition">
                <td class="py-3 px-4 border-b border-gray-300">{{ $teacher->teacher_code }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $teacher->first_name }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $teacher->last_name }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $teacher->email }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $teacher->phone_number }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $teacher->qualification }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $teacher->address }}</td>   
            </tr>
            @endforeach
        </tbody>

        <tfoot class="bg-gray-100">
            <tr>
                <td class="py-3 px-4 font-semibold" colspan="3">Total: {{ count($teachers) }} teachers</td>
            </tr>
        </tfoot>
    </table>
</div>
<a href="{{ route('teachers.create') }}" 
   class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 mt-4 inline-block">
    Add New Teacher
</a>
@endsection
