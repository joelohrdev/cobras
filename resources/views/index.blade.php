<x-app>
    <div class="relative">
        <img src="{{ asset('index-bg.jpg') }}" alt="" class="h-96 w-full object-cover overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-white"></div>
        <div class="w-full max-w-4xl mx-auto sm:h-96 -mt-[370px] z-10 relative flex items-center justify-center">
            <div class="w-full py-10 px-20 rounded-lg z-10">
                <img class="w-56 h-auto mx-auto mt-5" src="{{ asset('cobras.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto md:mt-20 px-3 md:px-0 z-20">
        <livewire:teams-index />
    </div>
</x-app>
