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
        .owl-prev:hover,
        .owl-next:hover {
            background-color: transparent !important;
        }
    </style>

@section('title')
    Inicio
@endsection


@section('header-img')
    <div class="h-screen flex flex-col justify-center items-center text-center relative">
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div>

        <div class="max-w-4xl mx-auto space-y-6 relative z-20 text-white px-4">
            <div class="text-3xl md:text-5xl lg:text-6xl font-extrabold space-y-4">
                <div class="opacity-0 animate__animated animate-on-scroll-left">
                    LLEVANDO PRODUCTOS
                </div>
                <div class="text-green-400 opacity-0 animate__animated animate-on-scroll-left">
                    DE LA MÁS ALTA CALIDAD
                </div>
            </div>
            <div class="text-3xl md:text-5xl lg:text-6xl font-extrabold space-y-4">
                <div class="opacity-0 animate__animated animate-on-scroll-left">
                    HASTA LA COMODIDAD
                </div>
                <div class="text-green-400 opacity-0 animate__animated animate-on-scroll-left">
                    DE TU NEGOCIO
                </div>
            </div>

            <div
                class="text-lg md:text-xl lg:text-2xl max-w-2xl mx-auto mt-8 italic animate__animated animate-on-scroll-right">
                " Somos una distribuidora líder en insumos esenciales para la industria alimentaria y gastronómica.
                Ofrecemos harinas premium, grasas, azúcares, granos, aceites, levaduras y más. Ingredientes de calidad para
                garantizar el éxito de cada creación culinaria. "
            </div>
        </div>
    </div>

@endsection
@section('main')
    <div class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <p class="text-sm text-gray-600 uppercase tracking-wide mb-2">CONOZCA NUESTROS</p>
            <h2 class="text-4xl md:text-5xl font-extrabold text-green-800">PRODUCTOS</h2>
        </div>

        <!-- Jaleas Section -->
        <div class="grid md:grid-cols-2 gap-10 mb-16 items-center bg-yellow-50 rounded-xl p-8 shadow-lg ">
            <div class="order-2 md:order-1 text-center md:text-left animate__animated animate-on-scroll-left">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 uppercase">
                    Jaleas Premium
                </h3>
                <p class="text-xl text-gray-700 mb-6">
                    Descubra la frescura y calidad de nuestras jaleas en presentaciones
                    <span class="text-green-800 font-extrabold">caja 48 lbs</span> y
                    <span class="text-green-800 font-extrabold">cubeta</span>.
                    Elaboradas con los mejores ingredientes, ideales para repostería y postres.
                </p>
                <a href="#"
                    class="inline-block bg-black text-white px-6 py-3 rounded-lg hover:bg-orange-500 hover:text-black transition-all duration-300">
                    Ver detalles
                </a>
            </div>
            <div class="order-1 md:order-2 flex justify-center animate__animated animate-on-scroll-right">
                <img src="{{ asset('/images/jalea.png') }}" alt="Jaleas"
                    class="max-w-full h-auto object-contain transform hover:scale-105 transition-transform duration-300">
            </div>
        </div>

        <!-- Harinas Section -->
        <div class="grid md:grid-cols-2 gap-10 mb-16 items-center bg-white rounded-xl p-8 shadow-lg">
            <div class="flex justify-center animate__animated animate-on-scroll-left">
                <img src="{{ asset('/images/super.png') }}" alt="Harinas"
                    class="max-w-full h-auto object-contain transform hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-center md:text-left  animate__animated animate-on-scroll-right ">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 uppercase">
                    Harinas Selectas
                </h3>
                <p class="text-xl text-gray-700 mb-6">
                    Adquiera nuestras selectas harinas super en presentaciones de
                    <span class="text-green-800 font-extrabold">arroba</span> y
                    <span class="text-green-800 font-extrabold">quintal</span>,
                    para pupusas y panadería.
                </p>
                <a href="#"
                    class="inline-block bg-orange-500 text-black px-6 py-3 rounded-lg hover:bg-black hover:text-white transition-all duration-300">
                    Ver detalles
                </a>
            </div>
        </div>

        <!-- Huevos Section -->
        <div class="grid md:grid-cols-2 gap-10 items-center bg-gray-900 rounded-xl p-8 shadow-lg text-white">
            <div class="order-2 md:order-1 text-center md:text-left animate__animated animate-on-scroll-left">
                <h3 class="text-2xl md:text-3xl font-bold text-orange-500 mb-6 uppercase">
                    Huevos Frescos
                </h3>
                <p class="text-xl mb-6">
                    Descubra la frescura y calidad de nuestros huevos en presentaciones
                    <span class="text-green-400 font-extrabold">pequeña</span>,
                    <span class="text-green-400 font-extrabold">mediana</span>,
                    <span class="text-green-400 font-extrabold">grande</span>, y
                    <span class="text-green-400 font-extrabold">extragrande</span>.
                    Perfectos para todas sus necesidades culinarias.
                </p>
                <a href="#"
                    class="inline-block bg-white text-black px-6 py-3 rounded-lg hover:bg-orange-500 hover:text-white transition-all duration-300">
                    Ver detalles
                </a>
            </div>
            <div class="order-1 md:order-2 flex justify-center animate__animated animate-on-scroll-right">
                <img src="{{ asset('/images/super.png') }}" alt="Huevos"
                    class="max-w-full h-auto object-contain transform hover:scale-105 transition-transform duration-300">
            </div>
        </div>
    </div>


    <div class="w-full max-w-6xl mx-auto px-4 py-12">
        <div class="text-center mb-10">
            <p class="text-sm text-gray-600 uppercase tracking-wide mb-2">CONOZCA NUESTRAS</p>
            <h2 class="text-4xl md:text-5xl font-extrabold text-green-800">CATEGORÍAS</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 md:gap-8">
            @php $categories = [['name' => 'Grasas y Aceites', 'image' => '/images/index/categories/aceites.png'], ['name' => 'Azucares', 'image' => '/images/index/categories/azucar.png'], ['name' => 'Mantecas', 'image' => '/images/index/categories/mantecas.png'], ['name' => 'Mascotas', 'image' => '/images/index/categories/mascotas.png'], ['name' => 'Snacks', 'image' => '/images/index/categories/snacks.png']]; @endphp

            @foreach ($categories as $category)
                <div
                    class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 flex flex-col justify-between p-4">
                        <img src="{{ asset($category['image']) }}" alt="{{ $category['name'] }}"
                            class="w-full h-[85%] object-contain rounded-lg">
                        <div class="text-center font-semibold mt-2 text-gray-800 text-sm md:text-base">
                            {{ $category['name'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-sm text-gray-600 uppercase tracking-wide mb-2">DESCUBRA NUESTROS PUNTOS DE</p>
                <h2 class="text-4xl md:text-5xl font-extrabold text-green-800">PROCESAMIENTO | DISTRIBUCIÓN</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php $locations = [
                        [
                            'name' => 'PLANTA JALEAS',
                            'address' => 'Colonia Vista Hermosa, Ave. Vista Hermosa, Casa #220, San Salvador',
                            'image' => '/images/index/planta-jaleas.jpg',
                            'textColor' => 'text-yellow-300',
                            'bgColor' => 'bg-black',
                        ],
                        [
                            'name' => 'BODEGA CENTRAL',
                            'address' => '10 Calle. Ote Carretera de Oro 1-A # 223 fte a Col. Altavista',
                            'image' => '/images/index/bodega-central.jpg',
                            'textColor' => 'text-green-800',
                            'bgColor' => 'bg-white',
                        ],
                        [
                            'name' => 'PLANTA MOLINOS',
                            'address' => 'KM 10 1/2 A UN COSTADO DE VIDRERÍA VENECIA, SAN MARTÍN, SAN SALVADOR',
                            'image' => '/images/index/planta-molinos.png',
                            'textColor' => 'text-yellow-300',
                            'bgColor' => 'bg-black',
                        ],
                ]; @endphp

                @foreach ($locations as $location)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all hover:scale-105">
                        <div class="{{ $location['bgColor'] }} text-white p-6 text-center">
                            <h3 class="text-2xl font-bold {{ $location['textColor'] }} mb-4">{{ $location['name'] }}</h3>
                            <p class="text-sm mb-4 flex items-center justify-center">
                                <i class="lni lni-map-marker-5 mr-2"></i>
                                {{ $location['address'] }}
                            </p>
                        </div>
                        <img src="{{ asset($location['image']) }}" alt="{{ $location['name'] }}"
                            class="w-full h-64 object-cover">
                    </div>
                @endforeach
            </div>
        </div>
    </div>>


    <div class="w-full max-w-screen-2xl mx-auto px-4 py-12">
        <div class="text-center mb-10">
            <p class="text-md text-gray-600 uppercase tracking-wide mb-2 font-semibold">NUESTROS PRINCIPALES</p>
            <h2 class="text-4xl md:text-5xl font-extrabold text-green-800">PROVEEDORES</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 w-full max-w-screen-2xl mx-auto">
            @php $suppliers = [['logo' => 'copeagropal-logo.png', 'name' => 'Copeagropal'], ['logo' => 'disali-logo.jpeg', 'name' => 'Disali'], ['logo' => 'molinos-logo.png', 'name' => 'Molinos'], ['logo' => 'levuni-logo.png', 'name' => 'Levuni'], ['logo' => 'mor-logo.webp', 'name' => 'Mor']]; @endphp

            @foreach ($suppliers as $supplier)
                <div
                    class="flex justify-center items-center p-6 bg-white rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 scale-100 hover:scale-105">
                    <img src="{{ asset('images/suppliers/' . $supplier['logo']) }}" alt="{{ $supplier['name'] }}"
                        class="max-h-32 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                </div>
            @endforeach
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
                    '<button class="text-white font-extrabold bg-gray-800 hover:bg-orange-600 h-10 w-10 flex items-center justify-center rounded-full">&lt;</button>',
                    '<button class="text-white font-extrabold bg-gray-800 hover:bg-orange-600 h-10 w-10 flex items-center justify-center rounded-full">&gt;</button>'
                ]

            });
        });
    </script>
@endsection
