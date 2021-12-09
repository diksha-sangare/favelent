<x-layout>

<div class="flex flex-col md:flex-row">

<div class=" h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

    <div class="md:mt-12 xl:text-center md:w-48 xl:w-60 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">


        <ul class="list-reset flex flex-row xl:pt-20 md:flex-col py-0 md:py-3 xl:ml-5 px-1 md:px-2 text-center md:text-left">
            
            <li class="mr-3 flex-1 text-center">
                <img src="image/profilelogo.png" class="rounded-full xl:mb-5 mx-auto" style="height:70px;width:70px;" alt="">
                <p class="text-white ">{{ auth()->user()->name }}</p>
                <a href="mypage" class="w-fill mx-auto xl:w-32 xl:mt-4 flex p-3 xl:px-7 xl:py-1 pl-3 bg-gray-100  rounded-xl py-1 md:py-3 " style="color: rgb(167, 181, 189);background: none rgb(51, 62, 73)">
                    <span class="ml-2 pb-1 md:pb-0 text-xs md:text-base" >my page</span>
                </a>
            </li>
        
        
            <li class="{{ (request()->is('dashboard')) ? 'active' : '' }} mt-10 mr-3 flex-1">
                <a href="dashboard" class="w-fill flex p-3 pl-3 bg-gray-100  rounded-2xl py-1 md:py-3 " style="color: rgb(218, 225, 230);background: none rgb(51, 62, 73)">
                    <svg class="w-5 h-5" style="color:#6E8291;"  fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="ml-2 pb-1 md:pb-0 text-xs md:text-base" >Dashboard</span>
                </a>
            </li>
            <li class="mr-3 flex-1 mt-2">
                <a href="profile" class="w-fill flex p-3 pl-3 bg-gray-100  rounded-2xl py-1 md:py-3 " style="color: rgb(218, 225, 230);background: none rgb(51, 62, 73)">
                    <svg class="w-5 h-5" style="color:#6E8291;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>    
                    <span class="ml-2 pb-1 md:pb-0 text-xs md:text-base" >Profile</span>
                </a>
            </li>
            <li class="mr-3 flex-1 mt-2">
                <a href="newsletter" class="w-fill flex p-3 pl-3 bg-gray-100  rounded-2xl py-1 md:py-3 " style="color: rgb(218, 225, 230);background: none rgb(51, 62, 73)">
                    <svg class="w-5 h-5" style="color:#6E8291;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span class="ml-2 pb-1 md:pb-0 text-xs md:text-base" >Newsletter</span>
                </a>
            </li>
            <li class="mr-3 flex-1 mt-2">
                <a href="settings" class="w-fill flex p-3 pl-3 bg-gray-100  rounded-2xl py-1 md:py-3 " style="color: rgb(218, 225, 230);background: none rgb(51, 62, 73)">
                    <svg class="w-5 h-5" style="color:#6E8291;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span class="ml-2 pb-1 md:pb-0 text-xs md:text-base" >Settings</span>
                </a>
            </li>

            <li class="mr-3 flex-1 mt-2">
                <a href="#" class="w-fill flex p-3 pl-3 bg-gray-100  rounded-2xl py-1 md:py-3 " style="color: rgb(218, 225, 230);background: none rgb(51, 62, 73)">
                    <svg class="w-5 h-5" style="color:#6E8291;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    <span class="ml-2 pb-1 md:pb-0 text-xs md:text-base" >About</span>
                </a>
            </li>
        </ul>
    </div>


</div>

    <div class="main-content flex-1 rounded-3xl xl:mt-7 xl:mb-20 xl:ml-14 xl:mr-20 md:mt-2 pb-24 md:pb-5" style="background-color: rgb(24, 42, 59)">
        
    {{ $slot }}


    </div>
</div>







</x-layout>