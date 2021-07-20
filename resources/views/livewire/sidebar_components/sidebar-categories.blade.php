<div class="p-5 bg-white h-[178px] m-3 lg:row-span-2 md:m-0 rounded-xl flex-col-reverse md:h-[178px] lg:h-[178px] md:block"> 
    <button wire:click='all' class="justify-center flex-none pt-2 pb-2 pl-4 pr-4 m-1 font-bold text-indigo-700 bg-purple-100 w-38 rounded-xl">
        All
    </button>
    
    @foreach($categories as $category)
        <livewire:sidebar_components.sidebar-categories-button :category="$category"/>
    @endforeach
</div>