@extends('backend.master')
@section('content')

<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg border">
    <h2 class="text-3xl font-bold mb-8 text-blue-600">Add New Teacher</h2>

    <form action="{{ route('teachers.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="teacher_code" class="block text-sm font-medium text-gray-700">Teacher Code</label>
            <input type="text" name="teacher_code" id="teacher_code" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        </div>
        <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" name="first_name" id="first_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        </div>
        <div>
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        </div>
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="text" name="phone" id="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        </div>
        <div>
            <label for="qualification" class="block text-sm font-medium text-gray-700">Qualification</label>
            <input type="text" name="qualification" id="qualification" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        </div>
        <div>
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="address" id="address" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
        </div>
        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Teacher</button>
        </div>
    </form>
</div>

@endsection
