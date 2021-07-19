<x-app-layout>
    @foreach($feedback as $f)
        <livewire:suggestion_components.suggestion-card :feedback="$f"/>
    @endforeach
    
</x-app-layout>