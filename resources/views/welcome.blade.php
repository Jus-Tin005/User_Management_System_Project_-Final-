<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Management System Application</title>
        <!------------------------
        * Favicon *
    ------------------------->
    <link rel="icon" sizes="180x180" href="{{asset('frontend/assets/images/favicon.ico')}}" type="icon/png">
    <!------------------------
        * Font Awesome *
    ------------------------->
    <link rel="stylesheet" href="{{asset('frontend/assets/libs/fontawesome-free-5.15.4-web/css/all.css')}}">

    <!------------------------
        * Custom Tailwind CSS *
    ------------------------->
    <link href="{{asset('frontend/public/tailwind.css')}}" rel="stylesheet">
    </head>

    <body>


       <!------------------------
                * Preloder *
            ------------------------->

            <div class="loader">
                <div class="circle circle-one"></div>
                <div class="circle cirlce-two"></div>
                <div class="circle circle-three"></div>
            </div>

            <!------------------------
                * Header *
            ------------------------->
    <header class="fixed w-full">
            <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
                    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                            <a href="#" class="flex items-center">
                                    <img src="{{asset('frontend/assets/images/logo_1.png')}}" class="h-6 mr-3 sm:h-9" alt="logo" />
                                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Jio</span>
                            </a>
                            <div class="flex items-center lg:order-2">
                                        @if (Route::has('login'))
                                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                                    @auth
                                                        <a href="{{ url('/home') }}" class="text-gray-800 bg-purple-700 text-white  hover:bg-purple-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-3 py-2 lg:py-2  sm:mr-2 dark:hover:bg-gray-700 focus:outline-none"><i class="fas fa-home"></i></a>
                                                    @else
                                                        <a href="{{ route('login') }}" class="text-gray-800 bg-purple-700 text-white  hover:bg-purple-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5  sm:mr-2 dark:hover:bg-gray-700 focus:outline-none">Log in</a>

                                                        @if (Route::has('register'))
                                                            <a href="{{ route('register') }}" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Register</a>
                                                        @endif
                                                    @endauth
                                                </div>
                                            @endif
                                        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                                <i class="fas fa-bars w-6 h-6 text-xl"></i>
                                        </button>
                            </div>
                            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                        <li>
                                            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white" aria-current="page">Home</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                                        </li>
                                    </ul>
                            </div>
                    </div>
            </nav>
    </header>


     <!------------------------
        * First Block - Main Section  *
    ------------------------->
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">Lorem Ipsum is simply dummy text<br>typesetting industry. Lorem Ipsum</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">has been the industry's standard dummy text ever since the 1500s, when an unknown printer <a href="#" class="hover:underline">Lorem</a> took a galley of type and scrambled <a href="#" class="hover:underline">Lorem</a> and the <a href="#" class="hover:underline">to make a type specimen book</a>.</p>
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="#" class="inline-flex bg-purple-700 text-white items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-purple-300 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        View on Google
                    </a>
                    <a href="#" class="inline-flex  bg-purple-700 text-white  items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                         Get More Info
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{asset('frontend/assets/images/hero.png')}}" alt="hero">
            </div>
        </div>
    </section>



    <!------------------------
        * Second Block - Main Section  *
    ------------------------->

    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">It has survived not only five centuries</h2>
                    <p class="mb-8 font-light lg:text-xl">But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</p>
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400"></i>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Pontaining Lorem Ipsum passages, and more recently with desktop</span>
                        </li>
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400"></i>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Publishing software like Aldus PageMaker</span>
                        </li>
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400"></i>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Including versions of Lorem Ipsum.</span>
                        </li>
                    </ul>
                    <p class="mb-8 font-light lg:text-xl">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                </div>
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="../assets/images/feature-1.png" alt="">
            </div>

            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{asset('frontend/assets/images/feature-2.png')}}" alt="">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">From 45 BC, making it over 2000 years old. Richard McClintock,</h2>
                    <p class="mb-8 font-light lg:text-xl">A Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400"></i>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Discovered the undoubtable source</span>
                        </li>
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400"></i>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Lorem Ipsum comes from sections</span>
                        </li>
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400"></i>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">The standard chunk of Lorem Ipsum</span>
                        </li>
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400"></i>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Accompanied by English versions from</span>
                        </li>
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400"></i>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">It is a long established fact that a reader</span>
                        </li>
                    </ul>
                    <p class="font-light lg:text-xl">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                </div>
            </div>
        </div>
      </section>


       <!------------------------
        * Third Block - Main Section  *
    ------------------------->
    <section class="bg-white dark:bg-gray-900">
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
            <div class="col-span-2 mb-8">
                <p class="text-lg font-medium text-purple-600 dark:text-purple-500">Trusted Worldwide</p>
                <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">Trusted by over 600 million users and 10,000 teams</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                    <div>
                      <a href="#" class="inline-flex items-center text-base font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 dark:hover:text-purple-700">
                        There are many variations of passages
                        <i class="fas fa-long-arrow-alt-right w-5 h-5 ml-1"></i>
                      </a>
                    </div>
                    <div>
                      <a href="#" class="inline-flex items-center text-base font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 dark:hover:text-purple-700">
                        Lorem Ipsum available
                          <i class="fas fa-long-arrow-alt-right w-5 h-5 ml-1"></i>
                      </a>
                      </div>
                </div>
            </div>
            <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <div>
                    <i class=" fas fa-server text-4xl w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">99.99% uptime</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400"> Randomised words which don't look even slightly believable</p>
                </div>
                <div>
                    <i class=" fas fa-users text-4xl w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">600M+ Users</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">It uses a dictionary of over 200 Latin words</p>
                </div>
                <div>
                    <i class="fas fa-globe text-4xl w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">100+ countries</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">All the Lorem Ipsum generators on the Internet tend to repeat</p>
                </div>
                <div>
                    <i class="fas fa-shopping-cart text-4xl w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">5+ Millions</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
                </div>
            </div>
        </div>
      </section>


      <!------------------------
        * Fourth Block - Main Section  *
    ------------------------->
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
            <figure class="max-w-screen-md mx-auto">
                <i class="fas fa-quote-left text-4xl h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600"></i>
                <blockquote>
                    <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"Ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                    <img class="w-6 h-6 rounded-full" src="{{asset('frontend/assets/images/nadi.jpg')}}" alt="">
                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Nadi</div>
                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Data Land Co.,Ltd</div>
                    </div>
                </figcaption>
            </figure>
        </div>
      </section>




      <!------------------------
        * Fifth Block - Main Section  *
    ------------------------->

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
            <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Designed for business teams like yours</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <div class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Starter</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Richard McClintock, a Latin professor at Hampden-Sydney College.</p>
                    <div class="flex items-baseline justify-center my-8">
                        <span class="mr-2 text-5xl font-extrabold">$29</span>
                        <span class="text-gray-500 dark:text-gray-400">/month</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Individual configuration</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>No setup, or hidden fees</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Team size: <span class="font-semibold">1 developer</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Premium support: <span class="font-semibold">6 months</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Free updates: <span class="font-semibold">6 months</span></span>
                        </li>
                    </ul>
                    <a href="#" class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-purple-900">Get started</a>
                </div>
                <div class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Company</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">From a Lorem Ipsum passage, and going through the cites of the word.</p>
                    <div class="flex items-baseline justify-center my-8">
                        <span class="mr-2 text-5xl font-extrabold">$99</span>
                        <span class="text-gray-500 dark:text-gray-400" dark:text-gray-400>/month</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Individual configuration</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>No setup, or hidden fees</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Team size: <span class="font-semibold">10 developers</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Premium support: <span class="font-semibold">24 months</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Free updates: <span class="font-semibold">24 months</span></span>
                        </li>
                    </ul>
                    <a href="#" class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-purple-900">Get started</a>
                </div>
                <div class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Enterprise</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">In classical literature, discovered the undoubtable source..</p>
                    <div class="flex items-baseline justify-center my-8">
                        <span class="mr-2 text-5xl font-extrabold">$499</span>
                        <span class="text-gray-500 dark:text-gray-400">/month</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Individual configuration</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>No setup, or hidden fees</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Team size: <span class="font-semibold">100+ developers</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Premium support: <span class="font-semibold">36 months</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-check text-md flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"></i>
                            <span>Free updates: <span class="font-semibold">36 months</span></span>
                        </li>
                    </ul>
                    <a href="#" class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-purple-900">Get started</a>
                </div>
            </div>
        </div>
      </section>



      <!------------------------
        * Sixth Block - Main Section  *
    ------------------------->

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
            <h2 class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">Frequently Asked Questions ?</h2>
            <div class="max-w-screen-md mx-auto">
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h3 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>Are there many variations of passages of Lorem Ipsum available, but the majority have ?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>

                        </button>
                    </h3>
                    <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Have suffered alteration in some form,.</p>
                            <p class="text-gray-500 dark:text-gray-400">Randomised words which don't look  <a href="#" class="text-purple-600 dark:text-purple-500 hover:underline">get started</a> ven slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>Is there contrary to popular belief ?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the <a href="#" class="text-purple-600 dark:text-purple-500 hover:underline">he point of using Lorem Ipsum</a>  that it has a more-or-less normal distribution of letters, as opposed to use.</p>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-3">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                            <span>What are many variations of passages of Lorem Ipsum available ?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these:</p>
                            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="#" class="text-purple-600 dark:text-purple-500 hover:underline">Lorem Ipsum</a></li>
                                <li><a href="#" class="text-purple-600 dark:text-purple-500 hover:underline">The Printing and Typesetting</a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 id="accordion-flush-heading-4">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                            <span>What about a long established ?</span>
                            <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h3>
                    <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Landwind, Landwind Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these:</p>
                            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="#" class="text-purple-600 dark:text-purple-500 hover:underline">Lorem Ipsum</a></li>
                                <li><a href="#" class="text-purple-600 dark:text-purple-500 hover:underline">The Printing and Typesetting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!------------------------
        * Seventh Block - Main Section  *
    ------------------------->

                <section class="bg-gray-50 dark:bg-gray-800">
                            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
                                <div class="max-w-screen-sm mx-auto text-center">
                                    <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">Start your free trial today</h2>
                                    <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <a href="#" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Free trial for 30 days</a>
                                </div>
                            </div>
                </section>


    <!------------------------
        * Footer *
    ------------------------->
    <footer class="bg-white dark:bg-gray-800">
        <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-5">
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h3>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h3>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Discord Server</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h3>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Licensing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h3>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h3>
                    <ul class="text-gray-500 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">iOS</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Android</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Windows</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">MacOS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
            <div class="text-center">
                <a href="#" class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src="{{asset('frontend/assets/images/logo.svg')}}" class="h-6 mr-3 sm:h-9" alt="Logo" />
                   Jio
                </a>
                <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© <span><script>document.write(new Date().getFullYear());</script></span> Jio™. All Rights Reserved By  <a href="#" class="text-purple-600 hover:underline dark:text-purple-500">JT</a></span>
                <ul class="flex justify-center mt-5 space-x-5">
                    <li>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-------------------------
        * Plugin Libs *
     -------------------------->
    <script src="{{asset('frontend/assets/libs/plugin/flowbite.min.js')}}"></script>
    <script src="{{asset('frontend/assets/libs/plugin/buttons.js')}}"></script>
        <!-------------------------
            * jQuery *
        -------------------------->
     <script src="{{asset('frontend/assets/libs/jquery/jquery-3.6.3.min.js')}}"></script>
          <!-------------------------
            * Custom JS *
        -------------------------->
     <script src="{{asset('frontend/src/js/script.js')}}"></script>
    </body>
</html>
