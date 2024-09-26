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
                            Contact Us
                        </h1>
                        <h2 class="mb-8 max-w-[480px] text-2xl text-dark ">
                            Fill up the form below to send us a message.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <div class="min-h-screen bg-white py-6 flex flex-col justify-center sm:py-12">
        <div class="w-full md:w-1/2 px-4 md:top-24 self-start mx-auto">

            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-green-700 to-white-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="text-white relative px-4 py-10 bg-green-500 shadow-lg sm:rounded-3xl sm:p-20">

                    @include('particial.instant-quote-form')
                </div>
            </div>
        </div>
    </div>
@endsection
