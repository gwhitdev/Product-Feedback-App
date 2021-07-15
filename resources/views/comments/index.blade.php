<x-app-layout>
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
    
    </x-app-layout>