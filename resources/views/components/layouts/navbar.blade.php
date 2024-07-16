<nav class="min-w-full py-3 px-5 shadow flex justify-between items-center">
    <div class="items-center flex">
        <p class="text-2xl font-bold text-white">eLearning</p>
    </div>
    <div class="flex justify-center items-center">
        <ul class="flex justify-center">
            <li class="inline-block capitalize text-slate-200 px-5">home<a href=""></a></li>
            <li class="inline-block capitalize text-slate-200 px-5">get started<a href=""></a></li>
            <li class="inline-block capitalize text-slate-200 px-5">develop<a href=""></a></li>
            <li class="inline-block capitalize text-slate-200 px-5">foundation<a href=""></a></li>
            <li class="inline-block capitalize text-slate-200 px-5">styles<a href=""></a></li>
            <li class="inline-block capitalize text-slate-200 px-5">components<a href=""></a></li>
        </ul>
    </div>
    <div class="flex items-center relative">
        <div>
            <i class="fa-regular fa-circle-user text-white cursor-pointer"></i>
            <ul class="absolute overflow-x-hidden" style="left: -375.5%;">
                <li class=" w-24 py-1 px-2 bg-white flex items-center"><a href="{{ route('history') }}"><i class="fa-solid fa-circle-info overflow-x-hidden overflow-ellipsis"></i>&nbsp;info</a></li>
                <li class=" w-24 py-1 px-2 bg-white flex items-center"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-power-off overflow-x-hidden overflow-ellipsis"></i>&nbsp;logout</a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>