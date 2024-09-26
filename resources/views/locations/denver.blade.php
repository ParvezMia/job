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
                            Tree Service Denver <br>
                            #1 Voted Tree Company In Denver Co
                        </h1>
                        <h2 class="mb-8 mx-auto max-w-[900px] text-2xl text-dark ">
                            Tree Service Denver LLC is a reliable and professional tree service provider in Denver, CO.
                            We are committed to providing our customers with trustworthy, reliable, and professional
                            tree services. Our experienced staff are dedicated to providing quality services for all
                            your tree service needs. Contact us today for a free consultation! </h2>
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
    <!-- ====== Hero Section End -->
    <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-gray-100">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[890px] text-center lg:mb-20">
                        <span class="text-green-500 mb-2 block text-lg font-semibold">
                            Our Services
                        </span>
                        <h2 class="text-dark mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                            #1 Denver Tree Service Provider | Reliable Tree Removal In Denver
                        </h2>
                        <p class="text-body-color text-base">
                            Tree Service Denver LLC is a locally owned business offering the best-rated tree service in
                            Denver, CO. Our experienced team is fully licensed and insured to provide quality services
                            you can trust. We prioritize safety and customer satisfaction, guaranteeing 100%
                            satisfaction and value with each project. From trimming and pruning to complete removal, our
                            professional team can handle all of your tree care needs. Our core values are trustworthy,
                            reliable, and professional service so that you can enjoy your outdoor space worry-free.
                            Contact Tree Service Denver LLC today for your free estimate!
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                    <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-users-cog text-2xl text-white"></i>
                        </div>
                        <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                            Professional team
                        </h4>
                        <p class="text-body-color">
                            In addition to providing tree services, we have experts with decades of experience. They can
                            ensure your property is not damaged while providing complex tree services.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                    <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-tools text-2xl text-white"></i>
                        </div>
                        <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                            Customer Support
                        </h4>
                        <p class="text-body-color">
                            In order to ensure quality services and a smooth customer experience, we have a dedicated
                            customer support team.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                    <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="far fa-money-bill-alt text-2xl text-white"></i>
                        </div>
                        <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                            Affordable &amp; reliable
                        </h4>
                        <p class="text-body-color">
                            We have been providing affordable services to our customers for years, so please check the
                            feedback of our previous customers to see how well we have done for them.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                    <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md">
                            <i class="fas fa-chess-queen text-2xl text-white"></i>
                        </div>
                        <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                            One-stop solution
                        </h4>
                        <p class="text-body-color">
                            You can rely on our team to provide every kind of tree service imaginable. We have heavy and
                            small tools for all kinds of jobs. Just let us know what you need and we'll do it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-white">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-between -mx-4">
                <div class="w-full px-4 lg:w-6/12">
                    <div class="flex items-center -mx-3 sm:-mx-4">
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="py-3 sm:py-4">
                                <img loading="lazy" loading="lazy"
                                    src="https://treeservicedenverllc.com/wp-content/uploads/2023/11/IMG-1164.jpg"
                                    alt="" class="w-full rounded-2xl">
                            </div>
                            <div class="py-3 sm:py-4">
                                <img loading="lazy" loading="lazy"
                                    src="https://treeservicedenverllc.com/wp-content/uploads/elementor/thumbs/IMG-0916-qra70gxg1cbv1uc24mx8ymd9319wv4puji748qd078.jpg"
                                    alt="" class="w-full rounded-2xl">
                            </div>
                        </div>
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="relative z-10 my-4">
                                <img loading="lazy" loading="lazy"
                                    src="https://treeservicedenverllc.com/wp-content/uploads/2023/04/Emergency-Tree-Service-Denver-1024x576.jpg"
                                    alt="" class="w-full rounded-2xl">
                                <span class="absolute -right-7 -bottom-7 z-[-1]">
                                    <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="1.66667" cy="104" r="1.66667"
                                            transform="rotate(-90 1.66667 104)" fill="#3056D3"></circle>
                                        <circle cx="16.3333" cy="104" r="1.66667"
                                            transform="rotate(-90 16.3333 104)" fill="#3056D3"></circle>
                                        <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)"
                                            fill="#3056D3"></circle>
                                        <circle cx="45.6667" cy="104" r="1.66667"
                                            transform="rotate(-90 45.6667 104)" fill="#3056D3"></circle>
                                        <circle cx="60.3334" cy="104" r="1.66667"
                                            transform="rotate(-90 60.3334 104)" fill="#3056D3"></circle>
                                        <circle cx="88.6667" cy="104" r="1.66667"
                                            transform="rotate(-90 88.6667 104)" fill="#3056D3"></circle>
                                        <circle cx="117.667" cy="104" r="1.66667"
                                            transform="rotate(-90 117.667 104)" fill="#3056D3"></circle>
                                        <circle cx="74.6667" cy="104" r="1.66667"
                                            transform="rotate(-90 74.6667 104)" fill="#3056D3"></circle>
                                        <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                            fill="#3056D3"></circle>
                                        <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                            fill="#3056D3"></circle>
                                        <circle cx="1.66667" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 89.3333)" fill="#3056D3"></circle>
                                        <circle cx="16.3333" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 89.3333)" fill="#3056D3"></circle>
                                        <circle cx="31" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 31 89.3333)" fill="#3056D3"></circle>
                                        <circle cx="45.6667" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 89.3333)" fill="#3056D3"></circle>
                                        <circle cx="60.3333" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 60.3333 89.3338)" fill="#3056D3"></circle>
                                        <circle cx="88.6667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 88.6667 89.3338)" fill="#3056D3"></circle>
                                        <circle cx="117.667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 117.667 89.3338)" fill="#3056D3"></circle>
                                        <circle cx="74.6667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 74.6667 89.3338)" fill="#3056D3"></circle>
                                        <circle cx="103" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 103 89.3338)" fill="#3056D3"></circle>
                                        <circle cx="132" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 132 89.3338)" fill="#3056D3"></circle>
                                        <circle cx="1.66667" cy="74.6673" r="1.66667"
                                            transform="rotate(-90 1.66667 74.6673)" fill="#3056D3"></circle>
                                        <circle cx="1.66667" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 1.66667 31.0003)" fill="#3056D3"></circle>
                                        <circle cx="16.3333" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 16.3333 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="16.3333" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 16.3333 31.0003)" fill="#3056D3"></circle>
                                        <circle cx="31" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 31 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="31" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 31 31.0003)" fill="#3056D3"></circle>
                                        <circle cx="45.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 45.6667 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="45.6667" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 45.6667 31.0003)" fill="#3056D3"></circle>
                                        <circle cx="60.3333" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 60.3333 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="60.3333" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 60.3333 30.9998)" fill="#3056D3"></circle>
                                        <circle cx="88.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 88.6667 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="88.6667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 88.6667 30.9998)" fill="#3056D3"></circle>
                                        <circle cx="117.667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 117.667 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="117.667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 117.667 30.9998)" fill="#3056D3"></circle>
                                        <circle cx="74.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 74.6667 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="74.6667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 74.6667 30.9998)" fill="#3056D3"></circle>
                                        <circle cx="103" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 103 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="103" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 103 30.9998)" fill="#3056D3"></circle>
                                        <circle cx="132" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 132 74.6668)" fill="#3056D3"></circle>
                                        <circle cx="132" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 132 30.9998)" fill="#3056D3"></circle>
                                        <circle cx="1.66667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 1.66667 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="1.66667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="16.3333" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 16.3333 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="16.3333" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="31" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 31 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="31" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 31 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="45.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 45.6667 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="45.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="60.3333" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 60.3333 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="60.3333" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 60.3333 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="88.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 88.6667 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="88.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 88.6667 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="117.667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 117.667 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="117.667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 117.667 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="74.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 74.6667 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="74.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 74.6667 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="103" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 103 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="103" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 103 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="132" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 132 60.0003)" fill="#3056D3"></circle>
                                        <circle cx="132" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 132 16.3333)" fill="#3056D3"></circle>
                                        <circle cx="1.66667" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 45.3333)" fill="#3056D3"></circle>
                                        <circle cx="1.66667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 1.66667 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="16.3333" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 45.3333)" fill="#3056D3"></circle>
                                        <circle cx="16.3333" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 16.3333 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="31" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 31 45.3333)" fill="#3056D3"></circle>
                                        <circle cx="31" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 31 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="45.6667" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 45.3333)" fill="#3056D3"></circle>
                                        <circle cx="45.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 45.6667 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="60.3333" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 60.3333 45.3338)" fill="#3056D3"></circle>
                                        <circle cx="60.3333" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 60.3333 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="88.6667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 88.6667 45.3338)" fill="#3056D3"></circle>
                                        <circle cx="88.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 88.6667 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="117.667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 117.667 45.3338)" fill="#3056D3"></circle>
                                        <circle cx="117.667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 117.667 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="74.6667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 74.6667 45.3338)" fill="#3056D3"></circle>
                                        <circle cx="74.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 74.6667 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="103" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 103 45.3338)" fill="#3056D3"></circle>
                                        <circle cx="103" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 103 1.66683)" fill="#3056D3"></circle>
                                        <circle cx="132" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 132 45.3338)" fill="#3056D3"></circle>
                                        <circle cx="132" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 132 1.66683)" fill="#3056D3"></circle>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                    <div class="mt-10 lg:mt-0">
                        <span class="block mb-4 text-lg font-semibold text-green-500">
                            About Us
                        </span>
                        <h2 class="mb-5 text-3xl font-bold text-dark sm:text-[40px]/[48px]">
                            Best Tree Removal in Denver, CO
                        </h2>
                        <p class="mb-5 text-base text-body-color">
                            We at Tree Service Denver understand that trees are an important part of your property, and
                            we’re here to help you take care of them. Using our state-of-the-art equipment, we offer a
                            wide range of tree services, from pruning and trimming to removal and stump grinding. Our
                            team is knowledgeable, trustworthy, and reliable, so you can rest assured that the job will
                            be done right the first time. Our professional approach means we’ll get the job done quickly
                            and efficiently, without sacrificing quality. So if you need any kind of tree service in
                            Denver, don’t hesitate to contact us for all your needs.
                        </p>
                        <a href="javascript:void(0)"
                            class=" flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-gray-100">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img loading="lazy" loading="lazy" src="resources/image/feature_1.jpg" alt="Tree Inspection"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Tree Inspection</h3>
                        <p class="text-sm text-gray-600 mb-4">Our experts provide tree inspection services in Denver.
                        </p>
                        <a href="#" class="text-blue-500 text-sm font-medium">LEARN MORE</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img loading="lazy" loading="lazy" src="resources/image/feature_2.jpg" alt="Tree Removal"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Tree Removal</h3>
                        <p class="text-sm text-gray-600 mb-4">We offer all kinds of tree removal services</p>
                        <a href="#" class="text-blue-500 text-sm font-medium">LEARN MORE</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img loading="lazy" loading="lazy" src="resources/image/feature_3.jpg" alt="Tree Trimming"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Tree Trimming</h3>
                        <p class="text-sm text-gray-600 mb-4">Need Tree Trimming service? Let us help you.</p>
                        <a href="#" class="text-blue-500 text-sm font-medium">LEARN MORE</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img loading="lazy" loading="lazy" src="resources/image/feature_4.jpg" alt="Stump Grinding"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Stump Grinding</h3>
                        <p class="text-sm text-gray-600 mb-4">Our company provides Stump grinding services.</p>
                        <a href="#" class="text-blue-500 text-sm font-medium">LEARN MORE</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img loading="lazy" loading="lazy" src="resources/image/feature_5.jpg" alt="Emergency Service"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Emergency Service</h3>
                        <p class="text-sm text-gray-600 mb-4">We provide emergency Tree services All around Denver.</p>
                        <a href="#" class="text-blue-500 text-sm font-medium">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-image flex items-center justify-center"
        style="background: radial-gradient(circle, #ffffffc0 0%, #023047 100%), url('{{ Vite::asset('resources/image/steps_bg.jpg') }}')  center / cover no-repeat;">
        <div class="bg-black bg-opacity-50 w-full py-24">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-white text-center mb-12">Simple 3 Steps Process</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-900 bg-opacity-75 p-6 rounded-lg text-center">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
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
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
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
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
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

    <div class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-gray-100">
        <div class="container mx-auto">
            <div x-data="{
                openTab: 1,
                activeClasses: 'bg-green-500 text-white',
                inactiveClasses: 'text-body-color hover:bg-green-500 hover:text-white',
            }" class="">
                <div class="flex flex-col flex-wrap rounded-lg border border-[#E4E4E4] py-3 px-4 sm:flex-row">
                    <a href="javascript:void(0)" @click="openTab = 1"
                        :class="openTab === 1 ? activeClasses : inactiveClasses"
                        class="px-4 py-3 text-sm font-medium rounded-md md:text-base lg:px-6">
                        Tree Service
                    </a>
                    <a href="javascript:void(0)" @click="openTab = 2"
                        :class="openTab === 2 ? activeClasses : inactiveClasses"
                        class="px-4 py-3 text-sm font-medium rounded-md md:text-base lg:px-6">
                        Tree Removal
                    </a>
                    <a href="javascript:void(0)" @click="openTab = 3"
                        :class="openTab === 3 ? activeClasses : inactiveClasses"
                        class="px-4 py-3 text-sm font-medium rounded-md md:text-base lg:px-6">
                        Tree Trimming
                    </a>
                </div>
                <div>
                    <div x-show="openTab === 1" class="p-6 text-base leading-relaxed text-body-color">
                        <h2 class="font-bold">Tree Trimming Denver</h2>
                        <br>
                        Tree trimming is an important part of keeping trees healthy and safe. It can help maintain the
                        shape, health and beauty of a tree while preventing it from becoming hazardous to its
                        surroundings. In Denver, there are many experienced professionals who provide tree trimming
                        services that meet local safety standards set by the city’s Parks & Recreation Department. The
                        best rated tree service companies in Denver will have certified arborists on staff to ensure
                        that any pruning projects are done correctly and safely.
                        <br>
                        <br>
                        When looking for a reputable tree trimming provider, be sure to ask about their experience with
                        similar jobs in the area. A good company should also be familiar with the laws regarding tree
                        removal or pruning in your municipality. Furthermore, inquire about whether they offer
                        preventive maintenance such as deep root fertilization or insecticide treatments for pests like
                        aphids or gypsy moths. All these measures will not only protect your trees but also improve
                        their overall health over time.
                        <br>
                        <br>
                        Finally, when selecting a professional for tree trimming services in Denver, make sure you do
                        your research first. Ask around if other homeowners have had successful experiences with a
                        particular firm before committing to them. Be sure to look into customer reviews online as well
                        since this could give you an idea of how satisfied people are with their workmanship and
                        results. Additionally, check if they are licensed and insured so that you don’t end up having
                        financial responsibility for damages caused during the project due to negligence or improper
                        practices.
                    </div>
                    <div x-show="openTab === 2" class="p-6 text-base leading-relaxed text-body-color">
                        <h1 class="font-bold">Tree Removal Denver</h1>
                        <br>
                        The art of tree removal is a delicate, intricate process. It requires precision and skill to
                        ensure the safety of both people and property during the task. Trees can be quite unpredictable
                        in their behavior, so it becomes essential for an experienced arborist to carefully plan out
                        every step before beginning work. Denver has many certified professionals who have become
                        experts at removing trees from residential and commercial properties alike.
                        <br>
                        <br>
                        When looking for a reliable tree removal service in Denver, there are a few factors to consider.
                        The first is experience; any tree removal company worth its salt should have years of practice
                        under its belt. They should also carry adequate insurance coverage in case anything goes wrong
                        while working on your property. Additionally, they should employ only certified arborists who
                        understand how best to safely remove trees without damaging surrounding structures or
                        landscaping features. Finally, look for companies that offer free estimates as well as emergency
                        services if needed.
                        <br>
                        <br>

                        Finding the right professional tree removal team can make all the difference when dealing with
                        difficult-to-remove trees or hazardous conditions due to aging or disease-infested branches.
                        With the right care and attention given by experienced hands, you can rest assured that your
                        yard will remain safe and beautiful for years to come. Transitioning into the subsequent section
                        about ‘tree trimming denver,’ this important maintenance procedure helps keep yards healthy and
                        attractive throughout the year, saving time and money down the road with fewer costly repairs
                        required later on.
                    </div>
                    <div x-show="openTab === 3" class="p-6 text-base leading-relaxed text-body-color">

                        <h2 class="font-bold">Tree Trimming Denver</h2>
                        <br>
                        Tree trimming is an important part of keeping trees healthy and safe. It can help maintain the
                        shape, health and beauty of a tree while preventing it from becoming hazardous to its
                        surroundings. In Denver, there are many experienced professionals who provide tree trimming
                        services that meet local safety standards set by the city’s Parks & Recreation Department. The
                        best rated tree service companies in Denver will have certified arborists on staff to ensure
                        that any pruning projects are done correctly and safely.
                        <br>
                        <br>
                        When looking for a reputable tree trimming provider, be sure to ask about their experience with
                        similar jobs in the area. A good company should also be familiar with the laws regarding tree
                        removal or pruning in your municipality. Furthermore, inquire about whether they offer
                        preventive maintenance such as deep root fertilization or insecticide treatments for pests like
                        aphids or gypsy moths. All these measures will not only protect your trees but also improve
                        their overall health over time.
                        <br>
                        <br>
                        Finally, when selecting a professional for tree trimming services in Denver, make sure you do
                        your research first. Ask around if other homeowners have had successful experiences with a
                        particular firm before committing to them. Be sure to look into customer reviews online as well
                        since this could give you an idea of how satisfied people are with their workmanship and
                        results. Additionally, check if they are licensed and insured so that you don’t end up having
                        financial responsibility for damages caused during the project due to negligence or improper
                        practices.
                    </div>
                </div>
            </div>
        </div>
    </div>


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

    <!-- component -->
    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d392661.4130065212!2d-104.8957246!3d39.7471239!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7fbfa6842607%3A0xccaf5737e5619324!2sTree%20Service%20Denver!5e0!3m2!1sen!2sus!4v1696858527468!5m2!1sen!2sus"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div
                class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="mb-5 text-3xl font-bold text-dark sm:text-[40px]/[48px]">Our company's top
                    priority is Care for Customer Satisfaction</h2>
                <p class="leading-relaxed mb-5 text-gray-600">We at Tree Service Denver LLC are dedicated to providing
                    our customers with the best tree service possible in the Colorado region. Our experienced team of
                    professionals is both fully licensed and insured, ensuring that your job will be done safely and
                    efficiently. We guarantee 100% satisfaction with every project we complete, so you can rest assured
                    knowing that your trees will be taken care of. Plus, as a locally owned tree company, you can trust
                    us to provide reliable and trustworthy service to every request. So when it comes to tree service in
                    Denver, look no further than Tree Service Denver LLC! </p>

            </div>
        </div>
    </section>
@endsection
