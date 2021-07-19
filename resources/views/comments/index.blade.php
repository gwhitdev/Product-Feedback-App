<x-inside-layout>
    <div class="justify-center col-span-5 col-start-2 row-span-2 p-3">
        <livewire:navs.standard-nav />
    </div>
    <div class="col-span-5 col-start-2 row-span-4 p-3 m-3 bg-white rounded-xl">

    @if($feedback)
        <li>Feedback title{{ $feedback->title }}</li>
    @endif

    @if($comments)
        @foreach($comments as $comment)
            <li>Comment: {{ $comment->comment_detail }}</li>
        @endforeach
    @endif
    
    <form method="POST"action="/feedback/{{$feedback->id}}/comments">
        <input type="text"name="comment_detail">
         {{ csrf_field() }}
        <button>Submit comment</button>
    </form>
</div>
    </x-inside-layout>