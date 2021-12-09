<x-sidebar>
<div class="flex">
            <div class="xl:w-full xl:pt-7">
                <h1 class="text-white text-3xl font-bold xl:pl-7">Profile</h1>
                <div class="flex flex-wrap">
                    <div class="xl:w-1/5">
                        <div class=" mt-10">
                            <img src="image/profilelogo.png" class="rounded-full mx-auto xl:mb-5 " style="height:110px;width:110px;" alt="">
                        </div>
                    </div>
                    <div class="xl:w-4/5 xl:pr-10">
                        <form action="" method="post">
                            <input type="text" class="rounded-sm px-3 h-10 w-full mt-10"  name="name" value="{{ auth()->user()->name }}" id="" style="color:rgb(240, 240, 240);background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                            <input type="text" class="rounded-sm px-3 h-10 w-full mt-3"  name="bio" value="{{ auth()->user()->bio }}" id="" style="color:rgb(240, 240, 240);background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                            <div class=" ">
                                <button class="rounded-xl px-14 text-white py-2 text-md font-bold mt-5 w-full" style="color:#6E8291;background:rgba(51, 62, 73, 0.2);">
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="flex flex-wrap mt-10">
                    <div class="xl:w-full">
                        <h1 class="text-white text-lg font-bold xl:pl-7">Username</h1>
                        <form action="" method="post">
                        <div class="flex flex-wrap">
                            <div class="xl:w-4/5 xl:pl-7 xl:pr-5">
                                <input type="text" class="rounded-sm px-3 h-10 w-full mt-3"  name="name" value="{{ auth()->user()->username }}" placeholder="Name" id="" style="color:rgb(240, 240, 240);background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                            </div>
                            <div class="xl:w-1/5 xl:pr-10">
                                <button class="rounded-xl px-14 text-white py-2 text-md font-bold mt-3 w-full" style="color:#6E8291;background:rgba(51, 62, 73, 0.2);">
                                            Save 
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="flex flex-wrap mt-10">
                    <div class="xl:w-full">
                        <h1 class="text-white text-lg font-bold xl:pl-7">Socials and Links</h1>
                        <form action="" method="post">
                            <div class="flex flex-wrap">
                                <div class="xl:w-4/5 xl:pl-7 xl:pr-5">
                                    <input type="text" class="rounded-sm px-3 h-10 w-full mt-3"  name="name" placeholder="Paste Link" id="" style="color:rgb(240, 240, 240);background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                                </div>
                                <div class="xl:w-1/5 xl:pr-10">
                                    <select name="" id="" class="rounded-sm px-3 h-10 w-full mt-3" style="color: #fff;background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                                        <option value="Type" style="color: rgb(0, 0, 0);">Type</option>
                                        <option value="twitter" style="color: rgb(0, 0, 0);">Twitter</option>
                                        <option value="instagram" style="color: rgb(0, 0, 0);">Instagram</option>
                                        <option value="clubhouse" style="color: rgb(0, 0, 0);">Clubhouse</option>
                                        <option value="youtube_channel" style="color: rgb(0, 0, 0);">Youtube Channel</option>
                                        <option value="buymeacoffee" style="color: rgb(0, 0, 0);">Buymeacoffee</option>
                                        <option value="patreon" style="color: rgb(0, 0, 0);">Patreon</option>
                                        <option value="behance" style="color: rgb(0, 0, 0);">Behance</option>
                                        <option value="goodreads" style="color: rgb(0, 0, 0);">goodreads</option>
                                        <option value="website" style="color: rgb(0, 0, 0);">website</option>
                                        <option value="spotify" style="color: rgb(0, 0, 0);">Spotify</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="text-right mt-3 xl:mr-10">
                                <button class="rounded-xl px-14 text-white py-2 text-md font-bold mt-3 " style="color:rgb(167, 181, 189);background:rgba(51, 62, 73, 0.2);">
                                        Add 
                                </button>
                            </div>

                        </form>
                    </div>
                </div>



            </div>
        </div>
</x-sidebar>