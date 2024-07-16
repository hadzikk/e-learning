<x-app>
    <x-navbar></x-navbar>
        <div class="w-full h-screen">
            <div class="w-full flex justify-center items-center">
                <div class="w-2/4">
                    <p class="w-full text-7xl font-bold text-white text-center py-14 capitalize">selamat datang</p>
                    <p class="text-slate-200 text-center pb-10">Nikmati pengalaman belajar interaktif di platform e-learning kami. Dapatkan materi berkualitas dan dukungan penuh. Selamat belajar!</p>
                </div>
            </div>
            <div class="w-full flex flex-wrap justify-center gap-1 px-5">
                <div class="w-64 h-64 bg-gradient-to-r from-gray-900 via-gray-600 to-gray-500 rounded flex items-center justify-center px-3">
                    <div class="w-4/5 h-4/5">
                        <p class="text-white font-bold text-2xl capitalize">materi</p>
                        <i class="fa-solid fa-code text-5xl text-white py-5"></i>
                        <p class="text-white">akses lebih dari 100+ materi pemrograman.</p>
                    </div>
                </div>
                <div class="w-64 h-64 bg-gradient-to-r from-indigo-800 via-indigo-700 to-purple-600 shadow rounded flex items-center justify-center px-3">
                    <div class="w-4/5 h-4/5">
                        <p class="text-white font-bold text-2xl capitalize">desain</p>
                        <i class="fa-solid fa-pen-fancy text-5xl text-white py-5"></i>
                        <p class="text-white">tampilan web yang modern dan menyenangkan.</p>
                    </div>
                </div>
                <div class="w-64 h-64 bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 shadow rounded flex items-center justify-center px-3">
                    <div class="w-4/5 h-4/5">
                        <p class="text-white font-bold text-2xl capitalize">kuis</p>
                        <i class="fa-solid fa-splotch text-5xl text-white py-5"></i>
                        <p class="text-white">uji pemahaman anda dengan mengerjakan kuis.</p>
                    </div>
                </div>
                <div class="w-64 h-64 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 shadow rounded flex items-center justify-center px-3">
                    <div class="w-4/5 h-4/5">
                        <p class="text-white font-bold text-2xl capitalize">history</p>
                        <i class="fa-solid fa-scroll text-5xl text-white py-5"></i>
                        <p class="text-white">pantau kemajuan belajar anda dengan melihat history.</p>
                    </div>
                </div>
                <div class="w-64 h-64 bg-gradient-to-r from-green-400 to-blue-500 shadow rounded flex items-center justify-center px-3">
                    <div class="w-4/5 h-4/5">
                        <p class="text-white font-bold text-2xl capitalize">pembaruan</p>
                        <i class="fa-regular fa-lightbulb text-5xl text-white py-5"></i>
                        <p class="text-white">konten dan modul terbaru untuk pengalaman belajar terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <p class="px-6 text-white font-bold capitalize">php</p>
            <div class="min-w-full h-48 overflow-x-auto py-3 no-scrollbar">   
                <div class="w-max flex justify-start gap-1 px-5">
                    <div class="w-64 h-32 bg-white shadow rounded mb-2 overflow-hidden">
                        <img src="https://images.pexels.com/photos/276452/pexels-photo-276452.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="w-full rounded object-cover">
                    </div>
                    @foreach ($courses as $course)
                        <div class="w-64 h-32 bg-white shadow rounded mb-2">
                            <h3 class="text-xl font-semibold mb-2">{{ $course->title }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-full py-3">
            <p class="py-3 px-6 text-white font-bold capitalize">javascript</p>
            <div class="w-full flex flex-wrap justify-center gap-1 px-5">
                <div class="w-64 h-32 bg-white shadow rounded mb-2"></div>
                <div class="w-64 h-32 bg-white shadow rounded mb-2"></div>
                <div class="w-64 h-32 bg-white shadow rounded mb-2"></div>
                <div class="w-64 h-32 bg-white shadow rounded mb-2"></div>
                <div class="w-64 h-32 bg-white shadow rounded mb-2"></div>
            </div>
        </div>
    <x-footer></x-footer>
</x-app>