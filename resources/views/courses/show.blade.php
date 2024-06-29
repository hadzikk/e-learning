@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-3xl font-semibold mb-4">{{ $course->title }}</h2>
            <p class="text-gray-600 mb-6">{{ $course->description }}</p>

            <h3 class="text-2xl font-semibold mb-4">Modules</h3>

            <div class="grid grid-cols-1 mb-4 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($course->modules as $module)
                    <div class="bg-gray-100 rounded-lg shadow-md p-4">
                        <h4 class="text-lg font-semibold mb-2">{{ $module->title }}</h4>
                        <p class="text-gray-600 hidden">{{ $module->content }}</p>
                        <a href="{{ route('modules.show', ['course' => $course->id, 'module' => $module->id]) }}" class="text-blue-500">View Modules</a>
                        @if ($module->getCompletedAttribute(auth()->user()))
                            <span class="text-green-500">Completed</span>
                        @else
                            <span class="text-red-500">Incompleted</span>
                        @endif
                    </div>
                @empty
                    <p class="text-gray-600">No modules found for this course.</p>
                @endforelse
            </div>
            <a href="{{route('dashboard')}}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Back</a>
        </div>
    </div>
@endsection
