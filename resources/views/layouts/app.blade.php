<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('icons/css/all.min.css') }}">
    @yield('styles')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.2/classic/ckeditor.js"></script>
</head>
<body class="bg-neutral-950 relative">
    {{-- <header class=" shadow w-auto bg-black h-32">
        <div class="container h-full   justify-items-center text-center mx-auto pb-4 px-6 flex justify-between items-center">
            <h1 class="text-2xl text-white font-bold">E-Learning App</h1>
            <nav >
                <ul class="flex space-x-4">
                    @guest
                        <li><a href="{{ route('login') }}" class="text-white hover:text-blue-500">Login</a></li>
                        <li><a href="{{ route('register') }}" class="text-white hover:text-blue-500">Register</a></li>
                    @else
                        @if(auth()->user()->isAdmin())
                            <li><a href="{{ route('admin.dashboard') }}" class="text-white hover:text-blue-500">Admin Dashboard</a></li>
                        @else
                            <li><a href="{{ route('dashboard') }}" class="text-white hover:text-blue-500">Dashboard</a></li>
                        @endif
                        <li><a href="{{ route('logout') }}" class="text-white hover:text-red-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </nav>
        </div>
    </header> --}}
    <nav class="min-w-full py-3 px-5 shadow flex justify-between items-center">
    <div class="items-center flex">
        <p class="text-2xl font-bold text-white">eLearning</p>
    </div>
    <div class="flex justify-center items-center">
        
    </div>
    <div class="flex items-center relative">
        <div>
           <a href="{{ route('home') }}" class="text-white"><i class="fa-solid fa-circle-left"></i>&nbsp;kembali</a>
        </div>
    </div>
</nav>



    @yield('content')

    {{-- <footer class="bg-gray-200 py-4">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">&copy; {{ date('Y') }} E-Learning App. All rights reserved.</p>
        </div>
    </footer> --}}

    <footer class="min-w-full py-3 px-5 bg-white shadow">
        <div class="flex justify-between items-center">
            <div class="w-96">
                <p class="text-2xl font-bold py-3">eLearning</p>
                <p class="text-justify">Sambutlah inovasi belajar baru dan dimana saja dengan eLearning, dengan desain minimalis dan futuristic membuat belajar tidak lagi terasa membosankan. Ayo belajar dengan eLearning.</p>
            </div>
    
            <ul>
                <p class="font-bold capitalize py-3">kategori populer</p>
                <li><a class="capitalize" href="">Laravel</a></li>
                <li><a class="capitalize" href="">TailwindCSS</a></li>
                <li><a class="capitalize" href="">JavaScript</a></li>
            </ul>
    
            <ul>
                <p class="font-bold capitalize py-3">acara terbaru</p>
                <li><a class="capitalize" href="">webinar pendidikan</a></li>
                <li><a class="capitalize" href="">peluncuran fitur baru</a></li>
                <li><a class="capitalize" href="">tutorial online</a></li>
            </ul>
    
            <ul>
                <p class="font-bold capitalize py-3">sumber belajar</p>
                <li><a class="capitalize" href="">kelas online</a></li>
                <li><a class="capitalize" href="">tips belajar</a></li>
                <li><a class="capitalize" href="">modul bacaan</a></li>
            </ul>
    
            <div class="w-40 flex justify-between py-3">
                <div>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div>
                    <a href="https://github.com/odeandialamsyah/e-learning"><i class="fa-brands fa-github"></i></a>
                </div>
                <div>
                </div>
            </div>
        </div>
    
        <hr class="my-3">
    
        <p class="text-center">&copy;Copyright 2024 Hadzik Mochamad Sofyan & Ode Andi Alamsyah</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
