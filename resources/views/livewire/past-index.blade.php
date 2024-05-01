<div>
    <livewire:banner :$user />
    <div class="max-w-4xl mx-auto md:mt-20 px-3 md:px-0 z-20">
        <livewire:navigation :$user />
    </div>
    <div class="w-full max-w-4xl mx-auto md:mt-20 px-3 lg:px-0">
        <livewire:past-games :$user />
    </div>
    <div class="w-full max-w-4xl mx-auto mt-10 flex justify-center">
        <livewire:footer :$user />
    </div>
</div>
