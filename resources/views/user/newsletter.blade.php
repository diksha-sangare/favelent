<x-sidebar>
<div class="flex">
            <div class="xl:w-full xl:pt-7">
                <h1 class="text-white text-3xl font-bold xl:pl-7">Newsletter</h1>
                <div class="flex flex-wrap mt-10">
                    <div class="xl:w-full">
                        <form action="" method="post">
                            <div class="xl:ml-7 xl:mr-14">
                                <label for="" class="text-white text-md font-bold ">Newsletter Title</label>
                                <input type="text" class="rounded-sm px-3 h-10 w-full mt-3"  name="name" value="{{ auth()->user()->username }}" placeholder="Name" id="" style="color:rgb(240, 240, 240);background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                            </div>
                            <div class="xl:ml-7 xl:mr-14 xl:mt-3">
                                <label for="" class="text-white text-md font-bold ">About</label>
                                <input type="text" class="rounded-sm px-3 h-10 w-full mt-3"  name="name" value="{{ auth()->user()->username }}" placeholder="Name" id="" style="color:rgb(240, 240, 240);background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                            </div>

                            <button class="xl:ml-7 xl:mr-14 rounded-xl px-14 text-white py-2 text-md font-bold mt-5 " style="color:rgb(167, 181, 189);background:none rgb(51, 62, 73);">
                                Submit
                            </button>
                            
                        </form>

                        <h1 class="text-white text-xl font-bold xl:pb-2 xl:mt-7 xl:ml-7 xl:mr-14" style="border-bottom: 1px solid rgb(51, 62, 73)">Subscribers</h1>
                    
                        <p class="text-white text-md xl:mt-4 xl:ml-7 xl:mr-14">Currently you have zero subscribers.</p>
                
                    </div>
                </div>


            </div>
        </div>
</x-sidebar>