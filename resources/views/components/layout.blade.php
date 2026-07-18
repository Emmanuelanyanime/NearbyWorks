<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Toxci | SaaS & AI Startup Technology Tailwind Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/images/favicon.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
</head>

<body>

    <!-- back-to-top-start  -->
    <div class="back-to-top-wrapper group/show">
        <button id="back_to_top" type="button"
            class="scroll-top z-[999] group-[.back-to-top-btn-show]/show:bottom-[80px] fixed right-[50px] bottom-[-10%] h-[50px] w-[50px] rounded-[6px] text-[16px] text-center cursor-pointer z-[9] border-0 bg-primary text-white transition-all duration-1000 ease-in-out">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
    <!-- back-to-top-end  -->

    <!-- preloader start -->
    <div id="preloader"
        class="fixed top-0 left-0 right-0 bottom-0 bg-white z-[999999] flex items-center justify-center">
        <div
            class="preloader w-[100px] aspect-square p-[10px] grid bg-white [filter:blur(5px)_contrast(10)_hue-rotate(300deg)] ">
        </div>
    </div>
    <!-- preloader end -->

    <!-- Offcanvas Area -->
    <div
        class="fixed inset-0 z-[999] invisible opacity-0 hover:cursor-[url('../img/cross-out.png')_16_16,_pointer] transition-all duration-500 ease-in-out bg-[rgba(000,_000,_000,_0.6)] body-overlay hover:cursor-[url('../img/cross-out.png')_16_16,_pointer] [&.apply]:opacity-100 [&.apply]:visible">
    </div>
    <div class="tpoffcanvas fixed top-0 -right-full h-screen w-[400px] bg-white z-999 p-12.5 overflow-y-auto opacity-0 invisible transition-all duration-700 ease-[cubic-bezier(0.785,0.135,0.15,0.86)] max-sm:w-full max-sm:p-8.75 sm:p-10 [&.opened]:opacity-100 [&.opened]:visible [&.opened]:right-0"
        data-lenis-prevent="">
        <div class="mb-10 flex items-center justify-between">
            <!-- logo -->
            <a href="index.html"><img src="{{ asset('images/logo-black.png') }}" class="w-[100px] mx-auto"
                    alt=""></a>
            <!-- Close Button -->
            <button
                class="close-btn cursor-pointer w-12.5 h-12.5 bg-black text-white rounded-full hover:bg-primary hover:text-white  flex items-center justify-center transition-all duration-300">
                <i class="fal fa-times text-[20px] font-light"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div class="tp-offcanvas-menu mb-12.5">
            <nav></nav>
        </div>
        <!-- Instagram -->
        <div class="mb-8">
            <h1 class="text-black text-[24px] capitalize mb-[10px]">Hello There!</h1>
            <p class="text-black/60 mb-[30px]">Lorem ipsum dolor sit amet, consect etur adipiscing elit. </p>
            <div class="flex justify-center gap-[10px]">
                <a href="#"><img class="m-1.25 mb-3.75" src="{{ asset('asset/images/thumb.jpg') }}" alt="image"></a>
                <a href="#"><img class="m-1.25 mb-3.75" src="{{ asset('asset/images/thumb-2.jpg') }}" alt="image"></a>
                <a href="#"><img class="m-1.25 mb-3.75" src="{{ asset('asset/images/thumb-3.jpg') }}" alt="image"></a>
                <a href="#"><img class="m-1.25 mb-3.75" src="{{ asset('asset/images/thumb-4.jpg') }}" alt="image"></a>
            </div>
        </div>
        <!-- Address -->
        <div class="tp-offcanvas-info mb-[60px]">
            <h2 class="text-black text-[22px] mb-[25px]">Information</h2>
            <span class="block mb-[7px]"><a href="tel:42077001007"
                    class="text-black/60 leading-tight hover:text-black">+ 4 20 7700 1007</a></span>
            <span class="block mb-[7px]"><a href="mailto:hello@toxci.com"
                    class="text-black/60 leading-tight hover:text-black">hello@toxci.com</a></span>
            <span class="block"><a href="#" class="text-black/60 leading-tight hover:text-black">Avenue de Roma
                    158b, Lisboa</a></span>
        </div>
        <div class="mb-10">
            <h2 class="text-black text-[24px] pb-2.5">Follow Us</h2>
            <!-- Social -->
            <div class="flex gap-2">
                <a class="w-11 h-11 flex items-center justify-center rounded-[50px] border border-[rgba(7,21,22,0.1)] text-black transition hover:bg-indigo-500 hover:text-white"
                    href="#">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.403 9.03129C2.34293 9.03129 1.02128 9.03129 0.420526 9.03129C0.100125 9.03129 0 8.91114 0 8.61076C0 7.80976 0 6.98874 0 6.18773C0 5.86733 0.12015 5.76721 0.420526 5.76721H2.403C2.403 5.70713 2.403 4.54568 2.403 4.00501C2.403 3.20401 2.54318 2.44305 2.94368 1.74218C3.3642 1.02128 3.96496 0.540676 4.72591 0.260325C5.22653 0.0801 5.72716 0 6.26783 0H8.23029C8.51064 0 8.63079 0.12015 8.63079 0.400501V2.68335C8.63079 2.9637 8.51064 3.08385 8.23029 3.08385C7.68961 3.08385 7.14894 3.08385 6.60826 3.10388C6.06758 3.10388 5.78723 3.36421 5.78723 3.92491C5.76721 4.52566 5.78723 5.10638 5.78723 5.72716H8.11014C8.43054 5.72716 8.55069 5.84731 8.55069 6.16771V8.59074C8.55069 8.91114 8.45056 9.01126 8.11014 9.01126C7.38924 9.01126 5.84731 9.01126 5.78723 9.01126V15.5394C5.78723 15.8798 5.68711 16 5.32666 16C4.48561 16 3.66458 16 2.82353 16C2.52315 16 2.403 15.8799 2.403 15.5795C2.403 13.4768 2.403 9.09136 2.403 9.03129Z"
                            fill="currentColor"></path>
                    </svg>
                </a>
                <a class="w-11 h-11 flex items-center justify-center rounded-[50px] border border-[rgba(7,21,22,0.1)] text-black transition hover:bg-indigo-500 hover:text-white"
                    href="#">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.60319 6.77491L15.4315 0H14.0504L8.98966 5.88256L4.94769 0H0.285767L6.39801 8.89547L0.285767 16H1.66696L7.01119 9.78782L11.2798 16H15.9417L9.60285 6.77491H9.60319ZM7.71145 8.97384L7.09216 8.08805L2.16463 1.03974H4.28606L8.26263 6.72795L8.88193 7.61374L14.051 15.0075H11.9296L7.71145 8.97418V8.97384Z"
                            fill="currentColor"></path>
                    </svg>
                </a>
                <a class="w-11 h-11 flex items-center justify-center rounded-[50px]  border border-[rgba(7,21,22,0.1)] text-black transition hover:bg-indigo-500 hover:text-white"
                    href="#">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.1428 1H5.14282C2.93368 1 1.14282 2.79086 1.14282 5V13C1.14282 15.2091 2.93368 17 5.14282 17H13.1428C15.352 17 17.1428 15.2091 17.1428 13V5C17.1428 2.79086 15.352 1 13.1428 1Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path
                            d="M12.3431 8.49624C12.4418 9.16204 12.3281 9.84201 12.0181 10.4395C11.7081 11.0369 11.2176 11.5214 10.6164 11.824C10.0151 12.1266 9.33381 12.2319 8.66928 12.125C8.00475 12.0181 7.39086 11.7043 6.91492 11.2284C6.43899 10.7524 6.12524 10.1385 6.01831 9.47401C5.91137 8.80948 6.0167 8.12816 6.31931 7.52694C6.62192 6.92572 7.1064 6.43523 7.70384 6.12523C8.30128 5.81523 8.98126 5.70151 9.64705 5.80024C10.3262 5.90095 10.9549 6.21741 11.4404 6.70289C11.9259 7.18836 12.2423 7.8171 12.3431 8.49624Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M13.5424 4.60059H13.5504" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
                <a class="w-11 h-11 flex items-center justify-center rounded-[50px]  border border-[rgba(7,21,22,0.1)] text-black transition hover:bg-indigo-500 hover:text-white"
                    href="#">
                    <svg width="19" height="16" viewBox="0 0 19 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.743794 5.331C0.743794 5.331 2.28009 4.12018 2.79238 4.72531C3.3041 5.331 5.25871 12.64 5.91139 13.9878C6.48098 15.1705 8.05166 16.7332 9.77419 15.6169C11.4956 14.5006 17.2213 9.61269 18.2459 3.84055C19.2699 -1.92988 11.3563 -0.721354 10.518 4.30642C12.613 3.04862 13.7315 4.81699 12.6594 6.82031C11.589 8.82133 10.6108 10.1261 10.0997 10.1261C9.58853 10.1261 9.19543 8.78695 8.60979 6.44669C8.00524 4.02735 8.00811 -0.330546 5.49193 0.163406C3.11843 0.62928 0 4.35341 0 4.35341L0.743794 5.331Z"
                            fill="currentColor"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- tp-offcanvus-area-end -->

    <!-- tp-header-area-start -->
    <header>

        <div id="header-sticky" data-tp-animate="" data-direction="up" data-offset="20"
            class="opacity-0 group/sticky [.header-sticky]:bg-white [.header-sticky]:shadow-[0px_4px_10px_rgba(3,4,28,0.1)] [.header-sticky]:top-0! absolute top-[10px] max-xl:top-0 left-0 right-0 z-20 max-xl:py-[20px]">
            <div class="mx-auto max-w-[1310px] px-3">
                <div class="px-4 max-xl:px-0">
                    <div class="grid grid-cols-12 gap-6 items-center">
                        <div class="xxl:col-span-3 xl:col-span-2 col-span-6">
                            <a href="index.html">
                                <img src="{{ asset('asset/images/logo-black.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-7 hidden xl:block">
                            <div class="flex items-center justify-center">
                                <div class="main-menu hidden xl:block">
                                    <nav class="tp-mobile-menu-active">
                                        <ul class="xl:flex items-center xl:*:mx-5 xl:*:mx-4">
                                            <li class="relative has-dropdown group/menu">
                                                <a href="index.html"
                                                    class="relative  font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-all duration-300">
                                                    Company
                                                </a>
                                                <div
                                                    class="tp-submenu xl:absolute xl:top-full xl:left-0 xl:w-[500px] xl:p-[10px] xl:shadow-[0_2px_10px_0_rgba(22,21,25,0.1)] xl:bg-white xl:border xl:border-[rgba(22,21,25,0.1)] xl:rounded-[12px] xl:opacity-0 xl:invisible xl:scale-y-0 xl:origin-top xl:transition-all xl:duration-400 xl:group-hover/menu:opacity-100 xl:group-hover/menu:visible xl:group-hover/menu:scale-y-100 max-xl:hidden">
                                                    <div class="xl:p-[10px_20px_36px_20px]">
                                                        <div class="grid grid-cols-12 xl:gap-6">
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <ul
                                                                    class="[&_li]:max-xl:pl-5 xl:[&_li]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[13px]">
                                                                    <li><a href="route{{  }}">About Us</a></li>
                                                                    <li><a href="career.html">Career</a></li>
                                                                    <li><a href="career-details.html">Career
                                                                            Details</a></li>
                                                                    <li><a href="case-studies.html">Case Studies</a>
                                                                    </li>
                                                                    <li><a href="team.html">Our Team</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <ul
                                                                    class="[&_li]:max-xl:pl-5 xl:[&_li]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[13px]">
                                                                    <li><a href="service.html">Service</a></li>
                                                                    <li><a href="testimonial.html">Testimonials</a>
                                                                    </li>
                                                                    <li><a href="customer.html">Customer</a></li>
                                                                    <li><a href="customer-details.html">Customer
                                                                            Details</a></li>
                                                                    <li><a href="changelog.html">Changelog</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="max-xl:hidden p-[20px_30px_13px_22px] relative rounded-[8px] overflow-hidden bg-center bg-no-repeat bg-cover"
                                                        data-background="assets/img/menu/bg.png">
                                                        <img class="absolute top-0 right-0" src="images/thumb.png"
                                                            alt="">
                                                        <h2 class="font-medium text-[18px] text-black">Customer Love
                                                        </h2>
                                                        <p class="text-[15px]">Read what customers say about us</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="max-xl:relative has-dropdown group/menu">
                                                <a href="#"
                                                    class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300">
                                                    Features
                                                </a>
                                                <div
                                                    class="tp-submenu xl:absolute xl:top-full xl:left-0 xl:right-0 xl:p-[40px_10px_50px_10px] xl:shadow-[0_2px_10px_0_rgba(22,21,25,0.1)] xl:bg-white xl:border xl:border-[rgba(22,21,25,0.1)] xl:rounded-[12px] xl:opacity-0 xl:invisible xl:scale-y-0 xl:origin-top xl:transition-all xl:duration-400 xl:group-hover/menu:opacity-100 xl:group-hover/menu:visible xl:group-hover/menu:scale-y-100 max-xl:hidden">
                                                    <div class="m-[0_auto] max-w-[1290px]">
                                                        <div class="grid grid-cols-12 xl:gap-6">
                                                            <div class="xl:col-span-7 col-span-12 xl:mr-[16px]">
                                                                <div class="grid grid-cols-12 xl:gap-x-6">
                                                                    <div class="col-span-12">
                                                                        <span
                                                                            class="font-medium text-[13px] uppercase text-grey-100 block mb-[10px]">Overview</span>
                                                                    </div>
                                                                    <div class="xl:col-span-6 col-span-12">
                                                                        <div>
                                                                            <ul
                                                                                class="[&_li]:max-xl:pl-5 [&_a]:py-[15px]">
                                                                                <li class="group">
                                                                                    <a href="feature.html"
                                                                                        class="flex items-start gap-[15px]">
                                                                                        <span class="inline-block">
                                                                                            <svg width="18"
                                                                                                height="18"
                                                                                                viewBox="0 0 18 18"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M15.3412 2.60485L10.0685 0.256436C9.29467 -0.0854786 8.12496 -0.0854786 7.35116 0.256436L2.07848 2.60485C0.746809 3.1987 0.548859 4.0085 0.548859 4.44039C0.548859 4.87228 0.746809 5.68208 2.07848 6.27593L7.35116 8.62434C7.73806 8.7953 8.22394 8.88528 8.70982 8.88528C9.1957 8.88528 9.68158 8.7953 10.0685 8.62434L15.3412 6.27593C16.6728 5.68208 16.8708 4.87228 16.8708 4.44039C16.8708 4.0085 16.6818 3.1987 15.3412 2.60485Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.4"
                                                                                                    d="M8.70982 13.5371C8.36791 13.5371 8.02599 13.4651 7.71107 13.3301L1.64659 10.6308C0.71982 10.2169 0 9.11019 0 8.09345C0 7.72454 0.296926 7.42761 0.665834 7.42761C1.03474 7.42761 1.33167 7.72454 1.33167 8.09345C1.33167 8.57932 1.73657 9.20917 2.18645 9.40712L8.25094 12.1064C8.53887 12.2324 8.87178 12.2324 9.15971 12.1064L15.2242 9.40712C15.6741 9.20917 16.079 8.58832 16.079 8.09345C16.079 7.72454 16.3759 7.42761 16.7448 7.42761C17.1137 7.42761 17.4106 7.72454 17.4106 8.09345C17.4106 9.10119 16.6908 10.2169 15.7641 10.6308L9.69958 13.3301C9.39365 13.4651 9.05174 13.5371 8.70982 13.5371Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.4"
                                                                                                    d="M8.70982 18C8.36791 18 8.02599 17.9281 7.71107 17.7931L1.64659 15.0938C0.647838 14.6529 0 13.6541 0 12.5564C0 12.1875 0.296926 11.8906 0.665834 11.8906C1.03474 11.8906 1.33167 12.1875 1.33167 12.5564C1.33167 13.1233 1.66458 13.6361 2.18645 13.8701L8.25094 16.5694C8.53887 16.6954 8.87178 16.6954 9.15971 16.5694L15.2242 13.8701C15.7371 13.6451 16.079 13.1233 16.079 12.5564C16.079 12.1875 16.3759 11.8906 16.7448 11.8906C17.1137 11.8906 17.4106 12.1875 17.4106 12.5564C17.4106 13.6541 16.7628 14.6439 15.7641 15.0938L9.69958 17.7931C9.39365 17.9281 9.05174 18 8.70982 18Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="inline-block">
                                                                                            <span
                                                                                                class="font-medium text-[16px] text-black leading-[90%]">Features
                                                                                                <span
                                                                                                    class="opacity-0 group-hover:opacity-100 duration-300">
                                                                                                    <svg width="10"
                                                                                                        height="10"
                                                                                                        viewBox="0 0 10 10"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.75 8.75L8.75 0.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M0.75 0.75H8.75V8.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="block text-[15px] text-grey-100">See
                                                                                                how others are using
                                                                                                Toxci</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="group">
                                                                                    <a href="analytics.html"
                                                                                        class="flex items-start gap-[15px]">
                                                                                        <span class="inline-block">
                                                                                            <svg width="20"
                                                                                                height="20"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path opacity="0.4"
                                                                                                    d="M18.3721 0.697754V11.9536C18.3721 13.721 17.4419 14.6512 15.6744 14.6512H4.32557C2.55813 14.6512 1.6279 13.721 1.6279 11.9536V0.697754H18.3721Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M19.3023 1.39535H0.697674C0.316279 1.39535 0 1.07907 0 0.697674C0 0.316279 0.316279 0 0.697674 0H19.3023C19.6837 0 20 0.316279 20 0.697674C20 1.07907 19.6837 1.39535 19.3023 1.39535Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M14.3442 19.6186C14.2233 19.8604 13.9721 20 13.7209 20C13.6186 20 13.507 19.9721 13.414 19.9256L9.99998 18.2232L6.58602 19.9256C6.49299 19.9721 6.38138 20 6.27905 20C6.02789 20 5.77672 19.8604 5.65579 19.6186C5.47904 19.2651 5.6186 18.8465 5.97209 18.679L9.30231 17.0139V14.6511H10.6977V17.0139L14.0279 18.679C14.3814 18.8465 14.5209 19.2651 14.3442 19.6186Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M5.81393 9.76749C5.61858 9.76749 5.41395 9.68377 5.27441 9.51633C5.02325 9.21866 5.06974 8.78145 5.36741 8.53029L8.29767 6.08377C8.56743 5.86052 8.9116 5.76749 9.23718 5.82331C9.57207 5.87912 9.86045 6.08375 10.0372 6.38143L11.0139 8.00933L13.7395 5.73959C14.0372 5.48843 14.4744 5.53492 14.7255 5.83259C14.9767 6.13027 14.9302 6.56747 14.6325 6.81864L11.7023 9.26515C11.4325 9.48841 11.0884 9.58143 10.7628 9.52562C10.4279 9.4698 10.1395 9.26517 9.96276 8.9675L8.98603 7.33959L6.26046 9.60933C6.13022 9.71166 5.97207 9.76749 5.81393 9.76749Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="inline-block">
                                                                                            <span
                                                                                                class="font-medium text-[16px] text-black leading-[90%]">Analytics
                                                                                                <span
                                                                                                    class="opacity-0 group-hover:opacity-100 duration-300">
                                                                                                    <svg width="10"
                                                                                                        height="10"
                                                                                                        viewBox="0 0 10 10"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.75 8.75L8.75 0.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M0.75 0.75H8.75V8.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="block text-[15px] text-grey-100">Dynamic
                                                                                                content solutions</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="group">
                                                                                    <a href="whitepapper.html"
                                                                                        class="flex items-start gap-[15px]">
                                                                                        <span class="inline-block">
                                                                                            <svg width="15"
                                                                                                height="22"
                                                                                                viewBox="0 0 15 22"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path opacity="0.4"
                                                                                                    d="M11.8222 8.41116H3.1778C1.95474 8.41116 1.52978 7.59233 2.24496 6.59729L6.56716 0.54416C7.07504 -0.181387 7.92495 -0.181387 8.43284 0.54416L12.755 6.59729C13.4702 7.59233 13.0453 8.41116 11.8222 8.41116Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M13.294 16.641H1.70603C0.0683671 16.641 -0.491343 15.5526 0.472598 14.2259L4.6082 8.41119H10.3919L14.5275 14.2259C15.4914 15.5526 14.9317 16.641 13.294 16.641Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M8.27743 16.6409V20.7869C8.27743 21.2119 7.92502 21.5643 7.50006 21.5643C7.07509 21.5643 6.72269 21.2119 6.72269 20.7869V16.6409H8.27743Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="inline-block">
                                                                                            <span
                                                                                                class="font-medium text-[16px] text-black leading-[90%]">Whitepaper
                                                                                                <span
                                                                                                    class="opacity-0 group-hover:opacity-100 duration-300">
                                                                                                    <svg width="10"
                                                                                                        height="10"
                                                                                                        viewBox="0 0 10 10"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.75 8.75L8.75 0.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M0.75 0.75H8.75V8.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="block text-[15px] text-grey-100">Store
                                                                                                and manage data
                                                                                                securely.</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="group">
                                                                                    <a href="process.html"
                                                                                        class="flex items-start gap-[15px]">
                                                                                        <span class="inline-block">
                                                                                            <svg width="18"
                                                                                                height="18"
                                                                                                viewBox="0 0 18 18"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path opacity="0.4"
                                                                                                    d="M18 13.05V15.75C18 17.1 17.1 18 15.75 18H3.59998C3.96898 18 4.34698 17.946 4.69798 17.829C4.79698 17.793 4.89596 17.757 4.99496 17.712C5.30996 17.586 5.61598 17.4061 5.88598 17.1721C5.96698 17.1091 6.05698 17.0281 6.13798 16.9471L6.17396 16.911L12.294 10.8H15.75C17.1 10.8 18 11.7 18 13.05Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.6"
                                                                                                    d="M14.733 8.36108L12.294 10.8001L6.17398 16.9111C6.80398 16.2631 7.19999 15.3721 7.19999 14.4001V5.70607L9.63899 3.26707C10.593 2.31307 11.871 2.31307 12.825 3.26707L14.733 5.17508C15.687 6.12908 15.687 7.40708 14.733 8.36108Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M4.95 0H2.25C0.9 0 0 0.9 0 2.25V14.4C0 14.643 0.0269879 14.886 0.0719879 15.12C0.0989879 15.237 0.125993 15.354 0.161993 15.471C0.206993 15.606 0.251997 15.741 0.305997 15.867C0.314997 15.876 0.315005 15.885 0.315005 15.885C0.324005 15.885 0.324005 15.885 0.315005 15.894C0.441005 16.146 0.584997 16.389 0.755997 16.614C0.854997 16.731 0.954012 16.839 1.05301 16.947C1.15201 17.055 1.26 17.145 1.377 17.235L1.38601 17.244C1.61101 17.415 1.854 17.559 2.106 17.685C2.115 17.676 2.11501 17.676 2.11501 17.685C2.25001 17.748 2.385 17.793 2.529 17.838C2.646 17.874 2.76301 17.901 2.88001 17.928C3.11401 17.973 3.357 18 3.6 18C3.969 18 4.347 17.946 4.698 17.829C4.797 17.793 4.89599 17.757 4.99499 17.712C5.30999 17.586 5.61601 17.406 5.88601 17.172C5.96701 17.109 6.05701 17.028 6.13801 16.947L6.17399 16.911C6.80399 16.263 7.2 15.372 7.2 14.4V2.25C7.2 0.9 6.3 0 4.95 0ZM3.6 15.75C2.853 15.75 2.25 15.147 2.25 14.4C2.25 13.653 2.853 13.05 3.6 13.05C4.347 13.05 4.95 13.653 4.95 14.4C4.95 15.147 4.347 15.75 3.6 15.75Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="inline-block">
                                                                                            <span
                                                                                                class="font-medium text-[16px] text-black leading-[90%]">Process
                                                                                                <span
                                                                                                    class="opacity-0 group-hover:opacity-100 duration-300">
                                                                                                    <svg width="10"
                                                                                                        height="10"
                                                                                                        viewBox="0 0 10 10"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.75 8.75L8.75 0.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M0.75 0.75H8.75V8.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="block text-[15px] text-grey-100">Our
                                                                                                unique selling
                                                                                                points</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="xl:col-span-6 col-span-12">
                                                                        <div>
                                                                            <ul
                                                                                class="[&_li]:max-xl:pl-5 [&_a]:py-[15px]">
                                                                                <li class="group">
                                                                                    <a href="integrations.html"
                                                                                        class="flex items-start gap-[15px]">
                                                                                        <span class="inline-block">
                                                                                            <svg width="18"
                                                                                                height="18"
                                                                                                viewBox="0 0 18 18"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M12.6 5.40002H5.40002V12.6H12.6V5.40002Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.4"
                                                                                                    d="M2.7 18C4.185 18 5.4 16.785 5.4 15.3V12.6H2.7C1.215 12.6 0 13.815 0 15.3C0 16.785 1.215 18 2.7 18Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.4"
                                                                                                    d="M2.7 5.4H5.4V2.7C5.4 1.215 4.185 0 2.7 0C1.215 0 0 1.215 0 2.7C0 4.185 1.215 5.4 2.7 5.4Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.4"
                                                                                                    d="M12.6 5.4H15.3C16.785 5.4 18 4.185 18 2.7C18 1.215 16.785 0 15.3 0C13.815 0 12.6 1.215 12.6 2.7V5.4Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.4"
                                                                                                    d="M15.3 18C16.785 18 18 16.785 18 15.3C18 13.815 16.785 12.6 15.3 12.6H12.6V15.3C12.6 16.785 13.815 18 15.3 18Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="inline-block">
                                                                                            <span
                                                                                                class="font-medium text-[16px] text-black leading-[90%]">Integrations
                                                                                                <span
                                                                                                    class="opacity-0 group-hover:opacity-100 duration-300">
                                                                                                    <svg width="10"
                                                                                                        height="10"
                                                                                                        viewBox="0 0 10 10"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.75 8.75L8.75 0.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M0.75 0.75H8.75V8.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="block text-[15px] text-grey-100">Collaborate
                                                                                                across tools</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="group">
                                                                                    <a href="brandkit.html"
                                                                                        class="flex items-start gap-[15px]">
                                                                                        <span class="inline-block">
                                                                                            <svg width="16"
                                                                                                height="18"
                                                                                                viewBox="0 0 16 18"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path opacity="0.4"
                                                                                                    d="M2.91711 15.927C3.65539 15.1347 4.78079 15.1977 5.42903 16.062L6.33838 17.2775C7.06766 18.2408 8.24709 18.2408 8.97637 17.2775L9.88572 16.062C10.534 15.1977 11.6594 15.1347 12.3977 15.927C14.0003 17.6376 15.3057 17.0704 15.3057 14.6755V4.53768C15.3057 0.909321 14.4594 0 11.0561 0H4.24959C0.846318 0 0 0.909321 0 4.53768V14.6755C0.00900337 17.0704 1.32351 17.6286 2.91711 15.927Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M10.2188 7.18465L9.76868 7.64383H9.75967L7.03165 10.3719C6.9146 10.4889 6.67151 10.615 6.50045 10.633L5.28499 10.813C4.84382 10.876 4.53773 10.5609 4.60075 10.1288L4.77182 8.9043C4.79883 8.73324 4.91585 8.49915 5.0329 8.3731L7.76993 5.64508L8.2201 5.1859C8.51721 4.88879 8.85034 4.67273 9.21048 4.67273C9.51659 4.67273 9.84971 4.81676 10.2188 5.1859C11.0292 5.9962 10.7681 6.63545 10.2188 7.18465Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="inline-block">
                                                                                            <span
                                                                                                class="font-medium text-[16px] text-black leading-[90%]">Brandkit
                                                                                                <span
                                                                                                    class="opacity-0 group-hover:opacity-100 duration-300">
                                                                                                    <svg width="10"
                                                                                                        height="10"
                                                                                                        viewBox="0 0 10 10"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.75 8.75L8.75 0.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M0.75 0.75H8.75V8.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="block text-[15px] text-grey-100">Dynamic
                                                                                                content solutions</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="group">
                                                                                    <a href="downloads.html"
                                                                                        class="flex items-start gap-[15px]">
                                                                                        <span class="inline-block">
                                                                                            <svg width="18"
                                                                                                height="18"
                                                                                                viewBox="0 0 18 18"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path opacity="0.4"
                                                                                                    d="M17.046 2.7V15.3C17.046 16.794 15.831 18 14.346 18H10.746C9.25196 18 8.04596 16.794 8.04596 15.3V2.7C8.04596 1.206 9.25196 0 10.746 0H14.346C15.831 0 17.046 1.206 17.046 2.7Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M13.221 3.59999C13.221 3.96899 12.915 4.27499 12.546 4.27499H8.04596V2.92499H12.546C12.915 2.92499 13.221 3.23099 13.221 3.59999Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M12.231 14.4C12.231 14.769 11.934 15.075 11.556 15.075H8.04596V13.725H11.556C11.934 13.725 12.231 14.031 12.231 14.4Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M13.221 10.809C13.212 11.178 12.915 11.475 12.546 11.475C12.537 11.475 12.537 11.475 12.537 11.475L8.04596 11.43V10.08L12.546 10.125C12.924 10.125 13.221 10.431 13.221 10.809Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M11.25 7.20002C11.25 7.56902 10.944 7.87502 10.575 7.87502H8.04596V6.52502H10.575C10.944 6.52502 11.25 6.83102 11.25 7.20002Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.4"
                                                                                                    d="M5.31901 2.655V14.319C5.31901 14.724 5.14801 15.345 4.94101 15.687L4.20301 16.911C3.357 18.333 1.971 18.333 1.116 16.911L0.387001 15.687C0.171 15.345 0 14.724 0 14.319V2.655C0 1.197 1.197 0 2.664 0C4.12201 0 5.31901 1.197 5.31901 2.655Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M5.31901 3.82501H0V5.17501H5.31901V3.82501Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="inline-block">
                                                                                            <span
                                                                                                class="font-medium text-[16px] text-black leading-[90%]">Download
                                                                                                App
                                                                                                <span
                                                                                                    class="opacity-0 group-hover:opacity-100 duration-300">
                                                                                                    <svg width="10"
                                                                                                        height="10"
                                                                                                        viewBox="0 0 10 10"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.75 8.75L8.75 0.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M0.75 0.75H8.75V8.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="block text-[15px] text-grey-100">Get
                                                                                                the app</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="group">
                                                                                    <a href="analytics.html"
                                                                                        class="flex items-start gap-[15px]">
                                                                                        <span class="inline-block">
                                                                                            <svg width="18"
                                                                                                height="18"
                                                                                                viewBox="0 0 18 18"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path opacity="0.4"
                                                                                                    d="M17.046 2.7V15.3C17.046 16.794 15.831 18 14.346 18H10.746C9.25196 18 8.04596 16.794 8.04596 15.3V2.7C8.04596 1.206 9.25196 0 10.746 0H14.346C15.831 0 17.046 1.206 17.046 2.7Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M13.221 3.59999C13.221 3.96899 12.915 4.27499 12.546 4.27499H8.04596V2.92499H12.546C12.915 2.92499 13.221 3.23099 13.221 3.59999Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M12.231 14.4C12.231 14.769 11.934 15.075 11.556 15.075H8.04596V13.725H11.556C11.934 13.725 12.231 14.031 12.231 14.4Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M13.221 10.809C13.212 11.178 12.915 11.475 12.546 11.475C12.537 11.475 12.537 11.475 12.537 11.475L8.04596 11.43V10.08L12.546 10.125C12.924 10.125 13.221 10.431 13.221 10.809Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M11.25 7.20002C11.25 7.56902 10.944 7.87502 10.575 7.87502H8.04596V6.52502H10.575C10.944 6.52502 11.25 6.83102 11.25 7.20002Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path opacity="0.4"
                                                                                                    d="M5.31901 2.655V14.319C5.31901 14.724 5.14801 15.345 4.94101 15.687L4.20301 16.911C3.357 18.333 1.971 18.333 1.116 16.911L0.387001 15.687C0.171 15.345 0 14.724 0 14.319V2.655C0 1.197 1.197 0 2.664 0C4.12201 0 5.31901 1.197 5.31901 2.655Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M5.31901 3.82501H0V5.17501H5.31901V3.82501Z"
                                                                                                    fill="#77767A">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <span class="inline-block">
                                                                                            <span
                                                                                                class="font-medium text-[16px] text-black leading-[90%]">Analytics
                                                                                                & Reporting
                                                                                                <span
                                                                                                    class="opacity-0 group-hover:opacity-100 duration-300">
                                                                                                    <svg width="10"
                                                                                                        height="10"
                                                                                                        viewBox="0 0 10 10"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.75 8.75L8.75 0.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M0.75 0.75H8.75V8.75"
                                                                                                            stroke="#161519"
                                                                                                            stroke-width="1.5"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="block text-[15px] text-grey-100">Dynamic
                                                                                                content solutions</span>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-span-5 max-xl:hidden">
                                                                <div class="p-[38px_30px_34px_40px] ml-[-16px] mb-2.5 relative z-10 rounded-[8px] overflow-hidden bg-center bg-no-repeat bg-cover"
                                                                    data-background="assets/img/menu/bg-5.png">
                                                                    <h2
                                                                        class="font-medium text-[18px] text-black mb-[7px]">
                                                                        Merge Unified</h2>
                                                                    <p class="mb-[14px]">One API. Countless product
                                                                        integrations.</p>
                                                                    <a href="pricing.html"
                                                                        class="text-[16px] font-medium text-primary flex items-center gap-[6px]">
                                                                        See a demo
                                                                        <svg width="10" height="10"
                                                                            viewBox="0 0 10 10" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0.75 8.75L8.75 0.75"
                                                                                stroke="currentColor"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path d="M0.75 0.75H8.75V8.75"
                                                                                stroke="currentColor"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </a>
                                                                    <img src="images/thumb-4_1.png" alt=""
                                                                        class="absolute bottom-0 right-[8px] -z-10">
                                                                </div>
                                                                <div class="p-[38px_30px_34px_40px] ml-[-16px] relative z-10 rounded-[8px] overflow-hidden bg-center bg-no-repeat bg-cover"
                                                                    data-background="assets/img/menu/bg-6.png">
                                                                    <h2
                                                                        class="font-medium text-[18px] text-black mb-[7px]">
                                                                        Combine Unified</h2>
                                                                    <p class="mb-[14px]">One API. Countless product
                                                                        integrations.</p>
                                                                    <a href="pricing.html"
                                                                        class="text-[16px] font-medium text-primary flex items-center gap-[6px]">
                                                                        See a demo
                                                                        <svg width="10" height="10"
                                                                            viewBox="0 0 10 10" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0.75 8.75L8.75 0.75"
                                                                                stroke="currentColor"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path d="M0.75 0.75H8.75V8.75"
                                                                                stroke="currentColor"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </a>
                                                                    <img src="images/thumb-5_1.png" alt=""
                                                                        class="absolute bottom-0 right-0 -z-10">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="relative has-dropdown group/menu">
                                                <a href="pricing.html"
                                                    class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300">
                                                    pricing</a>
                                            </li>
                                            <li class="relative has-dropdown group/menu">
                                                <a href="#"
                                                    class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300">
                                                    Integrations
                                                </a>
                                                <div
                                                    class="tp-submenu xl:w-[260px] xl:p-[17px_30px] xl:shadow-[0_2px_10px_0_rgba(22,21,25,0.1)] xl:bg-white xl:border xl:border-[rgba(22,21,25,0.1)] xl:rounded-[12px] xl:absolute xl:top-full xl:left-0 xl:opacity-0 xl:invisible xl:scale-y-0 xl:origin-top xl:transition-all xl:duration-400 xl:group-hover/menu:opacity-100 xl:group-hover/menu:visible xl:group-hover/menu:scale-y-100 max-xl:hidden">
                                                    <ul
                                                        class="[&_li]:max-xl:pl-5 xl:[&_li:not(:last-child)]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[13px]">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                        <li><a href="faq.html">FAQs</a></li>
                                                        <li><a href="legal.html">Legal</a></li>
                                                        <li><a href="glossary.html">Glossary</a></li>
                                                        <li><a href="glossary-details.html">Glossary Details</a></li>
                                                        <li><a href="support.html">Support</a></li>
                                                        <li><a href="contact.html">Contact us</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="max-xl:relative has-dropdown group/menu">
                                                <a href="#"
                                                    class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300">
                                                    Support
                                                </a>
                                                <div
                                                    class="tp-submenu mx-auto xl:w-[750px] xl:p-[30px_30px_30px_30px] xl:shadow-[0_2px_10px_0_rgba(22,21,25,0.1)] xl:bg-white xl:border xl:border-[rgba(22,21,25,0.1)] xl:rounded-[12px] xl:absolute xl:top-full xl:left-0 xl:right-0 xl:opacity-0 xl:invisible xl:scale-y-0 xl:origin-top xl:transition-all xl:duration-400 xl:group-hover/menu:opacity-100 xl:group-hover/menu:visible xl:group-hover/menu:scale-y-100 max-xl:hidden">
                                                    <div class="grid items-center grid-cols-12 xl:gap-10">
                                                        <div
                                                            class="xl:col-span-8 col-span-12 xl:mr-[16px] xl:mt-[-12px]">
                                                            <div class="grid grid-cols-12 xl:gap-10">
                                                                <div class="xl:col-span-6 col-span-12">
                                                                    <ul
                                                                        class="[&_li]:max-xl:pl-5 xl:[&_li]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[12px]">
                                                                        <li><a href="sign-in.html">Login</a></li>
                                                                        <li><a href="affiliate.html">Affiliate
                                                                                Program</a></li>
                                                                        <li><a href="referall-program.html">Referral
                                                                                Program</a></li>
                                                                        <li><a href="terms-of-service.html">Terms &
                                                                                Conditions</a></li>
                                                                        <li><a href="privacy-policy.html">Privacy
                                                                                Policy</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="xl:col-span-6 col-span-12">
                                                                    <ul
                                                                        class="[&_li]:max-xl:pl-5 xl:[&_li]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[12px]">
                                                                        <li><a href="analytics.html">Analytics</a></li>
                                                                        <li><a href="register.html">Create Account</a>
                                                                        </li>
                                                                        <li><a href="affiliate-policy.html">Affiliate
                                                                                Policy</a></li>
                                                                        <li><a href="refund-policy.html">Refund
                                                                                Policy</a></li>
                                                                        <li><a href="support.html">Support</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-4 max-xl:hidden">
                                                            <div class="ml-[-16px] bg-[#f2f8ff] relative rounded-[8px] overflow-hidden bg-center bg-no-repeat bg-cover"
                                                                data-background="assets/img/menu/bg-4.png">
                                                                <div class="p-[18px_20px_15px_20px]">
                                                                    <h2
                                                                        class="font-medium text-[18px] text-black mb-[10px]">
                                                                        Customer Love</h2>
                                                                    <p class="text-[15px] leading-[127%]">Read what
                                                                        customers say about us</p>
                                                                </div>
                                                                <div class="text-right">
                                                                    <img src="images/thumb-5_1.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 col-span-6">
                            <div class="flex justify-end items-center">
                                <div class="flex gap-[8px] items-center">
                                    <a href="sign-in.html"
                                        class="tp-btn group tp-btn-hover hidden xl:inline-block text-[15px] px-[19px] h-[40px] leading-[40px] rounded-lg bg-transparent border border-black">
                                        <span class="text-black group-hover:text-white">Login</span>
                                        <b></b>
                                    </a>
                                    <a href="contact.html"
                                        class="tp-btn tp-btn-hover tp-btn-shadow hidden sm:inline-block rounded-lg text-[15px] px-5 h-[40px] leading-[40px]">
                                        <span>Sign up free</span>
                                        <b></b>
                                    </a>
                                    <button
                                        class="tp-menu-bar max-xl:ml-[10px] cursor-pointer xl:hidden h-11.25 w-11.25 rounded-full flex items-center justify-center bg-black text-white text-[18px] hover:bg-green hover:text-black">
                                        <i class="fal fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- tp-header-area-end -->

    {{ $slot }}

    <!-- tp-footer-area-start -->
    <footer class="bg-[#f6f7fa] pt-[95px]">
        <div class="mx-auto max-w-[1504px] px-[15px]">
            <div class="bg-[#161616] rounded-t-[40px] p-[90px_90px_35px_90px] max-lg:p-[50px_20px_15px_20px]">
                <div class="grid grid-cols-12 gap-[24px] pb-[84px]">
                    <div class="xl:col-span-5 lg:col-span-6 md:col-span-6 col-span-12">
                        <div data-tp-animate="" data-delay="0.2" class="mb-[30px]">
                            <a href="index.html" class="mb-[25px] inline-block">
                                <img src="{{ asset('asset/images/logo-white.png') }}" alt="">
                            </a>
                            <h2 class="font-medium text-xl tracking-[-0.01em] text-white mb-[8px]">Join our newsletter
                            </h2>
                            <p class="leading-[1.63] tracking-[-0.01em] text-[rgba(255,255,255,0.6)] mb-[25px]">Sign
                                up to our mailing list below and be the<br> first to know about new updates.</p>
                            <div>
                                <form action="#">
                                    <div class="relative md:inline-block">
                                        <input type="text" placeholder="Enter email Address"
                                            class="border font-[16px] bg-white border-white h-[54px] w-[414px] max-xl:w-full rounded-[12px] pl-[24px] md:pr-[170px] text-[14px] font-normal xs:pr-[20px] focus:border-primary">
                                        <button type="submit"
                                            class="tp-btn tp-btn-hover tp-btn-shadow bg-black min-sm:absolute max-sm:relative min-sm:top-1/2 right-[5px] min-sm:-translate-y-1/2 max-sm:my-[20px] rounded-lg text-[15px] px-5 h-[40px] leading-[40px]">
                                            <span>Sign up free</span>
                                            <b class="bg-primary"></b>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-2 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                        <div data-tp-animate="" data-delay="0.3" class="ml-[30px] max-xl:ml-0 mb-[30px]">
                            <h2 class="font-medium text-white text-[20px] leading-[100%] mb-[30px]">Company</h2>
                            <ul>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">About Us</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Features</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Pricing</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Our Blog</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">FAQ’s</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                        <div data-tp-animate="" data-delay="0.4" class="mb-[30px] ml-[50px] max-xl:ml-0">
                            <h2 class="font-medium text-white text-[20px] leading-[100%] mb-[30px]">Integrations</h2>
                            <ul>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">LiveChat</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Chat Widget</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">HelpDesk</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Facebook </a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Messenger </a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Shopify </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="xl:col-span-2 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                        <div data-tp-animate="" data-delay="0.5" class="mb-[30px]">
                            <h2 class="font-medium text-white text-[20px] leading-[100%] mb-[30px]">Legal policies
                            </h2>
                            <ul>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Refund Policy</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Terms & Conditions</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Privacy Policy</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Support</a></li>
                                <li
                                    class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]">
                                    <a class="hover:text-primary" href="#">Legal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="grid grid-cols-12 gap-[30px] items-center pt-[30px] border-t border-[rgba(255,255,255,0.1)]">
                        <div class="md:col-span-8 col-span-12">
                            <div data-tp-animate="" data-delay="0.3" data-offset="10" data-start="top 105%">
                                <p class="font-medium tracking-[-0.01em] text-[rgba(255,255,255,0.6)]">Copyright <a
                                        href="#" class="text-white">©toxci</a> - smart application for modern
                                    business</p>
                            </div>
                        </div>
                        <div class="md:col-span-4 col-span-12">
                            <div data-tp-animate="" data-delay="0.5" data-offset="10" data-start="top 105%"
                                class="flex md:justify-end gap-[6px]">
                                <a href="#"
                                    class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                                    <svg width="15" height="20" viewBox="0 0 15 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.83333 8.38889C0.937056 8.38889 0.75 8.56475 0.75 9.40741V10.9352C0.75 11.7778 0.937055 11.9537 1.83333 11.9537H4V18.0648C4 18.9075 4.18706 19.0833 5.08333 19.0833H7.25C8.14628 19.0833 8.33333 18.9075 8.33333 18.0648V11.9537H10.7662C11.4459 11.9537 11.6211 11.8295 11.8078 11.215L12.2721 9.68722C12.592 8.63458 12.3949 8.38889 11.2305 8.38889H8.33333V5.84259C8.33333 5.28008 8.81836 4.82407 9.41667 4.82407H12.5C13.3963 4.82407 13.5833 4.64821 13.5833 3.80556V1.76852C13.5833 0.925864 13.3963 0.75 12.5 0.75H9.41667C6.42512 0.75 4 3.03003 4 5.84259V8.38889H1.83333Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.29102 11.0003C2.29102 6.89518 2.29102 4.8426 3.56632 3.5673C4.84163 2.29199 6.8942 2.29199 10.9993 2.29199C15.1045 2.29199 17.1571 2.29199 18.4324 3.5673C19.7077 4.8426 19.7077 6.89518 19.7077 11.0003C19.7077 15.1055 19.7077 17.158 18.4324 18.4334C17.1571 19.7087 15.1045 19.7087 10.9993 19.7087C6.8942 19.7087 4.84163 19.7087 3.56632 18.4334C2.29102 17.158 2.29102 15.1055 2.29102 11.0003Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round">
                                        </path>
                                        <path
                                            d="M15.125 11C15.125 13.2782 13.2782 15.125 11 15.125C8.72183 15.125 6.875 13.2782 6.875 11C6.875 8.72183 8.72183 6.875 11 6.875C13.2782 6.875 15.125 8.72183 15.125 11Z"
                                            stroke="currentColor" stroke-width="1.5"></path>
                                        <path d="M16.0488 5.95801L16.0398 5.95801" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9.91667" cy="9.91667" r="9.16667" stroke="currentColor"
                                            stroke-width="1.5"></circle>
                                        <path
                                            d="M19.0827 11.0763C18.2331 10.917 17.3593 10.834 16.4676 10.834C11.5613 10.834 7.1975 13.348 4.41602 17.2507"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round">
                                        </path>
                                        <path
                                            d="M16.3333 3.5C13.4647 6.86181 9.1539 9 4.33382 9C3.10067 9 1.90086 8.86005 0.75 8.59547"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round">
                                        </path>
                                        <path
                                            d="M12.3169 19.0837C12.5466 17.9709 12.6673 16.8183 12.6673 15.6377C12.6673 9.84793 9.76545 4.73457 5.33398 1.66699"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.0007 18.7913C12.6595 18.7913 14.2503 18.6275 15.7246 18.3269C17.5661 17.9516 18.4869 17.7639 19.3271 16.6836C20.1673 15.6033 20.1673 14.3632 20.1673 11.8829V10.1164C20.1673 7.63618 20.1673 6.39606 19.3271 5.31577C18.4869 4.23548 17.5661 4.04779 15.7246 3.67241C14.2503 3.37188 12.6595 3.20801 11.0007 3.20801C9.34177 3.20801 7.75097 3.37188 6.27666 3.67241C4.43517 4.04779 3.51442 4.23548 2.6742 5.31577C1.83398 6.39605 1.83398 7.63618 1.83398 10.1164V11.8829C1.83398 14.3632 1.83398 15.6033 2.6742 16.6836C3.51442 17.7639 4.43517 17.9516 6.27666 18.3269C7.75097 18.6275 9.34177 18.7913 11.0007 18.7913Z"
                                            stroke="currentColor" stroke-width="1.5"></path>
                                        <path
                                            d="M14.632 11.2871C14.4959 11.8425 13.7721 12.2413 12.3245 13.0391C10.75 13.9067 9.96273 14.3405 9.32507 14.1733C9.1091 14.1167 8.91018 14.0172 8.74316 13.8822C8.25 13.4835 8.25 12.6558 8.25 11.0003C8.25 9.3449 8.25 8.51719 8.74316 8.11849C8.91018 7.98345 9.1091 7.88392 9.32507 7.82732C9.96273 7.66019 10.75 8.09399 12.3245 8.96159C13.7721 9.75931 14.4959 10.1582 14.632 10.7135C14.6782 10.9025 14.6782 11.0982 14.632 11.2871Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.16732 18.8532C6.02446 19.9141 3.40541 18.8532 1.83398 15.583"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M9.16732 20.1663V17.1944C9.16732 16.646 9.33593 16.1693 9.6077 15.7387C9.79411 15.4433 9.66644 15.0242 9.32965 14.9316C6.54009 14.1648 4.58398 12.9318 4.58398 8.84189C4.58398 7.7786 4.93237 6.77894 5.54475 5.90887C5.69715 5.69234 5.77335 5.58408 5.79167 5.48602C5.80999 5.38796 5.77814 5.25999 5.71444 5.00405C5.45517 3.96235 5.47197 2.85618 5.8611 1.85888C5.8611 1.85888 6.6652 1.59689 8.49538 2.74023C8.91324 3.00127 9.12217 3.13179 9.30617 3.16099C9.49018 3.19019 9.73619 3.12903 10.2282 3.00672C10.901 2.83946 11.5943 2.74967 12.3757 2.74967C13.157 2.74967 13.8503 2.83946 14.5231 3.00672C15.0151 3.12903 15.2611 3.19019 15.4451 3.16099C15.6291 3.13179 15.8381 3.00127 16.2559 2.74023C18.0861 1.59689 18.8902 1.85888 18.8902 1.85888C19.2793 2.85618 19.2961 3.96235 19.0369 5.00405C18.9732 5.25999 18.9413 5.38796 18.9596 5.48602C18.9779 5.58408 19.0542 5.69234 19.2065 5.90887C19.8189 6.77894 20.1673 7.7786 20.1673 8.84189C20.1673 12.9318 18.2112 14.1648 15.4217 14.9316C15.0849 15.0242 14.9572 15.4433 15.1436 15.7387C15.4154 16.1693 15.584 16.646 15.584 17.1944V20.1663"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- tp-footer-area-end -->
    <!-- JS here -->
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/plugin.js') }}"></script>
    <script src="{{ asset('asset/js/lenis.js') }}"></script>
    <script src="{{ asset('asset/js/springer.js') }}"></script>
    <script src="{{ asset('asset/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('asset/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('asset/js/purecounter.js') }}"></script>
    <script src="{{ asset('asset/js/nice-select.js') }}"></script>
    <script src="{{ asset('asset/js/ajax-form.js') }}"></script>
    <script src="{{ asset('asset/js/slider-init.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>



</body>

</html>