@extends('public.layout')

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('header-img')
    <div class=" bg-black w-full h-[calc(100vh-90px)] ">
        <div class="w-full  grid grid-cols-[50%,50%]">
            <div class="h-full">
                <img class="bg-cover h-screen " src="{{ asset('/images/about/about-img.png') }}" alt="flota">
            </div>
            <div class="text-white flex justify-center items-center">
                <div class="w-[60%] font-medium  text-justify text-xl">
                    <span class="text-orange-500 font-bold">Jaleas del Pino</span> es una empresa salvadoreña con más de 9 años en el mercado, 
                    dedicada a la producción y comercialización de jaleas de piña, esencias y harinas de arroz asi como a la comercialización de harinas de trigo.  
                    <br><br>
                    Nosotros nos comprometemos con la calidad y la innovación en cada uno de nuestros productos. A lo largo de los años, hemos logrado posicionarnos como una empresa líder en el mercado local, satisfaciendo las necesidades de nuestros clientes con productos naturales y de alta calidad. Además, trabajamos con proveedores estratégicos para ofrecer productos frescos y de primera a nuestros consumidores.
                </div>

            </div>
        </div>
    </div>
@endsection


@section('main')
    <div class="my-24  ">

        <div class="h-auto py-28">
            <div class="flex w-[80%] justify-center align-center m-auto h-auto max-lg:h-auto text-xl">
                <div class="w-1/3  p-0  grid grid-rows-2 ">
                    <div class="flex justify-center h-auto y-2">
                        <div class="font-black text-black text-5xl flex items-center justify-center max-lg:text-3xl">+</div>
                        <div class="value text-center text-orange-500 font-bold b flex items-center justify-center"
                            style="font-size: clamp(2rem, 5vw, 100px);" akhi="9">0</div>

                    </div>

                    <div class="w-full text-center h-auto  mt-8 max-sm:mt-4 max-ssm:mt-0 font-bold max-lg:text-[11px] ">
                        Años brindando calidad a nuestros clientes.
                    </div>
                </div>
                <div class="w-1/3  grid grid-rows-2 ">
                    <div class="flex justify-center h-auto">
                        <div class="font-black text-black text-5xl flex items-center justify-center max-lg:text-3xl">+</div>

                        <div class="value text-center text-orange-500 font-bold  flex items-center justify-center"
                            style="font-size: clamp(2rem, 5vw, 100px);" akhi="60">0</div>
                    </div>
                    <div class="w-full text-center h-auto mt-8 max-sm:mt-4 max-ssm:mt-0 font-bold max-lg:text-[11px]">
                        Colaboradores que trabajan arduamente para satisfacer tus nesesidades.
                    </div>
                </div>
                <div class="w-1/3 grid grid-rows-2  ">
                    <div class="flex justify-center h-auto">
                        <div class="font-black text-black text-5xl flex items-center justify-center max-lg:text-3xl">+</div>
                        <div class="value text-center text-orange-500 font-bold  flex items-center justify-center"
                            style="font-size: clamp(2rem, 5vw, 100px);" akhi="500">0</div>
                        
                    </div>
                    <div class="w-full text-center h-auto max-sm:mt-4 mt-8 max-ssm:mt-0 font-bold max-lg:text-[11px]">
                        Clientes que han depositado su confianza en nosotros.
                    </div>
                </div>


            </div>
        </div>
        <div class="w-full my-10 bg-black text-white">
            <div class="lg:w-[75%] max-lg:w-[85%] md:py-20 md:text-2xl mx-auto ">
                <div class="grid grid-rows-2 gap-14 max-md:gap-2 h-auto w-full">

                    <div
                        class="grid sm:grid-cols-2 max-sm:grid-rows-[40%_60%] gap-4  max-sm:gap-0 md:m-auto md:grid-cols-2">
                        <div
                            class="col-span-1 flex justify-center  font-bold max-sm:px-0 sm:p-0 sm:mx-auto m-auto w-[80%] max-sm:h-[200px]">
                            <img src="{{ asset('/images/about/img-mision.jpg') }}" alt="misión"
                                class="w-[80%]  h-[300px] max-sm:h-[200px]">
                        </div>
                        <div
                            class="col-span-1 text-justify sm:p-5 max-sm:pt-12 sm:mx-auto max-lg:p-5 lg:text-base max-md:text-[11px] sm:m-auto max-lg:text-[12px] max-sm:text-[11px] max-sm:my-0">
                            <div class="font-bold flex flex-col items-center justify-center text-center sm:px-0">
                                <div>NUESTRA</div>
                                <div class="pb-3 lg:text-4xl font-bold max-ssm:text-[12px] text-orange-500">MISIÓN</div>
                            </div>
                            <div>
                                Nuestro propósito es <span class="font-bold">PRODUCIR</span> y
                                <span class="font-bold">COMERCIALIZAR</span> productos de la industria
                                de panificación y de consumo masivo de manera eficiente y rentable; para
                                <span class="font-bold">EL TERRITORIO NACIONAL</span>, brindando a nuestros
                                clientes, excelencia en el servicio, precios competitivos, contribuyendo a su
                                crecimiento y generando oportunidades de desarrollo a nuestros empleados.
                            </div>
                        </div>
                    </div>



                    <div
                        class="grid sm:grid-cols-2 max-sm:grid-rows-[40%_60%] gap-4 max-md:gap-2  max-sm:gap-0 md:m-auto md:grid-cols-2 ">

                        <div
                            class="col-span-1 text-justify sm:p-5 max-sm:pb-12 sm:mx-auto max-lg:p-5 lg:text-base max-md:text-[11px] sm:m-auto max-lg:text-[12px] max-sm:text-[11px] max-sm:my-0">
                            <div class="font-bold flex flex-col items-center justify-center text-center sm:px-0">
                                <div>NUESTRA</div>
                                <div class="pb-3 lg:text-4xl font-bold max-ssm:text-[12px] text-orange-500">VISIÓN</div>
                            </div>
                            <div>
                                Nos comprometemos en ser una empresa <span class="font-bold">LIDER</span> en la
                                comercializacion
                                y la distribución de productos de la industria de panificación y consumo masivo en
                                <span class="font-bold"> TERRITORIO NACIONAL</span> y <span
                                    class="font-bold">CENTROAMERICANO</span>,
                                brindando a nuestros clientes un portafolio de productos diversificado y marcas nacionales e
                                internacionales
                                reconocidas por su calidad, trabajando en equipo e innovando el servicio.
                            </div>
                        </div>
                        <div
                            class="col-span-1 flex justify-center  font-bold max-sm:px-0 sm:p-0 sm:mx-auto m-auto w-[80%] max-sm:h-[200px]">
                            <img src="{{ asset('/images/about/img-vision.jpg') }}" alt="visión"
                                class="w-[80%]  max-sm:h-[200px] h-[300px]">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="w-[80%] mx-auto my-48 max-md:my-10 ">
            <div class="text-center  mb-20 max-md:mb-5   lg:text-4xl font-bold max-ssm:text-sm">
                VALORES
            </div>
            <div class="grid md:grid-cols-6 max-md:grid-rows-6">
                <div class="grid sm:grid-rows-2  max-md:h-44">
                    <img src="{{ asset('/images/valores/honestidad.png') }}" alt="honestidad"
                        class="w-[40%] h-auto max-md:w-[20%] m-auto">
                    <div class="m-auto font-bold text-center max-lg:text-sm text-xl max-ssm:text-[9px] px-3">Honestidad</div>
                </div>
                <div class="grid grid-rows-2 max-md:h-44">
                    <img src="{{ asset('/images/valores/excelencia.png') }}" alt="excelencia"
                        class="w-[40%] h-auto max-md:w-[20%] m-auto">
                    <div class="m-auto font-bold text-center max-lg:text-sm text-xl max-ssm:text-[9px] px-3">Excelencia</div>
                </div>
                <div class="grid grid-rows-2  max-md:h-44">
                    <img src="{{ asset('/images/valores/calidad.png') }}"
                        alt="calidad"class="w-[40%]  h-auto max-md:w-[20%] m-auto">
                    <div class="m-auto font-bold text-center max-lg:text-sm text-xl max-ssm:text-[9px] px-3">Calidad</div>
                </div>
                <div class="grid grid-rows-2 max-md:h-44">
                    <img src="{{ asset('/images/valores/equipo.png') }}"
                        alt="equipo"class="w-[40%] h-auto max-md:w-[20%] m-auto">
                    <div class="m-auto font-bold text-center max-lg:text-sm text-xl max-ssm:text-[9px] px-3">Trabajo en equipo</div>
                </div>
                <div class="grid grid-rows-2 max-md:h-44">
                    <img src="{{ asset('/images/valores/cliente.png') }}"
                        alt="cliente"class="w-[40%] h-auto max-md:w-[20%] m-auto">
                    <div class="m-auto font-bold text-center max-lg:text-sm text-xl max-ssm:text-[9px] px-3">Servicio al cliente
                    </div>
                </div>
                <div class="grid grid-rows-2 max-md:h-44">
                    <img src="{{ asset('/images/valores/innovacion.png') }}"
                        alt="innovacion"class="w-[40%] h-auto max-md:w-[20%] m-auto">
                    <div class="m-auto font-bold text-center max-lg:text-sm text-xl max-ssm:text-[9px] px-3">Innovacion</div>
                </div>
            </div>
        </div>

    </div>
    <script>
        const counters = document.querySelectorAll('.value');
        const duration = 2000;
        const frameRate = 60;

        const animateCounter = (counter) => {
            const value = +counter.getAttribute('akhi');
            const steps = Math.max(10, Math.round(duration / (1000 / frameRate)));
            const increment = value / steps;
            let current = 0;
            let stepCount = 0;

            const animate = () => {
                if (stepCount < steps) {
                    current = Math.min(value, current + increment);
                    counter.innerText = Math.ceil(current);
                    stepCount++;
                    requestAnimationFrame(animate);
                } else {
                    counter.innerText = value;
                }
            };

            animate();
        };

        const observerOptions = {
            root: null,
            threshold: 0.5,
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter);
                    observer.unobserve(counter);
                }
            });
        }, observerOptions);

        counters.forEach((counter) => {
            observer.observe(counter);
        });
    </script>
@endsection
