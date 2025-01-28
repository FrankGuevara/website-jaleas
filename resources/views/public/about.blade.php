@extends('public.layout')

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('header-img')
<div class="bg-black w-full h-auto xl:h-[calc(100vh)]">
    <div class="w-full grid xl:grid-cols-2 grid-cols-1">
        <!-- Imagen -->
        <div class="h-[300px] xl:h-full">
            <img class="bg-cover w-full h-full object-cover" src="{{ asset('/images/about/about-img.png') }}" alt="flota">
        </div>
        <!-- Texto -->
        <div class="text-white flex justify-center items-center py-6 xl:py-0 px-4">
            <div class="w-full xl:w-[70%] font-medium text-justify text-sm md:text-base xl:text-xl">
                <span class="text-orange-500 font-bold">Jaleas del Pino</span> es una empresa salvadoreña con más de 9 años en el mercado, 
                dedicada a la producción y comercialización de jaleas de piña, esencias y harinas de arroz así como a la comercialización de harinas de trigo.
                <br><br>
                Nosotros nos comprometemos con la calidad y la innovación en cada uno de nuestros productos. A lo largo de los años, 
                hemos logrado posicionarnos como una empresa líder en el mercado local, satisfaciendo las necesidades de nuestros clientes 
                con productos naturales y de alta calidad. Además, trabajamos con proveedores estratégicos para ofrecer productos frescos y 
                de primera a nuestros consumidores.
            </div>
        </div>
    </div>
</div>

@endsection

@section('main')
    <div class="my-24">
        <div class="py-10 lg:py-28">
            <div class="flex flex-wrap justify-center items-center w-[90%] lg:w-[80%] mx-auto text-lg lg:text-xl">
                @php
                    $stats = [
                        ['number' => '9', 'text' => 'Años brindando calidad a nuestros clientes.'],
                        ['number' => '60', 'text' => 'Colaboradores que trabajan arduamente para satisfacer tus necesidades.'],
                        ['number' => '500', 'text' => 'Clientes que han depositado su confianza en nosotros.'],
                    ];
                @endphp
                @foreach ($stats as $stat)
                    <div class="w-full sm:w-1/3 text-center my-4 flex flex-col justify-between">
                        <div class="flex justify-center items-center">
                            <div class="font-black text-black text-4xl lg:text-5xl">+</div>
                            <div class="text-orange-500 font-extrabold text-[2rem] lg:text-[5vw]"
                                akhi="{{ $stat['number'] }}">0</div>
                        </div>
                        <div class="mt-4 text-sm lg:text-lg font-bold min-h-[3rem]">{{ $stat['text'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="w-full bg-black text-white py-10 lg:py-20">
            <div class="w-[90%] lg:w-[75%] mx-auto text-sm lg:text-lg">
                <div class="grid gap-10 lg:gap-14">
                    @php
                        $sections = [
                            [
                                'title' => 'MISIÓN',
                                'content' =>
                                    'Nuestro propósito es PRODUCIR y COMERCIALIZAR productos de la industria de panificación y de consumo masivo de manera eficiente y rentable; para EL TERRITORIO NACIONAL, brindando a nuestros clientes, excelencia en el servicio, precios competitivos, contribuyendo a su crecimiento y generando oportunidades de desarrollo a nuestros empleados.',
                                'image' => '/images/about/img-mision.jpg',
                            ],
                            [
                                'title' => 'VISIÓN',
                                'content' =>
                                    'Nos comprometemos en ser una empresa LIDER en la comercialización y la distribución de productos de la industria de panificación y consumo masivo en TERRITORIO NACIONAL y CENTROAMERICANO, brindando a nuestros clientes un portafolio de productos diversificado y marcas nacionales e internacionales reconocidas por su calidad, trabajando en equipo e innovando el servicio.',
                                'image' => '/images/about/img-vision.jpg',
                            ],
                        ];
                    @endphp
                    @foreach ($sections as $key => $section)
                        <div class="grid sm:grid-cols-2 grid-rows-[50%,50%] gap-4">
                            @if ($key % 2 === 0)
                                <div class="flex justify-center">
                                    <img src="{{ asset($section['image']) }}" alt="{{ $section['title'] }}"
                                        class="w-[80%] h-[200px] lg:h-[300px]">
                                </div>
                            @endif
                            <div class="text-justify">
                                <div class="font-bold text-center text-xl lg:text-4xl text-orange-500">
                                    {{ $section['title'] }}</div>
                                <p>{{ $section['content'] }}</p>
                            </div>
                            @if ($key % 2 !== 0)
                                <div class="flex justify-center">
                                    <img src="{{ asset($section['image']) }}" alt="{{ $section['title'] }}"
                                        class="w-[80%] h-[200px] lg:h-[300px]">
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-[90%] lg:w-[80%] mx-auto my-10 lg:my-48">
            <div class="text-center text-xl lg:text-4xl font-bold mb-5 lg:mb-20">VALORES</div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                @php
                    $values = [
                        'Honestidad',
                        'Excelencia',
                        'Calidad',
                        'Trabajo en equipo',
                        'Servicio al cliente',
                        'Innovación',
                    ];
                    $icons = [
                        'honestidad.png',
                        'excelencia.png',
                        'calidad.png',
                        'equipo.png',
                        'cliente.png',
                        'innovacion.png',
                    ];
                @endphp
                @foreach ($values as $key => $value)
                    <div class="text-center">
                        <img src="{{ asset('/images/valores/' . $icons[$key]) }}" alt="{{ $value }}"
                            class="w-1/2 mx-auto h-auto">
                        <div class="font-bold text-sm lg:text-xl">{{ $value }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <script>
        // Selecciona todos los elementos con el atributo personalizado "akhi"
        const counters = document.querySelectorAll('[akhi]');
        const duration = 2000; // Duración de la animación en milisegundos
        const frameRate = 60; // Cuadros por segundo
    
        const animateCounter = (counter) => {
            const value = +counter.getAttribute('akhi'); // Obtiene el valor final del contador
            const steps = Math.max(10, Math.round(duration / (1000 / frameRate))); // Calcula los pasos
            const increment = value / steps; // Incremento por paso
            let current = 0;
            let stepCount = 0;
    
            const animate = () => {
                if (stepCount < steps) {
                    current = Math.min(value, current + increment); // Incrementa el valor actual
                    counter.innerText = Math.ceil(current); // Actualiza el texto del contador
                    stepCount++;
                    requestAnimationFrame(animate); // Llama a la animación en el siguiente frame
                } else {
                    counter.innerText = value; // Asegura el valor final
                }
            };
    
            animate(); // Inicia la animación
        };
    
        // Configuración del IntersectionObserver
        const observerOptions = {
            root: null, // Usa el viewport como root
            threshold: 0.5, // Activa cuando el 50% del elemento es visible
        };
    
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter); // Inicia la animación para el elemento
                    observer.unobserve(counter); // Deja de observar el elemento
                }
            });
        }, observerOptions);
    
        // Observa todos los elementos con el atributo "akhi"
        counters.forEach((counter) => {
            observer.observe(counter);
        });
    </script>
    
@endsection
