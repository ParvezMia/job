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
                            Get Free Estimation
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <div class="min-h-screen bg-white py-6 flex flex-col justify-center sm:py-12">
        <div class="w-full md:w-1/2 px-4 md:top-24 self-start mx-auto">

            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                @include('particial.instant-quote-form')
            </div>
        </div>
    </div>
    <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-gray-50">
        <div class="container mx-auto">
            <div class="md:flex">
                <div class="">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                            <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                                <div
                                    class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md text-center">
                                    <i class="fas fa-users-cog text-2xl text-white"></i>
                                </div>
                                <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                                    Professional team
                                </h4>
                                <p class="text-body-color">
                                    In addition to providing tree services, we have experts with decades of experience. They
                                    can
                                    ensure your property is not damaged while providing complex tree services.
                                </p>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                            <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                                <div
                                    class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md text-center">
                                    <i class="fas fa-tools text-2xl text-white"></i>
                                </div>
                                <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                                    Customer Support
                                </h4>
                                <p class="text-body-color">
                                    In order to ensure quality services and a smooth customer experience, we have a
                                    dedicated
                                    customer support team.
                                </p>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                            <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                                <div
                                    class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md text-center">
                                    <i class="far fa-money-bill-alt text-2xl text-white"></i>
                                </div>
                                <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                                    Affordable &amp; reliable
                                </h4>
                                <p class="text-body-color">
                                    We have been providing affordable services to our customers for years, so please check
                                    the
                                    feedback of our previous customers to see how well we have done for them.
                                </p>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                            <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                                <div
                                    class="bg-green-500 flex h-[40px] w-[40px] items-center justify-center rounded-md text-center">
                                    <i class="fas fa-chess-queen text-2xl text-white"></i>
                                </div>
                                <h4 class="text-dark mb-[14px] text-2xl font-semibold">
                                    One-stop solution
                                </h4>
                                <p class="text-body-color">
                                    You can rely on our team to provide every kind of tree service imaginable. We have heavy
                                    and
                                    small tools for all kinds of jobs. Just let us know what you need and we'll do it.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
