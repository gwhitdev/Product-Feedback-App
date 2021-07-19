<x-inside-layout>
    <div class="justify-center col-span-5 col-start-2 row-span-2 p-3">
        <livewire:navs.inside-nav :feedback="$feedback"/>
        <livewire:suggestion_components.suggestion-card :feedback="$feedback" />
    </div>
    <div class="col-span-5 col-start-2 row-span-4 p-3 m-3 bg-white rounded-xl">
        @foreach($feedback->comment as $comment)
        <li>{{ $comment->user_id }}
        <li>{{ $comment->comment_detail }}
        @endforeach
    </div>
    <div class="col-span-5 col-start-2 row-span-2 p-3 m-3 bg-white rounded-xl">
        New comment
    </div>   
</x-inside-layout>