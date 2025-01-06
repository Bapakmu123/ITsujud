<nav class="block h-[65px]">
    <div class="flex justify-start bg-yellow-500 shadow-md h-[65px] fixed w-full z-50">
        <div class="flex items-center justify-between gap-5 ml-4  md:flex">
            <a href="{{ route('index') }}" class="px-4 py-2 hover:bg-black text-xl hover:text-white rounded-lg font-bold">WEB GACOR</a>
        </div>
        <div class="ml-auto flex items-center mr-5">
            <a href="{{ route('index') }}" class="px-4 py-2 hover:bg-black hover:text-white rounded-lg font-bold">Portofolio</a>
            <a href="{{ route('showdown') }}" class="px-4 py-2 hover:bg-black hover:text-white rounded-lg font-bold">Fight</a>
            <a href="{{ route('timer') }}" class="px-4 py-2 hover:bg-black hover:text-white rounded-lg font-bold">Timer</a>
        </div>
    </div>
</nav>