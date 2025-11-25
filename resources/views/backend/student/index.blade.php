@extends ('backend.master')
@section('content')

<div class="p-6">
    <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden shadow-md">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-3 px-4 text-left">S.N.</th>
                <th class="py-3 px-4 text-left">Name</th>
                <th class="py-3 px-4 text-left">Address</th>
                <th class="py-3 px-4 text-left">Date of Birth</th>
                <th class="py-3 px-4 text-left">Course</th>
                <th class="py-3 px-4 text-left">Enrollment Date</th>
                <th class="py-3 px-4 text-left">Phone Number</th>
                <th class="py-3 px-4 text-left">Semester</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
            <tr class="border-b hover:bg-gray-100 transition">
                <td class="py-3 px-4">{{ $student->id }}</td>
                <td class="py-3 px-4">{{ $student->name }}</td>
                <td class="py-3 px-4">{{ $student->address }}</td>
                <td class="py-3 px-4">{{ $student->date_of_birth }}</td>
                <td class="py-3 px-4">{{ $student->course }}</td>
                <td class="py-3 px-4">{{ $student->enrollment_date }}</td>
                <td class="py-3 px-4">{{ $student->phone_number }}</td>
                <td class="py-3 px-4">{{ $student->semester }}</td>
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

@endsection
