<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    @foreach($teams as $team)
        <a href="{{ route('team.index', $team) }}" class="h-20 flex flex-col justify-center items-center group hover:text-orange-500">
            <p class="text-4xl font-bold">{{ $team->division }}</p>
            <p class="uppercase text-sm tracking-widest">{{ $team->slug }}</p>
        </a>
    @endforeach
</div>
