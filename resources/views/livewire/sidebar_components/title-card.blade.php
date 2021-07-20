<div class="bg-cover grid grid-cols-4 grid-rows-1 md:flex md:flex-col-reverse md:h-[187px] md:rounded-xl"style="background-image:url(http://localhost:8000/storage/images/desktop/background-header.png)"> 
    <div class="col-span-3 m-3 ml-5 text-white">
        <div><span class="font-bold text-[15pt] md:text-[20pt]">
            Frontend Mentor<br>
        </span>
        <span class="text-[13pt] mt-[-10px] md:text-[12pt]">
            Feedback Board
        </span></div>
    </div>
    <div class="col-span-1 p-6 text-right md:hidden">
        <x-menu>
            <x-slot name="trigger">
                <button>
                    <img src="{{asset('storage/images/shared/mobile/icon-hamburger.svg')}}">
                </button>
            </x-slot>
            <x-slot name="close">
                <button>
                    <img src="{{asset('storage/images/shared/mobile/icon-close.svg')}}">
                </button>
            </x-slot>
            <div class="absolute text-left right-0 z-50 w-1/2 h-auto bg-gray-100 top-[72px]">
                <div class="grid grid-cols-1 grid-rows-3 row-span-1">
                    <livewire:sidebar_components.sidebar-categories />
                    <livewire:sidebar_components.roadmap-card />
                </div>
            </div>
        </x-menu>
        
    </div>
</div>
