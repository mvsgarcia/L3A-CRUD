<x-app-layout>
    <!-- bg -->
    <div class="relative w-screen h-screen bg-fixed bg-center bg-cover font-roboto"
        style="background-image: url({{asset('cargo-ship2.png')}})">

        <div class="flex flex-col w-full h-full lg:grid lg:grid-cols-5">
            <!--================================ nav mobile  ================================-->
            <div class="block w-screen h-20 px-4 mt-4 lg:hidden bg-opacity-10">
                <div class="flex flex-row justify-between w-full h-full">
                    <a href="#" class="flex justify-start"><img class="w-20 h-auto -mb-4"
                            src="{{asset('logo-noname.png')}}" alt="Logo no name"></a>

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
            <div class="flex flex-col items-center justify-center block px-8 py-6 md:p-10 lg:hidden">
                <h1 class="text-3xl font-bold text-white md:text-5xl">Lorem Ipsum</h1>
                <p class="mt-2 text-sm leading-relaxed text-center text-white md:text-lg md:leading-loose ">Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>

            <!--================================ create ================================-->
            <form method="post" action="{{ route('users.store') }}"
                class="flex flex-col items-center justify-center w-full h-full bg-gray-800 bg-opacity-75 lg:col-span-2">
                @csrf

                <img class="flex items-center justify-center hidden h-auto w-28 lg:block"
                    src="{{asset('logo-noname.png')}}" alt="Logo No Name">

                <h1 class="flex items-center justify-center text-lg text-white lg:mt-4 2xl:mt-10 ">Create an Account
                </h1>

                <!-- input fields -->
                <div
                    class="flex flex-col items-center mt-4 space-y-4 md:mt-10 2xl:mt-10 lg:mt-4 md:space-y-6 lg:space-y-5 2xl:space-y-6">
                    <!-- name -->
                    <div class="flex items-center h-10 w-72">
                        <input type="text" name="name" id="name" placeholder="Name" 
                            class="w-full h-full text-xs text-gray-700 bg-white border-transparent appearance-none focus:border-brand focus:ring-0"
                            required autofocus>
                    </div>

                    <!-- email -->
                    <div class="flex items-center h-10 w-72">
                        <input type="email" name="email" id="email" placeholder="Email" 
                            class="w-full h-full text-xs text-gray-700 bg-white border-transparent appearance-none focus:border-brand focus:ring-0" required>
                    </div>

                    <!-- password -->
                    <div class="flex items-center h-10 w-72">
                        <input type="password" name="password" id="password" placeholder="Password" 
                            class="w-full h-full text-xs text-gray-700 bg-white border-transparent appearance-none focus:border-brand focus:ring-0" required>
                    </div>

                    <!-- role -->
                    <div class="flex items-center h-10 w-72">
                        <select id="admin" name="admin"
                            class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand focus:ring-0">
                            <option disabled selected>Role</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>

                    <!-- remember me -->
                    <div class="flex items-center h-10 w-72">
                        <a href="#" class="text-xs italic text-white md:text-sm">Remember me?</a>
                    </div>
                </div>

                <div class="flex flex-col items-center mt-4 md:mt-10 lg:mt-8 2xl:mt-10">
                    <!-- create button -->
                    <button type="submit" class="flex items-center justify-center h-10 bg-brand w-72">
                        <p class="text-sm font-medium text-white capitalize ">Create Account</p>
                    </button>
                </div>


            </form> <!-- END of login -->

            <!--================================ nav && text desktop ================================-->
            <div class="hidden w-full h-full col-span-3 grid-rows-5 lg:block">
                <div class="flex flex-col w-full h-full px-40 text-white">
                    <!-- navigation -->
                    <div class="flex flex-row justify-between w-full h-32">
                        <a href="#"
                            class="flex items-center justify-center font-medium text-white uppercase">register</a>
                        <a href="#"
                            class="flex items-center justify-center font-medium uppercase text-brand focus:text-white">book</a>
                        <a href="#"
                            class="flex items-center justify-center font-medium uppercase text-brand focus:text-white">tracking</a>
                        <a href="#"
                            class="flex items-center justify-center font-medium uppercase text-brand focus:text-white">about
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