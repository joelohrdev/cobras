<div x-data="{ mobileMenuOpen: false }" class="relative z-20">
    <!-- Mobile menu button -->
    <div class="md:hidden flex justify-center">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Desktop menu -->
    <div class="hidden md:flex justify-center items-center gap-x-12 border-b pb-3 mb-10">
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

    <!-- Mobile slide-over menu -->
    <div x-show="mobileMenuOpen" 
        x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform translate-x-full"
         x-transition:enter-end="opacity-100 transform translate-x-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform translate-x-0"
         x-transition:leave-end="opacity-0 transform translate-x-full"
         class="fixed inset-y-0 right-0 w-64 bg-white shadow-lg p-6 z-30">
        <button @click="mobileMenuOpen = false" class="absolute top-4 left-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="flex flex-col space-y-4 mt-8">
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
    </div>
</div>
