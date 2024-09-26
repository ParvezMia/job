@extends('layout')

@section('content')
    <div class="relative bg-white pt-[160px] pb-[110px] lg:pt-[150px]"
        style="background: radial-gradient(circle, #ffffffc0 0%, #023047 100%), url('{{ Vite::asset('resources/image/service_bg.jpg') }}') center / cover no-repeat;">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full text-center">
                    <div class="hero-content grid justify-center">
                        <h1
                            class="mb-5 text-4xl font-bold !leading-[1.208] xs:text-[22px] sm:text-[42px] lg:text-[40px] xl:text-5xl">
                            #1 Reliable Tree Service <br>
                            Lochbuie CO
                        </h1>
                        <h2 class="mb-8 mx-auto max-w-[900px] text-2xl text-dark ">
                            #1 Tree Service Lochbuie CO.Supreme Tree Service is your reliable, professional, and
                            sustainable tree service for Lochbuie, CO. I offer everything from tree trimming and pruning
                            to stump grinding and removal. I'm committed to providing exceptional customer service and
                            getting the job done right. Contact me today for a free estimate. </h2>
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
                            Best Tree Service Provider In Lochbuie, CO
                        </h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center mb-6">
                            Supreme Tree Service is a professional tree care provider located in Lochbuie, CO. Our team
                            of skilled arborists offers comprehensive tree services, including trimming, removal, stump
                            grinding, and emergency services. We take pride in delivering quality workmanship with
                            precision pruning techniques and safe tree removal practices. We are committed to providing
                            reliable and punctual service while prioritizing customer satisfaction and exceeding
                            expectations. With our core values of reliability, professionalism, and sustainability, you
                            can count on us for all your tree care needs. Contact Supreme Tree Service today for the
                            best tree service in the area!
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
                At Supreme Tree Service, we provide reliable, professional, and sustainable tree service to customers in
                Lochbuie, CO. We understand how important trees are to the environment and to our customers, so we take
                great care in providing the best services possible. We offer a variety of services including trimming,
                pruning, removal, and stump grinding to ensure that your trees stay healthy and aesthetically pleasing.
                Our experienced professionals work quickly and efficiently to get the job done right, so you can trust
                us to keep your property looking great
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
            <h2 class="text-4xl font-bold mb-4 text-center">Get Sustainable Tree Service with Supreme Tree Service in
                Lochbuie, CO</h2>
            <p class="text-lg">
                When you need tree service done right and on time, look no further than Supreme Tree Service. Located in
                Lochbuie, Colorado, they provide reliable and timely service that is sure to leave your property looking
                great. Their commitment to sustainability means you can trust that their work won’t take a toll on the
                environment. Plus, they use modern techniques and equipment to get the job done quickly and efficiently
                – like a well-oiled machine! With Supreme Tree Service, you can rest assured that your trees will be
                taken care of properly so they can continue to thrive for years to come. So don’t wait any longer – let
                the experts at Supreme Tree Service help make your outdoor space beautiful again!
            </p>
        </section>

        <!-- Section: Why Us -->
        <section class="">
            <h2 class="text-4xl font-bold mb-4 text-center">Tree Service: Trimming, Removal, and Pruning
                When it comes to tree service, trimming, removal, and pruning are three of the most important services
                offered.
            </h2>

            <p class="text-lg">
                Trimming is the process of using sharp tools to remove dead or overgrown branches from a tree. By
                removing these branches, you’ll help a tree stay healthy and strong while also increasing its aesthetic
                appeal. Pruning is similar to trimming but focuses on encouraging new growth in trees by removing
                specific parts of them. This can help improve a tree’s health and structure while also allowing more
                sunlight to reach other plants in your garden. Lastly, if a tree has become diseased or damaged beyond
                repair then it may be necessary to have it removed entirely. Doing this safely requires specialized
                equipment operated by experienced professionals so that no further damage is caused during the removal
                process. All three services – trimming, pruning and removal – are essential for maintaining healthy
                trees in any landscape setting.
            </p>
        </section>
    </div>

    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class=" mb-12">
            <h2 class="text-4xl font-bold mb-4 text-center">Why is Tree Service Important?</h2>
            <p class="text-lg">
                Having a reliable tree service can be essential for the health and safety of any property. It’s
                important to have regular maintenance performed on trees, such as trimming and pruning, to prevent them
                from becoming hazardous or diseased. Besides that, it can also give your yard a beautiful aesthetic look
                when done properly. I’m sure you want your home or business to look great, so having an experienced tree
                service is key. At Supreme Tree Service, we have the expertise and knowledge necessary to provide
                quality services that will keep your trees healthy and looking their best.

            </p>
        </section>
    </div>

    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class=" mb-12">
            <h2 class="text-4xl font-bold mb-4 text-center">Investing in Tree Service: Keep Your Trees Healthy & Safe
            </h2>
            <p class="text-lg">
                Taking care of the trees in your yard can seem like a daunting task. But it doesn’t have to be! With
                professional tree service, you can make sure that your trees are healthy and safe without having to lift
                a finger. What’s more, you’ll keep them looking great year-round. So why not invest in tree service
                today?

                <br>At Supreme Tree Service, we offer comprehensive services such as:
                <br>1. Trimming and removal
                <br>2. Stump grinding
                <br>3. Emergency tree services
                <br>4. Other solutions for all your tree care needs
                <br>You can count on us to provide quality workmanship and attention to detail every time. Plus, with
                our years of experience in the industry, you can trust that your trees will be taken care of properly.
                So why wait? Get the peace of mind that comes from knowing your trees are well cared for with help from
                Supreme Tree Service!
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
