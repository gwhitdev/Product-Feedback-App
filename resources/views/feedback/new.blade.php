<x-app-layout>

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