<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>
            Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
        </title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <link
            rel="stylesheet"
            href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
        />
        <!--Replace with your tailwind.css once created-->
        <link
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700"
            rel="stylesheet"
        />
        <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
        <style>
            .gradient {
                background: linear-gradient(90deg, #4221f6 0%, #4ef0f1 100%);
            }
        </style>
    </head>
    <body
        class="leading-normal tracking-normal text-white gradient"
        style="font-family: 'Source Sans Pro', sans-serif"
    >
        <!--Nav-->
        @php($fixed_header = $fixed_header ?? false)
        <nav id="header" class="fixed w-full z-30 top-0 text-white @if($fixed_header) gradient @endif">
            <div
                class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2 px-20"
            >
                <div class="pl-4 flex items-center">
                    <a
                        class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                        href="#"
                    >
                        MYCI
                    </a>
                </div>
                <div class="block lg:hidden pr-4">
                    <button
                        id="nav-toggle"
                        class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                    >
                        <svg
                            class="fill-current h-6 w-6"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <title>Menu</title>
                            <path
                                d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"
                            />
                        </svg>
                    </button>
                </div>
                <div
                    class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                    id="nav-content"
                >
                    <ul
                        class="list-reset lg:flex justify-end flex-1 items-center"
                    >
                        <li class="mr-3">
                            <a
                                class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                                href="{{url('/register')}}"
                                >Register</a
                            >
                        </li>
                    </ul>
                    <a
                        id="navAction"
                        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                        href="{{url('/login')}}"
                    >
                        Login
                    </a>
                </div>
            </div>
            <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
        </nav>
        
        @yield('content')
        
        <!--Footer-->

        @php($footer = $footer ?? true)    
        @if($footer)
        <footer class="bg-white">
       
            <div class="container mx-auto px-8">
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="flex-1 mb-6 text-black">
                        <a
                            class="text-blue-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                            href="#"
                        >
                            MYCI
                        </a>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Links</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >FAQ</a
                                >
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Help</a
                                >
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Support</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Terms</a
                                >
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Privacy</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Social</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Facebook</a
                                >
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Linkedin</a
                                >
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Twitter</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Company</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Official Blog</a
                                >
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >About Us</a
                                >
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a
                                    href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500"
                                    >Contact</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        @endif
       
   
       
    </body>

     <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function () {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });
    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;
        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }
        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
    @yield('js')
</html>
