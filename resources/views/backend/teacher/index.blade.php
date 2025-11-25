@extends('backend.master')
@section('content')

<div class="p-6">
    <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden shadow-md">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-3 px-4 text-left">S.N.</th>
                <th class="py-3 px-4 text-left">Name</th>
                <th class="py-3 px-4 text-left">Address</th>
                <th class="py-3 px-4 text-left">Phone Number</th>
                <th class="py-3 px-4 text-left">Qualification</th>
                <th class="py-3 px-4 text-left">Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($teachers as $teacher)
            <tr class="border-b hover:bg-gray-100 transition">
                <td class="py-3 px-4">{{ $teacher->id }}</td>
                <td class="py-3 px-4">{{ $teacher->name }}</td>
                <td class="py-3 px-4">{{ $teacher->address }}</td>
                <td class="py-3 px-4">{{ $teacher->phone_number }}</td>
                <td class="py-3 px-4">{{ $teacher->qualification }}</td>
                <td class="py-3 px-4">{{ $teacher->email }}</td>
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

@endsection
