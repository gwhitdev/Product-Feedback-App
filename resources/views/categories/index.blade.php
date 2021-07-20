<x-inside-layout>
    
    
        <div class="justify-center col-span-5 col-start-2 row-span-1 p-3">
            feedback
        </div>
        <div class="col-span-5 col-start-2 row-span-1">
            @foreach($feedback as $f)
                <livewire:suggestion_components.suggestion-card :feedback="$f"/>
            @endforeach
        </div>
</x-inside-layout>