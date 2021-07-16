<x-inside-layout>
    <div class="col-span-4 justify-center row-span-2">
        Inside nav
        <livewire:suggestion-card :feedback="$feedback" />
    </div>
    <div class="col-span-4 m-3 row-span-4 bg-white rounded-xl p-3">
        @foreach($feedback->comment as $comment)
        <li>{{$comment->user_id }}
        <li>{{ $comment->comment_detail }}
        @endforeach
    </div>
    <div class="col-span-4 m-3 row-span-2 bg-white rounded-xl p-3">
        New comment
    </div>
    
   
    
</x-inside-layout>