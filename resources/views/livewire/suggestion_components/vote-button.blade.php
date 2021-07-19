
<div class="grid bg-gray-100 grid-cols-1 grid-rows-2 w-12 h-16 text-center rounded-xl justify-center mx-auto">

    <div class="mx-auto mt-2">
        <button wire:click="vote"><img src="{{ asset('storage/images/shared/icon-arrow-up.svg')}}"></button>
    </div>

    <div class="text-center text-indigo-600"> 
       <b> {{ $votes }}</b>
    </div>
    
</div>
