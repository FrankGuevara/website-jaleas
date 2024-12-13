<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>@yield('title') | {{ config('app.name') }} </title>
    @yield('scripts')
    @vite('resources/css/app.css')
    @yield('styles')
</head>

<body>
    <header>

        <div class=" overflow-hidden sm:hi">
            <div
                class="bg-white grayscale-0 {{ Route::is('index') ? 'fixed' : '' }} w-full z-10 border border-gray-300">
                <nav class=" font-semibold flex justify-between text-[18px] w-[90%] m-auto  relative py-3 z-1000">

                    <a href="{{ route('index') }}">
                        <img width="300px" height="40px" src="{{ asset('images/logo.jpeg') }}" alt="logo-image" />
                    </a>
                    <div class="flex">
                        <div class="my-auto p-2 hover:text-orange-500 hover:border-b-2 hover:border-b-orange-500"><a
                                href="{{ route('index') }}">Inicio</a></div>
                        <div class="my-auto p-2 hover:text-orange-500 hover:border-b-2 hover:border-b-orange-500"><a
                                href="{{ route('about') }}">Nosotros</a></div>
                        <div class="my-auto p-2 hover:text-orange-500 hover:border-b-2 hover:border-b-orange-500"><a
                                href="#">Productos</a></div>
                        <div class="my-auto p-2 hover:text-orange-500 hover:border-b-2 hover:border-b-orange-500"><a
                                href="#">Contactanos</a></div>

                    </div>

                </nav>
            </div>
            @yield('header-img')
        </div>
    </header>


    <main class="">
        @yield('main')
        <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20."
            class="float" target="_blank">
            <i class="lni lni-whatsapp my-float"></i>
        </a>
    </main>
    <footer class="bg-black w-full h-96 text-white">
        <div class="w-[70%] m-auto grid grid-cols-3 py-16">
            <div class="text-center w-[80%] mx-auto">
                <img src="{{ asset('images/footer-img.jpeg') }}" alt="">
            </div>
            <div class="flex justify-center">
                <div class="">
                    <div class="font-bold text-orange-500 text-[20px] text-center">SIGUENOS EN:</div>
                    <div class="grid grid-rows-2 gap-y-2 my-8">
                        <a href="/" class="font-semibold flex items-center"> <i
                                class="lni lni-facebook text-4xl pr-3"></i> Jaleas del Pino. SA</a>
                        <a href="/" class="font-semibold flex items-center"> <i
                                class="lni lni-instagram text-4xl pr-3"></i> Jaleas del Pino. SA</a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="">
                    <div class="font-bold text-orange-500 text-[20px] text-center">CONTACTENOS:</div>
                    <div class="grid grid-rows-3 gap-y-2 my-8 h-auto">
                        <a href="mailto:svjaleas    delpino@gmail.com" class="flex items-center">
                            <i aria-hidden="true" class="far fa-envelope text-3xl "></i>
                            <span class="pl-4 font-semibold"> svjaleasdelpino@gmail.com</span>
                        </a>
                        <a href="/" class="font-bold flex items-center">
                            <i class="fa fa-phone text-3xl"></i>
                            <span class="pl-4 font-semibold">+503 7512-3153</span>
                        </a>
                        <a href="/" class="font-bold flex items-center">
                            <i class="lni lni-whatsapp text-3xl"></i>
                            <span class="pl-4 font-semibold">+503 7512-3153</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="text-center">Jaleas del Pino S.A de C.V &copy; 2024 | Todos los derechos reservados.</div>
        </div>
    </footer>
</body>

@yield('js')



</html>
