<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME STITCH - Premium Online Tailor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-bg': '#E4DFD8',
                        'brand-black': '#0f0f0f',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #d6d3cd;
        }

        h1,
        h2,
        h3,
        .brand-font {
            font-family: 'Playfair Display', serif;
        }

        .minimal-input {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #0f0f0f;
            border-radius: 0;
            padding: 0.75rem 0;
        }

        .minimal-input:focus {
            outline: none;
            border-bottom-color: #666;
            box-shadow: none;
        }

        /* Hide scrollbar for side-scrolling galleries */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="text-brand-black antialiased pt-28">

    <nav class="bg-brand-bg py-4 md:py-4 px-6 fixed w-full z-50 top-0 transition-all border-b border-black/10">
        <div class="max-w-7xl mx-auto flex justify-between items-center relative">

            <a href="index.php" class="flex items-center">
                <img src="logo.png" alt="HOME STITCH" class="h-16 md:h-20 lg:h-24 w-auto object-contain mix-blend-multiply">
            </a>

            <div class="hidden md:flex space-x-8 text-sm font-semibold uppercase tracking-widest items-center">
                <a href="women.php"
                    class="hover:text-gray-500 transition duration-300 border-b-2 border-transparent hover:border-brand-black pb-1">Women</a>
                <a href="men.php"
                    class="hover:text-gray-500 transition duration-300 border-b-2 border-transparent hover:border-brand-black pb-1">Men</a>
                <a href="kids.php"
                    class="hover:text-gray-500 transition duration-300 border-b-2 border-transparent hover:border-brand-black pb-1">Kids</a>
                <a href="index.php#how-it-works" class="hover:text-gray-500 transition duration-300">Process</a>
                <a href="index.php#book"
                    class="bg-brand-black text-brand-bg px-6 py-2.5 rounded-full font-bold hover:bg-gray-800 transition duration-300">Book
                    Now</a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-brand-black hover:text-gray-600 focus:outline-none p-2">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <div id="mobile-menu"
                class="hidden absolute top-full left-[-1.5rem] right-[-1.5rem] mt-4 md:mt-6 bg-brand-bg border-t border-b border-black/10 shadow-xl overflow-hidden transition-all duration-300 md:hidden">
                <div
                    class="flex flex-col px-6 py-6 space-y-5 text-sm font-semibold uppercase tracking-widest text-center">
                    <a href="women.php" class="block hover:text-gray-500 transition duration-300">Women</a>
                    <a href="men.php" class="block hover:text-gray-500 transition duration-300">Men</a>
                    <a href="kids.php" class="block hover:text-gray-500 transition duration-300">Kids</a>
                    <a href="index.php#how-it-works"
                        class="block hover:text-gray-500 transition duration-300">Process</a>
                    <a href="index.php#book"
                        class="inline-block bg-brand-black text-brand-bg px-6 py-4 rounded-full font-bold hover:bg-gray-800 transition duration-300 mt-4 w-full">Book
                        Now</a>
                </div>
            </div>

        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            btn.addEventListener('click', () => {
                // Toggle the 'hidden' class to show/hide the menu
                menu.classList.toggle('hidden');
            });

            // Optional: Close the menu if a user clicks a link inside it
            const mobileLinks = menu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                });
            });
        });
    </script>