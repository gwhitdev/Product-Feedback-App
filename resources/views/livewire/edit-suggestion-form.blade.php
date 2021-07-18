<div>
    
    <form wire:submit.prevent='save'>
        <p><label for="title">Title</label>
        <input type="text"name="new_title"  value="{{$title}}"wire:model='new_feedback.title'>
        </p>
        <p>
        <label for="detail">Detail</label>
        <input type="text"name="new_detail"wire:model="new_feedback.detail" value="{{$detail}}">
        </p>
        <p>
            <label for="category">Category</label>
        <select name="new_category" wire:model='new_feedback.category'>
            @foreach($categories as $category)
            <option @if($suggestion_category == $category->id) selected="selected"@endif value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
         {{ csrf_field() }}
        </p>
    </form>
    <a href="/feedback/{{$suggestion_id}}/delete"><button class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button></a>
        <a href="/feedback/{{$suggestion_id}}"><button class="px-4 py-2 font-bold text-white bg-gray-500 rounded hover:bg-gray-700">Cancel</button></a>
        
        <button class="px-4 py-2 font-bold text-white bg-indigo-500 rounded hover:bg-indigo-700">Save changes</button>
</div>
