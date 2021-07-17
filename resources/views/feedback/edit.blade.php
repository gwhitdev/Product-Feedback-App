<x-inside-layout>
    <div class="justify-center col-span-5 col-start-2 row-span-2 p-3">
        <livewire:basic-nav :feedback="$feedback"/>
    </div>
    <div class="col-span-5 col-start-2 row-span-4 p-3 m-3 bg-white rounded-xl">
        <form method="POST"action="/feedback/{{$feedback->id}}/edit">
            <p><label for="title">Title</label>
            <input type="text"name="title"value="{{$feedback->title}}">
            </p>
            <p>
            <label for="detail">Detail</label>
            <input type="text"name="detail"value="{{$feedback->detail}}">
            </p>
            <p>
                <label for="category">Category</label>
            <select name="category">
                @foreach($categories as $category)
                <option @if($feedback_category == $category->id) selected="selected"@endif value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
             {{ csrf_field() }}
            </p>
            <button class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
            <button class="px-4 py-2 font-bold text-white bg-gray-500 rounded hover:bg-gray-700">Cancel</button>
            
            <button class="px-4 py-2 font-bold text-white bg-indigo-500 rounded hover:bg-indigo-700">Save changes</button>
        </form>
    </div>

</x-inside-layout>