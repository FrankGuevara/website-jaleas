@extends('public.layout')

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .owl-prev:hover, .owl-next:hover {
              background-color: transparent !important; 
            }
          </style>
          
@section('title')
    Inicio
@endsection


@section('header-img')
    <div class="header-image h-screen">
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
    animate__animated  animate__backInUp  relative z-[2] p-5">

            “ Somos una distribuidora especializada en ofrecer una amplia gama de productos escenciales para la
            industria
            alimentaria y gastronomica, desde harinas de alta calidad hasta grasas, mantecas, azucar, granos y
            aceites
            selectos, levaduras, polvos para hornear. Por lo que nos comprometemos a brindarle ingredientes que
            garanticen el éxito en cada preparacion culinaria. ”
        </div>
    </div>
@endsection
@section('main')
    <div class="suppliers w-[85%] mx-auto my-[8%] font-bold">
        <div class="text-center leading-none border-b-[2px] pb-2 border-green-800 ">
            <div class="text-[18px] p-0 m-0">CONOZCA NUESTROS</div>
            <div class="text-green-800 text-[45px] m-0">PRODUCTOS</div>
        </div>
    </div>
    <div class="mt-5 p-10 w-full h-[60%] bg-yellow-300 grid grid-cols-[60%,40%]">
        <div
            class="font-semibold w-[60%] text-center m-auto text-[26px] uppercase animate-on-scroll-left  animate__animated z-0">
            Descubra la frescura y calidad de nuestras jaleas en presentaciones <span
                class="text-green-800 font-extrabold">caja 48 lbs</span> y <span
                class="text-green-800 font-extrabold">cubeta</span>. Elaboradas
            con los mejores ingredientes, ideales para repostería y postres.
            <div class="my-6">
                <a href="#" class="bg-black px-3 py-2 w-auto text-white text-[15px] rounded-lg">Ver
                    detalles</a>
            </div>
        </div>
        <div
            class="overflow-hidden w-full    h-full flex justify-center items-center animate-on-scroll-right  animate__animated z-0">
            <img src="{{ asset('/images/jalea.png') }}" alt="jaleas" class="object-contain w-[80%] h-[100%]">
        </div>
    </div>



    <div class=" w-full h-[60%]  grid grid-cols-[40%,60%]">
        <div class="overflow-hidden h-full flex justify-center items-center animate-on-scroll-right  animate__animated z-0">
            <img src="{{ asset('/images/super.png') }}" class="object-contain w-[80%] h-[80%]" alt="harinas">
        </div>
        <div
            class="font-semibold w-[60%] text-center m-auto text-[26px] uppercase animate-on-scroll-left  animate__animated z-0">
            Adquiera nuestras selectas harinas super en presentaciones de <span
                class="text-green-800 font-extrabold">arroba</span> y <span
                class="text-green-800 font-extrabold">quintal</span>, para pupusas y panaderia
            <div class="my-6 text-[15px]">
                <a href="#" class="bg-yellow-300 px-3 py-2 w-auto text-black  rounded-lg">Ver
                    detalles</a>
            </div>
        </div>

    </div>

    <div class=" w-[85%] mx-auto my-[8%] font-bold">
        <div class="text-center leading-none border-b-[2px] pb-2 border-green-800  ">
            <div class="text-[18px] p-0 m-0">CONOZCA NUESTRAS</div>
            <div class="text-green-800 text-[45px] m-0">CATEGORIAS</div>
        </div>
        <div class="mt-5 p-10 w-full">
            <div class="owl-carousel owl-theme mt-10">
                <!-- Item 1 -->
                <div class="item h-80 flex flex-col justify-between">
                    <img 
                        src="{{ asset('/images/index/categories/aceites.png') }}" 
                        alt="Aceites" 
                        class="w-full h-[85%] rounded-lg shadow-lg object-contain">
                    <div class="text-center font-semibold mt-2 text-gray-800">
                        Aceites
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="item h-80 flex flex-col justify-between">
                    <img 
                        src="{{ asset('/images/index/categories/azucar.png') }}" 
                        alt="Azucares" 
                        class="w-full h-[85%] rounded-lg shadow-lg object-contain">
                    <div class="text-center font-semibold mt-2 text-gray-800">
                        Azucares
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="item h-80 flex flex-col justify-between">
                    <img 
                        src="{{ asset('/images/index/categories/mantecas.png') }}" 
                        alt="Mantecas" 
                        class="w-full h-[85%] rounded-lg shadow-lg object-contain">
                    <div class="text-center font-semibold mt-2 text-gray-800">
                        Mantecas
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="item h-80 flex flex-col justify-between">
                    <img 
                        src="{{ asset('/images/index/categories/mascotas.png') }}" 
                        alt="Mascotas" 
                        class="w-full h-[85%] rounded-lg shadow-lg object-contain">
                    <div class="text-center font-semibold mt-2 text-gray-800">
                       Mascotas
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="item h-80 flex flex-col justify-between">
                    <img 
                        src="{{ asset('/images/index/categories/snacks.png') }}" 
                        alt="Snacks" 
                        class="w-full h-[85%] rounded-lg shadow-lg object-cover">
                    <div class="text-center font-semibold mt-2 text-gray-800">
                        Snacks
                    </div>
                </div>
            </div>
        </div>
        
    </div>

   

    <div class="mx-auto my-[5%] font-bold">
        <div class="w-[85%] m-auto leading-none border-b-[2px] pb-2 border-green-800">
            <div class="text-[18px] p-0 m-0 text-center">DESCUBRA NUESTROS PUNTOS DE</div>
            <div class="text-green-800 text-[45px] m-0 text-center">PROCESAMIENTO | DISTRIBUCIÓN</div>
        </div>
        <div class="mt-[7%] h-[80vh] bg-black">
            <div class="grid grid-cols-3 w-[90%] m-auto gap-4">
                <!-- Planta Jaleas -->
                <div class="flex flex-col justify-center items-center h-[80vh] text-center p-4 text-white  ">
                    <h3 class="text-xl font-bold text-orange-500 mb-2">PLANTA JALEAS</h3>
                    <p class="text-sm  mb-4">KM 10 1/2 A UN COSTADO DE VIDRERÍA VENECIA, SAN MARTÍN, SAN SALVADOR</p>
                    <img src="{{ asset('images/index/planta-jaleas.jpg') }}" alt="planta jaleas"
                        class="w-[350px] h-[400px] object-cover rounded-md">
                </div>
                <!-- Bodega Central -->
                <div class="flex flex-col justify-center items-center h-[80vh] text-center p-4 bg-white ">
                    <h3 class="text-lg font-bold text-orange-500 mb-2">BODEGA CENTRAL</h3>
                    <p class="text-sm  mb-4">KM 10 1/2 A UN COSTADO DE VIDRERÍA VENECIA, SAN MARTÍN, SAN SALVADOR</p>
                    <img src="{{ asset('images/index/bodega-central.jpg') }}" alt="bodega central"
                        class="w-[350px] h-[400px] object-cover rounded-md">
                </div>
                <!-- Planta Molinos -->
                <div class="flex flex-col justify-center items-center h-[80vh] text-center p-4 text-white">
                    <h3 class="text-lg font-bold text-orange-500 mb-2">PLANTA MOLINOS</h3>
                    <p class="text-sm  mb-4">KM 10 1/2 A UN COSTADO DE VIDRERÍA VENECIA, SAN MARTÍN, SAN SALVADOR</p>
                    <img src="{{ asset('images/index/planta-molinos.png') }}" alt="molinos"
                        class="w-[350px] h-[400px] object-cover rounded-md">
                </div>
            </div>

        </div>
    </div>


    <div class=" w-[85%] mx-auto my-[5%] font-bold">
        <div class="text-center leading-none border-b-[2px] pb-2 border-green-800  ">
            <div class="text-[18px] p-0 m-0">NUESTROS PRINCIPALES</div>
            <div class="text-green-800 text-[45px] m-0">PROVEEDORES</div>
        </div>
        <div class=" mt-[7%]">
            <div class="grid grid-cols-4 w-[80%] m-auto ">
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
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elementsLeft = document.querySelectorAll('.animate-on-scroll-left');
            const elementsRight = document.querySelectorAll('.animate-on-scroll-right');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0'); // Hacer visibl
                        if (entry.target.classList.contains('animate-on-scroll-left')) {
                            entry.target.classList.add(
                                'animate__fadeInLeft');
                        } else if (entry.target.classList.contains('animate-on-scroll-right')) {
                            entry.target.classList.add(
                                'animate__fadeInRight');
                        }
                        observer.unobserve(entry.target);
                    }
                });
            });

            elementsLeft.forEach(el => observer.observe(el));
            elementsRight.forEach(el => observer.observe(el));



        });
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 4, 
                margin: 20,
                autoplay: true, 
                autoplayTimeout: 3000, 
                autoplayHoverPause: false,
                loop: true, 
                nav: true, 
                responsive: { 
                    0: {
                        items: 1
                    },
                    480: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    1024: {
                        items: 4
                    }
                },
                navText: [
                    '<button class="text-white  font-extrabold bg-gray-800 hover:bg-orange-600 py-2 px-5 my-5 rounded-full">&lt;</button>',
                    '<button class="text-white font-extrabold bg-gray-800 hover:bg-orange-600 py-2 px-5 my-5 rounded-full">&gt;</button>'
                ]
            });
        });
    </script>
@endsection
