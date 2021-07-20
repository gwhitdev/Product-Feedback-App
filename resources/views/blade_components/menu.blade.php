<div x-data="{ open: false }">
    <div>
        <span x-show="!open" @click="open = true">{{ $trigger }}</span>
        <span x-show="open" @click="open = false">{{ $close }}</span>
    </div>
    
    <div x-show="open" @click.away="open = false">
        {{ $slot }}
    </div>
</div>