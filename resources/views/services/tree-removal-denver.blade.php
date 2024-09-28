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
                            Tree Removal Denver
                        </h1>
                        <h2 class="mb-8 mx-auto max-w-[900px] text-2xl text-dark ">
                            #1 Tree Removal Denver | Looking for reliable and professional tree service in Denver, CO?
                            Look no further than Tree Service Denver LLC. We prioritize safety while providing top-notch
                            tree removal services. Trust us to take care of all your tree needs </h2>

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
                            #1 Best Rated Tree Removal In Denver
                        </h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center mb-6">
                            Tree Service Denver LLC offers expert tree removal services in Denver, CO. Our experienced
                            and professional staff ensures safe and efficient removal of trees while keeping your
                            property and surroundings intact. We offer affordable pricing and guarantee prompt and
                            reliable service. Trust us to provide the highest level of customer satisfaction with our
                            core values of professionalism, reliability, and safety. Contact us today for all your tree
                            removal needs.
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
                At Tree Service Denver LLC, we understand how important it is to keep your property safe and
                well-maintained. That’s why we offer top-notch tree removal services that are designed to meet all of
                your needs. With our professional team of experts, you can rest assured that your trees will be removed
                safely and efficiently. We use state-of-the-art equipment and techniques to ensure that your property
                remains intact and free from any damage. Whether you need a single tree removed or an entire grove
                cleared out, we’ve got you covered. So if you’re in the Denver area and need help with tree removal,
                don’t hesitate to give us a call!


                <br>

                <br><span><i class="fas fa-check-circle text-2xl text-blue-600"></i> </span>Experienced and Professional
                Staff
                <br><span><i class="fas fa-check-circle text-2xl text-blue-600"></i> Affordable Pricing Guaranteed
                    <br><span><i class="fas fa-check-circle text-2xl text-blue-600"></i> Prompt and Reliable Service
                        <br> <span><i class="fas fa-check-circle text-2xl text-blue-600"></i> Comprehensive Tree
                            Services Offered
                            <br> <span><i class="fas fa-check-circle text-2xl text-blue-600"></i> Safety is Our Priority

                                <br>
                                At Supreme <b>Tree Service Denver</b>, we believe that our customers deserve the best
                                when it comes to tree removal services. That’s why we have an experienced and
                                professional staff who are dedicated to providing comprehensive tree services at
                                affordable prices. We understand how stressful and dangerous it can be to remove a tree,
                                which is why safety is always our top priority. You can count on us for prompt and
                                reliable service that guarantees customer satisfaction. When you choose us for your tree
                                removal needs, you can trust that we will treat your property with the utmost care and
                                respect. Let us take care of your tree removal needs so you can focus on more important
                                things.


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
                                    What's the process for tree removal?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                At Tree Service Denver LLC, we start by evaluating the tree's size, location, and
                                health. Then, we create a plan to safely and efficiently remove the tree, taking into
                                account any obstacles or potential hazards.
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
                                    Can you remove trees in tight spaces or near buildings?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Yes, we have the experience and expertise to remove trees in even the most challenging
                                locations. Our team will carefully assess the area and develop a plan to safely remove
                                the tree without causing damage to any nearby structures.
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
                                    How long does tree removal typically take?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                The duration of tree removal depends on a variety of factors, including the size and
                                location of the tree. However, our team works quickly and efficiently to complete the
                                job as soon as possible without sacrificing quality.
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
                                    Is tree removal expensive?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                At Tree Service Denver LLC, we strive to provide affordable pricing for all of our
                                services, including tree removal. Our team will provide you with a detailed quote before
                                beginning any work, so you know exactly what to expect in terms of cost.
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
                                    What does tree removal involve?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq5" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Tree removal involves the careful cutting down and removal of a tree from its current
                                location.
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                        <button class="flex w-full text-left faq-btn" @click="openFaq6 = !openFaq6">
                            <div
                                class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                                <svg :class="openFaq6 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mt-1 text-lg font-semibold text-dark">
                                    How long does tree removal typically take?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq6" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Tree removal typically takes a few hours to complete, depending on the size and
                                complexity of the tree.
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

    <section class="text-gray-600 body-font relative" style="height: 500px;">
        <div class="absolute inset-0 bg-gray-300">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d392661.4130065212!2d-104.8957246!3d39.7471239!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7fbfa6842607%3A0xccaf5737e5619324!2sTree%20Service%20Denver!5e0!3m2!1sen!2sus!4v1696858527468!5m2!1sen!2sus"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class="mb-12">
            <h2 class="text-4xl font-bold mb-4 text-center">Hire Tree Service Denver LLC in Denver, CO for Efficient
                Tree Removal</h2>
            <p class="text-lg">
                Are you looking to hire a reliable tree service provider in Denver, CO? Look no further than Tree
                Service Denver LLC! We take pride in providing professional and efficient tree removal services that
                will get the job done quickly. Our team of experienced arborists is well-equipped with the high-grade
                tools necessary to ensure safe, speedy, and satisfactory results. With our 100% satisfaction guarantee,
                you can trust us to provide quality work every time. Whether you need tree trimming, pruning, or
                complete removal, we have the expertise to tackle any project. Plus, with our competitive rates, you’ll
                be sure to stay within your budget. So don’t wait – call Tree Service Denver LLC today to get started on
                your tree removal project!
            </p>
        </section>

        <!-- Section: Why Us -->
        <section class="">
            <h2 class="text-4xl font-bold mb-4 text-center">The Importance of Safety, Space, and Aesthetics in Tree
                Removal
            </h2>

            <p class="text-lg">
                When it comes to tree removal, safety, space, and aesthetics are all key considerations. It’s important
                that the process is performed with care, so no one gets hurt or property damaged. We also need adequate
                space around the tree for workers to access and remove the tree safely, without having to worry about
                obstacles such as buildings, power lines, and other trees. Finally, when a tree is removed, we want to
                make sure that it’s done in a way that looks aesthetically pleasing afterward; nobody wants an unsightly
                empty spot where there used to be foliage.
                <br><br>
                When removing a tree, safety must always come first. This means proper protective equipment should be
                worn by all involved personnel, including hard hats, safety glasses, and heavy-duty gloves. In addition,
                any necessary permits from local authorities should be obtained before tree removal begins. Furthermore,
                if the tree is near any kind of power line, utility pole, or building, expert advice should be sought on
                how to proceed in order to minimize the risk of harm or damage.
                <br><br>
                Space is another crucial component of successful tree removal. Workers need enough room to maneuver
                their tools and get at the tree, but they also need to keep an eye out for things like low-hanging
                branches, roots, and other hazards. If the tree is located close to a structure, extra caution has to be
                taken to avoid causing any accidental damage. Additionally, if there are many other trees nearby, they
                might have to be pruned back in order to give more room and better visibility.
                <br><br>
                Aesthetic appeal is also an important factor when it comes to tree removal. After the tree has been cut
                down and removed, you don’t want to be left with a huge, ugly scar in your landscape. Instead, careful
                consideration should be given to how the remaining area will look once finished. With this in mind,
                professional arborists can help you determine which plants and shrubs would be best suited to fill in
                the empty space. They’ll also advise on appropriate mulching techniques to ensure the new site looks
                neat and tidy.
                <br><br>
                In conclusion, tree removal requires expertise and experience in order to be done correctly. Ensuring
                safety, creating ample space, and preserving aesthetics are all essential components of successful tree
                removal.
            </p>
        </section>
    </div>

    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class=" mb-12">
            <h2 class="text-4xl font-bold mb-4 text-center">Protect Your Home & Property with Professional Tree
                Removal!</h2>
            <p class="text-lg">
                At Tree Service Denver LLC, we know how important it is to keep your home and property safe. Trees that
                are not properly maintained can present a danger to you and your family, as well as potentially damage
                your house or yard. That’s why our tree removal services are here to help you take charge of the
                situation and ensure your safety.
                <br><br>
                We have been providing professional tree removal services to residents in the Denver area for over 20
                years. Our experienced team uses the latest tools and techniques to remove trees safely and efficiently.
                We also provide stump grinding and post-removal clean-up services so you won’t be left with any mess.
                Whether you need to clear an entire lot or just one tree, you can trust us to get the job done right.
                Don’t let unsafe trees cause damage to your home – call us today for fast, reliable tree removal
                services!
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
                            <a href="{{ route('free-estimations') }}"
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
