<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <header>

        <div class="header-image h-screen overflow-hidden sm:hi">
            <div class="bg-white grayscale-0 fixed w-full z-10 border border-gray-300">
                <nav class=" font-semibold flex justify-between text-[18px] w-[90%] m-auto  relative py-3 z-1000">

                    <a href="/">
                        <img width="300px" height="40px" src="{{ asset('images/logo.jpeg') }}" alt="logo-image" />
                    </a>
                    <div class="flex">
                        <div class="my-auto p-2 hover:text-orange-500"><a href="#">Inicio</a></div>
                        <div class="my-auto p-2 hover:text-orange-500"><a href="#">Nosotros</a></div>
                        <div class="my-auto p-2 hover:text-orange-500"><a href="#">Productos</a></div>
                        <div class="my-auto p-2 hover:text-orange-500"><a href="#">Contactanos</a></div>
                    </div>

                </nav>
            </div>
            <div class="pt-[9%] ">
                <div class="text-center text-2xl font-extrabold animate__animated animate__backInLeft z-0">
                    LLEVANDO PRODUCTOS DE LA MÁS ALTA CALIDAD
                </div>
                <div class=" text-center text-[48px] font-extrabold animate__animated animate__backInRight z-0   ">
                    HASTA LA COMODIDAD DE TU NEGOCIO
                </div>
            </div>
            <div
                class="mt-[20%] text-white w-[60%] text-[20px] mx-auto font-semibold text-center
            animate__animated  animate__backInUp header-text">
                “ Somos una distribuidora especializada en ofrecer una amplia gama de productos escenciales para la
                industria
                alimentaria y gastronomica, desde harinas de alta calidad hasta grasas, mantecas, azucar, granos y
                aceites
                selectos, levaduras, polvos para hornear. Por lo que nos comprometemos a brindarle ingredientes que
                garanticen el éxito en cada preparacion culinaria. ”
            </div>
        </div>
    </header>


    <main>

        <div class="suppliers w-[85%] mx-auto my-[8%] font-bold">
            <div class="text-center leading-none border-b-[2px] pb-2 border-green-800 ">
                <div class="text-[18px] p-0 m-0">CONOZCA NUESTROS</div>
                <div class="text-green-800 text-[45px] m-0">PRODUCTOS</div>
            </div>
        </div>
        <div class="mt-5 p-10 w-full h-[30%] bg-yellow-300 grid grid-cols-[60%,40%]">
            <div
                class="font-semibold w-[60%] text-center m-auto text-[26px] uppercase animate-on-scroll-left  animate__animated z-0">
                Descubra la frescura y calidad de nuestras jaleas en presentaciones <span class="text-green-800 font-extrabold">caja 48 lbs</span> y <span class="text-green-800 font-extrabold">cubeta</span>. Elaboradas
                con los mejores ingredientes, ideales para repostería y postres.
                <div class="my-6">
                    <a href="#" class="bg-black px-3 py-2 w-auto text-white text-[15px] rounded-lg">Ver
                        detalles</a>
                </div>
            </div>
            <div
                class="overflow-hidden w-full    h-full flex justify-center items-center animate-on-scroll-right  animate__animated z-0">
                <img src="{{ asset('/images/jalea1.png') }}" class="object-cover w-[80%] h-[100%]" alt="">
            </div>
        </div>

        <div class=" w-full h-[30%]  grid grid-cols-[40%,60%]">
            <div
                class="overflow-hidden h-full flex justify-center items-center animate-on-scroll-right  animate__animated z-0">
                <img src="{{ asset('/images/super.png') }}" class="object-cover h-[80%]" alt="">
            </div>
            <div
                class="font-semibold w-[60%] text-center m-auto text-[26px] uppercase animate-on-scroll-left  animate__animated z-0">
                Adquiera nuestras selectas harinas  super en presentaciones de  <span class="text-green-800 font-extrabold">arroba</span>  y <span class="text-green-800 font-extrabold">quintal</span>, para pupusas y panaderia
                <div class="my-6 text-[15px]">
                    <a href="#" class="bg-yellow-300 px-3 py-2 w-auto text-black  rounded-lg">Ver
                        detalles</a>
                </div>
            </div>

        </div>

        <div class=" w-[85%] mx-auto my-[5%] font-bold">
            <div class="text-center leading-none border-b-[2px] pb-2 border-green-800  ">
                <div class="text-[18px] p-0 m-0">NUESTROS PRINCIPALES</div>
                <div class="text-green-800 text-[45px] m-0">PROVEEDORES</div>
            </div>
            <div class="cards mt-[7%]">
                <div class="grid grid-cols-4">
                    <div class="flex justify-center items-center">
                        <div class="">
                            <img src="{{ asset('images/suppliers/agropal.png') }}" alt="copeagropal">
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="">
                            <img src="{{ asset('images/suppliers/disali.jpeg') }}" alt="agropal">
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="">
                            <img src="{{ asset('images/suppliers/logomolinos.png') }}" alt="molinos">
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="">
                            <img src="{{ asset('images/suppliers/levuni.jpeg') }}" alt="levuni">
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </main>
    <footer class="bg-black w-full h-96 text-white">
        <div class="w-[80%] m-auto grid grid-cols-3">
            <div class="text-center">
                test
            </div>
            <div class="text-center">
                test
            </div>
            <div class="text-center">
                test
            </div>
        </div>
    </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const elementsLeft = document.querySelectorAll('.animate-on-scroll-left');
        const elementsRight = document.querySelectorAll('.animate-on-scroll-right');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0'); // Hacer visible
                    if (entry.target.classList.contains('animate-on-scroll-left')) {
                        entry.target.classList.add(
                            'animate__fadeInLeft'); // Animación desde la izquierda
                    } else if (entry.target.classList.contains('animate-on-scroll-right')) {
                        entry.target.classList.add(
                            'animate__fadeInRight'); // Animación desde la derecha
                    }
                    observer.unobserve(entry.target); // Detener la observación
                }
            });
        });

        elementsLeft.forEach(el => observer.observe(el));
        elementsRight.forEach(el => observer.observe(el));
    });
</script>


</html>
