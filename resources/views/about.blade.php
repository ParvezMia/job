@extends('layout')

@section('content')
    <!-- ====== Hero Section Start -->
    <div class="relative bg-white pt-[160px] pb-[110px] lg:pt-[150px]"
        style="background: radial-gradient(circle, #ffffffc0 0%, #023047 100%), url('{{ Vite::asset('resources/image/service_bg.jpg') }}') center / cover no-repeat;">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full text-center">
                    <div class="hero-content grid justify-center">
                        <h1
                            class="mb-5 text-4xl font-bold !leading-[1.208] xs:text-[22px] sm:text-[42px] lg:text-[40px] xl:text-5xl">
                            About Us
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->
    <section class="relative bg-gray-100 pt-[200px] pb-[60px] lg:pt-[150px]">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8 relative ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                <div class="img-box h-full">
                    <img loading="lazy" loading="lazy" src="{{ Vite::asset('resources/image/about.jpg') }}"
                        alt="About Us tailwind page" class="w-full h-full object-cover object-center">
                </div>
                <div class="lg:pl-[100px] flex items-center">
                    <div class="data w-full">
                        <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                            About
                            Us </h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                            We are a tree service company based in Denver, Colorado, dedicated to providing top-quality tree
                            care to our clients. Our team of experienced professionals is committed to ensuring the health
                            and safety of your trees while enhancing the beauty and value of your property.
                            <br><br>
                            At Tree Service Denver LLC, we understand the importance of trees in our community and the
                            environment. We believe that every tree deserves the best care possible, and that’s exactly what
                            we provide. We offer a wide range of services, including tree trimming, pruning, removal, stump
                            grinding, and more.
                            <br><br>
                            Our team is equipped with the latest tools and equipment to handle any tree care job, big or
                            small. We take pride in our work and strive to exceed your expectations every time. We also
                            value safety, and we take all necessary precautions to ensure the safety of our team and your
                            property.
                            <br><br>
                            At Tree Service Denver LLC, we are passionate about trees and are committed to preserving them
                            for future generations. We believe in being responsible stewards of our environment and are
                            dedicated to using eco-friendly practices whenever possible.
                            <br><br>
                            We are proud to serve the Denver community and surrounding areas, and we look forward to working
                            with you. Contact us today for a free estimate and let us show you why we are the best tree
                            service company in Denver!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Call To Action Section Start -->

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
@endsection
