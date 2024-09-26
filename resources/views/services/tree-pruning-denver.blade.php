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
                            Tree Pruning Denver
                        </h1>
                        <h2 class="mb-8 mx-auto max-w-[900px] text-2xl text-dark ">
                            ##1Tree Pruning Denver | Looking for expert tree pruning services in Denver, CO? Look no further
                            than Tree Service Denver LLC. Our team prioritizes safety and care to ensure your trees are in
                            top shape. Contact us today for a consultation. </h2>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="relative bg-gray-100 pt-[200px] pb-[60px] lg:pt-[150px]">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1  gap-9">
                <div class="img-box h-full">
                    <img loading="lazy" loading="lazy" src="{{ Vite::asset('resources/image/service_bg.jpg') }}"
                        alt="About Us tailwind page" class="w-full h-full object-cover object-center">
                </div>
                <div class="lg:pl-[100px] flex flex-col justify-center">
                    <div class="data w-full">
                        <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                            #1 Tree Pruning Denver
                        </h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center mb-6">
                            Tree Service Denver LLC offers expert tree pruning services in Denver, CO. Our experienced and
                            professional staff ensures the safety of your property while providing comprehensive tree
                            pruning services at an affordable price. We guarantee prompt and reliable service with a focus
                            on customer satisfaction. Trust us to care for your trees with expertise, safety, and attention
                            to detail. Contact us today for all your tree pruning needs.
                        </p>
                    </div>
                </div>
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                        <div
                            class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 text-center">
                            <div class="w-full text-center flex justify-center">
                                <div
                                    class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md text-center">
                                    <i class="fas fa-seedling text-2xl text-white"></i>
                                </div>
                            </div>
                            <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                                We ensure quality
                            </h4>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                        <div
                            class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 text-center">
                            <div class="w-full text-center flex justify-center">
                                <div
                                    class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md text-center">
                                    <i class="fas fa-life-ring text-2xl text-white"></i>
                                </div>
                            </div>
                            <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                                We are dedicated
                            </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="container mx-auto p-8">

        <!-- Section: Why Us -->
        <section class="">
            <h2 class="text-4xl font-bold mb-4">HOW CAN WE HELP</h2>
            <p class="text-lg">
                At Tree Service Denver LLC, we understand the importance of maintaining healthy and attractive trees on your
                property. That’s why we offer expert tree pruning services to help keep your trees in top condition. With
                our years of experience and expertise, we can carefully trim away dead or damaged branches, shape your trees
                for optimal growth, and remove any hazardous limbs that could pose a safety risk. Our team is dedicated to
                ensuring the health and vitality of your trees, while also taking great care to protect your property and
                landscaping during the pruning process. Trust us to provide safe and effective tree pruning solutions that
                will leave you with beautiful, healthy trees for years to come


                <br>

                <br><span><i class="fas fa-check-circle text-2xl text-blue-600"></i> </span>Expert tree care solutions
                <br><span><i class="fas fa-check-circle text-2xl text-blue-600"></i> Affordable rates for all
                    <br><span><i class="fas fa-check-circle text-2xl text-blue-600"></i> Guaranteed customer
                        satisfaction
                        <br> <span><i class="fas fa-check-circle text-2xl text-blue-600"></i> Emergency tree services
                            available
                            <br> <span><i class="fas fa-check-circle text-2xl text-blue-600"></i> Prompt and reliable
                                service

                                <br>
                                At Tree Service Denver LLC, we understand that pruning your trees is an essential part of
                                maintaining their health and appearance. That’s why we offer expert tree pruning services
                                that are sure to leave your trees looking great and feeling healthy. Our experienced and
                                professional staff takes pride in every job we do, no matter how big or small. We use the
                                latest tools and techniques to ensure that our pruning services are safe, efficient, and
                                effective. Plus, our affordable pricing and prompt, reliable service make us the go-to
                                choice for all your tree care needs. So if you’re looking for quality tree pruning services
                                in Denver, CO, look no further than Tree Service Denver LLC!


            </p>
        </section>
    </div>

    <div class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-blue-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div id="testimonial-slider" class="max-w-5xl mx-auto">
                <h1 class="text-4xl font-bold text-center mb-8">Our Clients Love Us</h1>

                <div class="relative overflow-hidden">
                    <div class="testimonial-wrapper flex transition-transform duration-300 ease-in-out">
                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    I called, they came! I wanted to cut back tree branches to let in sunlight to grow
                                    grass.
                                    Tree Service Denver LLC crew, led by Shawn, arrived with equipment...
                                </p>
                                <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-green-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Sawri Hitlyn</h3>
                                        <p class="text-xs text-gray-500">2023-02-15</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more testimonial-slide divs here for each testimonial -->

                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    We had a huge tree fall on our house last week at 9pm. No wind or anything it just
                                    fell.
                                    Supreme Tree Service was the only company that would take it...
                                </p>
                                <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-blue-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Shawn B</h3>
                                        <p class="text-xs text-gray-500">2023-02-18</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more testimonial-slide divs here for each testimonial -->

                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    This wonderful tree service company saved my house from serious damage. Tree was
                                    leaning and and needed quick tree removal after calling them...
                                </p>
                                <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-blue-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Kai Fortin</h3>
                                        <p class="text-xs text-gray-500">2023-02-18</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more testimonial-slide divs here for each testimonial -->

                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    I am very satisfied with the job Tree Service Denver LLC service did for us. They
                                    are very professional and customer friendly. They clean up and...
                                </p>
                                <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-blue-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Alon Walker </h3>
                                        <p class="text-xs text-gray-500">2023-02-17</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more testimonial-slide divs here for each testimonial -->

                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    Shawn and his crew were excellent! They cut down and chorded the trees for us
                                    leaving the space immaculate. We really appreciate how prompt </p>
                                <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-blue-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Max Thompson </h3>
                                        <p class="text-xs text-gray-500">2023-02-17</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more testimonial-slide divs here for each testimonial -->

                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    We hired Supreme Tree Service to take out a large tree impinging on our driveway and
                                    looming over our roof. Shawn did an amazing job. Expert
                                </p> <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-blue-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Douglas Guidi </h3>
                                        <p class="text-xs text-gray-500">2023-02-08</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more testimonial-slide divs here for each testimonial -->

                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    I hired Tree Service Denver LLC to remove four large trees that were damaging my
                                    commercial building in downtown Denver. I was amazed at how
                                </p> <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-blue-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Carl Nordin </h3>
                                        <p class="text-xs text-gray-500">2023-02-05</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more testimonial-slide divs here for each testimonial -->

                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    Shawn and his team were fantastic. We had two large trees taken down and trees
                                    pruned in the front. The team was very professional and they
                                </p> <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-blue-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Conor Kelly </h3>
                                        <p class="text-xs text-gray-500">2023-02-05</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more testimonial-slide divs here for each testimonial -->

                        <div class="testimonial-slide w-full md:w-1/2 flex-shrink-0 px-4 mb-6">
                            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 h-full">
                                <div class="flex items-center mb-4 text-yellow-400">
                                    <span>★★★★★</span>
                                </div>
                                <p class="text-sm mb-4 h-24 overflow-hidden">
                                    Shawn and his crew did a phenomenal job trimming our fruit trees, the removal of a
                                    poorly maintained tree, stump grinding, and even removing
                                </p> <button class="text-sm text-gray-500 hover:underline">Read more</button>
                                <div class="flex items-center mt-4">
                                    <div
                                        class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3 bg-blue-500">
                                        <span>S</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-sm">Phillip Anderson </h3>
                                        <p class="text-xs text-gray-500">2023-02-04</p>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <!-- Add more testimonial-slide divs as needed -->

                    </div>

                    <!-- Left button -->
                    <button id="prev-slide" aria-label="Previous"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-blue-600 p-2 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        &#8592;
                    </button>

                    <!-- Right button -->
                    <button id="next-slide" aria-label="Next"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-blue-600 p-2 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        &#8594;
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-image flex items-center justify-center"
        style="background: radial-gradient(circle, #ffffffc0 0%, #023047 100%), url('{{ Vite::asset('resources/image/steps_bg.jpg') }}') center / cover no-repeat;">
        <div class="bg-black bg-opacity-50 w-full py-24">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-white text-center mb-12">Simple 3 Steps Process</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-900 bg-opacity-75 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Contact Us</h3>
                        <p class="text-gray-300">Give us a call or fill the contact form</p>
                    </div>
                    <div class="bg-gray-900 bg-opacity-75 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Set The Schedule</h3>
                        <p class="text-gray-300">Set a time when we are available, or fast service for emergency
                            causes.</p>
                    </div>
                    <div class="bg-gray-900 bg-opacity-75 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Tree Service Done!</h3>
                        <p class="text-gray-300">Our crew will arrive on scheduled time and provide you the services
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== FAQ Section Start -->
    <section x-data="{
        openFaq1: false,
        openFaq2: false,
        openFaq3: false,
        openFaq4: false,
        openFaq5: false,
        openFaq6: false
    }"
        class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                        <span class="block mb-2 text-lg font-semibold text-green-500">
                            FAQ
                        </span>
                        <h2 class="text-dark mb-4 text-3xl font-bold sm:text-[40px]/[48px]">
                            Any Questions? Look Here
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq1 = !openFaq1">
                            <div
                                class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq1 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark">
                                    What is tree pruning?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                We love keeping our customers informed! Tree pruning is the process of removing certain
                                branches or parts of a tree to improve its health, appearance, or safety.
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq2 = !openFaq2">
                            <div
                                class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq2 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark">
                                    Why is tree pruning important?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Regular tree pruning can benefit your trees in many ways, including promoting healthy
                                growth, removing dead or diseased branches, improving their appearance, and reducing the
                                risk of falling branches.
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq3 = !openFaq3">
                            <div
                                class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq3 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark">
                                    When is the best time to prune trees?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                The optimum time for tree pruning can vary depending on the species of tree, but generally,
                                it's best to prune during the dormant season or in the early spring before new growth
                                appears.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq4 = !openFaq4">
                            <div
                                class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq4 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark">
                                    How often should trees be pruned?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                The frequency of tree pruning depends on the species, age, and health of the tree. We
                                recommend scheduling a professional tree inspection to determine the best pruning schedule
                                for your trees.
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq5 = !openFaq5">
                            <div
                                class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq5 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark">
                                    Is tree pruning dangerous?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq5" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Tree pruning can be hazardous, especially when working at height or when dealing with large
                                branches. That's why we always prioritize safety and use proper equipment and techniques to
                                minimize risks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- ====== FAQ Section End -->

    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class="mb-12">
            <h2 class="text-4xl font-bold mb-4 text-center">Hire Tree Service Denver LLC for Safe Tree Pruning in Denver,
                CO</h2>
            <p class="text-lg">
                At Tree Service Denver LLC, we take safety seriously when it comes to tree pruning. Our experienced and
                professional staff are trained to perform high-quality work while keeping the safety of your property and
                surrounding areas a top priority.
                <br><br>
                When you choose us for your tree pruning needs, you can trust that we will:
                <br>
                <br>1. Thoroughly inspect the tree and surrounding area before starting any work.
                <br>2. Use proper equipment and techniques to ensure safe and efficient pruning.
                <br>3. Carefully remove all debris from the site.
                <br>4. Provide ongoing maintenance recommendations to keep your trees healthy and safe in the future.

                Our team is dedicated to providing exceptional service and results. We understand the importance of
                maintaining the health and beauty of your trees, while also ensuring the safety of your property and loved
                ones. Contact us today to schedule your tree pruning appointment with Tree Service Denver LLC.
                The Importance of Tree Health in Tree Pruning
                <br><br>
                Taking care of your trees is essential to maintaining their longevity and overall health. Proper tree
                pruning is one of the most effective ways to ensure that your trees are healthy, but it’s important to
                understand how tree health impacts pruning.
                <br><br>
                Firstly, healthy trees are more resilient and better able to withstand damage from storms or pests. When a
                tree is unhealthy, it becomes weaker and more susceptible to diseases and infestations. By keeping your
                trees healthy through regular pruning, you’re also protecting them against potential threats.
                <br><br>
                Secondly, pruning can actually improve the health of your trees by removing dead or diseased branches.
                Removing these branches allows for more sunlight and nutrients to reach the rest of the tree, promoting
                growth and overall health.
                <br><br>
                Thirdly, pruning helps shape your trees into a desired form, which not only looks aesthetically pleasing but
                also promotes proper growth patterns that can lead to improved health. This is especially important for
                younger trees, as shaping them early on can prevent future problems.
                <br><br>
                In addition to regular pruning, there are several other things you can do to promote the health of your
                trees:
                <br>
                <br>1. Mulch around the base of the tree to help retain moisture and regulate temperature.
                <br>2. Water your trees during dry spells to keep them hydrated.
                <br>3. Keep an eye out for signs of disease or infestation, such as discoloration or unusual growth
                patterns.
                <br>4. Hire a professional arborist to assess the health of your trees and provide recommendations for care.
                <br>5. Avoid damaging the roots or trunk of the tree, as this can compromise its health.
                <br>
                Overall, taking care of your trees should be a top priority if you want them to thrive. By incorporating
                regular pruning and other methods for promoting tree health, you’ll be able to enjoy the beauty and benefits
                of your trees for many years to come.
            </p>
        </section>

        <!-- Section: Why Us -->
        <section class="">
            <h2 class="text-4xl font-bold mb-4 text-center">Why is Tree Pruning Important?
            </h2>

            <p class="text-lg">
                At Tree Service Denver LLC, we believe that tree pruning is an essential aspect of maintaining healthy
                trees. Whether you have a small backyard or acres of land, proper pruning techniques can help to improve the
                vitality and longevity of your trees. Here are some reasons why we think tree pruning is so important:
                <br><br>
                <br><b>Safety</b>: Regularly pruning dead or weak branches helps prevent them from falling and causing
                damage or injury.
                <br><b>Aesthetics</b>: Pruning can enhance the appearance of your trees by removing unsightly or overgrown
                branches.
                <br><b>Health</b>: Removing diseased or damaged limbs can prevent the spread of disease and promote healthy
                growth.
                <br><b>Fruit production</b>: Proper pruning techniques can increase the yield of fruit trees and improve the
                quality of the fruit.
                <br><b>Property value</b>: Well-maintained trees add value to your property and make it more attractive to
                potential buyers.
                <br><br>
                Our experienced and professional staff at Tree Service Denver LLC understand the importance of tree pruning
                and the impact it can have on the overall health and beauty of your landscape. Let us help you maintain and
                care for your trees with our expert pruning services.
            </p>
        </section>
    </div>

    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class=" mb-12">
            <h2 class="text-4xl font-bold mb-4 text-center">Why is Tree Pruning Right for Our Needs?</h2>
            <p class="text-lg">
                There are many reasons why tree pruning should be a part of your regular maintenance routine. Here at Tree
                Service Denver LLC, we specialize in expert pruning that will benefit both you and your trees. Let’s take a
                look at some of the top reasons why you should consider our services:
                <br><br>
                <b>Improved Health</b>: Regular pruning removes dead or diseased branches, improving the overall health of
                your trees. This can help prevent future problems and extend the life of your trees.
                <br><b>Encourages Growth</b>: By removing select branches or limbs, we can encourage new growth in your
                trees. This can result in fuller foliage and a more attractive appearance.
                <br><b>Enhanced Appearance</b>: Expert pruning can also enhance the shape and overall appearance of your
                trees. With our attention to detail, we can create a beautiful, natural-looking canopy that complements your
                property.
                <br>
                Don’t wait until there’s a problem with your trees – let us help you maintain their health and beauty with
                our expert pruning services.
            </p>
        </section>
    </div>

    <section class="py-20 lg:py-[120px] bg-white">
        <div class="container mx-auto">
            <div class="relative z-10 overflow-hidden rounded bg-green-500 py-12 px-8 md:p-[70px]">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full px-4 lg:w-1/2">
                        <h2 class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[40px]/[48px] lg:mb-0">
                            <span class="xs:block"> Hire The Best Tree Service </span>
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
                                transform="rotate(180 16 -16.5)" fill="url(#paint0_linear)"></ellipse>
                            <defs>
                                <linearGradient id="paint0_linear" x1="-157" y1="-107.754" x2="98.5011"
                                    y2="-106.425" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.07"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <span class="absolute bottom-0 right-0 z-[-1]">
                        <svg width="191" height="208" viewBox="0 0 191 208" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="173" cy="178.5" rx="173" ry="178.5"
                                fill="url(#paint0_linear)"></ellipse>
                            <defs>
                                <linearGradient id="paint0_linear" x1="-3.27832e-05" y1="87.2457" x2="255.501"
                                    y2="88.5747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.07"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </section>
@endsection
