<x-sidebar>
    <div class="flex">
        <div class="xl:w-full xl:pt-7">
            <h1 class="text-white text-3xl font-bold xl:pl-7">Settings</h1>
            <div class="flex flex-wrap">
                <div class="xl:w-1/2 ">
                    <div class="flex flex-wrap">
                        <div class="xl:w-1/5">
                            <div class=" mt-10">
                                <img src="image/profilelogo.png" class="rounded-full xl:ml-7 xl:mb-5 " style="height:50px;width:50px;" alt="">
                            </div>
                        </div>
                        <div class="xl:w-4/5 xl:mt-10">
                            <p class="text-white text-sm font-bold">{{ auth()->user()->name }}</p>
                            <p class="text-sm font-bold" style="color:rgb(110, 130, 145);">@<span>{{ auth()->user()->username }}</span></p>
                        </div>
                    </div>
                </div>
                <div class="xl:w-1/2 xl:pr-10 xl:mt-6  text-right">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="rounded-xl px-14 text-white py-2 text-md font-bold mt-5" style="color:rgb(168, 180, 189);background:rgb(51, 62, 73);">
                            Logout
                        </button>
                    </form>
                </div>
            </div>

            <div class="flex flex-wrap mt-2 xl:pl-7 xl:pr-7">
                    <div class="xl:w-full">
                        <h1 class="text-white text-lg font-bold pb-3" style="border-bottom: 1px solid rgb(51, 62, 73)">Reset Password</h1>
                        
                        <p class="mt-4 text-white" >{{ auth()->user()->email }}</p>
                        <button class="rounded-xl px-14 text-white py-2 text-md font-bold mt-5 w-auto" style="color:rgb(168, 180, 189);background:rgb(51, 62, 73);">
                            Sent. Check your inbox
                        </button>
                    </div>
                </div>

        </div>
    </div>
</x-sidebar>