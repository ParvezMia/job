<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('APP_NAME') }}">
    @stack('meta-tags')
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon.png') }}">
    <link rel="icon" type="resources/image/png" sizes="32x32" href="{{ Vite::asset('resources/image/logo.jpg') }}">
    <link rel="icon" type="resources/image/png" sizes="16x16" href="{{ Vite::asset('resources/image/logo.jpg') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
            <meta name="generator" content="Redux 4.4.12.2" />  <script type="application/ld+json" class="json-ld-schema">{"@id":"#schema-7024","@context":"http:\/\/schema.org","@type":"LocalBusiness","name":"Tree Service Denver LLC","description":"Tree Service Denver LLC is a premier tree service company based in Denver, specializing in comprehensive tree care and maintenance. With over two decades of experience, our team of certified arborists and tree care professionals is dedicated to delivering exceptional service. Our offerings include expert tree pruning and trimming to promote health and beauty, safe and efficient tree removal, stump grinding and removal, and 24\/7 emergency tree services to address urgent needs. We also provide detailed tree health assessments to diagnose and treat any issues, ensuring your trees thrive for years to come. At Denver Tree Masters, we are committed to sustainable practices, ensuring every job is done with the utmost care for the environment and your property. Trust us to enhance the natural beauty and safety of your outdoor space.","telephone":"720-807-2785","url":"https:\/\/wordpress-1267257-4568714.cloudwaysapps.com\/","logo":"https:\/\/wordpress-1267257-4568714.cloudwaysapps.com\/wp-content\/uploads\/2023\/04\/384532686_1229429607751085_6032948851310107453_n-e1696378486684.jpg","image":["https:\/\/wordpress-1267257-4568714.cloudwaysapps.com\/wp-content\/uploads\/2023\/04\/Tree-Trimming-Denver-1024x576.jpg"],"address":{"@type":"PostalAddress","streetAddress":"56 Hazel Ct","addressLocality":"Denver","addressRegion":"CO","postalCode":"80219","addressCountry":"US"},"geo":{"@type":"GeoCoordinates","latitude":"39.717797034904","longitude":"-105.02718354433465"},"hasMap":"https:\/\/www.google.com\/maps\/place\/?q=place_id:ChIJByaEpr9_bIcRJJNh5TdXr8w","openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"00:00","closes":"23:59"}],"sameAs":["https:\/\/www.facebook.com\/profile.php?id=61552236350818"],"aggregateRating":{"@type":"AggregateRating","ratingValue":"5","reviewCount":"94"},"serviceArea":{"@type":"Place","geoMidpoint":{"@type":"GeoCoordinates","latitude":"39.7392","longitude":"-104.9903"},"geoRadius":"50"},"offers":{"@type":"Offer","itemOffered":{"@type":"Service","name":"Tree Services","description":"Includes tree pruning and trimming, tree removal, stump grinding and removal, arboriculture, emergency tree services, tree health assessments, pest and disease management, tree planting and transplanting, landscaping and design, soil management, and compliance with local environmental regulations.","areaServed":["Denver, CO","Wheat Ridge, CO","Westminster, CO","Thornton, CO","Louisville, CO","Northglenn, CO","Lochbuie, CO","Lakewood, CO","Lafayette, CO","Littleton, CO","Henderson, CO","Golden, CO","Fort Lupton, CO","Englewood, CO","Castle Rock, CO","Broomfield, CO","Brighton, CO","Boulder, CO","Aurora, CO","Arvada, CO","Highlands Ranch, CO"]}},"knowsAbout":["Expert Pruning Techniques","Tree Removal","Risk Assessment for Tree Removal","Innovative Stump Removal Methods","Arboricultural Best Practices","Emergency Response for Tree Care","Diagnostic Tools for Tree Health","Integrated Pest Management","Tree Species Selection for Landscaping","Soil Health and Fertility Management","Regulatory Compliance in Tree Services","Principles of Sustainable Arboriculture"],"founder":{"@type":"Person","name":"Shawn","jobTitle":"Team Leader","description":"Years of experience with trees."}}</script>

    <title>Tree Service Denver | #1 Voted Tree Company In Denver CO</title>

    <script src="https://cdn.tailwindcss.com" defer loading="lazy"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css" async
        loading="lazy" />
    @vite(['resources/js/app.js', 'resources/js/alpine.js'])

</head>

<body>
    <main>

        @include('particial.header')
        @yield('content')

        <footer class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-gray-100">
            <div class=" container mx-auto">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="{{ route('home') }}" class="items-center">
                            <img loading="lazy" loading="lazy" src="{{ Vite::asset('resources/image/logo.jpg') }}"
                                class="h-40 me-3" alt="FlowBite Logo" />
                            <div class="self-center text-2xl font-semibold whitespace-nowrap">#1 Tree
                                Service In Denver</div>
                            <div class="self-center text-2xl">We provide the
                                best-rated
                                tree services in Denver, CO.</div>

                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Quick Link
                            </h2>
                            <ul class="text-gray-500 font-medium">
                                <li class="mb-4">
                                    <a href="" class="hover:underline">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Contact
                                Info:
                            </h2>
                            <ul class="text-gray-500 font-medium">
                                <li>
                                    <a href="" class="hover:underline">Contact Info:</a>
                                </li>
                                <li class="mb-4">
                                    <a href="" class="hover:underline ">720-807-2785</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Open Hours:
                            </h2>
                            <ul class="text-gray-500 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Open 24/7</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="{{ route('home') }}"
                            class="hover:underline">treeservicedenverllc</a>. All Rights
                        Reserved.
                    </span>
                </div>
            </div>
        </footer>

    </main>
</body>

</html>
