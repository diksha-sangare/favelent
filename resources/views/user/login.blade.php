<x-layout>

<div class="flex flex-col items-center justify-center  h-screen select-none xl:pt-20 bottom-0">
    <div  class="flex flex-col -mt-32  px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-xl  w-full max-w-lg">
        <div class="self-center text-xl sm:text-2xl font-bold  text-center p-6 xl:text-3xl text-white">Welcome back!</div>
        <div class="mt-7 mb-14">
            <form action="login" method="post">
                @csrf
                <div class="">
                    <input type="text" class="rounded-sm px-3 h-10 w-full"  name="email" placeholder="Email.." id="" style="color:rgb(240, 240, 240);background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <input type="password" class="rounded-sm px-3 h-10 w-full" name="password" placeholder="Password.." id="" style="color:rgb(240, 240, 240);background: rgb(24, 42, 59);background-color: transparent;border-radius: 9px;box-shadow: rgb(43 52 59) 0px 0px 0px 1px inset;">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="rounded-md mt-5 text-white text-md font-bold w-full py-2" style="background:rgb(255, 186, 0);">
                        Login
                    </button>
                </div>
            </form>
            <div class="border-t mt-10" style="border-color: rgb(38, 43, 42)"></div>
            <p class="text-center pt-5" style="color: rgb(137, 144, 143)">New user? <a href="register" style="color:#FFBA00;">Sign up Here.</a></p>
        </div>
    </div>
</div>

</x-layout>