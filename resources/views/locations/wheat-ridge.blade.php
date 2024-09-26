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
                            #1 Reliable Tree Service <br>
                            wheat-ridge CO
                        </h1>
                        <h2 class="mb-8 mx-auto max-w-[900px] text-2xl text-dark ">
                            #1 Tree Service Wheat Ridge CO. Supreme Tree Service is your go-to tree service in Wheat
                            Ridge, CO. With over 20 years of experience, we are reliable, experienced, and responsible.
                            We offer a variety of tree services, so you can rest assured that your trees will be taken
                            care of. Contact us today for more information! . </h2>
                        <ul class="flex flex-wrap items-center  mx-auto">
                            <li>
                                <a href="tel:720-807-2785"
                                    class="https://treeservicedenverllc.com/wp-content/uploads/2023/04/384532686_1229429607751085_6032948851310107453_n-e1696378486684.jpg flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    <i class="fas fa-phone"></i> &nbsp;
                                    Call Now
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="relative bg-gray-100 pt-[200px] pb-[60px] lg:pt-[150px]">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                <div class="img-box h-full">
                    <img loading="lazy" loading="lazy" src="{{ Vite::asset('resources/image/service_bg.jpg') }}"
                        alt="About Us tailwind page" class="w-full h-full object-cover object-center">
                </div>
                <div class="lg:pl-[100px] flex flex-col justify-center">
                    <div class="data w-full">
                        <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                            Best Tree Service Provider In wheat-ridge, CO
                        </h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center mb-6">
                            Supreme Tree Service offers professional tree care services in wheat-ridge, CO. Our
                            experienced arborists provide quality workmanship and attention to detail on every project.
                            Our comprehensive services include tree trimming, removal, stump grinding, and emergency
                            tree services. We use precision pruning techniques and safe tree removal practices to ensure
                            exceptional results for our customers. We prioritize customer satisfaction and offer
                            reliable and timely service. Trust Supreme Tree Service for all your tree care needs and
                            rely on us to get the job done right and on time.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-tree text-green-500 mr-2"></i>
                                <span class="font-normal text-xl leading-8 text-gray-500">Professional Tree Care
                                    Experts</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-tree text-green-500 mr-2"></i>
                                <span class="font-normal text-xl leading-8 text-gray-500">Comprehensive Tree
                                    Services</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-tree text-green-500 mr-2"></i>
                                <span class="font-normal text-xl leading-8 text-gray-500">Reliable & Timely
                                    Service</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-tree text-green-500 mr-2"></i>
                                <span class="font-normal text-xl leading-8 text-gray-500">Quality Workmanship</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-tree text-green-500 mr-2"></i>
                                <span class="font-normal text-xl leading-8 text-gray-500">Customer Satisfaction
                                    Guaranteed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">HOW CAN WE HELP</h2>
            <p class="text-lg">
                If you’re looking for a reliable, experienced tree service provider, look no further than Supreme Tree
                Service. Our team of skilled arborists provide comprehensive services tailored to your needs with
                quality workmanship and punctual service. We prioritize customer satisfaction and strive to exceed
                expectations with friendly and knowledgeable staff that listens to your needs throughout the process.
                With our commitment to safety, precision pruning techniques, and safe tree removal practices, you can
                trust us with all of your tree care needs.
            </p>
        </section>

        <!-- Section: Why Us -->
        <section class="text-center">
            <h2 class="text-4xl font-bold mb-4">WHY US</h2>
            <p class="text-lg">
                If you’re looking for tree service, choose Supreme Tree Service! We offer comprehensive services,
                from tree trimming and removal to stump grinding and emergency tree services.
                Our team of skilled arborists have the knowledge and experience to provide professional tree care
                tailored to your needs.
                We also take pride in delivering high-quality workmanship with precision pruning techniques and safe
                removal practices.
                Plus, you can count on us for reliable and timely service – we’ll arrive on schedule and complete
                projects efficiently
                without compromising on quality. And most importantly, our goal is to exceed your expectations with
                exceptional customer service
                that ensures your complete satisfaction throughout the process.
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
                        <span class="block mb-2 text-lg font-semibold text-primary">
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
                                    What tree services do you offer?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                We offer a variety of tree services, including trimming, pruning, removal, stump
                                grinding, and emergency services
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
                                    What makes your tree service different?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Our team of skilled arborists provides professional tree care services tailored to your
                                specific needs. We have the knowledge, experience, and equipment to handle any
                                tree-related task with quality workmanship.
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
                                    How do you ensure customer satisfaction?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                We prioritize customer satisfaction and aim to exceed your expectations. Our friendly
                                and knowledgeable team is dedicated to providing exceptional customer service, listening
                                to your needs, and ensuring your complete satisfaction throughout the process.
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
                                    How long will it take to complete a tree service project?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                We strive to provide reliable and punctual service, arriving on schedule and completing
                                projects efficiently without compromising on quality. We’ll get the job done right and
                                on time.
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
                                    What are your core values?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq5" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Our core values are reliability, experience, and responsibility. We take pride in
                                delivering high-quality workmanship on every project.
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
            <h2 class="text-4xl font-bold mb-4 text-center">Responsible Tree Service in Wheat Ridge, CO from Supreme
                Tree Service</h2>
            <p class="text-lg">
                Are you looking for reliable and responsible tree service in Wheat Ridge, CO? Look no further than
                Supreme Tree Service! We have years of experience providing quality workmanship that is sure to exceed
                your expectations. Our attention to detail, precision pruning techniques, and safe tree removal
                practices ensure exceptional results every time. Here’s why you should choose us: <br>
                – Quality Workmanship: We take pride in delivering high-quality workmanship on every project.<br>
                – Precision Pruning Techniques: Our precision pruning techniques help keep your trees healthy and strong
                over the years.<br>
                – Safe Tree Removal Practices: We use safe tree removal practices so that you don’t have to worry about
                any damages or accidents occurring during the process.<br>
                – Customer Satisfaction Guaranteed: With our commitment to customer satisfaction, we guarantee that you
                will be happy with the results of our services.<br>
            </p>
        </section>

        <!-- Section: Why Us -->
        <section class="">
            <h2 class="text-4xl font-bold mb-4 text-center">Tree Service: Pruning, Removal, and Care When it comes to
                tree service, pruning is essential for keeping your trees healthy and safe.
            </h2>

            <p class="text-lg">
                I’m talking about selective trimming of branches so that the tree can maintain its natural shape and
                health. It also removes dead or diseased branches before they become a hazard. Pruning helps promote air
                circulation throughout the tree’s canopy, allowing sunlight to reach areas in need of extra nourishment.
                With proper pruning techniques, you can keep your trees looking their best year-round with minimal
                effort.
                <br><br>
                Tree removal is necessary when a tree poses a safety risk due to disease or structural damage caused by
                storms or other weather events. In some cases, trees may be too close together or have grown too large
                for their location – making them a potential danger if left unchecked. Professional arborists can assess
                the situation and determine whether removal is the right course of action for your particular landscape
                conditions.
                <br><br>
                Finally, care for your trees includes regular maintenance such as watering during dry spells and
                protecting from extreme temperatures in winter and summer months. Fertilizing according to season will
                keep them fed and growing strong while mulching around the base helps retain moisture during hot spells.
                Taking steps like these will ensure your trees stay healthy for years to come!
            </p>
        </section>
    </div>

    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class=" mb-12">
            <h2 class="text-4xl font-bold mb-4 text-center">The Value of Tree Service</h2>
            <p class="text-lg">
                Tree service is an important part of any property maintenance plan. It helps ensure that your trees stay
                healthy and looking their best, while also providing vital safety benefits. Here are just a few reasons
                why tree service is essential:
                <br>1. Protects against disease – Regular pruning and trimming can help keep trees free from diseases
                like fungal infections. This can save you the cost of having to replace diseased or dying trees in the
                future.
                <br>2. Reduces risk of damage – Properly maintained branches will be better able to withstand strong
                winds, heavy snow, and other environmental factors that could cause damage to your property or others
                around it.
                <br>3. Enhances curb appeal – Trimming and pruning can help make your landscape look neat and tidy,
                improving the overall aesthetic value of your home or business premises.
                <br>Whether you need assistance with regular maintenance work or emergency tree removal services,
                Supreme Tree Service provides reliable and timely solutions for all your needs in Wheat Ridge, CO!

            </p>
        </section>
    </div>

    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class=" mb-12">
            <h2 class="text-4xl font-bold mb-4 text-center">Why Invest in Professional Tree Service?</h2>
            <p class="text-lg">
                When it comes to taking care of your landscape, investing in professional tree service is a must. Not
                only can it help keep your trees healthy and looking great, but it can also save you money in the long
                run. Sure, you could try to take care of tree maintenance yourself – pruning branches or trimming leaves
                – but this often leads to more problems than solutions. Without proper knowledge and experience, you may
                end up doing more harm than good.
                <br><br>
                On the other hand, hiring a professional can ensure that your trees are well taken care of without
                risking any damage. With expertise and specialized tools, they are able to provide the best possible
                care for each individual tree while avoiding any unnecessary stress or damage that could occur from DIY
                methods. Plus, these professionals know what to look out for when it comes to potential pest
                infestations or diseases which can be further prevented with prompt treatment by an experienced expert.
                In addition, their services are designed to make sure that all aspects of the job are done correctly and
                efficiently so you don’t have to worry about anything going wrong down the line – saving you time and
                money now as well as in the future!
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
