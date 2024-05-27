<div class="flex max-md:flex-col justify-center items-center max-md:text-center gap-x-12 border-b pb-3 mb-10 z-20">
    <a wire:navigate href="/">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#000000" fill="none">
            <path d="M19.5 10V21H4.5V10" stroke="currentColor" stroke-width="1.5" />
            <path d="M19.5 11H21L12 3L3 11H4.5" stroke="currentColor" stroke-width="1.5" />
            <path d="M12 16H12.009" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
        </svg>
    </a>
    <a wire:navigate href="{{ route('team.index', $user->team_name) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.index', $user->team_name)) ? 'text-orange-500' : 'text-gray-900' }}">Games</a>
    <a wire:navigate href="{{ route('team.past-games', $user->team_name) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.past-games')) ? 'text-orange-500' : 'text-gray-900' }}">Past Games</a>
    <a wire:navigate href="{{ route('team.tournaments', $user->team_name) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.tournaments')) ? 'text-orange-500' : 'text-gray-900' }}">Tournaments</a>
    <a wire:navigate href="{{ route('team.past-tournaments', $user->team_name) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.past-tournaments')) ? 'text-orange-500' : 'text-gray-900' }}">Past Tournaments</a>
    <a wire:navigate href="{{ route('team.players', $user->team_name) }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-orange-500 {{ (request()->routeIs('team.players')) ? 'text-orange-500' : 'text-gray-900' }}">Players</a>
    <a wire:navigate href="{{ route('team.coaches', $user->team_name) }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-orange-500 {{ (request()->routeIs('team.coaches')) ? 'text-orange-500' : 'text-gray-900' }}">Coaches</a>
</div>
