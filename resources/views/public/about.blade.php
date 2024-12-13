@extends('public.layout')



@section('header-img')
    <div class=" bg-black w-full h-screen">
        <div class="w-full  grid grid-cols-[50%,50%]">
            <div class="h-auto">
                <img class="bg-cover" src="{{ asset('/images/flota-header.png') }}" alt="flota">
            </div>
            <div class="text-white flex justify-center items-center">
                <div class="w-[60%] font-medium  text-justify text-lg">
                    En <span class="text-orange-500 font-bold">Jaleas del Pino</span>, nos enorgullecemos de nuestra dedicación a la excelencia. Nos esforzamos por
                seleccionar cuidadosamente cada producto, trabajando directamente con los productores y proveedores
                más confiables para garantizar la frescura, pureza y calidad en cada artículo que ofrecemos.
                Nuestro equipo está formado por amantes de atencion al cliente que están aquí para ayudarte a
                encontrar exactamente lo que necesitas. <br><br>
                Ya seas un chef profesional, un panadero aficionado
                o simplemente alguien que disfruta cocinar en casa, estamos aquí para ser tu socio en la cocina,
                proporcionándote los ingredientes de la más alta calidad para que puedas crear productos de la mas alta calidad.
                </div>
                
            </div>
        </div>
    </div>

    <div class="my-24  ">
        <div class="text-center mt-20 max-sm:mt-10 mb-8 lg:text-4xl font-bold max-ssm:text-sm">
            NUESTOS NUMEROS
        </div>
        <div class="bg-gray-200  wow h-auto py-4" >
            <div class="flex w-[80%] justify-center align-center m-auto h-auto max-lg:h-auto">
                <div class="w-1/3 bg-gray-200 p-0  grid grid-rows-2 ">
                    <div class="flex justify-center h-auto y-2">
                        <div class="value text-center text-orange-500 font-bold b flex items-center justify-center" style="font-size: clamp(2rem, 5vw, 100px);" akhi="7">0</div>
                        <div class="font-black text-green-900 text-5xl flex items-center justify-center max-lg:text-3xl">+</div>
                    </div>
                    
                    <div class="w-full text-center h-auto  mt-8 max-sm:mt-4 max-ssm:mt-0 font-bold max-lg:text-[11px] max-smm:text-[9px]">
                        Años brindando calidad a nuestros clientes.
                    </div>
                </div>
                <div class="w-1/3 bg-gray-200  grid grid-rows-2 ">
                    <div class="flex justify-center h-auto">
                        <div class="value text-center text-orange-500 font-bold  flex items-center justify-center" style="font-size: clamp(2rem, 5vw, 100px);" akhi="50">0</div>
                        <div class="font-black text-green-900 text-5xl flex items-center justify-center max-lg:text-3xl">+</div>
                    </div>
                    <div class="w-full text-center h-auto mt-8 max-sm:mt-4 max-ssm:mt-0 font-bold max-lg:text-[11px]">
                        Colaboradores que trabajan arduamente para satisfacer 
                        <br>tus nesesidades.
                    </div>
                </div>
                <div class="w-1/3 bg-gray-200  grid grid-rows-2  ">
                    <div class="flex justify-center h-auto">
                        <div class="value text-center text-orange-500 font-bold  flex items-center justify-center" style="font-size: clamp(2rem, 5vw, 100px);" akhi="400">0</div>
                        <div class="font-black text-green-900 text-5xl flex items-center justify-center max-lg:text-3xl">+</div>
                    </div>
                    <div class="w-full text-center h-auto max-sm:mt-4 mt-8 max-ssm:mt-0 font-bold max-lg:text-[11px]">
                        Clientes que han depositado su confianza en nosotros.   
                    </div>
                </div>
                
    
            </div>
        </div>
@endsection


@section('main')
@endsection
