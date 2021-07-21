
<div class="flex col-span-5 col-start-3 row-span-1 p-5 font-bold text-white bg-blue-900 md:ml-3 md:mr-3 md:rounded-xl ">
        
    <div class="justify-center hidden mt-2 md:block">
        <img src="{{ asset('/storage/images/desktop/icon-suggestions.svg')}}"class="float-left mr-5">
        
        <livewire:generic.suggestions-count :count="$count"/>
    </div>
    
    <div class="flex-grow mt-2 md:ml-10">
        <button  class="text-gray-200 ">
            <img src="{{ asset('storage/images/shared/icon-arrow-down-gray.svg')}}" class="float-right mt-2 ml-1">Sort by: <b>Most upvotes</b>
        </button>
    </div>
    
    <livewire:navs.add-feedback-button /> 
    
</div>
