<x-app-layout>
<form method="POST"action="/feedback/{{$feedback->id}}/edit">
    <input type="text"name="title"value="{{$feedback->title}}">
    <input type="text"name="detail"value="{{$feedback->detail}}">
    <select name="category">
        @foreach($categories as $category)
        <option @if($feedback_category == $category->id) selected="selected"@endif value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
     {{ csrf_field() }}
    <button>Update feedback</button>
</form>
</x-app-layout>