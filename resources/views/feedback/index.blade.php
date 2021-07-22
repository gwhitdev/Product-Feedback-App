<x-app-layout>
    <div class="w-screen row-span-1 md:w-auto md:row-span-1 lg:row-span-1">
                    
        <livewire:navs.menu-bar :feedback="$feedback" :count="$count"/>
        
        
    </div>
    <main>
    <div class="row-span-5 lg:mt-[-35px]">    
    @foreach($feedback as $f)
        <livewire:suggestion_components.suggestion-card :feedback="$f"/>
    @endforeach
    </div>
    </main>
</div>
</x-app-layout>