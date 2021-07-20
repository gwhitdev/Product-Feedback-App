<div class="row-span-1 p-5  bg-white h-[178px] m-3 md:m-0 rounded-xl  flex-col-reverse md:h-[187px] md:block"> 
    @foreach($categories as $category)
        <livewire:sidebar_components.sidebar-categories-button :category="$category"/>
    @endforeach
</div>