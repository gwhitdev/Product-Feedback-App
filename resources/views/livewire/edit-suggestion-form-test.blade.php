<div>
    <form wire:submit.prevent="submit"method="POST"">
         {{ csrf_field() }}
        <input type="text" name="title"wire:model='title' >@error('title'){{$message}}@enderror
        <input type="text" name="detail" wire:model='detail'>@error('detail'){{$message}}@enderror
        
        <select name="category_id" wire:model='category_id'>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{ $category->category_name }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
</div>
