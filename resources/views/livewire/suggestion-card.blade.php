<div class="m-3 py-3 bg-white rounded-xl">
    <div class="grid grid-cols-8 grid-rows-1 p-3">
        <div class="col-span-1 ">
            <livewire:vote-button :votes="$votes" :feedback="$feedback_id"/>
        </div>
        <div class="col-span-6"> 
            <h2><a href="/feedback/{{$feedback_id}}"><b>{{ $title }}</b></a></h2>
            <p>{{ $detail }}</p>
            <livewire:category-badge :category="$category"/>
        </div>
        <div class="col-span-1 "> 
            <livewire:comments-counter :comments="$comments"/>
        </div>
        
    </div>
    
</div>

    
    
    
    
    