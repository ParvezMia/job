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
                            Brighton CO
                        </h1>
                        <h2 class="mb-8 mx-auto max-w-[900px] text-2xl text-dark ">
                            #1 Tree Service Brighton. Supreme Tree Service is a reliable and professional tree care
                            company providing comprehensive services to the Brighton, CO area. Our experienced certified
                            arborists and trained technicians are committed to delivering quality workmanship and
                            customer satisfaction. We offer a range of tree care services including trimming, pruning,
                            removal, stump grinding, planting, fertilization, disease diagnosis, and insect control.
                            Safety is always our top priority and we use the latest techniques and equipment to ensure
                            that every job is done to the highest standards. Contact us today for a free consultation
                            and let us show you why we are the number one choice for all your tree service needs. </h2>
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
            <div class="md:flex">
                <div class=" md:w-2/3">

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="img-box h-full">
                            <img loading="lazy" loading="lazy" src="{{ Vite::asset('resources/image/service_bg.jpg') }}"
                                alt="About Us tailwind page" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="data w-full">
                                <h2
                                    class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                                    Best Tree Service Provider In Brighton, CO
                                </h2>
                                <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center mb-6">
                                    We at Tree Service Denver LLC are here to help you with all of your tree service needs.
                                    We
                                    understand that having a healthy, beautiful landscape is important and we’re committed
                                    to
                                    providing reliable, professional services that you can trust. Our team will work hard to
                                    ensure that all of your tree service requirements are met quickly and efficiently so you
                                    can
                                    enjoy the best possible results from our services.
                                    <br><br>
                                    We understand how important it is to have reliable, professional, and trustworthy tree
                                    service. That’s why we’re proud to offer top-quality tree care services at competitive
                                    prices. Our certified arborists and trained technicians use the latest techniques and
                                    equipment to deliver efficient, effective, and long-lasting results that you can trust.
                                    We
                                    prioritize safety, so you can rest assured that your trees will be in good hands with
                                    us.
                                    Plus, we guarantee customer satisfaction on every job! So if you need tree trimming,
                                    pruning, removal, stump grinding, or any other tree care service, give us a call – we’ll
                                    take care of everything for you.
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
                <div class="w-full md:w-1/3 px-4 md:sticky md:top-24 self-start">
                    <div class="h-full" style="min-height: 800px;">
                        @include('particial.instant-quote-form')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container -->
    <div class="container mx-auto p-8">
        <!-- Section: How Can We Help -->
        <section class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Trustworthy Tree Service in Brighton, CO</h2>
            <p class="text-lg">
                Are you looking for a reliable tree service provider in the Brighton area? Look no further than Tree
                Service Denver LLC! We are committed to providing our customers with quality and trustworthy services.
                Our team of experienced professionals have the necessary equipment and knowledge to handle any job
                safely and efficiently. From trimming trees close to buildings or other structures to dealing with power
                lines, we have the expertise to make sure every job is done right. We understand that safety is always a
                top priority, so you can count on us to take all the necessary precautions while completing your
                project. With years of experience under our belts, you can trust us to get the job done quickly and
                correctly. Call us today to learn more about how we can help with your tree service needs!
                <br><br>Pruning, Removal, and Planting for Tree Service

                <br><br>Pruning a tree can be an essential part of tree service. It helps to maintain a healthy growth
                pattern, and keeps the tree from growing too large or becoming misshapen due to overcrowding. To prune
                trees correctly requires skill and knowledge, as cutting away the wrong branches can leave the tree
                vulnerable to disease and pests. I’m sure you want your trees to look their best and remain in good
                health; so when it comes to pruning, let experienced professionals handle it!

                <br><br>Removing dead or dying trees can also be necessary for tree service. Diseased or hazardous trees
                that have been weakened by storms or other events should be cut down and removed before they become a
                danger. This type of work is not only dangerous, but also requires specialized equipment to ensure
                safety and accuracy. Don’t risk life and limb trying to DIY this important job – instead, trust skilled
                experts to get rid of old trees with ease.

                <br><br>Planting new trees is a great way to add beauty and value to any property. But planting a tree
                isn’t as easy as simply digging a hole and plunking it in there. Trees require proper soil preparation,
                sunlight exposure, and watering if they’re going to thrive. With so many factors involved, why take
                chances? Let professional tree planters help make sure your new trees stay healthy and vibrant for years
                to come.

                <br><br>When it comes to caring for your trees, who do you trust? With so much riding on the success of
                your trees, it pays to hire experienced arborists who are knowledgeable about all aspects of tree care.
                After all, aren’t you worth it?
            </p>
        </section>

        <!-- Section: Why Us -->
        <section class="">
            <h2 class="text-4xl font-bold mb-4 text-center">Why Is Tree Service Important?</h2>
            <p class="text-lg">
                When it comes to trees, safety is always the top priority. Not only can falling branches cause serious
                injury or damage to property, but dead and decaying trees are also a potential hazard. That’s why having
                professional tree service from Tree Service Denver LLC is so important. We have all the necessary
                equipment and experience needed to safely remove unhealthy trees and prune away any hazardous limbs. In
                addition, our experts can help identify and treat problems with pests, disease and other issues that may
                be affecting your trees. With us on the job, you can rest assured that your trees will stay healthy and
                safe for years to come.

                <br><br>

                Taking Care of Trees: An Essential Service
                <br><br>
                We all know the importance of taking care of our environment, and trees play an essential role in that.
                But many of us don’t have the time or expertise to properly tend to them. This is where tree service
                companies come in. These professionals are trained to safely and effectively trim, prune, and remove
                trees. According to a recent study, approximately 40% of homeowners hire a tree service at least once
                every year.
                <br><br>
                When it comes to finding a reliable and reputable tree service company, there are a few key factors you
                should look for:
                <br>– Experience: Always choose a tree service with years of experience and proper certifications.
                <br>– Safety: Make sure the company takes safety seriously by using the right equipment, having proper
                insurance and following industry standards.
                <br>– Quality: Look for a team that offers quality services and uses the best materials.
                <br>– Customer Satisfaction: Finally, make sure the tree service has a track record of customer
                satisfaction with competitive pricing, prompt and courteous service, and a satisfaction guarantee.
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
                                    What kind of services does Supreme Tree Service offer?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                We offer comprehensive tree care services, including tree trimming, pruning, removal,
                                stump grinding, tree planting, fertilization, disease diagnosis, and insect control.
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
                                    What makes Supreme Tree Service stand out?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                We take pride in our work and ensure that every job is done to the highest standards. We
                                also prioritize safety and use the latest techniques and equipment to deliver efficient,
                                effective, and long-lasting results.
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
                                    What guarantees do you provide?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                We offer competitive pricing and a satisfaction guarantee. We’re also happy to provide
                                references and testimonials from satisfied customers.
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
                                    What is your core value?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                Our core values are reliability, professionalism, and trustworthiness.
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
