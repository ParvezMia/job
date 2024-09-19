@extends('layout')

@section('content')
    <div class="relative bg-white pt-[160px] pb-[110px] lg:pt-[150px]"
        style="background: radial-gradient(circle, #ffffffc0 0%, #023047 100%), url('{{ asset('image/service_bg.jpg') }}') center / cover no-repeat;">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full text-center">
                    <div class="hero-content grid justify-center">
                        <h1
                            class="mb-5 text-4xl font-bold !leading-[1.208] text-base sm:text-[42px] lg:text-[40px] xl:text-5xl">
                            Our Service Areas
                        </h1>
                        <h2 class="mb-8 max-w-[480px] text-2xl text-dark ">
                            Although we provide services mostly on Denver, but we provide services to lots of locations
                            nearby.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Services Section Start -->
    <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-gray-100">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('denver') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Denver
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('northglenn') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Northglenn
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('henderson') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Henderson
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('broomfield') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Broomfield
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('wheat-ridge') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Wheat Ridge
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('lochbuie') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Lochbuie
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('golden') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Golden
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('brighton') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Brighton
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('west-minster') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            West Minster
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('lakewood') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Lakewood
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('fort-lupton') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Fort Lupton
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('boulder') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Boulder
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('thornton') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Thornton
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('lafayette') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Lafayette
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('englewood') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Englewood
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('aurora') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Aurora
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('louisville') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Louisville
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('littleton') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Littleton
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('castle-rock') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Castle Rock
                        </a>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('arvada') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Arvada
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4 py-4">
                    <div
                        class="rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 flex gap-6 items-center">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tree text-2xl"></i>
                        </div>
                        <a href="{{ route('highlands-ranch') }}"
                            class="text-dark text-2xl font-semibold hover:text-green-500  transition duration-150">
                            Highlands Ranch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Services Section End -->

    <!-- ====== Call To Action Section Start -->
    <section class="py-20 lg:py-[120px] bg-white">
        <div class="container mx-auto">
            <div class="relative z-10 overflow-hidden rounded bg-green-500 py-12 px-8 md:p-[70px]">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full px-4 lg:w-1/2">
                        <h2 class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[40px]/[48px] lg:mb-0">
                            <span class="xs:block"> Hire The Best Tree Service In Denver </span>
                        </h2>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="flex flex-wrap lg:justify-end">
                            <a href="{{ route('contact-us') }}"
                                class="inline-flex py-3 my-1 bg-green-200 font-medium text-dark transition rounded-md bg-secondary px-7 hover:bg-opacity-90">
                                Get a Quote
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="absolute top-0 left-0 z-[-1]">
                        <svg width="189" height="162" viewBox="0 0 189 162" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16" cy="-16.5" rx="173" ry="178.5"
                                transform="rotate(180 16 -16.5)" fill="url(#paint0_linear)" />
                            <defs>
                                <linearGradient id="paint0_linear" x1="-157" y1="-107.754" x2="98.5011"
                                    y2="-106.425" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.07" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <span class="absolute bottom-0 right-0 z-[-1]">
                        <svg width="191" height="208" viewBox="0 0 191 208" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="173" cy="178.5" rx="173" ry="178.5"
                                fill="url(#paint0_linear)" />
                            <defs>
                                <linearGradient id="paint0_linear" x1="-3.27832e-05" y1="87.2457" x2="255.501"
                                    y2="88.5747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.07" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Call To Action Section End -->
@endsection
