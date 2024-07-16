@extends('layouts.app')

@section('content')

<div class="w-full">
    <div class="w-full flex justify-center items-center py-5 my-5">
        <div>
            <div class="w-72 h-72 bg-white rounded-full shadow">
                <img src="" alt="" class="w-full h-full rounded-full">
            </div>
            <p class="text-white text-center text-2xl font-bold py-3">{{ $user->name }}</p>
        </div>
    </div>

    @foreach ($user->courses as $course)
        <div class="w-full flex gap-4">
            <div class="bg-white w-96 h-60 shadow rounded">

            </div>
        </div>
    @endforeach
    

    <div class="bg-white shadow-md rounded-lg p-6 mb-4">
        <h2 class="text-2xl font-semibold mb-4">Courses</h2>
        <ul>
            @foreach ($user->courses as $course)
                <li class="mb-2">
                    <h3 class="text-xl font-semibold">{{ $course->title }}</h3>
                    @php
                        $averageScore = $course->getAverageScoreForUser($user);
                    @endphp
                    @if ($averageScore >= 60) {{-- Assuming 60 is the passing grade --}}
                        <span class="text-green-500">Lulus</span>
                    @else
                        <span class="text-red-500">Belum Lulus</span>
                    @endif
                    <span class="text-blue-500">Rata-rata Score: {{ number_format($averageScore, 2) }}%</span>
                    <ul class="ml-4 list-disc">
                        @foreach ($course->modules as $module)
                            <li class="mb-1">
                                <span class="font-semibold">{{ $module->title }}</span>
                                @if ($module->getCompletedAttribute($user))
                                    <span class="text-green-500">Complete</span>
                                @else
                                    <span class="text-red-500">Incomplete</span>
                                @endif
                                @php
                                    $totalQuizzes = $module->quizzes->count();
                                    $correctAnswers = $user->quizResults->whereIn('quiz_id', $module->quizzes->pluck('id'))->where('is_correct', true)->count();
                                    $moduleScore = $totalQuizzes > 0 ? ($correctAnswers / $totalQuizzes) * 100 : 0;
                                @endphp
                                <span class="text-blue-500">Score: {{ number_format($moduleScore, 2) }}%</span>
                                <ul class="ml-4 list-disc">
                                    @foreach ($module->quizzes as $quiz)
                                        <li>
                                            <span class="font-semibold">{{ $quiz->question }}</span>
                                            @if ($quiz->getCompletedAttribute($user))
                                                <span class="text-green-500">Complete</span>
                                            @else
                                                <span class="text-red-500">Incomplete</span>
                                            @endif
                                            @php
                                                $result = $user->quizResults->where('quiz_id', $quiz->id)->first();
                                            @endphp
                                            @if ($result)
                                                - <span class="{{ $result->is_correct ? 'text-green-500' : 'text-red-500' }}">{{ $result->is_correct ? 'Correct' : 'Incorrect' }}</span>
                                            @else
                                                - <span class="text-gray-500">Not Answered</span>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ url('home') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Back</a>
</div>
@endsection
