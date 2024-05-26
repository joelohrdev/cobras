<div>
    <livewire:banner :$user />
    <div class="max-w-4xl mx-auto md:mt-20 px-3 md:px-0 z-20">
        <livewire:navigation :$user />
    </div>
    <div class="w-full max-w-4xl mx-auto md:mt-20 px-3 lg:px-0">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @forelse($players as $player)
                <div class="flex flex-col items-center justify-between bg-white text-slate-600 group p-3 border rounded-lg">
                    <div class="mb-5">
                        @if($player->avatar)
                            <img class="inline-block h-20 w-20 rounded-full" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($player->avatar) }}" alt="">
                        @else
                            <span class="inline-flex h-20 w-20 items-center justify-center rounded-full bg-orange-500">
                              <span class="text-4xl font-medium leading-none text-black">{{ $player->number }}</span>
                            </span>
                        @endif
                    </div>
                    <div class="text-center">
                        <p>{{ $player->name }} #{{ $player->number }}</p>
                        <p>{{ $player->hs }}</p>
                        <p>{{ $player->grad_year }}</p>
                    </div>
                </div>
                @empty
                <p class="col-span-3 text-slate text-center">No players have been added</p>
            @endforelse
        </div>
    </div>
    <div class="w-full max-w-4xl mx-auto mt-10 flex justify-center">
        <livewire:footer :$user />
    </div>
</div>
