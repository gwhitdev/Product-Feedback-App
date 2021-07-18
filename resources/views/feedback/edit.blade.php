<x-inside-layout>
    <div class="justify-center col-span-5 col-start-2 row-span-2 p-3">
        <livewire:basic-nav :feedback="$feedback"/>
    </div>
    <div class="col-span-5 col-start-2 row-span-4 p-3 m-3 bg-white rounded-xl">
        <!--<livewire:edit-suggestion-form :feedback="$feedback" :categories="$categories"/>-->
        <livewire:edit-suggestion-form-test :feedback="$feedback" :categories="$categories"/>
    </div>
    
</x-inside-layout>