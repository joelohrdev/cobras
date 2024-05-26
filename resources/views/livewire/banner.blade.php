<div class="relative">
    @if($this->user->banner_image)
        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($this->user->banner_image) }}" alt="" class="h-96 w-full object-top object-contain md:object-cover">
    @endif
    <div class="absolute h-96 inset-0 bg-gradient-to-t from-white"></div>
    <div class="w-full max-w-4xl mx-auto sm:h-96 -mt-[250px] z-10 relative flex items-center justify-center">
        <div class="w-full backdrop-blur py-10 px-20 rounded-lg md:mt-72 z-10">
            <a href="{{ route('home') }}">
                <img class="w-48 h-auto mx-auto mt-5" src="{{ asset('cobras.png') }}" alt="">
            </a>
            <h1 class="font-bold text-2xl md:text-5xl text-center">{{ $user->lastName }} {{ $user->division }}</h1>
        </div>
    </div>
</div>
