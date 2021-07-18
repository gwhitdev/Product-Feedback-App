<div>
    @error('status') {{$message}} @enderror
    
    @error('user_id') {{$message}} @enderror
    <form wire:submit.prevent="submit"method="POST">
         {{ csrf_field() }}
        <input type="text" name="title"wire:model='title' >@error('title'){{$message}}@enderror
        <input type="text" name="detail" wire:model='detail'>@error('detail'){{$message}}@enderror
        <select name="cat_id" wire:model='cat_id'>
            <option value="Choose a category">Choose a category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{ $category->category_name }}</option>
            @endforeach
        </select>
        @error('category_id') {{$message}} @enderror
        <button type="submit">Save</button>
    </form>
</div>
