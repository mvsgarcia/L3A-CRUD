<x-app-layout>
    <!-- bg -->
    <div class="relative flex flex-col items-center w-screen h-screen gap-20 bg-fixed bg-center bg-cover font-roboto"
        style="background-image: url({{asset('cargo-ship3.png')}})">

        <!-- navigation mobile -->
        <div class="block w-screen h-20 px-4 bg-black bg-opacity-30 md:hidden">
            <div class="flex flex-row justify-between w-full h-full">
                <a href="#" class="flex justify-start"><img class="w-20 h-20 mt-2" src="{{asset('logo-noname.png')}}"
                        alt="Logo no name"></a>

                <div class="relative flex items-center justify-end cursor-pointer md:hidden">
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
                    <ul class="absolute right-0 z-20 hidden w-32 py-1 mt-2 overflow-hidden text-white bg-black shadow bg-opacity-70 top-20"
                        id="navigation">

                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-3 text-sm font-medium uppercas hover:text-brand">
                                register</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-3 text-sm font-medium uppercasehover:text-brand">
                                book</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-3 text-sm font-medium uppercasehover:text-brand">
                                tracking</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center px-3 py-3 text-sm font-medium uppercasehover:text-brand">
                                about us</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div> <!-- END of navigation mobile -->

        <!-- navigation desktop -->
        <div class="hidden w-10/12 px-20 bg-black h-28 bg-opacity-30 lg:px-72 md:block">
            <div class="flex flex-row items-center justify-between w-full h-full">
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-brand">register</a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-brand ">book</a>
                <a href="#" class="flex items-center justify-center"><img class="h-auto mt-4 w-28"
                        src="{{asset('logo-noname.png')}}" alt="Logo"></a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-brand ">tracking</a>
                <a href="#"
                    class="flex items-center justify-center font-medium text-white uppercase hover:text-brand ">about
                    us</a>
            </div>
        </div> <!-- END of navigation desktop -->


        <!-- registration form -->
        <form method="post" action="{{ route('users.update', $user->id) }}"
            class="flex flex-col items-center justify-center w-3/4 bg-white h-2/3 md:w-3/5 md:h-3/5 lg:w-3/12 lg:h-3/5 ">
            @method('patch')
            @csrf

            <!-- input fields -->
            <div
                class="flex flex-col items-center mt-4 space-y-4 md:mt-10 2xl:mt-10 lg:mt-4 md:space-y-6 lg:space-y-5 2xl:space-y-6">
                <h1 class="mb-4 text-2xl font-medium text-gray-700 capitalize md:text-3xl lg:text-4xl ">edit user</h1>

                <!-- name -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="text" name="name" id="name" placeholder="Name" value="{{$user->name}}"
                        class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand focus:ring-0">
                </div>

                <!-- email -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="text" name="email" id="email" placeholder="Email" value="{{$user->email}}"
                        class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand focus:ring-0">
                </div>

                <!-- password -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <input type="password" name="password" id="password" placeholder="Password" value="{{$user->password}}"
                        class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand focus:ring-0">
                </div>

                <!-- role -->
                <div class="flex items-center w-56 h-8 md:h-10 md:w-72">
                    <select id="admin" name="admin"
                        class="w-full h-full text-xs text-gray-700 bg-gray-200 border-transparent appearance-none focus:border-brand focus:ring-0">
                        <option disabled selected>Role</option>
                        <option value="0" {{ $user->admin == 0 ? 'selected' : '' }}>User</option>
                        <option value="1" {{ $user->admin == 1 ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>

            </div>

            <div class="flex flex-col items-center mt-10 space-y-2 lg:mt-8 2xl:mt-10">
                <!-- update button -->
                <button type="submit" class="flex items-center justify-center w-48 h-12 bg-brand">
                    <p class="text-sm font-medium text-white capitalize">Update</p>
                </button>

            </div>

        </form> <!-- END of registration form -->



    </div> <!-- END of bg -->


    <!--======== JS for dropdown menu ========-->
    <script>
        function toggleElement(elemID){
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
            }
    </script>
</x-app-layout>