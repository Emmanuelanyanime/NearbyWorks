<!DOCTYPE html><html class="no-js" lang="zxx"><head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Toxci | SaaS & AI Startup Technology Tailwind Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
   <link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}">
   <link rel="stylesheet" href="{{ asset('css/font-awesome-pro.css') }}">
   <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>

   <!-- back-to-top-start  -->
   <div class="back-to-top-wrapper group/show">
      <button id="back_to_top" type="button" class="scroll-top z-[999] group-[.back-to-top-btn-show]/show:bottom-[80px] fixed right-[50px] bottom-[-10%] h-[50px] w-[50px] rounded-[6px] text-[16px] text-center cursor-pointer z-[9] border-0 bg-primary text-white transition-all duration-1000 ease-in-out">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
         </svg>
      </button>
   </div>
   <!-- back-to-top-end  -->

   <!-- preloader start -->
   <div id="preloader" class="fixed top-0 left-0 right-0 bottom-0 bg-white z-[999999] flex items-center justify-center">
      <div class="preloader w-[100px] aspect-square p-[10px] grid bg-white [filter:blur(5px)_contrast(10)_hue-rotate(300deg)] "></div>
   </div>
   <!-- preloader end -->

   <!-- Offcanvas Area -->
   <div class="fixed inset-0 z-[999] invisible opacity-0 hover:cursor-[url('../img/cross-out.png')_16_16,_pointer] transition-all duration-500 ease-in-out bg-[rgba(000,_000,_000,_0.6)] body-overlay hover:cursor-[url('../img/cross-out.png')_16_16,_pointer] [&.apply]:opacity-100 [&.apply]:visible"></div>
   <div class="tpoffcanvas fixed top-0 -right-full h-screen w-[400px] bg-white z-999 p-12.5 overflow-y-auto opacity-0 invisible transition-all duration-700 ease-[cubic-bezier(0.785,0.135,0.15,0.86)] max-sm:w-full max-sm:p-8.75 sm:p-10 [&.opened]:opacity-100 [&.opened]:visible [&.opened]:right-0" data-lenis-prevent="">
      <div class="mb-10 flex items-center justify-between">
         <!-- logo -->
         <a href="index.html"><img src="{{ asset('images/logo-black.png') }}" class="w-[100px] mx-auto" alt=""></a>
         <!-- Close Button -->
         <button class="close-btn cursor-pointer w-12.5 h-12.5 bg-black text-white rounded-full hover:bg-primary hover:text-white  flex items-center justify-center transition-all duration-300">
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
            <a href="#"><img class="m-1.25 mb-3.75" src="images/thumb.jpg" alt="image"></a>
            <a href="#"><img class="m-1.25 mb-3.75" src="images/thumb-2.jpg" alt="image"></a>
            <a href="#"><img class="m-1.25 mb-3.75" src="images/thumb-3.jpg" alt="image"></a>
            <a href="#"><img class="m-1.25 mb-3.75" src="images/thumb-4.jpg" alt="image"></a>
         </div>
      </div>
      <!-- Address -->
       <div class="tp-offcanvas-info mb-[60px]">
         <h2 class="text-black text-[22px] mb-[25px]">Information</h2>
         <span class="block mb-[7px]"><a href="tel:42077001007" class="text-black/60 leading-tight hover:text-black">+ 4 20 7700 1007</a></span>
         <span class="block mb-[7px]"><a href="mailto:hello@toxci.com" class="text-black/60 leading-tight hover:text-black">hello@toxci.com</a></span>
         <span class="block"><a href="#" class="text-black/60 leading-tight hover:text-black">Avenue de Roma 158b, Lisboa</a></span>
      </div>
      <div class="mb-10">
         <h2 class="text-black text-[24px] pb-2.5">Follow Us</h2>
         <!-- Social -->
         <div class="flex gap-2">
            <a class="w-11 h-11 flex items-center justify-center rounded-[50px] border border-[rgba(7,21,22,0.1)] text-black transition hover:bg-indigo-500 hover:text-white" href="#">
               <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.403 9.03129C2.34293 9.03129 1.02128 9.03129 0.420526 9.03129C0.100125 9.03129 0 8.91114 0 8.61076C0 7.80976 0 6.98874 0 6.18773C0 5.86733 0.12015 5.76721 0.420526 5.76721H2.403C2.403 5.70713 2.403 4.54568 2.403 4.00501C2.403 3.20401 2.54318 2.44305 2.94368 1.74218C3.3642 1.02128 3.96496 0.540676 4.72591 0.260325C5.22653 0.0801 5.72716 0 6.26783 0H8.23029C8.51064 0 8.63079 0.12015 8.63079 0.400501V2.68335C8.63079 2.9637 8.51064 3.08385 8.23029 3.08385C7.68961 3.08385 7.14894 3.08385 6.60826 3.10388C6.06758 3.10388 5.78723 3.36421 5.78723 3.92491C5.76721 4.52566 5.78723 5.10638 5.78723 5.72716H8.11014C8.43054 5.72716 8.55069 5.84731 8.55069 6.16771V8.59074C8.55069 8.91114 8.45056 9.01126 8.11014 9.01126C7.38924 9.01126 5.84731 9.01126 5.78723 9.01126V15.5394C5.78723 15.8798 5.68711 16 5.32666 16C4.48561 16 3.66458 16 2.82353 16C2.52315 16 2.403 15.8799 2.403 15.5795C2.403 13.4768 2.403 9.09136 2.403 9.03129Z" fill="currentColor"></path>
               </svg>
            </a>
            <a class="w-11 h-11 flex items-center justify-center rounded-[50px] border border-[rgba(7,21,22,0.1)] text-black transition hover:bg-indigo-500 hover:text-white" href="#">
               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.60319 6.77491L15.4315 0H14.0504L8.98966 5.88256L4.94769 0H0.285767L6.39801 8.89547L0.285767 16H1.66696L7.01119 9.78782L11.2798 16H15.9417L9.60285 6.77491H9.60319ZM7.71145 8.97384L7.09216 8.08805L2.16463 1.03974H4.28606L8.26263 6.72795L8.88193 7.61374L14.051 15.0075H11.9296L7.71145 8.97418V8.97384Z" fill="currentColor"></path>
               </svg>
            </a>
            <a class="w-11 h-11 flex items-center justify-center rounded-[50px]  border border-[rgba(7,21,22,0.1)] text-black transition hover:bg-indigo-500 hover:text-white" href="#">
               <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.1428 1H5.14282C2.93368 1 1.14282 2.79086 1.14282 5V13C1.14282 15.2091 2.93368 17 5.14282 17H13.1428C15.352 17 17.1428 15.2091 17.1428 13V5C17.1428 2.79086 15.352 1 13.1428 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M12.3431 8.49624C12.4418 9.16204 12.3281 9.84201 12.0181 10.4395C11.7081 11.0369 11.2176 11.5214 10.6164 11.824C10.0151 12.1266 9.33381 12.2319 8.66928 12.125C8.00475 12.0181 7.39086 11.7043 6.91492 11.2284C6.43899 10.7524 6.12524 10.1385 6.01831 9.47401C5.91137 8.80948 6.0167 8.12816 6.31931 7.52694C6.62192 6.92572 7.1064 6.43523 7.70384 6.12523C8.30128 5.81523 8.98126 5.70151 9.64705 5.80024C10.3262 5.90095 10.9549 6.21741 11.4404 6.70289C11.9259 7.18836 12.2423 7.8171 12.3431 8.49624Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M13.5424 4.60059H13.5504" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
               </svg>
            </a>
            <a class="w-11 h-11 flex items-center justify-center rounded-[50px]  border border-[rgba(7,21,22,0.1)] text-black transition hover:bg-indigo-500 hover:text-white" href="#">
               <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.743794 5.331C0.743794 5.331 2.28009 4.12018 2.79238 4.72531C3.3041 5.331 5.25871 12.64 5.91139 13.9878C6.48098 15.1705 8.05166 16.7332 9.77419 15.6169C11.4956 14.5006 17.2213 9.61269 18.2459 3.84055C19.2699 -1.92988 11.3563 -0.721354 10.518 4.30642C12.613 3.04862 13.7315 4.81699 12.6594 6.82031C11.589 8.82133 10.6108 10.1261 10.0997 10.1261C9.58853 10.1261 9.19543 8.78695 8.60979 6.44669C8.00524 4.02735 8.00811 -0.330546 5.49193 0.163406C3.11843 0.62928 0 4.35341 0 4.35341L0.743794 5.331Z" fill="currentColor"></path>
               </svg>
            </a>
         </div>
      </div>
   </div>
   <!-- tp-offcanvus-area-end -->

   <!-- tp-header-area-start -->
   <header>

      <div id="header-sticky" data-tp-animate="" data-direction="up" data-offset="20" class="opacity-0 group/sticky [.header-sticky]:bg-white [.header-sticky]:shadow-[0px_4px_10px_rgba(3,4,28,0.1)] [.header-sticky]:top-0! absolute top-[10px] max-xl:top-0 left-0 right-0 z-20 max-xl:py-[20px]">
         <div class="mx-auto max-w-[1310px] px-3">
            <div class="px-4 max-xl:px-0">
               <div class="grid grid-cols-12 gap-6 items-center">
                  <div class="xxl:col-span-3 xl:col-span-2 col-span-6">
                     <a href="index.html">
                        <img src="images/logo-black.png" alt="">
                     </a>
                  </div>
                  <div class="xxl:col-span-6 xl:col-span-7 hidden xl:block">
                     <div class="flex items-center justify-center">
                        <div class="main-menu hidden xl:block">
                           <nav class="tp-mobile-menu-active">
                              <ul class="xl:flex items-center xl:*:mx-5 xl:*:mx-4">
                                 <li class="relative has-dropdown group/menu">
                                    <a href="index.html" class="relative  font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-all duration-300"> 
                                       Company
                                    </a>
                                    <div class="tp-submenu xl:absolute xl:top-full xl:left-0 xl:w-[500px] xl:p-[10px] xl:shadow-[0_2px_10px_0_rgba(22,21,25,0.1)] xl:bg-white xl:border xl:border-[rgba(22,21,25,0.1)] xl:rounded-[12px] xl:opacity-0 xl:invisible xl:scale-y-0 xl:origin-top xl:transition-all xl:duration-400 xl:group-hover/menu:opacity-100 xl:group-hover/menu:visible xl:group-hover/menu:scale-y-100 max-xl:hidden">
                                       <div class="xl:p-[10px_20px_36px_20px]">
                                          <div class="grid grid-cols-12 xl:gap-6">
                                             <div class="xl:col-span-6 col-span-12">
                                                <ul class="[&_li]:max-xl:pl-5 xl:[&_li]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[13px]">
                                                   <li><a href="about.html">About Us</a></li>
                                                   <li><a href="career.html">Career</a></li>
                                                   <li><a href="career-details.html">Career Details</a></li>
                                                   <li><a href="case-studies.html">Case Studies</a></li>
                                                   <li><a href="team.html">Our Team</a></li>
                                                </ul>
                                             </div>
                                             <div class="xl:col-span-6 col-span-12">
                                                <ul class="[&_li]:max-xl:pl-5 xl:[&_li]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[13px]">
                                                   <li><a href="service.html">Service</a></li>
                                                   <li><a href="testimonial.html">Testimonials</a></li>
                                                   <li><a href="customer.html">Customer</a></li>
                                                   <li><a href="customer-details.html">Customer Details</a></li>
                                                   <li><a href="changelog.html">Changelog</a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="max-xl:hidden p-[20px_30px_13px_22px] relative rounded-[8px] overflow-hidden bg-center bg-no-repeat bg-cover" data-background="assets/img/menu/bg.png">
                                          <img class="absolute top-0 right-0" src="images/thumb.png" alt="">
                                          <h2 class="font-medium text-[18px] text-black">Customer Love</h2>
                                          <p class="text-[15px]">Read what customers say about us</p>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="max-xl:relative has-dropdown group/menu">
                                    <a href="#" class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300">  
                                       Features
                                    </a>
                                    <div class="tp-submenu xl:absolute xl:top-full xl:left-0 xl:right-0 xl:p-[40px_10px_50px_10px] xl:shadow-[0_2px_10px_0_rgba(22,21,25,0.1)] xl:bg-white xl:border xl:border-[rgba(22,21,25,0.1)] xl:rounded-[12px] xl:opacity-0 xl:invisible xl:scale-y-0 xl:origin-top xl:transition-all xl:duration-400 xl:group-hover/menu:opacity-100 xl:group-hover/menu:visible xl:group-hover/menu:scale-y-100 max-xl:hidden">
                                       <div class="m-[0_auto] max-w-[1290px]">
                                          <div class="grid grid-cols-12 xl:gap-6">
                                             <div class="xl:col-span-7 col-span-12 xl:mr-[16px]">
                                                <div class="grid grid-cols-12 xl:gap-x-6">
                                                   <div class="col-span-12">
                                                      <span class="font-medium text-[13px] uppercase text-grey-100 block mb-[10px]">Overview</span>
                                                   </div>
                                                   <div class="xl:col-span-6 col-span-12">
                                                      <div>
                                                         <ul class="[&_li]:max-xl:pl-5 [&_a]:py-[15px]">
                                                            <li class="group">
                                                               <a href="feature.html" class="flex items-start gap-[15px]">
                                                                  <span class="inline-block">
                                                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M15.3412 2.60485L10.0685 0.256436C9.29467 -0.0854786 8.12496 -0.0854786 7.35116 0.256436L2.07848 2.60485C0.746809 3.1987 0.548859 4.0085 0.548859 4.44039C0.548859 4.87228 0.746809 5.68208 2.07848 6.27593L7.35116 8.62434C7.73806 8.7953 8.22394 8.88528 8.70982 8.88528C9.1957 8.88528 9.68158 8.7953 10.0685 8.62434L15.3412 6.27593C16.6728 5.68208 16.8708 4.87228 16.8708 4.44039C16.8708 4.0085 16.6818 3.1987 15.3412 2.60485Z" fill="#77767A"></path>
                                                                        <path opacity="0.4" d="M8.70982 13.5371C8.36791 13.5371 8.02599 13.4651 7.71107 13.3301L1.64659 10.6308C0.71982 10.2169 0 9.11019 0 8.09345C0 7.72454 0.296926 7.42761 0.665834 7.42761C1.03474 7.42761 1.33167 7.72454 1.33167 8.09345C1.33167 8.57932 1.73657 9.20917 2.18645 9.40712L8.25094 12.1064C8.53887 12.2324 8.87178 12.2324 9.15971 12.1064L15.2242 9.40712C15.6741 9.20917 16.079 8.58832 16.079 8.09345C16.079 7.72454 16.3759 7.42761 16.7448 7.42761C17.1137 7.42761 17.4106 7.72454 17.4106 8.09345C17.4106 9.10119 16.6908 10.2169 15.7641 10.6308L9.69958 13.3301C9.39365 13.4651 9.05174 13.5371 8.70982 13.5371Z" fill="#77767A"></path>
                                                                        <path opacity="0.4" d="M8.70982 18C8.36791 18 8.02599 17.9281 7.71107 17.7931L1.64659 15.0938C0.647838 14.6529 0 13.6541 0 12.5564C0 12.1875 0.296926 11.8906 0.665834 11.8906C1.03474 11.8906 1.33167 12.1875 1.33167 12.5564C1.33167 13.1233 1.66458 13.6361 2.18645 13.8701L8.25094 16.5694C8.53887 16.6954 8.87178 16.6954 9.15971 16.5694L15.2242 13.8701C15.7371 13.6451 16.079 13.1233 16.079 12.5564C16.079 12.1875 16.3759 11.8906 16.7448 11.8906C17.1137 11.8906 17.4106 12.1875 17.4106 12.5564C17.4106 13.6541 16.7628 14.6439 15.7641 15.0938L9.69958 17.7931C9.39365 17.9281 9.05174 18 8.70982 18Z" fill="#77767A"></path>
                                                                     </svg>
                                                                  </span>
                                                                  <span class="inline-block">
                                                                     <span class="font-medium text-[16px] text-black leading-[90%]">Features
                                                                        <span class="opacity-0 group-hover:opacity-100 duration-300">
                                                                           <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                              <path d="M0.75 8.75L8.75 0.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                              <path d="M0.75 0.75H8.75V8.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                     <span class="block text-[15px] text-grey-100">See how others are using Toxci</span>
                                                                  </span>
                                                               </a>
                                                            </li>
                                                            <li class="group">
                                                               <a href="analytics.html" class="flex items-start gap-[15px]">
                                                                  <span class="inline-block">
                                                                     <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.4" d="M18.3721 0.697754V11.9536C18.3721 13.721 17.4419 14.6512 15.6744 14.6512H4.32557C2.55813 14.6512 1.6279 13.721 1.6279 11.9536V0.697754H18.3721Z" fill="#77767A"></path>
                                                                        <path d="M19.3023 1.39535H0.697674C0.316279 1.39535 0 1.07907 0 0.697674C0 0.316279 0.316279 0 0.697674 0H19.3023C19.6837 0 20 0.316279 20 0.697674C20 1.07907 19.6837 1.39535 19.3023 1.39535Z" fill="#77767A"></path>
                                                                        <path d="M14.3442 19.6186C14.2233 19.8604 13.9721 20 13.7209 20C13.6186 20 13.507 19.9721 13.414 19.9256L9.99998 18.2232L6.58602 19.9256C6.49299 19.9721 6.38138 20 6.27905 20C6.02789 20 5.77672 19.8604 5.65579 19.6186C5.47904 19.2651 5.6186 18.8465 5.97209 18.679L9.30231 17.0139V14.6511H10.6977V17.0139L14.0279 18.679C14.3814 18.8465 14.5209 19.2651 14.3442 19.6186Z" fill="#77767A"></path>
                                                                        <path d="M5.81393 9.76749C5.61858 9.76749 5.41395 9.68377 5.27441 9.51633C5.02325 9.21866 5.06974 8.78145 5.36741 8.53029L8.29767 6.08377C8.56743 5.86052 8.9116 5.76749 9.23718 5.82331C9.57207 5.87912 9.86045 6.08375 10.0372 6.38143L11.0139 8.00933L13.7395 5.73959C14.0372 5.48843 14.4744 5.53492 14.7255 5.83259C14.9767 6.13027 14.9302 6.56747 14.6325 6.81864L11.7023 9.26515C11.4325 9.48841 11.0884 9.58143 10.7628 9.52562C10.4279 9.4698 10.1395 9.26517 9.96276 8.9675L8.98603 7.33959L6.26046 9.60933C6.13022 9.71166 5.97207 9.76749 5.81393 9.76749Z" fill="#77767A"></path>
                                                                     </svg>
                                                                  </span>
                                                                  <span class="inline-block">
                                                                     <span class="font-medium text-[16px] text-black leading-[90%]">Analytics
                                                                        <span class="opacity-0 group-hover:opacity-100 duration-300">
                                                                           <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                              <path d="M0.75 8.75L8.75 0.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                              <path d="M0.75 0.75H8.75V8.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                     <span class="block text-[15px] text-grey-100">Dynamic content solutions</span>
                                                                  </span>
                                                               </a>
                                                            </li>
                                                            <li class="group">
                                                               <a href="whitepapper.html" class="flex items-start gap-[15px]">
                                                                  <span class="inline-block">
                                                                     <svg width="15" height="22" viewBox="0 0 15 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.4" d="M11.8222 8.41116H3.1778C1.95474 8.41116 1.52978 7.59233 2.24496 6.59729L6.56716 0.54416C7.07504 -0.181387 7.92495 -0.181387 8.43284 0.54416L12.755 6.59729C13.4702 7.59233 13.0453 8.41116 11.8222 8.41116Z" fill="#77767A"></path>
                                                                        <path d="M13.294 16.641H1.70603C0.0683671 16.641 -0.491343 15.5526 0.472598 14.2259L4.6082 8.41119H10.3919L14.5275 14.2259C15.4914 15.5526 14.9317 16.641 13.294 16.641Z" fill="#77767A"></path>
                                                                        <path d="M8.27743 16.6409V20.7869C8.27743 21.2119 7.92502 21.5643 7.50006 21.5643C7.07509 21.5643 6.72269 21.2119 6.72269 20.7869V16.6409H8.27743Z" fill="#77767A"></path>
                                                                     </svg>
                                                                  </span>
                                                                  <span class="inline-block">
                                                                     <span class="font-medium text-[16px] text-black leading-[90%]">Whitepaper
                                                                        <span class="opacity-0 group-hover:opacity-100 duration-300">
                                                                           <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                              <path d="M0.75 8.75L8.75 0.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                              <path d="M0.75 0.75H8.75V8.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                     <span class="block text-[15px] text-grey-100">Store and manage data securely.</span>
                                                                  </span>
                                                               </a>
                                                            </li>
                                                            <li class="group">
                                                               <a href="process.html" class="flex items-start gap-[15px]">
                                                                  <span class="inline-block">
                                                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.4" d="M18 13.05V15.75C18 17.1 17.1 18 15.75 18H3.59998C3.96898 18 4.34698 17.946 4.69798 17.829C4.79698 17.793 4.89596 17.757 4.99496 17.712C5.30996 17.586 5.61598 17.4061 5.88598 17.1721C5.96698 17.1091 6.05698 17.0281 6.13798 16.9471L6.17396 16.911L12.294 10.8H15.75C17.1 10.8 18 11.7 18 13.05Z" fill="#77767A"></path>
                                                                        <path opacity="0.6" d="M14.733 8.36108L12.294 10.8001L6.17398 16.9111C6.80398 16.2631 7.19999 15.3721 7.19999 14.4001V5.70607L9.63899 3.26707C10.593 2.31307 11.871 2.31307 12.825 3.26707L14.733 5.17508C15.687 6.12908 15.687 7.40708 14.733 8.36108Z" fill="#77767A"></path>
                                                                        <path d="M4.95 0H2.25C0.9 0 0 0.9 0 2.25V14.4C0 14.643 0.0269879 14.886 0.0719879 15.12C0.0989879 15.237 0.125993 15.354 0.161993 15.471C0.206993 15.606 0.251997 15.741 0.305997 15.867C0.314997 15.876 0.315005 15.885 0.315005 15.885C0.324005 15.885 0.324005 15.885 0.315005 15.894C0.441005 16.146 0.584997 16.389 0.755997 16.614C0.854997 16.731 0.954012 16.839 1.05301 16.947C1.15201 17.055 1.26 17.145 1.377 17.235L1.38601 17.244C1.61101 17.415 1.854 17.559 2.106 17.685C2.115 17.676 2.11501 17.676 2.11501 17.685C2.25001 17.748 2.385 17.793 2.529 17.838C2.646 17.874 2.76301 17.901 2.88001 17.928C3.11401 17.973 3.357 18 3.6 18C3.969 18 4.347 17.946 4.698 17.829C4.797 17.793 4.89599 17.757 4.99499 17.712C5.30999 17.586 5.61601 17.406 5.88601 17.172C5.96701 17.109 6.05701 17.028 6.13801 16.947L6.17399 16.911C6.80399 16.263 7.2 15.372 7.2 14.4V2.25C7.2 0.9 6.3 0 4.95 0ZM3.6 15.75C2.853 15.75 2.25 15.147 2.25 14.4C2.25 13.653 2.853 13.05 3.6 13.05C4.347 13.05 4.95 13.653 4.95 14.4C4.95 15.147 4.347 15.75 3.6 15.75Z" fill="#77767A"></path>
                                                                     </svg>
                                                                  </span>
                                                                  <span class="inline-block">
                                                                     <span class="font-medium text-[16px] text-black leading-[90%]">Process
                                                                        <span class="opacity-0 group-hover:opacity-100 duration-300">
                                                                           <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                              <path d="M0.75 8.75L8.75 0.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                              <path d="M0.75 0.75H8.75V8.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                     <span class="block text-[15px] text-grey-100">Our unique selling points</span>
                                                                  </span>
                                                               </a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="xl:col-span-6 col-span-12">
                                                      <div>
                                                         <ul class="[&_li]:max-xl:pl-5 [&_a]:py-[15px]">
                                                            <li class="group">
                                                               <a href="integrations.html" class="flex items-start gap-[15px]">
                                                                  <span class="inline-block">
                                                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M12.6 5.40002H5.40002V12.6H12.6V5.40002Z" fill="#77767A"></path>
                                                                        <path opacity="0.4" d="M2.7 18C4.185 18 5.4 16.785 5.4 15.3V12.6H2.7C1.215 12.6 0 13.815 0 15.3C0 16.785 1.215 18 2.7 18Z" fill="#77767A"></path>
                                                                        <path opacity="0.4" d="M2.7 5.4H5.4V2.7C5.4 1.215 4.185 0 2.7 0C1.215 0 0 1.215 0 2.7C0 4.185 1.215 5.4 2.7 5.4Z" fill="#77767A"></path>
                                                                        <path opacity="0.4" d="M12.6 5.4H15.3C16.785 5.4 18 4.185 18 2.7C18 1.215 16.785 0 15.3 0C13.815 0 12.6 1.215 12.6 2.7V5.4Z" fill="#77767A"></path>
                                                                        <path opacity="0.4" d="M15.3 18C16.785 18 18 16.785 18 15.3C18 13.815 16.785 12.6 15.3 12.6H12.6V15.3C12.6 16.785 13.815 18 15.3 18Z" fill="#77767A"></path>
                                                                     </svg>
                                                                  </span>
                                                                  <span class="inline-block">
                                                                     <span class="font-medium text-[16px] text-black leading-[90%]">Integrations
                                                                        <span class="opacity-0 group-hover:opacity-100 duration-300">
                                                                           <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                              <path d="M0.75 8.75L8.75 0.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                              <path d="M0.75 0.75H8.75V8.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                     <span class="block text-[15px] text-grey-100">Collaborate across tools</span>
                                                                  </span>
                                                               </a>
                                                            </li>
                                                            <li class="group">
                                                               <a href="brandkit.html" class="flex items-start gap-[15px]">
                                                                  <span class="inline-block">
                                                                     <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.4" d="M2.91711 15.927C3.65539 15.1347 4.78079 15.1977 5.42903 16.062L6.33838 17.2775C7.06766 18.2408 8.24709 18.2408 8.97637 17.2775L9.88572 16.062C10.534 15.1977 11.6594 15.1347 12.3977 15.927C14.0003 17.6376 15.3057 17.0704 15.3057 14.6755V4.53768C15.3057 0.909321 14.4594 0 11.0561 0H4.24959C0.846318 0 0 0.909321 0 4.53768V14.6755C0.00900337 17.0704 1.32351 17.6286 2.91711 15.927Z" fill="#77767A"></path>
                                                                        <path d="M10.2188 7.18465L9.76868 7.64383H9.75967L7.03165 10.3719C6.9146 10.4889 6.67151 10.615 6.50045 10.633L5.28499 10.813C4.84382 10.876 4.53773 10.5609 4.60075 10.1288L4.77182 8.9043C4.79883 8.73324 4.91585 8.49915 5.0329 8.3731L7.76993 5.64508L8.2201 5.1859C8.51721 4.88879 8.85034 4.67273 9.21048 4.67273C9.51659 4.67273 9.84971 4.81676 10.2188 5.1859C11.0292 5.9962 10.7681 6.63545 10.2188 7.18465Z" fill="#77767A"></path>
                                                                     </svg>
                                                                  </span>
                                                                  <span class="inline-block">
                                                                     <span class="font-medium text-[16px] text-black leading-[90%]">Brandkit
                                                                        <span class="opacity-0 group-hover:opacity-100 duration-300">
                                                                           <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                              <path d="M0.75 8.75L8.75 0.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                              <path d="M0.75 0.75H8.75V8.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                     <span class="block text-[15px] text-grey-100">Dynamic content solutions</span>
                                                                  </span>
                                                               </a>
                                                            </li>
                                                            <li class="group">
                                                               <a href="downloads.html" class="flex items-start gap-[15px]">
                                                                  <span class="inline-block">
                                                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.4" d="M17.046 2.7V15.3C17.046 16.794 15.831 18 14.346 18H10.746C9.25196 18 8.04596 16.794 8.04596 15.3V2.7C8.04596 1.206 9.25196 0 10.746 0H14.346C15.831 0 17.046 1.206 17.046 2.7Z" fill="#77767A"></path>
                                                                        <path d="M13.221 3.59999C13.221 3.96899 12.915 4.27499 12.546 4.27499H8.04596V2.92499H12.546C12.915 2.92499 13.221 3.23099 13.221 3.59999Z" fill="#77767A"></path>
                                                                        <path d="M12.231 14.4C12.231 14.769 11.934 15.075 11.556 15.075H8.04596V13.725H11.556C11.934 13.725 12.231 14.031 12.231 14.4Z" fill="#77767A"></path>
                                                                        <path d="M13.221 10.809C13.212 11.178 12.915 11.475 12.546 11.475C12.537 11.475 12.537 11.475 12.537 11.475L8.04596 11.43V10.08L12.546 10.125C12.924 10.125 13.221 10.431 13.221 10.809Z" fill="#77767A"></path>
                                                                        <path d="M11.25 7.20002C11.25 7.56902 10.944 7.87502 10.575 7.87502H8.04596V6.52502H10.575C10.944 6.52502 11.25 6.83102 11.25 7.20002Z" fill="#77767A"></path>
                                                                        <path opacity="0.4" d="M5.31901 2.655V14.319C5.31901 14.724 5.14801 15.345 4.94101 15.687L4.20301 16.911C3.357 18.333 1.971 18.333 1.116 16.911L0.387001 15.687C0.171 15.345 0 14.724 0 14.319V2.655C0 1.197 1.197 0 2.664 0C4.12201 0 5.31901 1.197 5.31901 2.655Z" fill="#77767A"></path>
                                                                        <path d="M5.31901 3.82501H0V5.17501H5.31901V3.82501Z" fill="#77767A"></path>
                                                                     </svg>
                                                                  </span>
                                                                  <span class="inline-block">
                                                                     <span class="font-medium text-[16px] text-black leading-[90%]">Download App
                                                                        <span class="opacity-0 group-hover:opacity-100 duration-300">
                                                                           <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                              <path d="M0.75 8.75L8.75 0.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                              <path d="M0.75 0.75H8.75V8.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                     <span class="block text-[15px] text-grey-100">Get the app</span>
                                                                  </span>
                                                               </a>
                                                            </li>
                                                            <li class="group">
                                                               <a href="analytics.html" class="flex items-start gap-[15px]">
                                                                  <span class="inline-block">
                                                                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.4" d="M17.046 2.7V15.3C17.046 16.794 15.831 18 14.346 18H10.746C9.25196 18 8.04596 16.794 8.04596 15.3V2.7C8.04596 1.206 9.25196 0 10.746 0H14.346C15.831 0 17.046 1.206 17.046 2.7Z" fill="#77767A"></path>
                                                                        <path d="M13.221 3.59999C13.221 3.96899 12.915 4.27499 12.546 4.27499H8.04596V2.92499H12.546C12.915 2.92499 13.221 3.23099 13.221 3.59999Z" fill="#77767A"></path>
                                                                        <path d="M12.231 14.4C12.231 14.769 11.934 15.075 11.556 15.075H8.04596V13.725H11.556C11.934 13.725 12.231 14.031 12.231 14.4Z" fill="#77767A"></path>
                                                                        <path d="M13.221 10.809C13.212 11.178 12.915 11.475 12.546 11.475C12.537 11.475 12.537 11.475 12.537 11.475L8.04596 11.43V10.08L12.546 10.125C12.924 10.125 13.221 10.431 13.221 10.809Z" fill="#77767A"></path>
                                                                        <path d="M11.25 7.20002C11.25 7.56902 10.944 7.87502 10.575 7.87502H8.04596V6.52502H10.575C10.944 6.52502 11.25 6.83102 11.25 7.20002Z" fill="#77767A"></path>
                                                                        <path opacity="0.4" d="M5.31901 2.655V14.319C5.31901 14.724 5.14801 15.345 4.94101 15.687L4.20301 16.911C3.357 18.333 1.971 18.333 1.116 16.911L0.387001 15.687C0.171 15.345 0 14.724 0 14.319V2.655C0 1.197 1.197 0 2.664 0C4.12201 0 5.31901 1.197 5.31901 2.655Z" fill="#77767A"></path>
                                                                        <path d="M5.31901 3.82501H0V5.17501H5.31901V3.82501Z" fill="#77767A"></path>
                                                                     </svg>
                                                                  </span>
                                                                  <span class="inline-block">
                                                                     <span class="font-medium text-[16px] text-black leading-[90%]">Analytics & Reporting
                                                                        <span class="opacity-0 group-hover:opacity-100 duration-300">
                                                                           <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                              <path d="M0.75 8.75L8.75 0.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                              <path d="M0.75 0.75H8.75V8.75" stroke="#161519" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                           </svg>
                                                                        </span>
                                                                     </span>
                                                                     <span class="block text-[15px] text-grey-100">Dynamic content solutions</span>
                                                                  </span>
                                                               </a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-span-5 max-xl:hidden">
                                                <div class="p-[38px_30px_34px_40px] ml-[-16px] mb-2.5 relative z-10 rounded-[8px] overflow-hidden bg-center bg-no-repeat bg-cover" data-background="assets/img/menu/bg-5.png">
                                                   <h2 class="font-medium text-[18px] text-black mb-[7px]">Merge Unified</h2>
                                                   <p class="mb-[14px]">One API. Countless product integrations.</p>
                                                   <a href="pricing.html" class="text-[16px] font-medium text-primary flex items-center gap-[6px]">
                                                      See a demo
                                                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M0.75 8.75L8.75 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                         <path d="M0.75 0.75H8.75V8.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </a>
                                                   <img src="images/thumb-4_1.png" alt="" class="absolute bottom-0 right-[8px] -z-10">
                                                </div>
                                                <div class="p-[38px_30px_34px_40px] ml-[-16px] relative z-10 rounded-[8px] overflow-hidden bg-center bg-no-repeat bg-cover" data-background="assets/img/menu/bg-6.png">
                                                   <h2 class="font-medium text-[18px] text-black mb-[7px]">Combine Unified</h2>
                                                   <p class="mb-[14px]">One API. Countless product integrations.</p>
                                                   <a href="pricing.html" class="text-[16px] font-medium text-primary flex items-center gap-[6px]">
                                                      See a demo
                                                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M0.75 8.75L8.75 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                         <path d="M0.75 0.75H8.75V8.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </a>
                                                   <img src="images/thumb-5_1.png" alt="" class="absolute bottom-0 right-0 -z-10">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="relative has-dropdown group/menu">
                                    <a href="pricing.html" class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300"> pricing</a> 
                                 </li>
                                 <li class="relative has-dropdown group/menu">
                                    <a href="#" class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300"> 
                                       Integrations
                                    </a>
                                    <div class="tp-submenu xl:w-[260px] xl:p-[17px_30px] xl:shadow-[0_2px_10px_0_rgba(22,21,25,0.1)] xl:bg-white xl:border xl:border-[rgba(22,21,25,0.1)] xl:rounded-[12px] xl:absolute xl:top-full xl:left-0 xl:opacity-0 xl:invisible xl:scale-y-0 xl:origin-top xl:transition-all xl:duration-400 xl:group-hover/menu:opacity-100 xl:group-hover/menu:visible xl:group-hover/menu:scale-y-100 max-xl:hidden">
                                       <ul class="[&_li]:max-xl:pl-5 xl:[&_li:not(:last-child)]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[13px]">
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
                                    <a href="#" class="relative font-medium text-[16px] xl:py-6.5 text-black group-hover/menu:text-primary max-xl:py-3.75 max-xl:border-b max-xl:border-[rgba(255,255,255,0.1)] xl:inline-block max-xl:block transition-colors duration-300"> 
                                       Support
                                    </a>
                                    <div class="tp-submenu mx-auto xl:w-[750px] xl:p-[30px_30px_30px_30px] xl:shadow-[0_2px_10px_0_rgba(22,21,25,0.1)] xl:bg-white xl:border xl:border-[rgba(22,21,25,0.1)] xl:rounded-[12px] xl:absolute xl:top-full xl:left-0 xl:right-0 xl:opacity-0 xl:invisible xl:scale-y-0 xl:origin-top xl:transition-all xl:duration-400 xl:group-hover/menu:opacity-100 xl:group-hover/menu:visible xl:group-hover/menu:scale-y-100 max-xl:hidden">
                                       <div class="grid items-center grid-cols-12 xl:gap-10">
                                          <div class="xl:col-span-8 col-span-12 xl:mr-[16px] xl:mt-[-12px]">
                                             <div class="grid grid-cols-12 xl:gap-10">
                                                <div class="xl:col-span-6 col-span-12">
                                                   <ul class="[&_li]:max-xl:pl-5 xl:[&_li]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[12px]">
                                                      <li><a href="sign-in.html">Login</a></li>
                                                      <li><a href="affiliate.html">Affiliate Program</a></li>
                                                      <li><a href="referall-program.html">Referral Program</a></li>
                                                      <li><a href="terms-of-service.html">Terms & Conditions</a></li>
                                                      <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                   </ul>
                                                </div>
                                                <div class="xl:col-span-6 col-span-12">
                                                   <ul class="[&_li]:max-xl:pl-5 xl:[&_li]:shadow-[0_1px_0_0_rgba(73,72,81,0.1)] [&_a]:block [&_a]:text-[16px] [&_a]:transition-all [&_a]:text-grey [&_a]:duration-300 [&_a]:hover:text-primary xl:[&_a]:hover:translate-x-[10px] [&_a]:py-[12px]">
                                                      <li><a href="analytics.html">Analytics</a></li>
                                                      <li><a href="register.html">Create Account</a></li>
                                                      <li><a href="affiliate-policy.html">Affiliate Policy</a></li>
                                                      <li><a href="refund-policy.html">Refund Policy</a></li>
                                                      <li><a href="support.html">Support</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-span-4 max-xl:hidden">
                                             <div class="ml-[-16px] bg-[#f2f8ff] relative rounded-[8px] overflow-hidden bg-center bg-no-repeat bg-cover" data-background="assets/img/menu/bg-4.png">
                                                <div class="p-[18px_20px_15px_20px]">
                                                   <h2 class="font-medium text-[18px] text-black mb-[10px]">Customer Love</h2>
                                                   <p class="text-[15px] leading-[127%]">Read what customers say about us</p>
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
                           <a href="sign-in.html" class="tp-btn group tp-btn-hover hidden xl:inline-block text-[15px] px-[19px] h-[40px] leading-[40px] rounded-lg bg-transparent border border-black">
                              <span class="text-black group-hover:text-white">Login</span>
                              <b></b>
                           </a>
                           <a href="contact.html" class="tp-btn tp-btn-hover tp-btn-shadow hidden sm:inline-block rounded-lg text-[15px] px-5 h-[40px] leading-[40px]">
                              <span>Sign up free</span>
                              <b></b>
                           </a>
                           <button class="tp-menu-bar max-xl:ml-[10px] cursor-pointer xl:hidden h-11.25 w-11.25 rounded-full flex items-center justify-center bg-black text-white text-[18px] hover:bg-green hover:text-black">
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


   <main>

      <!-- tp-hero-area-start -->
      <div class="pt-[160px] bg-center overflow-hidden bg-no-repeat bg-grey-200 relative bg-cover" data-background="assets/img/hero/home-10/bg.png">
         <img class="absolute bottom-[-30px] left-0 right-0 m-auto" src="images/shape-4.png" alt="">
         <div class="mx-auto max-w-[1310px] px-3">
            <div class="grid grid-cols-12 gap-3">
               <div class="xl:col-span-2 lg:col-span-1"></div>
               <div class="xl:col-span-8 lg:col-span-10 col-span-12">
                  <div class="text-center relative z-[3]">
                     <span data-tp-animate="" data-delay="0.2" class="font-medium opacity-0 text-[15px] text-[#161616] border border-[rgba(119,118,122,0.1)] bg-[#f0f1f4] rounded-[20px] inline-block p-[7px_16px] mb-[15px]">
                        <svg class="mt-[-3px] mr-[5px]" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2419 9.37767C13.2433 9.60258 13.1749 9.8224 13.0463 10.0069C12.9176 10.1914 12.7349 10.3314 12.5234 10.4078L8.96675 11.7221L7.65663 15.2815C7.57905 15.4922 7.43868 15.6741 7.25447 15.8026C7.07026 15.9311 6.85107 16 6.62647 16C6.40187 16 6.18268 15.9311 5.99847 15.8026C5.81426 15.6741 5.67389 15.4922 5.59631 15.2815L4.27792 11.7221L0.71854 10.412C0.507769 10.3344 0.325868 10.194 0.19738 10.0098C0.0688917 9.82559 0 9.6064 0 9.3818C0 9.15721 0.0688917 8.93802 0.19738 8.7538C0.325868 8.56959 0.507769 8.42922 0.71854 8.35164L4.27792 7.03325L5.58803 3.47387C5.66562 3.2631 5.80598 3.0812 5.9902 2.95271C6.17441 2.82423 6.3936 2.75533 6.6182 2.75533C6.84279 2.75533 7.06198 2.82423 7.2462 2.95271C7.43041 3.0812 7.57078 3.2631 7.64836 3.47387L8.96675 7.03325L12.5261 8.34337C12.7378 8.42045 12.9204 8.56135 13.0486 8.74662C13.1768 8.93188 13.2443 9.15238 13.2419 9.37767ZM9.38047 2.75814H10.4837V3.86139C10.4837 4.00769 10.5418 4.148 10.6453 4.25145C10.7487 4.3549 10.8891 4.41302 11.0354 4.41302C11.1817 4.41302 11.322 4.3549 11.4254 4.25145C11.5289 4.148 11.587 4.00769 11.587 3.86139V2.75814H12.6902C12.8365 2.75814 12.9768 2.70002 13.0803 2.59657C13.1837 2.49312 13.2419 2.35281 13.2419 2.20651C13.2419 2.06021 13.1837 1.9199 13.0803 1.81645C12.9768 1.713 12.8365 1.65488 12.6902 1.65488L11.587 1.65488V0.551627C11.587 0.405327 11.5289 0.265018 11.4254 0.161568C11.322 0.0581177 11.1817 0 11.0354 0C10.8891 0 10.7487 0.0581177 10.6453 0.161568C10.5418 0.265018 10.4837 0.405327 10.4837 0.551627V1.65488H9.38047C9.23417 1.65488 9.09386 1.713 8.99041 1.81645C8.88696 1.9199 8.82884 2.06021 8.82884 2.20651C8.82884 2.35281 8.88696 2.49312 8.99041 2.59657C9.09386 2.70002 9.23417 2.75814 9.38047 2.75814ZM15.4484 4.96465H14.8967V4.41302C14.8967 4.26672 14.8386 4.12641 14.7352 4.02296C14.6317 3.91951 14.4914 3.86139 14.3451 3.86139C14.1988 3.86139 14.0585 3.91951 13.9551 4.02296C13.8516 4.12641 13.7935 4.26672 13.7935 4.41302V4.96465H13.2419C13.0956 4.96465 12.9553 5.02277 12.8518 5.12621C12.7484 5.22967 12.6902 5.36997 12.6902 5.51627C12.6902 5.66258 12.7484 5.80288 12.8518 5.90633C12.9553 6.00978 13.0956 6.0679 13.2419 6.0679H13.7935V6.61953C13.7935 6.76583 13.8516 6.90614 13.9551 7.00959C14.0585 7.11304 14.1988 7.17116 14.3451 7.17116C14.4914 7.17116 14.6317 7.11304 14.7352 7.00959C14.8386 6.90614 14.8967 6.76583 14.8967 6.61953V6.0679H15.4484C15.5947 6.0679 15.735 6.00978 15.8384 5.90633C15.9419 5.80288 16 5.66258 16 5.51627C16 5.36997 15.9419 5.22967 15.8384 5.12621C15.735 5.02277 15.5947 4.96465 15.4484 4.96465Z" fill="url(#paint0_linear_297_3942)"></path>
                           <defs>
                              <linearGradient id="paintw0_linear_297_3942" x1="4" y1="2" x2="12.5" y2="17.5" gradientUnits="userSpaceOnUse">
                                 <stop offset="0.36" stop-color="#FF2E2E"></stop>
                                 <stop offset="0.33" stop-color="#EE7B16"></stop>
                                 <stop offset="0.66" stop-color="#8A43E1"></stop>
                                 <stop offset="1" stop-color="#D510FC"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Toxci AI Chatbot Website
                     </span>
                     <h2 data-tp-split-text="" data-delay="0.1" class="font-semibold max-sm:[&>br]:hidden text-[70px] max-xl:text-6xl max-md:text-4xl leading-[114%] tracking-[-0.03em] text-black] mb-[13px]">Transform connect and<br> Evolve with AI chatbot</h2>
                     <p data-tp-split-text="" data-delay="0.2" class="font-normal max-sm:[&>br]:hidden text-lg leading-[156%] tracking-[-0.01em] text-grey-300 mb-[31px]">Map out tasks, work together effortlessly, and follow progress <br> all from one beautifully unified tool.</p>
                     <div data-tp-animate="" data-delay="0.5" class="opacity-0 relative my-0 xxl:mx-[170px] xl:mx-[148px] lg:mx-[100px] mb-[20px] md:mx-[70px] xs:mx-0">
                        <form action="#">
                           <div class="relative">
                              <input type="text" placeholder="Enter your business email" class="border font-[16px] border-white rounded-[12px] h-[60px] w-full pl-[24px] md:pr-[200px] text-[14px] font-normal xs:pr-[20px] focus:border-primary bg-white shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)]">
                              <button type="submit" class="tp-btn tp-btn-hover tp-btn-shadow bg-black min-sm:absolute max-sm:relative min-sm:top-1/2 right-[10px] min-sm:-translate-y-1/2 max-sm:my-[20px] rounded-lg text-[15px] px-5 h-[40px] leading-[40px]">
                                 <span>Sign up free</span>
                                 <b class="bg-primary"></b>
                              </button>
                           </div>
                        </form>
                     </div>
                     <div class="flex flex-wrap gap-4 max-sm:gap-2 justify-center mb-10">
                        <span data-tp-animate="" data-delay="0.6" class="opacity-0 font-normal text-[16px] leading-[213%] tracking-[-0.01em] text-grey-300">
                           <svg class="mr-[2px]" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                           Free 14-day trial
                        </span>
                        <span data-tp-animate="" data-delay="0.7" class="opacity-0 font-normal text-[16px] leading-[213%] tracking-[-0.01em] text-grey-300">
                           <svg class="mr-[2px]" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                           No credit card required
                        </span>
                     </div>
                     <div data-tp-animate="" data-delay="0.8" class="opacity-0 text-center relative">
                        <img src="images/thumb_3.png" alt="">
                        <img class="absolute chat-bubble opacity-0 transform scale-75 top-[190px] max-sm:top-[40px] right-0" src="images/shape.png" alt="">
                        <img class="absolute chat-bubble opacity-0 transform scale-75 bottom-[210px] left-0" src="images/shape-3.png" alt="">  
                        <img class="absolute chat-bubble opacity-0 transform scale-75 md:bottom-[210px] max-md:bottom-[170px] right-0" src="images/shape-2_1.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-hero-area-end -->

      <!-- tp-feature-area-start -->
      <div class="bg-[#111] py-[19px] shadow-inner shadow-[0_0_20px_0_rgba(255,255,255,0.16)]">
         <div class="mx-auto max-w-[1100px] px-3">
            <div class="grid grid-cols-12 gap-3">
               <div class="col-span-12">
                  <div class="flex flex-wrap justify-between">
                     <span data-tp-animate="" data-delay="0.5" data-direction="left" data-spring="" data-duration="2.5" class="font-medium text-[15px] tracking-[-0.01em] text-white max-md:mb-5">Discover <span class="underline decoration-slice">Text</span> products:</span>
                     <div data-tp-animate="" data-delay="0.5" data-direction="right" data-spring="" data-duration="2.5" class="flex flex-wrap gap-[95px] max-lg:gap-[20px]">
                        <a href="#">
                           <img src="images/logo_1.png" alt="">
                        </a>
                        <a href="#">
                           <img src="images/logo-2_1.png" alt="">
                        </a>
                        <a href="#">
                           <img src="images/logo-3_1.png" alt="">
                        </a>
                        <a href="#">
                           <img src="images/logo-4_1.png" alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-feature-area-end -->

      <!-- tp-brands-area-start -->
      <div class="pb-[120px] overflow-hidden pt-[106px] bg-grey-200">
         <div class="mx-auto max-w-[1310px] px-3">
            <p data-tp-animate="" data-delay="0.2" class="text-center text-grey-300 text-lg mb-[40px]">Trusted by <span class="font-medium text-black">10,000+</span> businesses worldwide</p>
            <div data-tp-animate="" data-delay="0.3" data-direction="right" class="swiper relative tp-text-slide-active">
               <div class="w-25 h-[60px] left-0 top-0 absolute z-10 inline-block bg-[linear-gradient(270deg,#f6f7fa_0%,rgba(244,242,241,0)_100%)] rotate-[-180deg] max-md:hidden"></div>
               <div class="w-25 h-[60px] right-0 top-0 absolute z-10 inline-block bg-[linear-gradient(270deg,#f6f7fa_0%,rgba(244,242,241,0)_100%)]  max-md:hidden"></div>
               <div class="swiper-wrapper items-end transition-all ease-linear">
                  <div class="swiper-slide !w-auto">
                     <div>
                        <img src="images/logo-5.png" alt="">
                     </div>
                  </div>
                  <div class="swiper-slide !w-auto">
                     <div>
                        <img src="images/logo-2.png" alt="">
                     </div>
                  </div>
                  <div class="swiper-slide !w-auto">
                     <div>
                        <img src="images/logo-3.png" alt="">
                     </div>
                  </div>
                  <div class="swiper-slide !w-auto">
                     <div>
                        <img src="images/logo-4.png" alt="">
                     </div>
                  </div>
                  <div class="swiper-slide !w-auto">
                     <div>
                        <img src="images/logo-5.png" alt="">
                     </div>
                  </div>
                  <div class="swiper-slide !w-auto">
                     <div>
                        <img src="images/logo-6.png" alt="">
                     </div>
                  </div>
                  <div class="swiper-slide !w-auto">
                     <div>
                        <img src="images/logo-7.png" alt="">
                     </div>
                  </div>
                  <div class="swiper-slide !w-auto">
                     <div>
                        <img src="images/logo-4.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-brands-area-end -->

      <!-- tp-features-area-start -->
      <div class="pb-[24px] bg-grey-200">
         <div class="mx-auto max-w-[1310px] px-3">
            <div class="grid grid-cols-12 gap-6">
               <div class="col-span-12">
                  <div class="mb-[35px] text-center">
                     <h2 data-tp-split-text="" class="font-semibold text-[48px] max-md:text-[36px] leading-[117%] tracking-[-0.02em] mb-[17px]">Build the perfect<br> customer facing AI agent</h2>
                     <p data-tp-split-text="" class="text-[18px] tracking-[-0.01em] text-grey-300">Automate tasks, unlock insights, and scale your team’s productivity — all in one place</p>
                  </div>
               </div>
               <div class="md:col-span-6 col-span-12">
                  <div data-tp-animate="" data-delay="0.2" class="relative group rounded-3xl z-10 shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                     <img class="absolute opacity-0 group-hover:opacity-100 top-0 left-0 -z-10" src="images/shape_2.png" alt="">
                     <div data-tp-animate="" data-delay="0.3" class="text-center p-[50px_50px_0px_50px]">
                        <img class="group-hover:scale-[1.06] duration-500 w-full rounded-[12px]" src="images/thumb_2.png" alt="">
                     </div>
                     <div class="p-[50px_34px_24px_34px]">
                        <h3 data-tp-animate="" data-delay="0.4" class="font-semibold text-[20px] mb-[14px]"><a href="feature.html" class="hover:text-primary">Sync with real-time data</a></h3>
                        <p data-tp-animate="" data-delay="0.5" class="font-normal max-md:[&>br]:hidden text-[16px] leading-[163%] tracking-[-0.01em] text-gray">Connect your agent to systems like order management tools, CRMs,<br> and more to seamlessly access data ranging</p>
                     </div>
                  </div>
               </div>
               <div class="md:col-span-6 col-span-12">
                  <div data-tp-animate="" data-delay="0.3" class="relative rounded-3xl group z-10 shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                     <img class="absolute opacity-0 group-hover:opacity-100 top-0 left-0 -z-10" src="images/shape_2.png" alt="">
                     <div data-tp-animate="" data-delay="0.4" class="text-center p-[50px_50px_0px_50px]">
                        <img class="group-hover:scale-[1.06] duration-500 w-full rounded-[12px]" src="images/thumb-2.png" alt="">
                     </div>
                     <div class="p-[50px_34px_24px_34px]">
                        <h3 data-tp-animate="" data-delay="0.5" class="font-semibold text-[20px] mb-[14px]"><a href="feature.html" class="hover:text-primary">Take actions on your systems</a></h3>
                        <p data-tp-animate="" data-delay="0.6" class="font-normal max-md:[&>br]:hidden text-[16px] leading-[163%] tracking-[-0.01em] text-gray">Connect your agent to systems like order management tools, CRMs,<br> and more to seamlessly access data ranging</p>
                     </div>
                  </div>
               </div>
               <div class="lg:col-span-4 md:col-span-6 col-span-12">
                  <div data-tp-animate="" data-delay="0.2" class="relative group rounded-3xl z-10 shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                     <img class="absolute opacity-0 group-hover:opacity-100 top-0 left-0 -z-10" src="images/shape_2.png" alt="">
                     <div data-tp-animate="" data-delay="0.3" class="text-center p-[40px_32px_0px_32px]">
                        <img class="group-hover:scale-[1.06] duration-500 rounded-[12px]" src="images/thumb-3.png" alt="">
                     </div>
                     <div class="p-[30px_34px_24px_34px]">
                        <h3 data-tp-animate="" data-delay="0.4" class="font-semibold text-[20px] mb-[14px]"><a href="feature.html" class="hover:text-primary">Increase online Sales</a></h3>
                        <p data-tp-animate="" data-delay="0.5" class="font-normal max-md:[&>br]:hidden text-[16px] leading-[163%] tracking-[-0.01em] text-gray">Automated sales solutions are technology driven systems designed</p>
                     </div>
                  </div>
               </div>
               <div class="lg:col-span-4 md:col-span-6 col-span-12">
                  <div data-tp-animate="" data-delay="0.3" class="relative group rounded-3xl z-10 shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                     <img class="absolute opacity-0 group-hover:opacity-100 top-0 left-0 -z-10" src="images/shape_2.png" alt="">
                     <div data-tp-animate="" data-delay="0.4" class="text-center p-[40px_32px_0px_32px]">
                        <img class="group-hover:scale-[1.06] duration-500 rounded-[12px]" src="images/thumb-4.png" alt="">
                     </div>
                     <div class="p-[30px_34px_24px_34px]">
                        <h3 data-tp-animate="" data-delay="0.5" class="font-semibold text-[20px] mb-[14px]"><a href="feature.html" class="hover:text-primary">Compare AI models</a></h3>
                        <p data-tp-animate="" data-delay="0.6" class="font-normal max-md:[&>br]:hidden text-[16px] leading-[163%] tracking-[-0.01em] text-gray">Configurations to make sure you have the best setup for your use case.</p>
                     </div>
                  </div>
               </div>
               <div class="lg:col-span-4 md:col-span-6 col-span-12">
                  <div data-tp-animate="" data-delay="0.5" class="relative group rounded-3xl z-10 shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                     <img class="absolute opacity-0 group-hover:opacity-100 top-0 left-0 -z-10" src="images/shape_2.png" alt="">
                     <div data-tp-animate="" data-delay="0.6" class="text-center p-[40px_32px_0px_32px]">
                        <img class="group-hover:scale-[1.06] duration-500 rounded-[12px]" src="images/thumb-5.png" alt="">
                     </div>
                     <div class="p-[30px_34px_24px_34px]">
                        <h3 data-tp-animate="" data-delay="0.7" class="font-semibold text-[20px] mb-[14px]"><a href="feature.html" class="hover:text-primary">Accurate Answers with AI</a></h3>
                        <p data-tp-animate="" data-delay="0.8" class="font-normal max-md:[&>br]:hidden text-[16px] leading-[163%] tracking-[-0.01em] text-gray">AI chatbot on your site & messaging apps to automate support round the-clock.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-features-area-end -->

      <!-- tp-popular-framework-area-start -->
      <div class="bg-grey-200">
         <div class="mx-auto max-w-[1310px] px-3">
            <div class="border py-6 border-[rgba(119,118,122,0.1)] overflow-hidden bg-[#f0f1f4] rounded-[24px]">
               <div class="grid grid-cols-12 items-center gap-6">
                  <div class="xl:col-span-7 col-span-12">
                     <div class="pl-8">
                        <h2 data-tp-animate="" data-delay="0.2" class="text-[22px] tracking-[-0.02em] mb-[5px]">Works with your tools</h2>
                        <p data-tp-animate="" data-delay="0.3" class="text-grey-300">Integrate diverse data sources to enrich your agent's knowledge.</p>
                     </div>
                  </div>
                  <div class="xl:col-span-5 col-span-12">
                     <div class="max-xl:pl-8">
                        <div data-tp-animate="" data-delay="0.5" data-direction="right" class="flex items-center xl:justify-end max-sm:flex-wrap gap-[8px] mb-[8px] mr-2">
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo.png" alt="logo">
                              </span>
                              Shopify
                           </a>
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo-2_2.png" alt="logo">
                              </span>
                              Slack
                           </a>
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo-3_2.png" alt="logo">
                              </span>
                              Notion
                           </a>
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo-4_2.png" alt="logo">
                              </span>
                              Stripe
                           </a>
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo-5_1.png" alt="logo">
                              </span>
                              Zendesk
                           </a>
                        </div>
                        <div data-tp-animate="" data-delay="0.5" data-direction="left" class="flex items-center xl:justify-end max-sm:flex-wrap gap-[8px] -mr-2">
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo-6_1.png" alt="logo">
                              </span>
                              Cal.com
                           </a>
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo-7_1.png" alt="logo">
                              </span>
                              Messenger
                           </a>
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo-8.png" alt="logo">
                              </span>
                              Zapier
                           </a>
                           <a href="#" class="rounded-3xl inline-flex items-center font-medium text-[14px] text-black gap-[8px] p-[4px_10px_4px_4px] shadow-[0_3px_8px_0_rgba(0,0,0,0.05),0_1px_1px_0_rgba(0,0,0,0.1)] bg-white">
                              <span class="flex flex-auto justify-center items-center border border-[rgba(17,17,17,0.08)] rounded-[30px] w-[28px] h-[28px]">
                                 <img src="images/logo-9.png" alt="logo">
                              </span>
                              WhatsApp
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-popular-framework-area-end -->

      <!-- live-chat-showcase-area-start -->
      <div class="bg-grey-200 pt-[135px] pb-[120px]">
         <div class="mx-auto max-w-[1100px] px-3">
            <div class="grid grid-cols-12 gap-6 items-center pb-[120px] max-lg:pb-8">
               <div class="lg:col-span-6 col-span-12">
                  <div>
                     <span data-tp-animate="" data-delay="0.2" class="font-medium text-[15px] text-[#161616] border border-[rgba(119,118,122,0.1)] bg-[#f0f1f4] rounded-[20px] inline-block p-[7px_16px] mb-[15px]">
                        <svg class="mt-[-3px] mr-[5px]" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2419 9.37767C13.2433 9.60258 13.1749 9.8224 13.0463 10.0069C12.9176 10.1914 12.7349 10.3314 12.5234 10.4078L8.96675 11.7221L7.65663 15.2815C7.57905 15.4922 7.43868 15.6741 7.25447 15.8026C7.07026 15.9311 6.85107 16 6.62647 16C6.40187 16 6.18268 15.9311 5.99847 15.8026C5.81426 15.6741 5.67389 15.4922 5.59631 15.2815L4.27792 11.7221L0.71854 10.412C0.507769 10.3344 0.325868 10.194 0.19738 10.0098C0.0688917 9.82559 0 9.6064 0 9.3818C0 9.15721 0.0688917 8.93802 0.19738 8.7538C0.325868 8.56959 0.507769 8.42922 0.71854 8.35164L4.27792 7.03325L5.58803 3.47387C5.66562 3.2631 5.80598 3.0812 5.9902 2.95271C6.17441 2.82423 6.3936 2.75533 6.6182 2.75533C6.84279 2.75533 7.06198 2.82423 7.2462 2.95271C7.43041 3.0812 7.57078 3.2631 7.64836 3.47387L8.96675 7.03325L12.5261 8.34337C12.7378 8.42045 12.9204 8.56135 13.0486 8.74662C13.1768 8.93188 13.2443 9.15238 13.2419 9.37767ZM9.38047 2.75814H10.4837V3.86139C10.4837 4.00769 10.5418 4.148 10.6453 4.25145C10.7487 4.3549 10.8891 4.41302 11.0354 4.41302C11.1817 4.41302 11.322 4.3549 11.4254 4.25145C11.5289 4.148 11.587 4.00769 11.587 3.86139V2.75814H12.6902C12.8365 2.75814 12.9768 2.70002 13.0803 2.59657C13.1837 2.49312 13.2419 2.35281 13.2419 2.20651C13.2419 2.06021 13.1837 1.9199 13.0803 1.81645C12.9768 1.713 12.8365 1.65488 12.6902 1.65488L11.587 1.65488V0.551627C11.587 0.405327 11.5289 0.265018 11.4254 0.161568C11.322 0.0581177 11.1817 0 11.0354 0C10.8891 0 10.7487 0.0581177 10.6453 0.161568C10.5418 0.265018 10.4837 0.405327 10.4837 0.551627V1.65488H9.38047C9.23417 1.65488 9.09386 1.713 8.99041 1.81645C8.88696 1.9199 8.82884 2.06021 8.82884 2.20651C8.82884 2.35281 8.88696 2.49312 8.99041 2.59657C9.09386 2.70002 9.23417 2.75814 9.38047 2.75814ZM15.4484 4.96465H14.8967V4.41302C14.8967 4.26672 14.8386 4.12641 14.7352 4.02296C14.6317 3.91951 14.4914 3.86139 14.3451 3.86139C14.1988 3.86139 14.0585 3.91951 13.9551 4.02296C13.8516 4.12641 13.7935 4.26672 13.7935 4.41302V4.96465H13.2419C13.0956 4.96465 12.9553 5.02277 12.8518 5.12621C12.7484 5.22967 12.6902 5.36997 12.6902 5.51627C12.6902 5.66258 12.7484 5.80288 12.8518 5.90633C12.9553 6.00978 13.0956 6.0679 13.2419 6.0679H13.7935V6.61953C13.7935 6.76583 13.8516 6.90614 13.9551 7.00959C14.0585 7.11304 14.1988 7.17116 14.3451 7.17116C14.4914 7.17116 14.6317 7.11304 14.7352 7.00959C14.8386 6.90614 14.8967 6.76583 14.8967 6.61953V6.0679H15.4484C15.5947 6.0679 15.735 6.00978 15.8384 5.90633C15.9419 5.80288 16 5.66258 16 5.51627C16 5.36997 15.9419 5.22967 15.8384 5.12621C15.735 5.02277 15.5947 4.96465 15.4484 4.96465Z" fill="url(#paint0_linear_297_3942)"></path>
                           <defs>
                              <linearGradient id="paint0_linear_297_3942" x1="4" y1="2" x2="12.5" y2="17.5" gradientUnits="userSpaceOnUse">
                                 <stop offset="0.62" stop-color="#FF2E2E"></stop>
                                 <stop offset="0.33" stop-color="#EE7B16"></stop>
                                 <stop offset="0.66" stop-color="#8A43E1"></stop>
                                 <stop offset="1" stop-color="#D510FC"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Live chat
                     </span>
                     <h2 data-tp-split-text="" class="font-semibold text-[48px] max-md:text-[36px] leading-[117%] tracking-[-0.02em] mb-[17px]">Real-time chat,<br> Exceptional client<br> Experiences</h2>
                     <p data-tp-split-text="" class="text-[18px] max-sm:[&>br]:hidden mb-[30px] tracking-[-0.01em] text-grey-300">Offer live chat support to your customers. Our<br>
                        chatbot seamlessly transitions to human agents<br>
                        when needed.</p>
                     <a data-tp-animate="" data-delay="0.5" href="sign-in.html" class="tp-btn tp-btn-hover bg-black inline-block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                        <span>Sign up free</span>
                        <b class="bg-primary"></b>
                     </a>
                  </div>
               </div>
               <div class="lg:col-span-6 md:col-span-8 col-span-12">
                  <div data-tp-animate="" data-delay="0.5" data-direction="right">
                     <img class="rounded-2xl" src="images/thumb_1.png" alt="">
                  </div>
               </div>
            </div>
            <div class="grid grid-cols-12 gap-6 items-center">
               <div class="lg:col-span-6 md:col-span-8 col-span-12">
                  <div class="p-[50px_20px_86px_20px] z-10 relative before:absolute before:rounded-3xl before:bg-white before:w-[96%] before:h-[96%] before:top-1/2 before:-translate-y-1/2 before:bottom-0 before:left-0 before:right-0 before:m-[0px_auto] before:-z-10  bg-[linear-gradient(62deg,#ffac5a_0%,#fd6cb4_56.09%,#a168f9_100%)] rounded-[20px] text-center">
                     <img class="absolute top-0 left-0 right-0 m-[0_auto]" src="images/circale.png" alt="">
                     <div data-tp-animate="" data-delay="0.1" class="mb-[36px]">
                        <img src="images/user.png" alt="">
                     </div>
                     <div>
                        <span data-tp-animate="" data-delay="0.2" class="inline-block rounded-[12px] z-40 relative shadow-[0_5px_8px_0_rgba(0,0,0,0.04),0_1px_3px_0_rgba(0,0,0,0.04)]">
                           <img src="images/shape_1.png" alt="">
                        </span>
                        <span data-tp-animate="" data-delay="0.3" class="mt-[-14px] z-30 relative inline-block rounded-[12px] shadow-[0_5px_8px_0_rgba(0,0,0,0.04),0_1px_3px_0_rgba(0,0,0,0.04)]">
                           <img src="images/shape-2.png" alt="">
                        </span>
                        <span data-tp-animate="" data-delay="0.4" class="mt-[-14px] z-10 relative inline-block rounded-[12px] shadow-[0_5px_8px_0_rgba(0,0,0,0.04),0_1px_3px_0_rgba(0,0,0,0.04)]">
                           <img src="images/shape-3_1.png" alt="">
                        </span>
                        <span data-tp-animate="" data-delay="0.5" class="mt-[-14px] inline-block rounded-[12px] shadow-[0_5px_8px_0_rgba(0,0,0,0.04),0_1px_3px_0_rgba(0,0,0,0.04)]">
                           <img src="images/shape-4_1.png" alt="">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="lg:col-span-6 col-span-12">
                  <div class="ml-[135px] max-xl:ml-0">
                     <span data-tp-animate="" data-delay="0.2" class="font-medium text-[15px] text-[#161616] border border-[rgba(119,118,122,0.1)] bg-[#f0f1f4] rounded-[20px] inline-block p-[7px_16px] mb-[15px]">
                        <svg class="mt-[-3px] mr-[5px]" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2419 9.37767C13.2433 9.60258 13.1749 9.8224 13.0463 10.0069C12.9176 10.1914 12.7349 10.3314 12.5234 10.4078L8.96675 11.7221L7.65663 15.2815C7.57905 15.4922 7.43868 15.6741 7.25447 15.8026C7.07026 15.9311 6.85107 16 6.62647 16C6.40187 16 6.18268 15.9311 5.99847 15.8026C5.81426 15.6741 5.67389 15.4922 5.59631 15.2815L4.27792 11.7221L0.71854 10.412C0.507769 10.3344 0.325868 10.194 0.19738 10.0098C0.0688917 9.82559 0 9.6064 0 9.3818C0 9.15721 0.0688917 8.93802 0.19738 8.7538C0.325868 8.56959 0.507769 8.42922 0.71854 8.35164L4.27792 7.03325L5.58803 3.47387C5.66562 3.2631 5.80598 3.0812 5.9902 2.95271C6.17441 2.82423 6.3936 2.75533 6.6182 2.75533C6.84279 2.75533 7.06198 2.82423 7.2462 2.95271C7.43041 3.0812 7.57078 3.2631 7.64836 3.47387L8.96675 7.03325L12.5261 8.34337C12.7378 8.42045 12.9204 8.56135 13.0486 8.74662C13.1768 8.93188 13.2443 9.15238 13.2419 9.37767ZM9.38047 2.75814H10.4837V3.86139C10.4837 4.00769 10.5418 4.148 10.6453 4.25145C10.7487 4.3549 10.8891 4.41302 11.0354 4.41302C11.1817 4.41302 11.322 4.3549 11.4254 4.25145C11.5289 4.148 11.587 4.00769 11.587 3.86139V2.75814H12.6902C12.8365 2.75814 12.9768 2.70002 13.0803 2.59657C13.1837 2.49312 13.2419 2.35281 13.2419 2.20651C13.2419 2.06021 13.1837 1.9199 13.0803 1.81645C12.9768 1.713 12.8365 1.65488 12.6902 1.65488L11.587 1.65488V0.551627C11.587 0.405327 11.5289 0.265018 11.4254 0.161568C11.322 0.0581177 11.1817 0 11.0354 0C10.8891 0 10.7487 0.0581177 10.6453 0.161568C10.5418 0.265018 10.4837 0.405327 10.4837 0.551627V1.65488H9.38047C9.23417 1.65488 9.09386 1.713 8.99041 1.81645C8.88696 1.9199 8.82884 2.06021 8.82884 2.20651C8.82884 2.35281 8.88696 2.49312 8.99041 2.59657C9.09386 2.70002 9.23417 2.75814 9.38047 2.75814ZM15.4484 4.96465H14.8967V4.41302C14.8967 4.26672 14.8386 4.12641 14.7352 4.02296C14.6317 3.91951 14.4914 3.86139 14.3451 3.86139C14.1988 3.86139 14.0585 3.91951 13.9551 4.02296C13.8516 4.12641 13.7935 4.26672 13.7935 4.41302V4.96465H13.2419C13.0956 4.96465 12.9553 5.02277 12.8518 5.12621C12.7484 5.22967 12.6902 5.36997 12.6902 5.51627C12.6902 5.66258 12.7484 5.80288 12.8518 5.90633C12.9553 6.00978 13.0956 6.0679 13.2419 6.0679H13.7935V6.61953C13.7935 6.76583 13.8516 6.90614 13.9551 7.00959C14.0585 7.11304 14.1988 7.17116 14.3451 7.17116C14.4914 7.17116 14.6317 7.11304 14.7352 7.00959C14.8386 6.90614 14.8967 6.76583 14.8967 6.61953V6.0679H15.4484C15.5947 6.0679 15.735 6.00978 15.8384 5.90633C15.9419 5.80288 16 5.66258 16 5.51627C16 5.36997 15.9419 5.22967 15.8384 5.12621C15.735 5.02277 15.5947 4.96465 15.4484 4.96465Z" fill="url(#paint0_linear_297_3942)"></path>
                           <defs>
                              <linearGradient id="painta0_linear_297_3942" x1="4" y1="2" x2="12.5" y2="17.5" gradientUnits="userSpaceOnUse">
                                 <stop offset="3" stop-color="#FF2E2E"></stop>
                                 <stop offset="0.33" stop-color="#EE7B16"></stop>
                                 <stop offset="0.66" stop-color="#8A43E1"></stop>
                                 <stop offset="1" stop-color="#D510FC"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Live chat
                     </span>
                     <h2 data-tp-split-text="" class="font-semibold text-[48px] max-md:text-[36px] leading-[117%] tracking-[-0.02em] mb-[17px]">Cutting-edge<br> chatbot solutions<br> for modern apps.</h2>
                     <p data-tp-split-text="" class="text-[18px] max-sm:[&>br]:hidden mb-[30px] tracking-[-0.01em] text-grey-300">Offer live chat support to your customers. Our<br>
                        chatbot seamlessly transitions to human agents<br>
                        when needed.</p>
                     <a data-tp-animate="" data-delay="0.5" href="sign-in.html" class="tp-btn tp-btn-hover bg-black inline-block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                        <span>Sign up free</span>
                        <b class="bg-primary"></b>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- live-chat-showcase-area-end -->

      <!-- tp-intergates-area-start -->
      <div class="relative z-20 bg-grey-200">
         <div class="mx-auto max-w-[1504px] px-[15px]">
            <div class="p-[89px_80px_60px_80px] max-md:p-[35px_30px_30px_30px] rounded-4xl overflow-hidden z-10 bg-[#110e2f] relative">
               <img class="absolute top-0 left-0 w-full -z-10" src="images/bg-shape.png" alt="">
               <div class="grid grid-cols-12">
                  <div class="col-span-12">
                     <div class="text-center">
                        <div class="relative z-20">
                           <h2 data-tp-split-text="" class="font-semibold mb-[15px] text-[48px] max-lg:text-[36px] max-sm:text-[30px] leading-[1.15] tracking-[-0.02em] text-white max-xl:[&>br]:hidden">Wonderchat integrates<br> with  all your apps</h2>
                           <p data-tp-split-text="" class="leading-[156%] tracking-[-0.01em] mb-[20px] text-white">Seamless Integration, Endless Possibilities</p>
                           <a data-tp-animate="" data-delay="0.4" href="integrations.html" class="tp-btn tp-btn-hover inline-block rounded-full text-[15px] px-8 h-[50px] leading-[50px] border border-[rgba(255,255,255,0.2)] bg-transparent hover:border-primary">
                              <span>See all integrations</span>
                              <b class="bg-primary"></b>
                           </a>
                        </div>
                        <div data-tp-animate="" data-delay="0.5" class="mt-[40px] relative z-10">
                           <img src="images/icon-bg.png" alt="">
                           <div class="absolute -top-18 left-0 right-0 m-[0_auto] text-center w-full -z-10">
                              <svg class="tp-animation w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1289 389" fill="none">
                                 <path d="M1.30469 52.7656L90.9043 158.332C96.4618 164.88 104.617 168.655 113.205 168.655H200.808C209.831 168.655 218.399 172.619 224.241 179.495L259.467 220.955L258.324 221.928L223.099 180.467C217.541 173.926 209.391 170.155 200.808 170.155H113.205C104.176 170.155 95.6042 166.187 89.7617 159.304L0.162109 53.7363L0 53.5449L0.19043 53.3838L0.952148 52.7373L1.14355 52.5752L1.30469 52.7656ZM0.704102 53.6025L90.1426 158.979C95.8901 165.751 104.323 169.655 113.205 169.655H200.808C209.537 169.655 217.827 173.49 223.479 180.143L258.381 221.222L258.762 220.897L223.86 179.819C218.113 173.055 209.684 169.155 200.808 169.155H113.205C104.47 169.155 96.1759 165.316 90.5234 158.656L1.08496 53.2793L0.704102 53.6025Z" fill="#77767A" fill-opacity="0.2"></path>
                                 <path d="M1288.06 52.2197L1288.76 52.9287L1288.94 53.1064L1182.45 159.132C1176.74 164.815 1169.03 168.031 1160.98 168.09L1047.87 168.913C1040.28 168.968 1033.01 171.97 1027.6 177.285L986.684 217.435C984.027 220.041 980.455 221.501 976.733 221.501H976.483V220.001H976.733C980.062 220.001 983.258 218.695 985.634 216.363L1026.55 176.214C1032.24 170.627 1039.88 167.471 1047.86 167.413L1160.97 166.59C1168.63 166.534 1175.96 163.475 1181.39 158.069L1287.88 52.043L1288.06 52.2197ZM1181.75 158.423C1176.22 163.921 1168.76 167.033 1160.97 167.09L1047.87 167.913C1040.02 167.97 1032.5 171.075 1026.9 176.571L985.983 216.721C983.574 219.085 980.353 220.433 976.983 220.497V220.998C980.484 220.934 983.831 219.533 986.334 217.077L1027.25 176.928C1032.76 171.522 1040.15 168.469 1047.87 168.413L1160.97 167.59C1168.9 167.532 1176.48 164.369 1182.1 158.778L1288.23 53.1045L1287.88 52.75L1181.75 158.423Z" fill="#77767A" fill-opacity="0.2"></path>
                                 <path d="M976.733 220.001C980.455 220.001 984.031 221.452 986.699 224.047L1028.52 264.72C1033.98 270.03 1041.3 273.001 1048.92 273.001H1160.77C1168.95 273.001 1176.79 276.259 1182.56 282.055L1287.94 387.899L1287.76 388.076L1287.06 388.781L1286.88 388.957L1181.5 283.114C1176.01 277.601 1168.55 274.501 1160.77 274.501H1048.92C1040.91 274.501 1033.22 271.378 1027.48 265.796L985.654 225.124C983.266 222.801 980.065 221.501 976.733 221.501H976.483V220.001H976.733ZM976.983 221.004C980.355 221.067 983.58 222.41 986.002 224.765L1027.83 265.437C1033.47 270.928 1041.04 274.001 1048.92 274.001H1160.77C1168.68 274.001 1176.27 277.154 1181.85 282.761L1286.88 388.249L1287.23 387.896L1182.21 282.408C1176.53 276.707 1168.81 273.501 1160.77 273.501H1048.92C1041.17 273.501 1033.73 270.479 1028.17 265.079L986.352 224.406C983.836 221.96 980.485 220.566 976.983 220.503V221.004Z" fill="#77767A" fill-opacity="0.2"></path>
                                 <path d="M999.983 3.50098H999.483V32.0928C999.483 40.1185 996.24 47.8033 990.491 53.4033L897.416 144.062C889.305 151.962 877.413 154.573 866.738 150.798L860.602 148.628C849.902 144.844 837.985 147.367 829.737 155.162L769.734 211.872C764.211 217.092 756.9 220.001 749.3 220.001H748.983V220.501H749.3C757.027 220.501 764.462 217.543 770.078 212.235L830.08 155.526C838.192 147.86 849.912 145.378 860.435 149.1L866.571 151.271C877.425 155.109 889.517 152.453 897.764 144.421L990.84 53.7627C996.686 48.0686 999.983 40.2535 999.983 32.0928V3.50098ZM1000.48 32.0928C1000.48 40.3883 997.132 48.3319 991.189 54.1201L898.113 144.778C889.73 152.944 877.438 155.643 866.405 151.741L860.269 149.57C849.923 145.912 838.399 148.352 830.424 155.89L770.422 212.599C764.713 217.994 757.155 221.001 749.3 221.001H748.483V219.501H749.3C756.772 219.501 763.96 216.641 769.391 211.509L829.394 154.799C837.778 146.875 849.892 144.311 860.768 148.157L866.904 150.327C877.399 154.039 889.092 151.471 897.066 143.704L990.142 53.0459C995.794 47.54 998.983 39.9838 998.983 32.0928V3.00098H1000.48V32.0928Z" fill="#77767A" fill-opacity="0.2"></path>
                                 <path d="M289.485 2.50098H288.985V31.0127L288.994 31.7529C289.181 39.3956 292.257 46.6953 297.617 52.1719L394.944 151.605C401.099 157.893 409.685 161.189 418.466 160.636L447.681 158.794C455.654 158.291 463.494 161.016 469.437 166.355L523.489 214.925C527.065 218.138 531.684 219.938 536.485 219.998V219.498C531.808 219.438 527.308 217.682 523.824 214.552L469.771 165.983C463.729 160.554 455.757 157.784 447.649 158.295L418.435 160.137C409.799 160.681 401.354 157.439 395.302 151.256L297.975 51.8223C292.533 46.2626 289.485 38.7923 289.485 31.0127V2.50098ZM289.994 31.7285C290.175 39.1186 293.149 46.1772 298.332 51.4727L395.659 150.906C401.61 156.986 409.913 160.173 418.403 159.638L447.618 157.796C455.859 157.276 463.963 160.093 470.105 165.612L524.158 214.181C527.612 217.284 532.092 219.001 536.735 219.001H536.985V220.501H536.735C531.722 220.501 526.885 218.647 523.155 215.296L469.103 166.727C463.26 161.477 455.551 158.799 447.712 159.293L418.497 161.135C409.571 161.698 400.843 158.346 394.587 151.955L297.26 52.5215C291.635 46.775 288.485 39.0537 288.485 31.0127V2.00098H289.985V31.0127L289.994 31.7285Z" fill="#77767A" fill-opacity="0.2"></path>
                                 <path d="M258.552 219.723L259.269 220.42L259.447 220.595L224.23 256.819C218.441 262.775 210.488 266.136 202.183 266.136H109.781C102.068 266.136 94.6664 269.182 89.1885 274.612L2.2627 360.784L2.08496 360.96L1.03027 359.894L1.20801 359.718L88.1328 273.547C93.8916 267.838 101.672 264.636 109.781 264.636H202.183C210.083 264.636 217.647 261.439 223.154 255.774L258.372 219.549L258.552 219.723ZM223.514 256.122C217.912 261.884 210.218 265.136 202.183 265.136H109.781C101.804 265.136 94.1496 268.286 88.4844 273.902L1.73633 359.896L2.08789 360.252L88.8369 274.257C94.4084 268.734 101.936 265.636 109.781 265.636H202.183C210.353 265.636 218.176 262.33 223.871 256.472L258.74 220.604L258.382 220.256L223.514 256.122Z" fill="#77767A" fill-opacity="0.2"></path>
                                 <path d="M123.993 5.38477C128.868 9.04081 134.763 11.0841 140.854 11.2275L161.943 11.7236C169.72 11.9067 177.138 15.0296 182.703 20.4639L378.885 212.029C383.79 216.819 390.374 219.501 397.23 219.501H397.48V221.001H397.23C389.983 221.001 383.022 218.166 377.836 213.103L181.655 21.5371C176.362 16.368 169.305 13.3968 161.908 13.2227L140.819 12.7266C134.415 12.5758 128.218 10.4294 123.093 6.58594L118.78 3.35156L118.581 3.20117L119.48 2L123.993 5.38477ZM119.28 3.10059L123.394 6.18555C128.435 9.96642 134.531 12.0783 140.831 12.2266L161.92 12.7227C169.443 12.8998 176.621 15.9221 182.005 21.1797L378.186 212.745C383.218 217.659 389.953 220.433 396.98 220.497V219.997C390.084 219.933 383.474 217.21 378.535 212.387L182.354 20.8213C176.879 15.4755 169.581 12.4037 161.932 12.2236L140.843 11.7275C134.647 11.5817 128.651 9.50376 123.692 5.78516L119.579 2.7002L119.28 3.10059Z" fill="#77767A" fill-opacity="0.2"></path>
                                 <path d="M1170.38 1.20117L1170.18 1.35156L1164.18 5.85156C1158.86 9.84345 1152.39 12.001 1145.73 12.001H1124.06C1116.36 12.001 1108.97 15.035 1103.5 20.4453L903.817 217.77C901.398 220.16 898.134 221.501 894.733 221.501H894.483V220.001H894.733C897.739 220.001 900.624 218.816 902.763 216.703L1102.44 19.3789C1108.2 13.6909 1115.96 10.501 1124.06 10.501H1145.73C1152.06 10.501 1158.22 8.44762 1163.28 4.65039L1169.48 0L1170.38 1.20117ZM1163.58 5.05078C1158.43 8.91298 1152.17 11.001 1145.73 11.001H1124.06C1116.1 11.001 1108.46 14.1389 1102.79 19.7344L903.114 217.059C900.942 219.205 898.031 220.43 894.983 220.494V220.997C898.162 220.933 901.2 219.653 903.466 217.414L1103.14 20.0898C1108.71 14.587 1116.23 11.501 1124.06 11.501H1145.73C1152.28 11.501 1158.65 9.37806 1163.88 5.45117L1169.68 1.10059L1169.38 0.700195L1163.58 5.05078Z" fill="#77767A" fill-opacity="0.2"></path>
                                 <path d="M977.985 220.001V221.501H257.485V220.001H977.985ZM257.985 221.001H977.485V220.501H257.985V221.001Z" fill="#77767A" fill-opacity="0.2"></path>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-intergates-area-end -->

      <!-- tp-pricing-area-start -->
      <div class="pt-[110px] pb-[90px] max-xl:pt-[100px] max-xl:pb-[70px] bg-grey-200">
         <div class="mx-auto max-w-[1314px] px-3">
            <div class="grid grid-cols-12 gap-6">
               <div class="col-span-12">
                  <div class="mb-[50px] text-center">
                     <span data-tp-animate="" data-delay="0.2" class="font-medium text-[15px] text-[#161616] border border-[rgba(119,118,122,0.1)] bg-[#f1eeec] rounded-[20px] inline-block p-[7px_16px] mb-[15px]">
                        <svg class="mt-[-3px] mr-[5px]" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2419 9.37767C13.2433 9.60258 13.1749 9.8224 13.0463 10.0069C12.9176 10.1914 12.7349 10.3314 12.5234 10.4078L8.96675 11.7221L7.65663 15.2815C7.57905 15.4922 7.43868 15.6741 7.25447 15.8026C7.07026 15.9311 6.85107 16 6.62647 16C6.40187 16 6.18268 15.9311 5.99847 15.8026C5.81426 15.6741 5.67389 15.4922 5.59631 15.2815L4.27792 11.7221L0.71854 10.412C0.507769 10.3344 0.325868 10.194 0.19738 10.0098C0.0688917 9.82559 0 9.6064 0 9.3818C0 9.15721 0.0688917 8.93802 0.19738 8.7538C0.325868 8.56959 0.507769 8.42922 0.71854 8.35164L4.27792 7.03325L5.58803 3.47387C5.66562 3.2631 5.80598 3.0812 5.9902 2.95271C6.17441 2.82423 6.3936 2.75533 6.6182 2.75533C6.84279 2.75533 7.06198 2.82423 7.2462 2.95271C7.43041 3.0812 7.57078 3.2631 7.64836 3.47387L8.96675 7.03325L12.5261 8.34337C12.7378 8.42045 12.9204 8.56135 13.0486 8.74662C13.1768 8.93188 13.2443 9.15238 13.2419 9.37767ZM9.38047 2.75814H10.4837V3.86139C10.4837 4.00769 10.5418 4.148 10.6453 4.25145C10.7487 4.3549 10.8891 4.41302 11.0354 4.41302C11.1817 4.41302 11.322 4.3549 11.4254 4.25145C11.5289 4.148 11.587 4.00769 11.587 3.86139V2.75814H12.6902C12.8365 2.75814 12.9768 2.70002 13.0803 2.59657C13.1837 2.49312 13.2419 2.35281 13.2419 2.20651C13.2419 2.06021 13.1837 1.9199 13.0803 1.81645C12.9768 1.713 12.8365 1.65488 12.6902 1.65488L11.587 1.65488V0.551627C11.587 0.405327 11.5289 0.265018 11.4254 0.161568C11.322 0.0581177 11.1817 0 11.0354 0C10.8891 0 10.7487 0.0581177 10.6453 0.161568C10.5418 0.265018 10.4837 0.405327 10.4837 0.551627V1.65488H9.38047C9.23417 1.65488 9.09386 1.713 8.99041 1.81645C8.88696 1.9199 8.82884 2.06021 8.82884 2.20651C8.82884 2.35281 8.88696 2.49312 8.99041 2.59657C9.09386 2.70002 9.23417 2.75814 9.38047 2.75814ZM15.4484 4.96465H14.8967V4.41302C14.8967 4.26672 14.8386 4.12641 14.7352 4.02296C14.6317 3.91951 14.4914 3.86139 14.3451 3.86139C14.1988 3.86139 14.0585 3.91951 13.9551 4.02296C13.8516 4.12641 13.7935 4.26672 13.7935 4.41302V4.96465H13.2419C13.0956 4.96465 12.9553 5.02277 12.8518 5.12621C12.7484 5.22967 12.6902 5.36997 12.6902 5.51627C12.6902 5.66258 12.7484 5.80288 12.8518 5.90633C12.9553 6.00978 13.0956 6.0679 13.2419 6.0679H13.7935V6.61953C13.7935 6.76583 13.8516 6.90614 13.9551 7.00959C14.0585 7.11304 14.1988 7.17116 14.3451 7.17116C14.4914 7.17116 14.6317 7.11304 14.7352 7.00959C14.8386 6.90614 14.8967 6.76583 14.8967 6.61953V6.0679H15.4484C15.5947 6.0679 15.735 6.00978 15.8384 5.90633C15.9419 5.80288 16 5.66258 16 5.51627C16 5.36997 15.9419 5.22967 15.8384 5.12621C15.735 5.02277 15.5947 4.96465 15.4484 4.96465Z" fill="url(#paint0_linear_297_3942)"></path>
                           <defs>
                              <linearGradient id="paint20_linear_297_3942" x1="4" y1="2" x2="12.5" y2="17.5" gradientUnits="userSpaceOnUse">
                                 <stop offset="2" stop-color="#FF2E2E"></stop>
                                 <stop offset="0.33" stop-color="#EE7B16"></stop>
                                 <stop offset="0.66" stop-color="#8A43E1"></stop>
                                 <stop offset="1" stop-color="#D510FC"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Pricing & Plans
                     </span>
                     <h2 data-tp-split-text="" class="font-semibold text-[48px] max-md:text-[36px] leading-[117%] tracking-[-0.02em] text-black mb-[10px]">Affordable pricing plans</h2>
                     <p data-tp-split-text="" class="mb-[30px]">Flexible, transparent pricing to support your team’s productivity and growth at every stage.</p>
                     <div data-tp-animate="" data-delay="0.4" class="relative inline-flex items-center">
                        <label for="priceCheck" class="tab-btn monthly cursor-pointer mr-2.5 font-medium text-[16px] tracking-[-0.01em] text-[rgba(71,71,71,0.7)] [&.active]:text-black active transition-all duration-300">Billed Monthly</label>
                        <input type="checkbox" id="priceCheck" class="sr-only peer" aria-label="Toggle between monthly and yearly pricing">
                        <span class="relative w-[46px] h-[28px] bg-white border-3 border-[linear-gradient(330deg,#6f2bff_0%,#ff2f2f_48.01%,#ffaf2f_99.04%)] rounded-[34px] peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:start-[2px] peer-checked:after:start-[6px] after:bg-black after:tp-btn-shadow shadow-[0_14px_14px_-3px_rgba(158,158,158,0.1),0_7px_7px_-2px_rgba(158,158,158,0.1),0_4px_4px_-2px_rgba(158,158,158,0.1),0_2px_2px_-1px_rgba(158,158,158,0.2),0_1px_1px_-1px_rgba(158,158,158,0.3)] after:rounded-full after:h-[16px] after:w-[16px] after:transition-all"></span>
                        <label for="priceCheck" class="tab-btn yearly cursor-pointer ms-2.5 text-tagline-1 font-medium text-[16px] tracking-[-0.01em] text-[rgba(71,71,71,0.7)] [&.active]:text-black transition-all duration-300">Billed yearly</label>
                     </div>
                  </div>
                  <div class="tab-contents">
                     <div class="tab-content">
                        <div class="grid grid-cols-12 gap-6">
                           <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                              <div data-tp-animate="" data-delay="0.3" class="bg-[#f0f1f4] mb-[30px] rounded-[24px] overflow-hidden group z-10 relative">
                                 <div class="p-[36px_34px_36px_34px] rounded-[16px] bg-white shadow-[0_14px_14px_-3px_rgba(158,158,158,0.1),0_7px_7px_-2px_rgba(158,158,158,0.1),0_4px_4px_-2px_rgba(158,158,158,0.1),0_2px_2px_-1px_rgba(158,158,158,0.2),0_1px_1px_-1px_rgba(158,158,158,0.3)]">
                                    <span class="w-[46px] h-[46px] rounded-lg bg-black inline-block mb-[20px] tp-btn-shadow"></span>
                                    <span class="font-medium text-[24px] tracking-[-0.01em] text-black block mb-[7px]">Starter</span>
                                    <p class="font-normal text-[16px] leading-[150%] tracking-[-0.01em] mb-[18px]">For individuals and small teams<br class="max-sm:hidden"> just getting started</p>
                                    <div class="inline-flex items-end mb-[20px]">
                                       <h2 class="font-semibold text-[54px]">$39</h2>
                                       <span class="text-[15px] font-medium tracking-[-0.01em] text-grey-300 mb-[5px] ml-[5px]">/ month</span>
                                    </div>
                                    <a href="sign-in.html" class="tp-btn  bg-black hover:bg-primary hover:text-white block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                                       Sign up free
                                    </a>
                                 </div>
                                 <div class="p-[35px_30px_10px_30px]">
                                    <span class="font-medium text-[16px] leading-[150%] text-black mb-5 block">What's included:</span>
                                    <ul>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Instant meeting recap & highlights
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Track up to 100 visitors
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Basic widget customization
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 recurring campaign
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          60-day chat history
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-[rgba(71,71,71,0.6)]">
                                          <span class="w-5 h-5 mt-[1px] inline-flex text-white justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          24/7/365 Support
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-[rgba(71,71,71,0.6)]">
                                          <span class="w-5 h-5 mt-[1px] inline-flex text-white justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 user
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                              <div data-tp-animate="" data-delay="0.4" class="bg-[#f0f1f4] mb-[30px] rounded-[24px] group z-10 relative overflow-hidden pt-[4px]">
                                 <div class="p-[36px_34px_36px_34px] rounded-[16px] bg-white shadow-[0_14px_14px_-3px_rgba(158,158,158,0.1),0_7px_7px_-2px_rgba(158,158,158,0.1),0_4px_4px_-2px_rgba(158,158,158,0.1),0_2px_2px_-1px_rgba(158,158,158,0.2),0_1px_1px_-1px_rgba(158,158,158,0.3),0_-4px_0_0_#ffcd29]">
                                    <div class="absolute top-0 left-0 right-0 text-center">
                                       <div class="price-badge">
                                          <div class="content">
                                             Creative Project
                                          </div>
                                          <div class="before"></div>
                                          <div class="after"></div>
                                       </div>
                                    </div>
                                    <span class="w-[46px] h-[46px] rounded-lg bg-black inline-block mb-[20px] tp-btn-shadow"></span>
                                    <span class="font-medium text-[24px] tracking-[-0.01em] text-black block mb-[7px]">Growth Popular</span>
                                    <p class="font-normal text-[16px] leading-[150%] tracking-[-0.01em] mb-[18px]">For individuals and small teams<br class="max-sm:hidden"> just getting started</p>
                                    <div class="inline-flex items-end mb-[20px]">
                                       <h2 class="font-semibold text-[54px]">$89</h2>
                                       <span class="text-[15px] font-medium tracking-[-0.01em] text-grey-300 mb-[5px] ml-[5px]">/ month</span>
                                    </div>
                                    <a href="sign-in.html" class="tp-btn  bg-black hover:bg-primary hover:text-white block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                                       Sign up free
                                    </a>
                                 </div>
                                 <div class="p-[35px_30px_10px_30px]">
                                    <span class="font-medium text-[16px] leading-[150%] text-black mb-5 block">What's included:</span>
                                    <ul>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Instant meeting recap & highlights
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Track up to 100 visitors
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Basic widget customization
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 recurring campaign
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          60-day chat history
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em]">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          24/7/365 Support
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em]">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 user
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                              <div data-tp-animate="" data-delay="0.5" class="bg-[#f0f1f4] mb-[30px] rounded-[24px] overflow-hidden group z-10 relative">
                                 <div class="p-[36px_34px_36px_34px] rounded-[16px] bg-white shadow-[0_14px_14px_-3px_rgba(158,158,158,0.1),0_7px_7px_-2px_rgba(158,158,158,0.1),0_4px_4px_-2px_rgba(158,158,158,0.1),0_2px_2px_-1px_rgba(158,158,158,0.2),0_1px_1px_-1px_rgba(158,158,158,0.3)]">
                                    <span class="w-[46px] h-[46px] rounded-lg bg-black inline-block mb-[20px] tp-btn-shadow"></span>
                                    <span class="font-medium text-[24px] tracking-[-0.01em] text-black block mb-[7px]">Enterprise</span>
                                    <p class="font-normal text-[16px] leading-[150%] tracking-[-0.01em] mb-[18px]">For individuals and small teams<br class="max-sm:hidden"> just getting started</p>
                                    <div class="inline-flex items-end mb-[20px]">
                                       <h2 class="font-semibold text-[54px]">$149</h2>
                                       <span class="text-[15px] font-medium tracking-[-0.01em] text-grey-300 mb-[5px] ml-[5px]">/ month</span>
                                    </div>
                                    <a href="sign-in.html" class="tp-btn  bg-black hover:bg-primary hover:text-white block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                                       Sign up free
                                    </a>
                                 </div>
                                 <div class="p-[35px_30px_10px_30px]">
                                    <span class="font-medium text-[16px] leading-[150%] text-black mb-5 block">What's included:</span>
                                    <ul>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Instant meeting recap & highlights
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Track up to 100 visitors
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Basic widget customization
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 recurring campaign
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          60-day chat history
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          24/7/365 Support
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 user
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-content hidden">
                        <div class="grid grid-cols-12 gap-6">
                           <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                              <div class="bg-[#f0f1f4] mb-[30px] rounded-[24px] overflow-hidden group z-10 relative">
                                 <div class="p-[36px_34px_36px_34px] rounded-[16px] bg-white shadow-[0_14px_14px_-3px_rgba(158,158,158,0.1),0_7px_7px_-2px_rgba(158,158,158,0.1),0_4px_4px_-2px_rgba(158,158,158,0.1),0_2px_2px_-1px_rgba(158,158,158,0.2),0_1px_1px_-1px_rgba(158,158,158,0.3)]">
                                    <span class="w-[46px] h-[46px] rounded-lg bg-black inline-block mb-[20px] tp-btn-shadow"></span>
                                    <span class="font-medium text-[24px] tracking-[-0.01em] text-black block mb-[7px]">Starter</span>
                                    <p class="font-normal text-[16px] leading-[150%] tracking-[-0.01em] mb-[18px]">For individuals and small teams<br class="max-sm:hidden"> just getting started</p>
                                    <div class="inline-flex items-end mb-[20px]">
                                       <h2 class="font-semibold text-[54px]">$139</h2>
                                       <span class="text-[15px] font-medium tracking-[-0.01em] text-grey-300 mb-[5px] ml-[5px]">/ yearly</span>
                                    </div>
                                    <a href="sign-in.html" class="tp-btn  bg-black hover:bg-primary hover:text-white block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                                       Sign up free
                                    </a>
                                 </div>
                                 <div class="p-[35px_30px_10px_30px]">
                                    <span class="font-medium text-[16px] leading-[150%] text-black mb-5 block">What's included:</span>
                                    <ul>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Instant meeting recap & highlights
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Track up to 100 visitors
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Basic widget customization
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 recurring campaign
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          60-day chat history
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-[rgba(71,71,71,0.6)]">
                                          <span class="w-5 h-5 mt-[1px] inline-flex text-white justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          24/7/365 Support
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-[rgba(71,71,71,0.6)]">
                                          <span class="w-5 h-5 mt-[1px] inline-flex text-white justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 user
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                              <div class="bg-[#f0f1f4] mb-[30px] rounded-[24px] group z-10 relative overflow-hidden pt-[4px]">
                                 <div class="p-[36px_34px_36px_34px] rounded-[16px] bg-white shadow-[0_14px_14px_-3px_rgba(158,158,158,0.1),0_7px_7px_-2px_rgba(158,158,158,0.1),0_4px_4px_-2px_rgba(158,158,158,0.1),0_2px_2px_-1px_rgba(158,158,158,0.2),0_1px_1px_-1px_rgba(158,158,158,0.3),0_-4px_0_0_#ffcd29]">
                                    <div class="absolute top-0 left-0 right-0 text-center">
                                       <div class="price-badge">
                                          <div class="content">
                                             Creative Project
                                          </div>
                                          <div class="before"></div>
                                          <div class="after"></div>
                                       </div>
                                    </div>
                                    <span class="w-[46px] h-[46px] rounded-lg bg-black inline-block mb-[20px] tp-btn-shadow"></span>
                                    <span class="font-medium text-[24px] tracking-[-0.01em] text-black block mb-[7px]">Growth Popular</span>
                                    <p class="font-normal text-[16px] leading-[150%] tracking-[-0.01em] mb-[18px]">For individuals and small teams<br class="max-sm:hidden"> just getting started</p>
                                    <div class="inline-flex items-end mb-[20px]">
                                       <h2 class="font-semibold text-[54px]">$189</h2>
                                       <span class="text-[15px] font-medium tracking-[-0.01em] text-grey-300 mb-[5px] ml-[5px]">/ yearly</span>
                                    </div>
                                    <a href="sign-in.html" class="tp-btn  bg-black hover:bg-primary hover:text-white block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                                       Sign up free
                                    </a>
                                 </div>
                                 <div class="p-[35px_30px_10px_30px]">
                                    <span class="font-medium text-[16px] leading-[150%] text-black mb-5 block">What's included:</span>
                                    <ul>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Instant meeting recap & highlights
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Track up to 100 visitors
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Basic widget customization
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 recurring campaign
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          60-day chat history
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em]">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          24/7/365 Support
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em]">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 user
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                              <div class="bg-[#f0f1f4] mb-[30px] rounded-[24px] overflow-hidden group z-10 relative">
                                 <div class="p-[36px_34px_36px_34px] rounded-[16px] bg-white shadow-[0_14px_14px_-3px_rgba(158,158,158,0.1),0_7px_7px_-2px_rgba(158,158,158,0.1),0_4px_4px_-2px_rgba(158,158,158,0.1),0_2px_2px_-1px_rgba(158,158,158,0.2),0_1px_1px_-1px_rgba(158,158,158,0.3)]">
                                    <span class="w-[46px] h-[46px] rounded-lg bg-black inline-block mb-[20px] tp-btn-shadow"></span>
                                    <span class="font-medium text-[24px] tracking-[-0.01em] text-black block mb-[7px]">Enterprise</span>
                                    <p class="font-normal text-[16px] leading-[150%] tracking-[-0.01em] mb-[18px]">For individuals and small teams<br class="max-sm:hidden"> just getting started</p>
                                    <div class="inline-flex items-end mb-[20px]">
                                       <h2 class="font-semibold text-[54px]">$349</h2>
                                       <span class="text-[15px] font-medium tracking-[-0.01em] text-grey-300 mb-[5px] ml-[5px]">/ yearly</span>
                                    </div>
                                    <a href="sign-in.html" class="tp-btn  bg-black hover:bg-primary hover:text-white block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                                       Sign up free
                                    </a>
                                 </div>
                                 <div class="p-[35px_30px_10px_30px]">
                                    <span class="font-medium text-[16px] leading-[150%] text-black mb-5 block">What's included:</span>
                                    <ul>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Instant meeting recap & highlights
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Track up to 100 visitors
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          Basic widget customization
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 recurring campaign
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          60-day chat history
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          24/7/365 Support
                                       </li>
                                       <li class="mb-[17px] font-normal flex text-[16px] tracking-[-0.01em] text-black">
                                          <span class="w-5 h-5 mt-[1px] inline-flex justify-center items-center mr-[11px] rounded-full bg-[rgba(17,17,17,0.1)]">
                                             <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.75 0.75L3.5625 6.75L0.75 4.02273" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          1 user
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-pricing-area-end -->

      <!-- tp-testimonial-area-start -->
      <div class="bg-grey-200">
         <div class="mx-auto max-w-[1314px] px-3">
            <div class="grid grid-cols-12 gap-6">
               <div class="col-span-12">
                  <div class="text-center mb-[62px]">
                     <span data-tp-animate="" data-delay="0.2" class="font-medium text-[15px] text-[#161616] border border-[rgba(119,118,122,0.1)] bg-[#f1eeec] rounded-[20px] inline-block p-[7px_16px] mb-[15px]">
                        <svg class="mt-[-3px] mr-[5px]" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2419 9.37767C13.2433 9.60258 13.1749 9.8224 13.0463 10.0069C12.9176 10.1914 12.7349 10.3314 12.5234 10.4078L8.96675 11.7221L7.65663 15.2815C7.57905 15.4922 7.43868 15.6741 7.25447 15.8026C7.07026 15.9311 6.85107 16 6.62647 16C6.40187 16 6.18268 15.9311 5.99847 15.8026C5.81426 15.6741 5.67389 15.4922 5.59631 15.2815L4.27792 11.7221L0.71854 10.412C0.507769 10.3344 0.325868 10.194 0.19738 10.0098C0.0688917 9.82559 0 9.6064 0 9.3818C0 9.15721 0.0688917 8.93802 0.19738 8.7538C0.325868 8.56959 0.507769 8.42922 0.71854 8.35164L4.27792 7.03325L5.58803 3.47387C5.66562 3.2631 5.80598 3.0812 5.9902 2.95271C6.17441 2.82423 6.3936 2.75533 6.6182 2.75533C6.84279 2.75533 7.06198 2.82423 7.2462 2.95271C7.43041 3.0812 7.57078 3.2631 7.64836 3.47387L8.96675 7.03325L12.5261 8.34337C12.7378 8.42045 12.9204 8.56135 13.0486 8.74662C13.1768 8.93188 13.2443 9.15238 13.2419 9.37767ZM9.38047 2.75814H10.4837V3.86139C10.4837 4.00769 10.5418 4.148 10.6453 4.25145C10.7487 4.3549 10.8891 4.41302 11.0354 4.41302C11.1817 4.41302 11.322 4.3549 11.4254 4.25145C11.5289 4.148 11.587 4.00769 11.587 3.86139V2.75814H12.6902C12.8365 2.75814 12.9768 2.70002 13.0803 2.59657C13.1837 2.49312 13.2419 2.35281 13.2419 2.20651C13.2419 2.06021 13.1837 1.9199 13.0803 1.81645C12.9768 1.713 12.8365 1.65488 12.6902 1.65488L11.587 1.65488V0.551627C11.587 0.405327 11.5289 0.265018 11.4254 0.161568C11.322 0.0581177 11.1817 0 11.0354 0C10.8891 0 10.7487 0.0581177 10.6453 0.161568C10.5418 0.265018 10.4837 0.405327 10.4837 0.551627V1.65488H9.38047C9.23417 1.65488 9.09386 1.713 8.99041 1.81645C8.88696 1.9199 8.82884 2.06021 8.82884 2.20651C8.82884 2.35281 8.88696 2.49312 8.99041 2.59657C9.09386 2.70002 9.23417 2.75814 9.38047 2.75814ZM15.4484 4.96465H14.8967V4.41302C14.8967 4.26672 14.8386 4.12641 14.7352 4.02296C14.6317 3.91951 14.4914 3.86139 14.3451 3.86139C14.1988 3.86139 14.0585 3.91951 13.9551 4.02296C13.8516 4.12641 13.7935 4.26672 13.7935 4.41302V4.96465H13.2419C13.0956 4.96465 12.9553 5.02277 12.8518 5.12621C12.7484 5.22967 12.6902 5.36997 12.6902 5.51627C12.6902 5.66258 12.7484 5.80288 12.8518 5.90633C12.9553 6.00978 13.0956 6.0679 13.2419 6.0679H13.7935V6.61953C13.7935 6.76583 13.8516 6.90614 13.9551 7.00959C14.0585 7.11304 14.1988 7.17116 14.3451 7.17116C14.4914 7.17116 14.6317 7.11304 14.7352 7.00959C14.8386 6.90614 14.8967 6.76583 14.8967 6.61953V6.0679H15.4484C15.5947 6.0679 15.735 6.00978 15.8384 5.90633C15.9419 5.80288 16 5.66258 16 5.51627C16 5.36997 15.9419 5.22967 15.8384 5.12621C15.735 5.02277 15.5947 4.96465 15.4484 4.96465Z" fill="url(#paint0_linear_297_3942)"></path>
                           <defs>
                              <linearGradient id="paintt0_linear_297_3942" x1="4" y1="2" x2="12.5" y2="17.5" gradientUnits="userSpaceOnUse">
                                 <stop offset="4" stop-color="#FF2E2E"></stop>
                                 <stop offset="0.33" stop-color="#EE7B16"></stop>
                                 <stop offset="0.66" stop-color="#8A43E1"></stop>
                                 <stop offset="1" stop-color="#D510FC"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Testimonials
                     </span>
                     <h2 data-tp-split-text="" class="font-semibold text-[48px] max-md:text-[36px] leading-[117%] tracking-[-0.02em] text-black mb-[10px]">Our users say It best</h2>
                     <p data-tp-split-text="">Some of the most memorable reviews we heard from our design colleagues.</p>
                  </div>
                  <div data-tp-animate="" data-delay="0.3" class="relative">
                     <div class="p-[80px_80px_40px_80px] max-lg:p-[80px_60px_40px_60px] max-sm:p-[50px_30px_20px_30px] bg-white rounded-2xl relative overflow-hidden shadow-[0_14px_14px_-3px_rgba(158,158,158,0.1),0_7px_7px_-2px_rgba(158,158,158,0.1),0_4px_4px_-2px_rgba(158,158,158,0.1),0_2px_2px_-1px_rgba(158,158,158,0.2),0_1px_1px_-1px_rgba(158,158,158,0.3),0_-4px_0_0_#ffcd29]">
                        <div class="absolute top-0 left-0 right-0 text-center">
                           <div class="price-badge">
                              <div class="content">
                                 <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.48373 0.69121C6.78308 -0.230101 8.08649 -0.2301 8.38584 0.691211L9.45541 3.98301C9.58928 4.39503 9.97324 4.67399 10.4065 4.67399H13.8677C14.8364 4.67399 15.2392 5.91361 14.4555 6.48301L11.6553 8.51745C11.3048 8.77209 11.1581 9.22346 11.292 9.63548L12.3616 12.9273C12.6609 13.8486 11.6065 14.6147 10.8227 14.0453L8.02257 12.0109C7.67208 11.7562 7.19749 11.7562 6.847 12.0109L4.04683 14.0453C3.26311 14.6147 2.20864 13.8486 2.50799 12.9273L3.57756 9.63548C3.71143 9.22346 3.56477 8.77209 3.21429 8.51745L0.414117 6.48301C-0.369597 5.91361 0.0331788 4.67399 1.0019 4.67399H4.4631C4.89633 4.67399 5.28028 4.39503 5.41416 3.98301L6.48373 0.69121Z" fill="#3F170B"></path>
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.48373 0.69121C6.78308 -0.230101 8.08649 -0.2301 8.38584 0.691211L9.45541 3.98301C9.58928 4.39503 9.97324 4.67399 10.4065 4.67399H13.8677C14.8364 4.67399 15.2392 5.91361 14.4555 6.48301L11.6553 8.51745C11.3048 8.77209 11.1581 9.22346 11.292 9.63548L12.3616 12.9273C12.6609 13.8486 11.6065 14.6147 10.8227 14.0453L8.02257 12.0109C7.67208 11.7562 7.19749 11.7562 6.847 12.0109L4.04683 14.0453C3.26311 14.6147 2.20864 13.8486 2.50799 12.9273L3.57756 9.63548C3.71143 9.22346 3.56477 8.77209 3.21429 8.51745L0.414117 6.48301C-0.369597 5.91361 0.0331788 4.67399 1.0019 4.67399H4.4631C4.89633 4.67399 5.28028 4.39503 5.41416 3.98301L6.48373 0.69121Z" fill="#3F170B"></path>
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.48373 0.69121C6.78308 -0.230101 8.08649 -0.2301 8.38584 0.691211L9.45541 3.98301C9.58928 4.39503 9.97324 4.67399 10.4065 4.67399H13.8677C14.8364 4.67399 15.2392 5.91361 14.4555 6.48301L11.6553 8.51745C11.3048 8.77209 11.1581 9.22346 11.292 9.63548L12.3616 12.9273C12.6609 13.8486 11.6065 14.6147 10.8227 14.0453L8.02257 12.0109C7.67208 11.7562 7.19749 11.7562 6.847 12.0109L4.04683 14.0453C3.26311 14.6147 2.20864 13.8486 2.50799 12.9273L3.57756 9.63548C3.71143 9.22346 3.56477 8.77209 3.21429 8.51745L0.414117 6.48301C-0.369597 5.91361 0.0331788 4.67399 1.0019 4.67399H4.4631C4.89633 4.67399 5.28028 4.39503 5.41416 3.98301L6.48373 0.69121Z" fill="#3F170B"></path>
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.48373 0.69121C6.78308 -0.230101 8.08649 -0.2301 8.38584 0.691211L9.45541 3.98301C9.58928 4.39503 9.97324 4.67399 10.4065 4.67399H13.8677C14.8364 4.67399 15.2392 5.91361 14.4555 6.48301L11.6553 8.51745C11.3048 8.77209 11.1581 9.22346 11.292 9.63548L12.3616 12.9273C12.6609 13.8486 11.6065 14.6147 10.8227 14.0453L8.02257 12.0109C7.67208 11.7562 7.19749 11.7562 6.847 12.0109L4.04683 14.0453C3.26311 14.6147 2.20864 13.8486 2.50799 12.9273L3.57756 9.63548C3.71143 9.22346 3.56477 8.77209 3.21429 8.51745L0.414117 6.48301C-0.369597 5.91361 0.0331788 4.67399 1.0019 4.67399H4.4631C4.89633 4.67399 5.28028 4.39503 5.41416 3.98301L6.48373 0.69121Z" fill="#3F170B"></path>
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.48373 0.69121C6.78308 -0.230101 8.08649 -0.2301 8.38584 0.691211L9.45541 3.98301C9.58928 4.39503 9.97324 4.67399 10.4065 4.67399H13.8677C14.8364 4.67399 15.2392 5.91361 14.4555 6.48301L11.6553 8.51745C11.3048 8.77209 11.1581 9.22346 11.292 9.63548L12.3616 12.9273C12.6609 13.8486 11.6065 14.6147 10.8227 14.0453L8.02257 12.0109C7.67208 11.7562 7.19749 11.7562 6.847 12.0109L4.04683 14.0453C3.26311 14.6147 2.20864 13.8486 2.50799 12.9273L3.57756 9.63548C3.71143 9.22346 3.56477 8.77209 3.21429 8.51745L0.414117 6.48301C-0.369597 5.91361 0.0331788 4.67399 1.0019 4.67399H4.4631C4.89633 4.67399 5.28028 4.39503 5.41416 3.98301L6.48373 0.69121Z" fill="#3F170B"></path>
                                    </svg>
                                 </span>
                              </div>
                              <div class="before"></div>
                              <div class="after"></div>
                           </div>
                        </div>
                        <div class="swiper tp-feature-inner-active">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="text-center">
                                    <p class="font-medium max-xl:[&>br]:hidden md:text-[34px] max-md:text-2xl leading-[129%] tracking-[-0.02em] text-black mb-10">“It was very good. The onboarding process was easy.<br>
                                    We've been using chatbot for a number of years with hardly any <br>
                                    issues. The team at chatbot resolves everything.”</p>
                                    <div class="flex items-center flex-col gap-[14px]">
                                       <div>
                                          <img class="rounded-full w-[60px] flex-auto" src="images/avatar-5.png" alt="">
                                       </div>
                                       <div class="text-center">
                                          <span class="font-medium block mb-[2px] text-[20px] font-display text-black">Jan Mraz</span>
                                          <span class="font-normal text-[15px] text-grey">Co-Founder of Atheros</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="text-center">
                                    <p class="font-medium max-xl:[&>br]:hidden md:text-[34px] max-md:text-2xl leading-[129%] tracking-[-0.02em] text-black mb-10">“It was very good. The onboarding process was easy.<br>
                                    We've been using chatbot for a number of years with hardly any <br>
                                    issues. The team at chatbot resolves everything.”</p>
                                    <div class="flex items-center flex-col gap-[14px]">
                                       <div>
                                          <img class="rounded-full w-[60px] flex-auto" src="images/avatar-4.png" alt="">
                                       </div>
                                       <div class="text-center">
                                          <span class="font-medium block mb-[2px] text-[20px] font-display text-black">Hasanbaluch</span>
                                          <span class="font-normal text-[15px] text-grey">Atheros</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-hero-10-pagination mt-6 text-center [&_.swiper-pagination-bullet]:w-[10px]! [&_.swiper-pagination-bullet]:h-[10px]! [&_.swiper-pagination-bullet]:opacity-100! [&_.swiper-pagination-bullet]:bg-[rgba(17,17,17,0.1)]! [&_.swiper-pagination-bullet]:rounded-[50px]! [&_.swiper-pagination-bullet-active]:bg-black!"></div>
                     </div>
                     <div class="absolute max-xl:hidden -translate-y-1/2 top-1/2 xxl:-left-9 xxl:-right-9 max-xxl:-left-0 max-xxl:-right-0 z-30 flex justify-between gap-[12px] mb-[30px]">
                        <button class="tp-testimonial-10-prev w-[70px] h-[50px]  tp-btn-shadow bg-black text-white flex justify-center cursor-pointer hover:bg-primary hover:text-white transition-all duration-300 items-center rounded-full">
                           <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13 7H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                        </button>
                        <button class="tp-testimonial-10-next w-[70px] h-[50px]  tp-btn-shadow bg-black text-white flex justify-center cursor-pointer hover:bg-primary hover:text-white transition-all duration-300 items-center rounded-full">
                           <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 7H13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-testimonial-area-end -->

      <!-- tp-faq-area-start -->
      <div class="bg-grey-200 pt-[130px]">
         <div class="mx-auto max-w-[1314px] px-3">
            <div class="grid grid-cols-12 gap-6">
               <div class="lg:col-span-5 md:col-span-7 col-span-12">
                  <div class="mb-[62px] max-md:mb-5">
                     <span data-tp-animate="" data-delay="0.2" class="font-medium text-[15px] text-[#161616] border border-[rgba(119,118,122,0.1)] bg-[#f1eeec] rounded-[20px] inline-block p-[7px_16px] mb-[15px]">
                        <svg class="mt-[-3px] mr-[5px]" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2419 9.37767C13.2433 9.60258 13.1749 9.8224 13.0463 10.0069C12.9176 10.1914 12.7349 10.3314 12.5234 10.4078L8.96675 11.7221L7.65663 15.2815C7.57905 15.4922 7.43868 15.6741 7.25447 15.8026C7.07026 15.9311 6.85107 16 6.62647 16C6.40187 16 6.18268 15.9311 5.99847 15.8026C5.81426 15.6741 5.67389 15.4922 5.59631 15.2815L4.27792 11.7221L0.71854 10.412C0.507769 10.3344 0.325868 10.194 0.19738 10.0098C0.0688917 9.82559 0 9.6064 0 9.3818C0 9.15721 0.0688917 8.93802 0.19738 8.7538C0.325868 8.56959 0.507769 8.42922 0.71854 8.35164L4.27792 7.03325L5.58803 3.47387C5.66562 3.2631 5.80598 3.0812 5.9902 2.95271C6.17441 2.82423 6.3936 2.75533 6.6182 2.75533C6.84279 2.75533 7.06198 2.82423 7.2462 2.95271C7.43041 3.0812 7.57078 3.2631 7.64836 3.47387L8.96675 7.03325L12.5261 8.34337C12.7378 8.42045 12.9204 8.56135 13.0486 8.74662C13.1768 8.93188 13.2443 9.15238 13.2419 9.37767ZM9.38047 2.75814H10.4837V3.86139C10.4837 4.00769 10.5418 4.148 10.6453 4.25145C10.7487 4.3549 10.8891 4.41302 11.0354 4.41302C11.1817 4.41302 11.322 4.3549 11.4254 4.25145C11.5289 4.148 11.587 4.00769 11.587 3.86139V2.75814H12.6902C12.8365 2.75814 12.9768 2.70002 13.0803 2.59657C13.1837 2.49312 13.2419 2.35281 13.2419 2.20651C13.2419 2.06021 13.1837 1.9199 13.0803 1.81645C12.9768 1.713 12.8365 1.65488 12.6902 1.65488L11.587 1.65488V0.551627C11.587 0.405327 11.5289 0.265018 11.4254 0.161568C11.322 0.0581177 11.1817 0 11.0354 0C10.8891 0 10.7487 0.0581177 10.6453 0.161568C10.5418 0.265018 10.4837 0.405327 10.4837 0.551627V1.65488H9.38047C9.23417 1.65488 9.09386 1.713 8.99041 1.81645C8.88696 1.9199 8.82884 2.06021 8.82884 2.20651C8.82884 2.35281 8.88696 2.49312 8.99041 2.59657C9.09386 2.70002 9.23417 2.75814 9.38047 2.75814ZM15.4484 4.96465H14.8967V4.41302C14.8967 4.26672 14.8386 4.12641 14.7352 4.02296C14.6317 3.91951 14.4914 3.86139 14.3451 3.86139C14.1988 3.86139 14.0585 3.91951 13.9551 4.02296C13.8516 4.12641 13.7935 4.26672 13.7935 4.41302V4.96465H13.2419C13.0956 4.96465 12.9553 5.02277 12.8518 5.12621C12.7484 5.22967 12.6902 5.36997 12.6902 5.51627C12.6902 5.66258 12.7484 5.80288 12.8518 5.90633C12.9553 6.00978 13.0956 6.0679 13.2419 6.0679H13.7935V6.61953C13.7935 6.76583 13.8516 6.90614 13.9551 7.00959C14.0585 7.11304 14.1988 7.17116 14.3451 7.17116C14.4914 7.17116 14.6317 7.11304 14.7352 7.00959C14.8386 6.90614 14.8967 6.76583 14.8967 6.61953V6.0679H15.4484C15.5947 6.0679 15.735 6.00978 15.8384 5.90633C15.9419 5.80288 16 5.66258 16 5.51627C16 5.36997 15.9419 5.22967 15.8384 5.12621C15.735 5.02277 15.5947 4.96465 15.4484 4.96465Z" fill="url(#paint0_linear_297_3942)"></path>
                           <defs>
                              <linearGradient id="painty0_linear_297_3942" x1="4" y1="2" x2="12.5" y2="17.5" gradientUnits="userSpaceOnUse">
                                 <stop offset="1" stop-color="#FF2E2E"></stop>
                                 <stop offset="0.33" stop-color="#EE7B16"></stop>
                                 <stop offset="0.66" stop-color="#8A43E1"></stop>
                                 <stop offset="1" stop-color="#D510FC"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                        Our Faq
                     </span>
                     <h2 data-tp-split-text="" class="font-semibold text-[48px] max-md:text-[36px] leading-[117%] tracking-[-0.02em] text-black mb-[10px]">Frequently<br> Asked Questions</h2>
                     <p data-tp-split-text="" class="mb-9 max-xl:[&>br]:hidden">Offer live chat support to your customers. Our chatbot<br> seamlessly transitions to human agents when needed.</p>
                     <a data-tp-animate="" data-delay="0.4" href="contact.html" class="tp-btn tp-btn-hover bg-black inline-block rounded-lg text-[15px] px-8 h-[50px] leading-[50px] tp-btn-shadow">
                        <span>Contact Us</span>
                        <b class="bg-primary"></b>
                     </a>
                  </div>
               </div>
               <div class="lg:col-span-7 col-span-12">
                  <div class="accordion flex flex-col gap-3 mb-[40px]">
                     <div data-tp-animate="" data-delay="0.3" class="accordion-item transition duration-300 ease-in rounded-[20px] overflow-hidden [&.hello]:shadow-[0_25px_30px_-10px_rgba(0,0,0,0.1)] bg-white" data-expanded="true">
                        <button type="button" class="accordion-header cursor-pointer flex px-[30px] py-6 justify-between gap-4 items-center w-full group/accordion transition-all duration-300 ease-in-out ">
                           <span class="font-medium text-left text-lg tracking-[-0.01em] text-black">
                              Can I test ChatBot for free?
                           </span>
                           <span class="flex-none tp-btn-shadow bg-black text-white w-[30px] h-[30px] inline-flex justify-center items-center rounded-4xl group">
                              <svg class="group-[.active]/accordion:rotate-45 transition-all duration-300 ease-in-out" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.40685 0.749884V12.0636" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M0.75 6.40674H12.0637" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                        </button>
                        <div class="accordion-collapse">
                           <div class="accordion-content">
                              <div class="p-[0px_30px_30px_30px]">
                                 <p class="font-normal max-xl:[&>br]:hidden text-base leading-[1.5] tracking-[-0.01em]">A generative AI chatbot is an advanced type of chatbot that uses artificial<br>
                                    intelligence to create dynamic, human-like responses in real time rather than <br>
                                    solely on predefined scripts or answers.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-tp-animate="" data-delay="0.3" class="accordion-item transition duration-300 ease-in rounded-[20px] overflow-hidden [&.hello]:shadow-[0_25px_30px_-10px_rgba(0,0,0,0.1)] bg-white">
                        <button type="button" class="accordion-header cursor-pointer flex px-[30px] py-6 justify-between gap-4 items-center w-full group/accordion transition-all duration-300 ease-in-out ">
                           <span class="font-medium text-left text-lg tracking-[-0.01em] text-black">
                              What is a generative AI chatbot?
                           </span>
                           <span class="flex-none tp-btn-shadow bg-black text-white w-[30px] h-[30px] inline-flex justify-center items-center rounded-4xl group">
                              <svg class="group-[.active]/accordion:rotate-45 transition-all duration-300 ease-in-out" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.40685 0.749884V12.0636" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M0.75 6.40674H12.0637" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                        </button>
                        <div class="accordion-collapse">
                           <div class="accordion-content">
                              <div class="p-[0px_30px_30px_30px]">
                                 <p class="font-normal max-xl:[&>br]:hidden text-base leading-[1.5] tracking-[-0.01em]">A generative AI chatbot is an advanced type of chatbot that uses artificial<br>
                                    intelligence to create dynamic, human-like responses in real time rather than <br>
                                    solely on predefined scripts or answers.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-tp-animate="" data-delay="0.3" class="accordion-item transition duration-300 ease-in rounded-[20px] overflow-hidden [&.hello]:shadow-[0_25px_30px_-10px_rgba(0,0,0,0.1)] bg-white">
                        <button type="button" class="accordion-header cursor-pointer flex px-[30px] py-6 justify-between gap-4 items-center w-full group/accordion transition-all duration-300 ease-in-out ">
                           <span class="font-medium text-left text-lg tracking-[-0.01em] text-black">
                              How does a generative AI chatbot work?
                           </span>
                           <span class="flex-none tp-btn-shadow bg-black text-white w-[30px] h-[30px] inline-flex justify-center items-center rounded-4xl group">
                              <svg class="group-[.active]/accordion:rotate-45 transition-all duration-300 ease-in-out" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.40685 0.749884V12.0636" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M0.75 6.40674H12.0637" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                        </button>
                        <div class="accordion-collapse">
                           <div class="accordion-content">
                              <div class="p-[0px_30px_30px_30px]">
                                 <p class="font-normal max-xl:[&>br]:hidden text-base leading-[1.5] tracking-[-0.01em]">A generative AI chatbot is an advanced type of chatbot that uses artificial<br>
                                    intelligence to create dynamic, human-like responses in real time rather than <br>
                                    solely on predefined scripts or answers.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-tp-animate="" data-delay="0.3" class="accordion-item transition duration-300 ease-in rounded-[20px] overflow-hidden [&.hello]:shadow-[0_25px_30px_-10px_rgba(0,0,0,0.1)] bg-white">
                        <button type="button" class="accordion-header cursor-pointer flex px-[30px] py-6 justify-between gap-4 items-center w-full group/accordion transition-all duration-300 ease-in-out ">
                           <span class="font-medium text-left text-lg tracking-[-0.01em] text-black">
                           How do AI chatbots benefit customer support?
                           </span>
                           <span class="flex-none tp-btn-shadow bg-black text-white w-[30px] h-[30px] inline-flex justify-center items-center rounded-4xl group">
                              <svg class="group-[.active]/accordion:rotate-45 transition-all duration-300 ease-in-out" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.40685 0.749884V12.0636" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M0.75 6.40674H12.0637" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                        </button>
                        <div class="accordion-collapse">
                           <div class="accordion-content">
                              <div class="p-[0px_30px_30px_30px]">
                                 <p class="font-normal max-xl:[&>br]:hidden text-base leading-[1.5] tracking-[-0.01em]">A generative AI chatbot is an advanced type of chatbot that uses artificial<br>
                                    intelligence to create dynamic, human-like responses in real time rather than <br>
                                    solely on predefined scripts or answers.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-tp-animate="" data-delay="0.3" class="accordion-item transition duration-300 ease-in rounded-[20px] overflow-hidden [&.hello]:shadow-[0_25px_30px_-10px_rgba(0,0,0,0.1)] bg-white">
                        <button type="button" class="accordion-header cursor-pointer flex px-[30px] py-6 justify-between gap-4 items-center w-full group/accordion transition-all duration-300 ease-in-out ">
                           <span class="font-medium text-left text-lg tracking-[-0.01em] text-black">
                              Can ChatBot be integrated with LiveChat?
                           </span>
                           <span class="flex-none tp-btn-shadow bg-black text-white w-[30px] h-[30px] inline-flex justify-center items-center rounded-4xl group">
                              <svg class="group-[.active]/accordion:rotate-45 transition-all duration-300 ease-in-out" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.40685 0.749884V12.0636" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M0.75 6.40674H12.0637" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                        </button>
                        <div class="accordion-collapse">
                           <div class="accordion-content">
                              <div class="p-[0px_30px_30px_30px]">
                                 <p class="font-normal max-xl:[&>br]:hidden text-base leading-[1.5] tracking-[-0.01em]">A generative AI chatbot is an advanced type of chatbot that uses artificial<br>
                                    intelligence to create dynamic, human-like responses in real time rather than <br>
                                    solely on predefined scripts or answers.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-tp-animate="" data-delay="0.3" class="accordion-item transition duration-300 ease-in rounded-[20px] overflow-hidden [&.hello]:shadow-[0_25px_30px_-10px_rgba(0,0,0,0.1)] bg-white">
                        <button type="button" class="accordion-header cursor-pointer flex px-[30px] py-6 justify-between gap-4 items-center w-full group/accordion transition-all duration-300 ease-in-out ">
                           <span class="font-medium text-left text-lg tracking-[-0.01em] text-black">
                              Can I test ChatBot for free?
                           </span>
                           <span class="flex-none tp-btn-shadow bg-black text-white w-[30px] h-[30px] inline-flex justify-center items-center rounded-4xl group">
                              <svg class="group-[.active]/accordion:rotate-45 transition-all duration-300 ease-in-out" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.40685 0.749884V12.0636" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M0.75 6.40674H12.0637" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                        </button>
                        <div class="accordion-collapse">
                           <div class="accordion-content">
                              <div class="p-[0px_30px_30px_30px]">
                                 <p class="font-normal max-xl:[&>br]:hidden text-base leading-[1.5] tracking-[-0.01em]">A generative AI chatbot is an advanced type of chatbot that uses artificial<br>
                                    intelligence to create dynamic, human-like responses in real time rather than <br>
                                    solely on predefined scripts or answers.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-faq-area-end -->


   </main>

   <!-- tp-footer-area-start -->
   <footer class="bg-[#f6f7fa] pt-[95px]">
      <div class="mx-auto max-w-[1504px] px-[15px]">
         <div class="bg-[#161616] rounded-t-[40px] p-[90px_90px_35px_90px] max-lg:p-[50px_20px_15px_20px]">
            <div class="grid grid-cols-12 gap-[24px] pb-[84px]">
               <div class="xl:col-span-5 lg:col-span-6 md:col-span-6 col-span-12">
                  <div data-tp-animate="" data-delay="0.2" class="mb-[30px]">
                     <a href="index.html" class="mb-[25px] inline-block">
                        <img src="images/logo-white.png" alt="">
                     </a>
                     <h2 class="font-medium text-xl tracking-[-0.01em] text-white mb-[8px]">Join our newsletter</h2>
                     <p class="leading-[1.63] tracking-[-0.01em] text-[rgba(255,255,255,0.6)] mb-[25px]">Sign up to our mailing list below and be the<br> first to know about new updates.</p>
                     <div>
                        <form action="#">
                           <div class="relative md:inline-block">
                              <input type="text" placeholder="Enter email Address" class="border font-[16px] bg-white border-white h-[54px] w-[414px] max-xl:w-full rounded-[12px] pl-[24px] md:pr-[170px] text-[14px] font-normal xs:pr-[20px] focus:border-primary">
                              <button type="submit" class="tp-btn tp-btn-hover tp-btn-shadow bg-black min-sm:absolute max-sm:relative min-sm:top-1/2 right-[5px] min-sm:-translate-y-1/2 max-sm:my-[20px] rounded-lg text-[15px] px-5 h-[40px] leading-[40px]">
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
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">About Us</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Features</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Pricing</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Our Blog</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">FAQ’s</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                  <div data-tp-animate="" data-delay="0.4" class="mb-[30px] ml-[50px] max-xl:ml-0">
                     <h2 class="font-medium text-white text-[20px] leading-[100%] mb-[30px]">Integrations</h2>
                     <ul>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">LiveChat</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Chat Widget</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">HelpDesk</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Facebook </a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Messenger </a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Shopify </a></li>
                     </ul>
                  </div>
               </div>
               <div class="xl:col-span-2 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                  <div data-tp-animate="" data-delay="0.5" class="mb-[30px]">
                     <h2 class="font-medium text-white text-[20px] leading-[100%] mb-[30px]">Legal policies</h2>
                     <ul>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Refund Policy</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Terms & Conditions</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Privacy Policy</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Support</a></li>
                        <li class="font-medium text-[16px] tracking-[-0.01em] text-[rgba(255,255,255,0.7)] mb-[17px]"><a class="hover:text-primary" href="#">Legal</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div>
               <div class="grid grid-cols-12 gap-[30px] items-center pt-[30px] border-t border-[rgba(255,255,255,0.1)]">
                  <div class="md:col-span-8 col-span-12">
                     <div data-tp-animate="" data-delay="0.3" data-offset="10" data-start="top 105%">
                        <p class="font-medium tracking-[-0.01em] text-[rgba(255,255,255,0.6)]">Copyright <a href="#" class="text-white">©toxci</a> - smart application for modern business</p>
                     </div>
                  </div>
                  <div class="md:col-span-4 col-span-12">
                     <div data-tp-animate="" data-delay="0.5" data-offset="10" data-start="top 105%" class="flex md:justify-end gap-[6px]">
                        <a href="#" class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                           <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.83333 8.38889C0.937056 8.38889 0.75 8.56475 0.75 9.40741V10.9352C0.75 11.7778 0.937055 11.9537 1.83333 11.9537H4V18.0648C4 18.9075 4.18706 19.0833 5.08333 19.0833H7.25C8.14628 19.0833 8.33333 18.9075 8.33333 18.0648V11.9537H10.7662C11.4459 11.9537 11.6211 11.8295 11.8078 11.215L12.2721 9.68722C12.592 8.63458 12.3949 8.38889 11.2305 8.38889H8.33333V5.84259C8.33333 5.28008 8.81836 4.82407 9.41667 4.82407H12.5C13.3963 4.82407 13.5833 4.64821 13.5833 3.80556V1.76852C13.5833 0.925864 13.3963 0.75 12.5 0.75H9.41667C6.42512 0.75 4 3.03003 4 5.84259V8.38889H1.83333Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                           </svg>
                        </a>
                        <a href="#" class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                           <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.29102 11.0003C2.29102 6.89518 2.29102 4.8426 3.56632 3.5673C4.84163 2.29199 6.8942 2.29199 10.9993 2.29199C15.1045 2.29199 17.1571 2.29199 18.4324 3.5673C19.7077 4.8426 19.7077 6.89518 19.7077 11.0003C19.7077 15.1055 19.7077 17.158 18.4324 18.4334C17.1571 19.7087 15.1045 19.7087 10.9993 19.7087C6.8942 19.7087 4.84163 19.7087 3.56632 18.4334C2.29102 17.158 2.29102 15.1055 2.29102 11.0003Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                              <path d="M15.125 11C15.125 13.2782 13.2782 15.125 11 15.125C8.72183 15.125 6.875 13.2782 6.875 11C6.875 8.72183 8.72183 6.875 11 6.875C13.2782 6.875 15.125 8.72183 15.125 11Z" stroke="currentColor" stroke-width="1.5"></path>
                              <path d="M16.0488 5.95801L16.0398 5.95801" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                        </a>
                        <a href="#" class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="9.91667" cy="9.91667" r="9.16667" stroke="currentColor" stroke-width="1.5"></circle>
                              <path d="M19.0827 11.0763C18.2331 10.917 17.3593 10.834 16.4676 10.834C11.5613 10.834 7.1975 13.348 4.41602 17.2507" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                              <path d="M16.3333 3.5C13.4647 6.86181 9.1539 9 4.33382 9C3.10067 9 1.90086 8.86005 0.75 8.59547" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                              <path d="M12.3169 19.0837C12.5466 17.9709 12.6673 16.8183 12.6673 15.6377C12.6673 9.84793 9.76545 4.73457 5.33398 1.66699" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                           </svg>
                        </a>
                        <a href="#" class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                           <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11.0007 18.7913C12.6595 18.7913 14.2503 18.6275 15.7246 18.3269C17.5661 17.9516 18.4869 17.7639 19.3271 16.6836C20.1673 15.6033 20.1673 14.3632 20.1673 11.8829V10.1164C20.1673 7.63618 20.1673 6.39606 19.3271 5.31577C18.4869 4.23548 17.5661 4.04779 15.7246 3.67241C14.2503 3.37188 12.6595 3.20801 11.0007 3.20801C9.34177 3.20801 7.75097 3.37188 6.27666 3.67241C4.43517 4.04779 3.51442 4.23548 2.6742 5.31577C1.83398 6.39605 1.83398 7.63618 1.83398 10.1164V11.8829C1.83398 14.3632 1.83398 15.6033 2.6742 16.6836C3.51442 17.7639 4.43517 17.9516 6.27666 18.3269C7.75097 18.6275 9.34177 18.7913 11.0007 18.7913Z" stroke="currentColor" stroke-width="1.5"></path>
                              <path d="M14.632 11.2871C14.4959 11.8425 13.7721 12.2413 12.3245 13.0391C10.75 13.9067 9.96273 14.3405 9.32507 14.1733C9.1091 14.1167 8.91018 14.0172 8.74316 13.8822C8.25 13.4835 8.25 12.6558 8.25 11.0003C8.25 9.3449 8.25 8.51719 8.74316 8.11849C8.91018 7.98345 9.1091 7.88392 9.32507 7.82732C9.96273 7.66019 10.75 8.09399 12.3245 8.96159C13.7721 9.75931 14.4959 10.1582 14.632 10.7135C14.6782 10.9025 14.6782 11.0982 14.632 11.2871Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                           </svg>
                        </a>
                        <a href="#" class="hover:text-primary text-white border-l border-[rgba(255,255,255,0.2)] ml-[10px] pl-[15px]">
                           <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.16732 18.8532C6.02446 19.9141 3.40541 18.8532 1.83398 15.583" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M9.16732 20.1663V17.1944C9.16732 16.646 9.33593 16.1693 9.6077 15.7387C9.79411 15.4433 9.66644 15.0242 9.32965 14.9316C6.54009 14.1648 4.58398 12.9318 4.58398 8.84189C4.58398 7.7786 4.93237 6.77894 5.54475 5.90887C5.69715 5.69234 5.77335 5.58408 5.79167 5.48602C5.80999 5.38796 5.77814 5.25999 5.71444 5.00405C5.45517 3.96235 5.47197 2.85618 5.8611 1.85888C5.8611 1.85888 6.6652 1.59689 8.49538 2.74023C8.91324 3.00127 9.12217 3.13179 9.30617 3.16099C9.49018 3.19019 9.73619 3.12903 10.2282 3.00672C10.901 2.83946 11.5943 2.74967 12.3757 2.74967C13.157 2.74967 13.8503 2.83946 14.5231 3.00672C15.0151 3.12903 15.2611 3.19019 15.4451 3.16099C15.6291 3.13179 15.8381 3.00127 16.2559 2.74023C18.0861 1.59689 18.8902 1.85888 18.8902 1.85888C19.2793 2.85618 19.2961 3.96235 19.0369 5.00405C18.9732 5.25999 18.9413 5.38796 18.9596 5.48602C18.9779 5.58408 19.0542 5.69234 19.2065 5.90887C19.8189 6.77894 20.1673 7.7786 20.1673 8.84189C20.1673 12.9318 18.2112 14.1648 15.4217 14.9316C15.0849 15.0242 14.9572 15.4433 15.1436 15.7387C15.4154 16.1693 15.584 16.646 15.584 17.1944V20.1663" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
   <script src="js/jquery.js"></script>
   <script src="js/plugin.js"></script>
   <script src="js/lenis.js"></script>
   <script src="js/springer.js"></script>
   <script src="js/swiper-bundle.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/purecounter.js"></script>
   <script src="js/nice-select.js"></script>
   <script src="js/ajax-form.js"></script>
   <script src="js/slider-init.js"></script>
   <script src="js/main.js"></script>



</body></html>