<div>
    <livewire:banner :$user />
    <div class="max-w-4xl mx-auto mt-20 px-3 md:px-0 z-20">
        <livewire:navigation :$user />
    </div>
    <div class="w-full max-w-4xl mx-auto mt-10">
        <div class="mb-10">
            @if($tournament->result)
                <div class="text-orange-500 h-20 flex flex-col justify-center items-center">
                    <p class="text-4xl font-bold">{{ $tournament->ordianalIndicator }}</p>
                    <p class="uppercase text-sm tracking-widest">{{ __('Place') }}</p>
                </div>
            @endif
            <h1 class="text-2xl text-center">{{ $tournament->name }}</h1>
            <p class="text-gray-500 text-sm text-center">{{ $tournament->start_date->format('F d, Y') }} - {{ $tournament->end_date->format('F d, Y') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 px-3">
            @foreach($games as $game)
                <div class="flex items-center bg-white text-slate-600 group p-3 border rounded-lg">
                    <div class="flex justify-between">
                        <div class="h-20 flex flex-col justify-center items-center border-r pr-3 mr-3 group-hover:text-orange-500">
                            <p class="text-4xl font-bold">{{ $game->date->format('d') }}</p>
                            <p class="uppercase text-sm tracking-widest">{{ $game->date->format('D') }}</p>
                        </div>
                    </div>
                    <div>
                        <p class="">vs {{ Str::limit($game->opponent, 27) }}</p>
                        <div class="flex gap-1 items-center text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#94a3b8" fill="none">
                                <path d="M10.0808 2C5.47023 2.9359 2 7.01218 2 11.899C2 17.4776 6.52238 22 12.101 22C16.9878 22 21.0641 18.5298 22 13.9192" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                <path d="M18.9375 18C19.3216 17.9166 19.6771 17.784 20 17.603M14.6875 17.3406C15.2831 17.6015 15.8576 17.7948 16.4051 17.9218M10.8546 14.9477C11.2681 15.238 11.71 15.5861 12.1403 15.8865M3 13.825C3.32234 13.6675 3.67031 13.4868 4.0625 13.3321M6.45105 13C7.01293 13.0624 7.64301 13.2226 8.35743 13.5232" stroke="currentColor" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                                <path d="M18 7.5C18 6.67157 17.3284 6 16.5 6C15.6716 6 15 6.67157 15 7.5C15 8.32843 15.6716 9 16.5 9C17.3284 9 18 8.32843 18 7.5Z" stroke="currentColor" stroke-width="1.5" />
                                <path d="M22 7.4C22 11.6 16.5 14 16.5 14C16.5 14 11 11.6 11 7.4C11 4.41766 13.4624 2 16.5 2C19.5376 2 22 4.41766 22 7.4Z" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                            <p class="text-sm">{{ $game->city ?? $game->tournament->city }}, {{ $game->state ?? $game->tournament->state }}</p>
                        </div>
                    </div>
                    @if($game->outcome)
                        <div class="ml-auto flex items-center gap-3">
                            @if($game->outcome == 'win')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" color="#f5a623" fill="none">
                                    <path d="M12 17C9.79086 17 8 19.2386 8 22H16C16 19.2386 14.2091 17 12 17Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.5 5H22L21.7616 6.66896C21.4984 8.51101 21.3669 9.43204 21.001 10.2267C20.6067 11.0831 20.0161 11.8345 19.2772 12.4201C18.5915 12.9634 17.7277 13.3089 16 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.5 5H2L2.23842 6.66896C2.50157 8.51101 2.63315 9.43204 2.99902 10.2267C3.39331 11.0831 3.98387 11.8345 4.72282 12.4201C5.4085 12.9634 6.27233 13.3089 8 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 17C8.41015 17 5.5 10.2843 5.5 2H18.5C18.5 10.2843 15.5899 17 12 17Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            @endif
                            {{ $game->our_score }} - {{ $game->opponent_score }}
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <div class="w-full max-w-4xl mx-auto mt-20 flex justify-center">
        <livewire:footer :$user />
    </div>
</div>
