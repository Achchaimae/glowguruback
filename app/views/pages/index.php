<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking the css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- linking font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- linking tailwind css -->
    <link href="<?php echo URLROOT; ?>/dist/output.css" rel="stylesheet">
    <!-- link awsome font -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body class="bg-cyan-100">
    <main>
        <section class="flex flex-row justify-between m-4 sticky">
            <div class="my-2">
                <img src="<?= URLROOT; ?>/img/logo.png" alt="logo" class=" w-24">
            </div>
            <div class="bg-white flex flex-row w-fit px-4  py-2 justify-between rounded-3xl gap-4 text-center">
                <div class=" bg-cyan-100 px-4 w-24 py-2 rounded-3xl text-">
                    <a href="#">Home</a>
                </div>
                <div class=" hover:bg-cyan-100 px-4 w-24 py-2 rounded-3xl ">
                    About
                </div>
                <div class=" hover:bg-cyan-100 px-4 w-24 py-2 rounded-3xl ">
                    <a href="<?= URLROOT; ?>/pages/product">Products</a>
                </div>
                <div class=" hover:bg-cyan-100 px-4 w-24 py-2 rounded-3xl ">
                    Blog
                </div>
            </div>
            <div class="bg-white  p-2 rounded-full">
                <button class="bg-cyan-100  p-2 rounded-full">
                    &nbsp;<a href="<?= URLROOT; ?>/autho/login"> <i class="fa-solid fa-user text-cyan-700"></i></a>&nbsp;
                </button>
            </div>
        </section>
        <section class="flex flex-row m-4 justify-around">
            <div>
                <div class=" text-9xl text-[#FF4BE2] font-['Monoton'] m-5">
                    GET Your <br>
                    Natural <br>
                    Skin
                </div>
                <div class=" text-gray-500 font-medium font-['Playfair_Display'] mx-2">
                    &nbsp; "Creativity is your best makeup skill, don’t be afraid to experiment."
                </div>
            </div>
            <div class=" w-fit relative before:content-[''] before:absolute before:bg-pink-600 before:w-1/2 before:h-1/2 before:rounded-full before:-left-10 before:-bottom-10 before:-z-10 after:content-[''] after:absolute after:bg-pink-800 after:w-1/2 after:h-1/2 after:rounded-full after:-right-10 after:-top-5 after:-z-10">
                <img src="<?= URLROOT; ?>/img/slide.png" class=" w-72  rounded-full " alt="model">
            </div>

        </section>
        <!-- top products section  -->
        <section>
            <div class="text-4xl text-center font-['Lily_Script_One']">
                Our Products
            </div class="flex flex-row">
            <!-- all top product -->
            <div class="flex flex-row  justify-around ">
                <!-- one product -->
                <div class="containerj flex justify-center w-3/12 hover:cursor-pointer ">
                    <div class="max-w-sm py-4">
                        <div class="bg-white shadow-lg hover:shadow-xl transition duration-500 rounded-lg group">
                            <div class="relative">
                                <img class="rounded-t-lg " src="<?= URLROOT; ?>/img/products/p1.png" alt="" />
                                <div class="absolute inset-0 grid place-content-center  bg-black bg-opacity-25 h-full w-full opacity-0 group-hover:opacity-100 transition duration-300">
                                    <a class="mt-6 py-2 px-4 bg-cyan-700   text-white font-bold rounded-lg shadow-md  hover:shadow-lg " href="<?= URLROOT; ?>/pages/product">Discover</a>
                                </div>
                            </div>
                            <div class=" py-6 px-8 rounded-lg bg-white">
                                <h1 class="text-wh font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">lorem ipsum</h1>
                                <p class="text-gray-700 tracking-wide text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- one product -->
                <div class="containerj flex justify-center w-3/12 hover:cursor-pointer ">
                    <div class="max-w-sm py-4">
                        <div class="bg-white shadow-lg hover:shadow-xl transition duration-500 rounded-lg group">
                            <div class="relative">
                                <img class="rounded-t-lg " src="<?= URLROOT; ?>/img/products/p2.png" alt="" />
                                <div class="absolute inset-0 grid place-content-center  bg-black bg-opacity-25 h-full w-full opacity-0 group-hover:opacity-100 transition duration-300">
                                    <a class="mt-6 py-2 px-4 bg-cyan-700   text-white font-bold rounded-lg shadow-md  hover:shadow-lg " href="<?= URLROOT; ?>/pages/product">Discover</a>
                                </div>
                            </div>
                            <div class="py-6 px-8 rounded-lg bg-white">
                                <h1 class="text-wh font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">lorem ipsum</h1>
                                <p class="text-gray-700 tracking-wide text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- one product -->
                <div class="containerj flex justify-center w-3/12 hover:cursor-pointer ">
                    <div class="max-w-sm my-4">
                        <div class="bg-white shadow-lg hover:shadow-xl transition duration-500 rounded-lg group">
                            <div class="relative">
                                <img class="rounded-t-lg " src="<?= URLROOT; ?>/img/products/p3.png" alt="" />
                                <div class="absolute inset-0 grid place-content-center  bg-black  bg-opacity-25 h-full w-full opacity-0 group-hover:opacity-100 transition duration-300">
                                    <a class="mt-6 py-2 px-4 bg-cyan-700   text-white font-bold rounded-lg shadow-md  hover:shadow-lg " href="<?= URLROOT; ?>/pages/product">Discover</a>
                                </div>
                            </div>
                            <div class="py-6 px-8 rounded-lg bg-white">
                                <h1 class="text-wh font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">lorem ipsum</h1>
                                <p class="text-gray-700 tracking-wide text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="text-4xl text-center font-['Lily_Script_One']">
                Our Blogs
            </div>
            <div class="flex flex-row justify-around">
                <div class="w-96">
                    <!-- component -->
                    <div class="mx-auto px-4 py-8 max-w-xl my-4">
                        <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide">
                            <div class="md:flex-shrink-0">
                                <img src="<?= URLROOT; ?>/img/products/blog.png" alt="mountains" class="w-full h-64 rounded-lg rounded-b-none ">
                            </div>
                            <div class="px-4 py-2 mt-2">
                                <h2 class="font-bold text-2xl text-gray-800 tracking-normal"> Healthy MakeUp</h2>
                                <p class="text-sm text-gray-700 px-2 mr-1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit....
                                </p>
                                <div class="flex items-center justify-between mt-2 mx-6">
                                    <a href="Blog.html" class="bg-cyan-700 p-2 rounded text-white text-xs -ml-3">Show More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96">
                    <!-- component -->
                    <div class="mx-auto px-4 py-8 max-w-xl my-4">
                        <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide">
                            <div class="md:flex-shrink-0">
                                <img src="<?= URLROOT; ?>/img/products/blog.png" alt="mountains" class="w-full h-64 rounded-lg rounded-b-none ">
                            </div>
                            <div class="px-4 py-2 mt-2">
                                <h2 class="font-bold text-2xl text-gray-800 tracking-normal"> Healthy MakeUp</h2>
                                <p class="text-sm text-gray-700 px-2 mr-1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit....
                                </p>
                                <div class="flex items-center justify-between mt-2 mx-6">
                                    <a href="Blog.html" class="bg-cyan-700 p-2 rounded text-white text-xs -ml-3 ">Show More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96">
                    <!-- component -->
                    <div class="mx-auto px-4 py-8 max-w-xl my-4">
                        <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide">
                            <div class="md:flex-shrink-0">
                                <img src="<?= URLROOT; ?>/img/products/blog.png" alt="mountains" class="w-full h-64 rounded-lg rounded-b-none ">
                            </div>
                            <div class="px-4 py-2 mt-2">
                                <h2 class="font-bold text-2xl text-gray-800 tracking-normal"> Healthy MakeUp</h2>
                                <p class="text-sm text-gray-700 px-2 mr-1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit....
                                </p>
                                <div class="flex items-center justify-between mt-2 mx-6">
                                    <a href="Blog.html" class="bg-cyan-700 p-2 rounded text-white text-xs -ml-3 ">Show More</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer section -->
        <section class="mt-4">
            <footer aria-label="Site Footer" class="bg-white">
                <div class="max-w-screen-xl px-4 py-16 mx-auto space-y-8 sm:px-6 lg:space-y-16 lg:px-8">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div>
                            <img src="<?= URLROOT; ?>/img/logo.png" alt="logo">
                        </div>

                        <ul class="flex justify-start gap-6 mt-8 sm:mt-0 sm:justify-end">
                            <li>
                                <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">Facebook</span>

                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">Instagram</span>

                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">GitHub</span>

                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">Dribbble</span>

                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="grid grid-cols-1 gap-8 pt-8 border-t border-gray-100 sm:grid-cols-2 lg:grid-cols-4 lg:pt-16">
                        <div>
                            <p class="font-medium text-gray-900">Services</p>

                            <nav aria-label="Footer Navigation - Services" class="mt-6">
                                <ul class="space-y-4 text-sm">
                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            1on1 Coaching
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Company Review
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Accounts Review
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            HR Consulting
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            SEO Optimisation
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div>
                            <p class="font-medium text-gray-900">Company</p>

                            <nav aria-label="Footer Navigation - Company" class="mt-6">
                                <ul class="space-y-4 text-sm">
                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            About
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Meet the Team
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Accounts Review
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div>
                            <p class="font-medium text-gray-900">Helpful Links</p>

                            <nav aria-label="Footer Navigation - Company" class="mt-6">
                                <ul class="space-y-4 text-sm">
                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Contact
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            FAQs
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Live Chat
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div>
                            <p class="font-medium text-gray-900">Legal</p>

                            <nav aria-label="Footer Navigation - Legal" class="mt-6">
                                <ul class="space-y-4 text-sm">
                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Accessibility
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Returns Policy
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Refund Policy
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-gray-700 transition hover:opacity-75">
                                            Hiring Statistics
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <p class="text-xs text-gray-500">
                        &copy; 2023. Achchaimae Khalaf. All rights reserved.
                    </p>
                </div>
            </footer>

        </section>
    </main>
</body>

</html>