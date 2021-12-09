<x-layout>
    <div class="w-full h-2 left-0 top-0" style="position: absolute; z-index: 2; background-color: rgb(53, 177, 253);"></div>
    <div class="flex max-w-3xl border mt-20 mx-auto">
        <div class="w-full">
            <div class="flex flex-wrap">
                <div class="xl:w-1/5">
                    <div class=" mt-10">
                        <img src="image/profilelogo.png" class="rounded-full xl:ml-14 xl:mb-5 " style="height:80px;width:80px;" alt="">
                    </div>
                </div>
                <div class="xl:w-4/5 xl:mt-16">
                    <p class="text-xl font-bold" style="color:rgb(230, 233, 235);">{{ auth()->user()->name }} |
                    <span style="color:rgb(168, 180, 189);">@<span>{{ auth()->user()->username }}</span> </span></p>
                    
                    <p class="text-xl font-bold xl:pt-10 xl:pl-10" style="color:rgb(230, 233, 235);">{{ auth()->user()->bio }}</p>

                </div>
            </div>
        </div>
    </div>

</x-layout>