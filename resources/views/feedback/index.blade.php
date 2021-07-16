<x-app-layout>
    @foreach($feedback as $f)
        <livewire:suggestion-card :feedback="$f"/>
    @endforeach
    
</x-app-layout>