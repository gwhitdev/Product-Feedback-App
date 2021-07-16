<x-app-layout>
    <div>
    @if(session()->has('message'))
        {{ session('message')}}
    @endif
    </div>

    <div class="grid gap-4 grid-cols-2 grid-rows-1">

        <div>
            
                @foreach($feedback as $f)
                <ul class="py-3">
                <a href="/feedback/{{$f->id}}">{{ $f->title }}</a><br>
                <li>Votes: {{$f->votes}} <a href="/feedback/{{$f->id}}/vote-up">VOTE UP</a> | <a href="/feedback/{{$f->id}}/vote-down">VOTE DOWN</a></li>
                <li><a href="/feedback/{{$f->id}}/comments">Comments:</a> {{$f->comment()->get()->count()}}</li>
                </ul>
                @endforeach
            
        </div>

        <div>
            <form method="POST"action="/feedback/">
                <input type="text"name="title">
                <input type="text"name="detail">
                <select name="category">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                {{ csrf_field() }}
                <button>Submit feedback</button>
            </form>     
        </div>
    </div>
</x-app-layout>