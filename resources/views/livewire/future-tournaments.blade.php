<div>
    <div class="space-y-5">
        @forelse($tournaments as $month => $data)
            <h1 class="text-xl text-slate-700 font-bold">{{ $month }}</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @foreach($data as $game)
                    <a wire:navigate href="{{ route('team.tournaments.show', [$user->team_name, $game->uuid]) }}" class="flex items-center bg-white text-slate-600 group p-3 border rounded-lg">
                        <div class="flex justify-between">
                            <div class="h-20 flex flex-col justify-center items-center border-r pr-3 mr-3 group-hover:text-orange-500">
                                <p class="text-4xl font-bold">{{ $game->start_date->format('d') }}</p>
                                <p class="uppercase text-sm tracking-widest">{{ $game->start_date->format('D') }}</p>
                            </div>
                        </div>
                        <div>
                            <p class="">{{ Str::limit($game->name, 35) }}</p>
                            <div class="flex gap-1 items-center text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#94a3b8" fill="none">
                                    <path d="M10.0808 2C5.47023 2.9359 2 7.01218 2 11.899C2 17.4776 6.52238 22 12.101 22C16.9878 22 21.0641 18.5298 22 13.9192" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                    <path d="M18.9375 18C19.3216 17.9166 19.6771 17.784 20 17.603M14.6875 17.3406C15.2831 17.6015 15.8576 17.7948 16.4051 17.9218M10.8546 14.9477C11.2681 15.238 11.71 15.5861 12.1403 15.8865M3 13.825C3.32234 13.6675 3.67031 13.4868 4.0625 13.3321M6.45105 13C7.01293 13.0624 7.64301 13.2226 8.35743 13.5232" stroke="currentColor" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                                    <path d="M18 7.5C18 6.67157 17.3284 6 16.5 6C15.6716 6 15 6.67157 15 7.5C15 8.32843 15.6716 9 16.5 9C17.3284 9 18 8.32843 18 7.5Z" stroke="currentColor" stroke-width="1.5" />
                                    <path d="M22 7.4C22 11.6 16.5 14 16.5 14C16.5 14 11 11.6 11 7.4C11 4.41766 13.4624 2 16.5 2C19.5376 2 22 4.41766 22 7.4Z" stroke="currentColor" stroke-width="1.5" />
                                </svg>
                                <p class="text-xs">{{ $game->city ?? $game->tournament->city }}, {{ $game->state ?? $game->tournament->state }}</p>
                            </div>
                            <p class="text-xs text-slate-400">{{ $game->start_date->format('F d, Y') }} - {{ $game->end_date->format('F d, Y') }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @empty
            <p class="text-slate text-center">No upcoming tournaments</p>
        @endforelse
    </div>
</div>
