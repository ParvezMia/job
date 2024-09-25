<!-- ====== Navbar Section Start -->
<header x-data="{
    navbarOpen: false,
}" class="absolute top-0 left-0 z-50 w-full">
    <div class="container mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-60">
                <a href="{{ route('home') }}" class="block w-full py-5">
                    <img src="{{ Vite::asset('resources/image/logo.jpg') }}" alt="logo" class="block w-full"
                        style="width: 110px;" loading="lazy" />
                    <img src="{{ Vite::asset('resources/image/logo.jpg') }}" alt="logo" class="hidden w-full"
                        loading="lazy" />
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div>
                    <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                        id="navbarToggler"
                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                    </button>
                    <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                        class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow transition-all lg:static lg:bg-transparent lg:dark:bg-transparent lg:block lg:w-full lg:max-w-full lg:shadow-none xl:ml-11">
                        <ul class="block lg:flex">
                            <li>
                                <a href="{{ route('home') }}"
                                    class="flex py-2 text-base font-medium text-dark hover:text-green-500 lg:ml-10 lg:inline-flex">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"
                                    class="flex py-2 text-base font-medium text-dark hover:text-green-500 lg:ml-10 lg:inline-flex">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('service') }}"
                                    class="flex py-2 text-base font-medium text-dark hover:text-green-500 lg:ml-10 lg:inline-flex">
                                    Service
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('locations') }}"
                                    class="flex py-2 text-base font-medium text-dark hover:text-green-500 lg:ml-10 lg:inline-flex">
                                    Locations
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact-us') }}"
                                    class="flex py-2 text-base font-medium text-dark hover:text-green-500 lg:ml-10 lg:inline-flex">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                    <a href="{{ route('login') }}"
                        class="flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Login
                    </a>
                    <!-- <a href="javascript:void(0)"
                                                class="py-3 text-base font-medium text-white rounded-md bg-green-500 px-7 hover:bg-blue-dark">
                                                Sign Up
                                            </a> -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
