@extends('backend.master')

@section('content')

<div class="max-w-4xl mx-auto bg-white shadow-[0_0_60px_rgba(0,0,0,0.15)] rounded-2xl p-10 border-[3px] border-yellow-600 relative overflow-hidden">

    <!-- Glow Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-yellow-50 via-white to-blue-50 opacity-60 pointer-events-none"></div>

    <!-- Watermark -->
    <div class="absolute inset-0 flex items-center justify-center opacity-[0.07] pointer-events-none">
        <img src="{{ asset('achslogo.webp') }}" class="w-1/3" alt="">
    </div>

    <!-- Header -->
    <div class="text-center pb-6 border-b-4 border-yellow-600 relative z-10">
        <img src="{{ asset('achslogo.webp') }}" class="mx-auto h-24 mb-3">

        <h1 class="text-5xl font-extrabold tracking-wide text-gray-900 drop-shadow">
            MARKSHEET
        </h1>

        <!-- Decorative Line -->
        <div class="mt-3 w-40 mx-auto h-1 bg-gradient-to-r from-yellow-500 to-blue-600 rounded-full"></div>

        <p class="mt-3 text-lg font-semibold text-gray-700 tracking-wider uppercase">
            Asian College of Higher Studies
        </p>
    </div>

    <!-- Student Information -->
    <div class="mt-10 relative z-10">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-2 h-8 bg-blue-600 rounded"></div>
            <h3 class="text-2xl font-semibold text-gray-800">Student Information</h3>
        </div>

        <div class="grid grid-cols-2 gap-8 bg-white/70 backdrop-blur-sm p-6 rounded-xl shadow">
            <div>
                <p class="text-sm text-gray-500">Student Code</p>
                <p class="font-semibold text-gray-800 text-lg">
                    {{ $result->student->student_code }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Student Name</p>
                <p class="font-semibold text-gray-800 text-lg">
                    {{ $result->student->first_name }} {{ $result->student->last_name }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Exam</p>
                <p class="font-semibold text-gray-800 text-lg">
                    {{ $result->exam->exam_name }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Subject</p>
                <p class="font-semibold text-gray-800 text-lg">
                    {{ $result->subject->subject_name }}
                </p>
            </div>
        </div>
    </div>

    <!-- Marks Section -->
    <div class="mt-12 relative z-10">
        <div class="flex items-center gap-2 mb-4">
            <div class="w-2 h-8 bg-green-600 rounded"></div>
            <h3 class="text-2xl font-semibold text-gray-800">Marks Details</h3>
        </div>

        <!-- Table -->
        <div class="rounded-xl overflow-hidden shadow-lg border">
            <table class="w-full text-center">
                <thead>
                    <tr class="bg-gradient-to-r from-blue-700 to-blue-900 text-white text-lg">
                        <th class="py-4 border-r">Full Marks</th>
                        <th class="py-4 border-r">Pass Marks</th>
                        <th class="py-4 border-r">Obtained Marks</th>
                        <th class="py-4 border-r">Grade</th>
                        <th class="py-4">Remarks</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-white hover:bg-gray-100 transition text-gray-800 text-lg">
                        <td class="py-4 border-r">{{ $result->full_marks }}</td>
                        <td class="py-4 border-r">{{ $result->pass_marks }}</td>
                        <td class="py-4 border-r font-bold text-black">{{ $result->obtained_marks }}</td>
                        <td class="py-4 border-r font-bold text-blue-700 text-xl">{{ $result->grade }}</td>
                        <td class="py-4">{{ $result->remarks }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>

    <!-- Footer -->
    <div class="mt-10 text-center text-gray-600 text-sm relative z-10 border-t pt-4">
        <p class="italic">This marksheet is system generated and does not require a physical signature.</p>
    </div>

    <!-- Buttons -->
    <div class="mt-8 flex justify-center gap-6 relative z-10">
        <a href="{{ route('results.index') }}"
            class="px-7 py-3 bg-gray-800 text-white rounded-xl shadow-md hover:bg-black transition">
            Back to List
        </a>

        <button onclick="window.print()"
            class="px-7 py-3 bg-blue-700 text-white rounded-xl shadow-md hover:bg-blue-900 transition">
            Print Marksheet
        </button>
    </div>

</div>

@endsection
