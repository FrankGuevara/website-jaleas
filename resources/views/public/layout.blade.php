<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>@yield('title') | {{ config('app.name') }} </title>

    <meta name="description"
        content="Distribuidora del Pino en El Salvador: Especialistas en jaleas, harinas y más. Productos de alta calidad para tu hogar y negocio.">
    <meta name="keywords"
        content="jaleas del pino, distribuidora del pino, distribuidoras en El Salvador, distribuidora de harinas, productos alimenticios, harinas en El Salvador">
    <meta name="author" content="Distribuidora del Pino">
    <meta name="robots" content="index, follow">

    @yield('scripts')
    @vite('resources/css/app.css')
    @yield('styles')
</head>

<body>
    <header>

        <div class=" overflow-hidden ">
            <div
                class="bg-white grayscale-0 {{ Route::is('index') ? 'fixed' : '' }} w-full z-50 border border-gray-300">
                <nav class="font-semibold w-[90%] m-auto relative py-3 z-1000">
                    <div class="flex justify-between items-center">
                        <a href="{{ route('index') }}">
                            <img width="300px" height="40px" src="{{ asset('images/logo.jpeg') }}" alt="logo-jaleas"
                                class="max-w-[200px] lg:max-w-[300px]" />
                        </a>

                        <button id="menuBtn" class="block lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        <div class="hidden lg:flex font-bold">
                            <div class="my-auto p-2 hover:text-orange-500 hover:border-b-2 hover:border-b-orange-500">
                                <a href="{{ route('index') }}">Inicio</a>
                            </div>
                            <div class="my-auto p-2 hover:text-orange-500 hover:border-b-2 hover:border-b-orange-500">
                                <a href="{{ route('about') }}">Nosotros</a>
                            </div>

                            <!-- Menú desplegable -->
                            <div class="relative my-auto p-2 hover:text-orange-500">
                                <button id="productosBtn"
                                    class="flex items-center hover:border-b-2 hover:border-b-orange-500">
                                    Productos
                                    <svg id="productosIcon" xmlns="http://www.w3.org/2000/svg"
                                        class="ml-2 h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div id="productosMenu"
                                    class="hidden absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg">
                                    <a href="#" class="block px-4 py-2 hover:bg-orange-100">Harinas</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-orange-100">Mantecas</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-orange-100">Aceites</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-orange-100">Alimento para
                                        perros</a>
                                </div>
                            </div>

                            <div class="my-auto p-2 hover:text-orange-500 hover:border-b-2 hover:border-b-orange-500">
                                <a href="{{ route('contact') }}">Contáctanos</a>
                            </div>
                        </div>
                    </div>

                    <!-- Menú móvil -->
                    <div id="mobileMenu" class="hidden lg:hidden w-full">
                        <div class="flex flex-col mt-4">
                            <a href="{{ route('index') }}" class="py-2 hover:text-orange-500">Inicio</a>
                            <a href="{{ route('about') }}" class="py-2 hover:text-orange-500">Nosotros</a>

                            <!-- Menú desplegable en móvil -->
                            <div>
                                <button id="productosBtnMobile"
                                    class="py-2 w-full flex items-center text-left hover:text-orange-500">
                                    Productos
                                    <svg id="productosIconMobile" xmlns="http://www.w3.org/2000/svg"
                                        class="ml-2 h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div id="productosMenuMobile" class="hidden ml-4">
                                    <a href="#" class="block py-2 hover:text-orange-500">Harinas</a>
                                    <a href="#" class="block py-2 hover:text-orange-500">Mantecas</a>
                                    <a href="#" class="block py-2 hover:text-orange-500">Aceites</a>
                                    <a href="#" class="block py-2 hover:text-orange-500">Alimento para perros</a>
                                </div>
                            </div>

                            <a href="{{ route('contact') }}" class="py-2 hover:text-orange-500">Contáctanos</a>
                        </div>
                    </div>
                </nav>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const menuBtn = document.getElementById('menuBtn');
                    const mobileMenu = document.getElementById('mobileMenu');
                    const productosBtn = document.getElementById('productosBtn');
                    const productosMenu = document.getElementById('productosMenu');
                    const productosIcon = document.getElementById('productosIcon');
                    const productosBtnMobile = document.getElementById('productosBtnMobile');
                    const productosMenuMobile = document.getElementById('productosMenuMobile');
                    const productosIconMobile = document.getElementById('productosIconMobile');

                    // Menú hamburguesa para móvil
                    menuBtn.addEventListener('click', function() {
                        mobileMenu.classList.toggle('hidden');
                    });

                    // Menú desplegable en desktop con icono rotatorio
                    productosBtn.addEventListener('click', function(event) {
                        event.stopPropagation();
                        productosMenu.classList.toggle('hidden');
                        productosIcon.classList.toggle('rotate-180');
                    });

                    // Menú desplegable en móvil con icono rotatorio
                    productosBtnMobile.addEventListener('click', function() {
                        productosMenuMobile.classList.toggle('hidden');
                        productosIconMobile.classList.toggle('rotate-180');
                    });

                    // Cierra el menú si se hace clic fuera de él
                    document.addEventListener('click', function(event) {
                        if (!productosMenu.contains(event.target) && event.target !== productosBtn) {
                            productosMenu.classList.add('hidden');
                            productosIcon.classList.remove('rotate-180');
                        }
                    });
                });
            </script>

            <div class="header-image">
                @yield('header-img')
            </div>
        </div>
    </header>


    <main class="overflow-hidden">
        @yield('main')
        <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20."
            class="float" target="_blank">
            <i class="lni lni-whatsapp my-float"></i>
        </a>

    </main>
    <footer class="bg-black w-full text-white overflow-hidden mt-40">
        <!-- Contenedor principal -->
        <div class="w-[90%] lg:w-[70%] m-auto grid grid-cols-1 md:grid-cols-3 gap-8 py-12">
            <!-- Primera columna: Logo y eslogan -->
            <div class="text-center w-full md:w-[80%] mx-auto flex flex-col items-center">
                <div class="w-60 h-32 mb-4">
                    <img src="{{ asset('images/footer-img.jpeg') }}" alt="Logo"
                        class="w-full h-full object-contain">
                </div>
                <div class="font-semibold text-[15px] text-center">
                    "Vendemos servicios y distribuimos calidad"
                </div>
            </div>

            <!-- Segunda columna: Redes sociales -->
            <div class="flex justify-center">
                <div class="text-center">
                    <div class="font-bold text-orange-500 text-[20px]">SIGUENOS EN:</div>
                    <div class="grid grid-cols-1 gap-y-4 my-8">
                        <a href="https://www.facebook.com/p/Jaleas-del-pino-SV-61560104366460/"
                            class="font-semibold flex items-center justify-center">
                            <i class="lni lni-facebook text-3xl pr-3"></i>
                            Jaleas del Pino. SA
                        </a>
                        <a href="https://www.instagram.com/jaleasdelpino.sv?igsh=YzljYTk1ODg3Zg=="
                            class="font-semibold flex items-center justify-center">
                            <i class="lni lni-instagram text-3xl pr-3"></i>
                            Jaleas del Pino. SA
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tercera columna: Contacto -->
            <div class="flex justify-center">
                <div class="text-center">
                    <div class="font-bold text-orange-500 text-[20px]">CONTACTENOS:</div>
                    <div class="grid grid-cols-1 gap-y-4 my-8">
                        <a href="mailto:svjaleasdelpino@gmail.com" class="flex items-center justify-center">
                            <i class="far fa-envelope text-2xl"></i>
                            <span class="pl-4 font-semibold">svjaleasdelpino@gmail.com</span>
                        </a>
                        <div class="font-bold flex items-center justify-center">
                            <i class="lni lni-telephone-3 text-3xl"></i>
                            <span class="pl-4 font-semibold">+503 7512-3153</span>
                        </div>
                        <div class="font-bold flex items-center justify-center">
                            <i class="lni lni-whatsapp text-2xl"></i>
                            <span class="pl-4 font-semibold">+503 7512-3153</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Derechos de autor -->
        <div class="w-full pb-4">
            <div class="text-center text-sm md:text-base">
                Jaleas del Pino S.A de C.V &copy; 2025 | Todos los derechos reservados.
            </div>
        </div>
    </footer>
</body>

@yield('js')



</html>
