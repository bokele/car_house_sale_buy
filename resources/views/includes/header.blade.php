<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
                href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation">Tailwind Starter
                Kit</a><button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button" onclick="toggleNavbar('example-collapse-navbar')">
                <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
            id="example-collapse-navbar">
            @if (Route::has('login'))
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="{{route('boutique')}}">Boutique</a>
                </li>
                {{-- <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo">Services</a>
                    </li> --}}
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#pablo">Contact</a>
                </li>
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#pablo">About Us</a>
                </li>
                @auth
                <li class="flex items-center">
                    <a href="{{ url('/dashboard') }}"
                        class="text-teal-500 bg-transparent border border-solid border-teal-500 hover:bg-teal-500 hover:text-white active:bg-teal-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="button" style="transition: all .15s ease">Dashboard</a></li>
                @livewire('navigation-dropdown')
                @else
                <li class="flex items-center">
                    <a href="{{ route('login') }}"
                        class="text-teal-500 bg-transparent border border-solid border-teal-500 hover:bg-teal-500 hover:text-white active:bg-teal-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="button" style="transition: all .15s ease">
                        <i class="fa fa-sign-in-alt"></i>
                        &nbsp;Login


                    </a>
                </li>
                @if (Route::has('register'))
                <li class="flex items-center">
                    <a href="{{ route('register') }}"
                        class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                        type="button" style="transition: all .15s ease">

                        <i class="fa fa-sign-in-alt"></i>&nbsp;Sign up
                    </a>
                </li>
                @endif
                @endauth
            </ul>
            @endif
        </div>
    </div>
</nav>
