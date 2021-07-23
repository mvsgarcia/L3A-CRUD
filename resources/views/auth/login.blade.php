<x-guest-layout>
    <!-- bg -->
    <div class="relative w-screen h-screen bg-fixed bg-center bg-cover font-roboto"
        style="background-image: url({{asset('cargo-ship2.png')}})">
    
        <div class="flex flex-col w-full h-full lg:grid lg:grid-cols-5">
            <!--================================ nav mobile  ================================-->
            <div class="block w-screen h-20 px-4 mt-4 lg:hidden">
                <div class="flex flex-row justify-between w-full h-full">
                    <a href="#" class="flex justify-start"><img class="w-20 h-auto -mb-4" src="{{asset('logo-noname.png')}}"
                            alt="Logo no name"></a>
    
                    <div class="relative flex items-center justify-end cursor-pointer lg:hidden">
                        <!-- burger button -->
                        <button type="button" class="text-white hover:text-brand-1 focus:outline-none focus:text-brand"
                            aria-label="Toggle menu" onClick="toggleElement('navigation')">
                            <svg viewBox="0 0 24 24" class="w-8 h-8 fill-current">
                                <path
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
    
                        <!-- dropdown menu -->
                        <ul class="absolute right-0 z-20 hidden w-32 py-1 mt-2 overflow-hidden text-white bg-black shadow bg-opacity-70 top-10"
                            id="navigation">
    
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-brand">
                                    register</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-brand">
                                    book</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-brand">
                                    tracking</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center px-3 py-3 text-sm font-medium uppercase hover:text-brand">
                                    about us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- END of nav mobile-->
    
            <!--================================ text mobile ================================-->
            <div class="flex flex-col items-center justify-center block p-8 md:p-10 lg:hidden">
                <h1 class="text-3xl font-bold text-white md:text-5xl">Lorem Ipsum</h1>
                <p class="mt-2 text-sm leading-relaxed text-center text-white md:text-lg md:leading-loose ">Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
    
            <x-jet-validation-errors class="absolute mb-4 bg-white" />
            
            @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
            @endif
            
            <!--================================ login ================================-->
            <form method="post" action="{{ route('login') }}"
                class="flex flex-col items-center justify-center w-full h-full bg-gray-800 bg-opacity-75 lg:col-span-2">
                @csrf
    
                <img class="flex items-center justify-center hidden w-64 h-auto -mb-6 lg:block"
                    src="{{asset('logo-noname.png')}}" alt="Logo No Name">
    
                <h1 class="flex items-center justify-center text-lg text-white">Welcome Back</h1>
    
                <!-- input fields -->
                <div class="flex flex-col items-center mt-10 space-y-6">
                    <!-- email -->
                    <div class="flex items-center h-10 w-72">
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="w-full h-full text-xs text-gray-700 bg-white border-transparent appearance-none focus:border-brand focus:ring-0" required autofocus>
                    </div>
    
                    <!-- password -->
                    <div class="flex items-center h-10 w-72">
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="w-full h-full text-xs text-gray-700 bg-white border-transparent appearance-none focus:border-brand focus:ring-0" required autocomplete="current-password">
                    </div>
    
                    <div class="flex items-center h-10 w-72">
                        <p class="text-sm italic text-gray-300">Forgot password? <a href="#"><span
                                    class="text-sm italic text-white"> Click here </span></a> </p>
                    </div>
                </div>
    
                <div class="flex flex-col items-center mt-10 space-y-6">
                    <!-- login button -->
                    <button type="submit" class="flex items-center justify-center h-10 bg-brand w-72">
                        <p class="text-sm font-medium text-white capitalize">Log in</p>
                    </button>
    
                    <div class="flex items-center h-10 w-72">
                        <p class="text-sm italic text-gray-300">Don't have an account? <a href="#"><span
                                    class="text-sm italic text-white">Register now</span></a> </p>
                    </div>
                </div>
    
    
            </form> <!-- END of login -->
    
            <!--================================ nav && text desktop ================================-->
            <div class="hidden w-full h-full col-span-3 grid-rows-5 lg:block">
                <div class="flex flex-col w-full h-full px-40 text-white">
                    <!-- navigation -->
                    <div class="flex flex-row justify-between w-full h-32">
                        <a href="#" class="flex items-center justify-center font-medium text-white uppercase ">register</a>
                        <a href="#"
                            class="flex items-center justify-center font-medium uppercase text-brand focus:text-white ">book</a>
                        <a href="#"
                            class="flex items-center justify-center font-medium uppercase text-brand focus:text-white ">tracking</a>
                        <a href="#"
                            class="flex items-center justify-center font-medium uppercase text-brand focus:text-white ">about
                            us</a>
                    </div>
    
                    <div class="flex flex-col pt-32 pb-20 pr-20 2xl:pr-32 2xl:pt-28 mt-96">
                        <!-- text -->
                        <h1 class="text-6xl font-bold text-white ">Lorem Ipsum</h1>
                        <p class="mt-4 leading-loose text-white ">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
    
            </div> <!-- END of nav && text desktop -->
        </div>
    </div>
    
    </div><!-- END of nav bg -->
    
    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
                document.getElementById(elemID).classList.toggle("hidden");
                document.getElementById(elemID).classList.toggle("block");
                }
    </script>
</x-guest-layout>
