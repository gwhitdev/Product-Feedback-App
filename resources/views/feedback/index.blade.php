<x-app-layout>
@foreach($feedback as $f)
<li>{{ $f->title }} Votes: {{$f->votes}} Comments: {{$f->comment()->get()->count()}}</li>
@endforeach

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

</x-app-layout>