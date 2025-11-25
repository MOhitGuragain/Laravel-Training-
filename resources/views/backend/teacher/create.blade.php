@extends('backend.master')
@section('content')

<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg border">
    <h2 class="text-3xl font-bold mb-8 text-blue-600">Add New Teacher</h2>

    <form action="{{ route('teachers.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input type="text" name="name" id="name"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                required>
        </div>

        <div>
            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
            <input type="text" name="address" id="address"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                required>
        </div>

        <div>
            <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                required>
        </div>

        <div>
            <label for="qualification" class="block text-sm font-medium text-gray-700 mb-1">Qualification</label>
            <select name="qualification" id="qualification"
                class="w-full border border-gray-300 rounded-lg p-3 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                required>
                <option value="Bachelors">Bachelors</option>
                <option value="Masters">Masters</option>
                <option value="PhD">PhD</option>
            </select>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" id="email"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                required>
        </div>

        <div class="pt-4">
            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 shadow-md transition">
                Add Teacher
            </button>
        </div>

    </form>
</div>

@endsection
