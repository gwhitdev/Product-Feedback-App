
<div class="flex col-span-5 col-start-3 row-span-1 p-5 font-bold text-white bg-blue-900 md:ml-3 md:mr-3 md:rounded-xl ">
        
    <div class="justify-center hidden mt-2 md:block">
        <img src="{{ asset('/storage/images/desktop/icon-suggestions.svg')}}"class="float-left mr-5">
        
        {{ $count }} {{ $count == 1 ? 'Suggestion' : 'Suggestions' }}
    </div>
    
    <div class="flex-grow mt-2 md:ml-10">
        
                <div>Sort by: <button  class="text-gray-200 "><x-jet-dropdown>
                    <x-slot name="trigger">
                        <a href="/feedback/sort/mostUpvotes/category/{{$feedback->category_id}}">Most upvotes</a> <img src="{{ asset('storage/images/shared/icon-arrow-down-gray.svg')}}" class="float-right mt-2 ml-1">
                    </x-slot>
                    <x-slot name="content">
                        <ul class="p-1 ml-1 text-left text-black border-solid">
                            <li><a href="/feedback/sort/leastUpvotes/category/{{$feedback->category_id}}">Least Upvotes</a></li>
                            <li><a href="/feedback/sort/mostComments/category/{{$feedback->category_id}}">Most comments</a></li>
                            <li><a href="/feedback/sort/leastComments/category/{{$feedback->category_id}}">Least comments</a></li>
                        </ul>
                        
                    </x-slot>
                    
                </x-jet-dropdown></button>
            </div>
        
    </div>
    
    <livewire:navs.add-feedback-button /> 
    
</div>
