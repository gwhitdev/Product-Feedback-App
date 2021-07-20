<div class="py-3 m-3 mb-5 bg-white rounded-xl">
    <div class="grid grid-cols-8 grid-rows-1 p-3">
        <div class="col-span-1 ">
            <livewire:suggestion_components.vote-button :votes="$votes" :feedback="$feedback_id"/>
        </div>
        <div class="col-span-6"> 
            <h2><a href="/feedback/{{$feedback_id}}"><b>{{ $title }}</b></a></h2>
            <p>{{ $detail }}</p>
            <livewire:suggestion_components.category-badge :category="$category"/>
        </div>
        <div class="col-span-1 "> 
            <livewire:suggestion_components.comments-counter :comments="$comments"/>
        </div>
        
    </div>
    
</div>

    
    
    
    
    