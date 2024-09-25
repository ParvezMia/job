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
    <link rel="icon" type="resources/image/png" sizes="32x32" href="{{ asset('/images/favicon.png') }}">
    <link rel="icon" type="resources/image/png" sizes="16x16" href="{{ asset('/images/favicon.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

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
