<div class="flex max-md:flex-col justify-center max-md:text-center gap-x-12 border-b pb-3 mb-10 z-20">
    <a wire:navigate href="{{ route('team.index', $user->slug) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.index', $user->slug)) ? 'text-orange-500' : 'text-gray-900' }}">Games</a>
    <a wire:navigate href="{{ route('team.past-games', $user->slug) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.past-games')) ? 'text-orange-500' : 'text-gray-900' }}">Past Games</a>
    <a wire:navigate href="{{ route('team.tournaments', $user->slug) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.tournaments')) ? 'text-orange-500' : 'text-gray-900' }}">Tournaments</a>
    <a wire:navigate href="{{ route('team.past-tournaments', $user->slug) }}" class="text-sm font-semibold leading-6 hover:text-orange-500 {{ (request()->routeIs('team.past-tournaments')) ? 'text-orange-500' : 'text-gray-900' }}">Past Tournaments</a>
    <a wire:navigate href="{{ route('team.players', $user->slug) }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-orange-500 {{ (request()->routeIs('team.players')) ? 'text-orange-500' : 'text-gray-900' }}">Players</a>
    <a wire:navigate href="{{ route('team.coaches', $user->slug) }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-orange-500 {{ (request()->routeIs('team.coaches')) ? 'text-orange-500' : 'text-gray-900' }}">Coaches</a>
</div>
