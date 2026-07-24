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
            <a href="/"><img src="{{ asset('images/logo-black.png') }}" class="w-[100px] mx-auto"
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
                            <a href="/">
                                <img src="{{ asset('asset/images/logo-black.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-7 hidden xl:block">
                            <div class="flex items-center justify-center">
                                <div class="main-menu hidden xl:block">
                                    <nav class="tp-mobile-menu-active">
                                        <ul class="xl:flex items-center xl:*:mx-5 xl:*:mx-4">
                                            <li class="relative has-dropdown group/menu">
                                                <a href="About"
                                                    class="relative  font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-all duration-300">
                                                    About Us
                                                </a>
                                              
                                            </li>
                                            <li class="max-xl:relative has-dropdown group/menu">
                                                <a href="#"
                                                    class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300">
                                                    Features
                                                </a>
                                                
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
                                               
                                            </li>
                                            <li class="max-xl:relative has-dropdown group/menu">
                                                <a href="#"
                                                    class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300">
                                                    Support
                                                </a>
                                               
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
                                    <a href="Contact"
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
                            <a href="/" class="mb-[25px] inline-block">
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
                                    <a class="hover:text-primary" href="About">About Us</a></li>
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
                                    <a class="hover:text-primary" href="Contact">Contact Us</a></li>
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