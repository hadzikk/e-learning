<x-app>
        <div class="w-full h-screen bg-white">
            @foreach ($user->courses as $course)
                <ul>
                    <li>{{ $course->title }}</li>
                    <ul>
                        @foreach ($course->modules as $modul)
                            <li>{{ $modul->title }}</li>
                                @if ($module->getCompletedAttribute($user))
                            <span class="text-green-500">Complete</span>
                            @else
                                <span class="text-red-500">Incomplete</span>
                            @endif
                        @endforeach
                    </ul>
                </ul>
            @endforeach
        </div>
    <x-footer></x-footer>
</x-app>