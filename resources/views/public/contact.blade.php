@extends('public.layout')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('main')
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d814.7845475703409!2d-89.07875778902306!3d13.731140582994454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63473dcbd4197f%3A0x8ff2e5643344358c!2sJALEAS%20DEL%20PINO%2CS.A.%20DE%20C.V.!5e0!3m2!1ses!2ssv!4v1719797392964!5m2!1ses!2ssv"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container m-auto  lg:w-10/12 sm:my-16 max-sm:my-8 max-sm:text-[12px]">

        <div class="w-full text-center font-bold my-18 max-sm:text-[25px] sm:text-[38px]">
            ¡Ponte en contacto con nosotros!
        </div>
        <div class="sm:flex  sm:my-8 max-sm:mb-4 overflow-hidden max-sm:grid max-sm:grid-rows-2 ">
            <div class="w-3/4  sm:p-8  max-sm:m-auto">
                <form action="{{ route('contact-post') }}" method="POST" class="space-y-8 w-full max-sm:w-full"
                    id="contact-form">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-[22px] max-sm:text-sm sm:font-medium text-gray-900">Nombre
                            completo:</label>
                        <input type="text" id="name" name="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 
                          max-sm:text-sm"
                            placeholder="Luis Peréz" required>
                        @error('name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror

                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-[22px] font-medium text-gray-900 max-sm:text-sm">Correo de
                            contacto:</label>
                        <input type="email" id="email" name="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5
                        max-sm:text-sm text-[22px]  "
                            placeholder="example@mail.com" required>
                        @error('email')
                            <div class="text-red-600 alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2  font-medium text-gray-900 max-sm:text-sm">Asunto:</label>
                        <textarea id="message" rows="6" name="message"
                            class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500
                        max-sm:text-sm "
                            placeholder="Escribenos..."></textarea>
                        @error('message')
                            <div class="text-red-600 max-sm:text-sm">{{ $message }}</div>
                        @enderror

                    </div>

                    @if (session('success'))
                        <div class="flex justify-between text-green-200 shadow-inner rounded p-2 bg-green-600">
                            <p class="self-center">
                                <strong> {{ session('success') }} </strong>
                            </p>
                            <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
                        </div>
                    @endif
                    <div id='loader'></div>
                    <button type="submit "
                        class=" font-bold py-2 px-4 rounded-full btn-submit max-sm:m-auto max-sm:text-sm  max-sm:block ">Enviar</button>
                </form>

            </div>
            <div class="w-1/2 flex justify-center items-center  max-sm:h-96 max-sm:pt-4 text-xl">
                <div class="">
                    <div class="item-detail">
                        <div class=" text-orange-600 text-[25px] font-semibold ">
                            <i class="fa fa-map-marker mr-4" aria-hidden="true"></i>Direccion
                        </div>
                        <div class="">
                            Carretera panamericana km 20 1/2, San Martín, San Salvador
                        </div>
                    </div>
                    <div class="item-detail my-12">
                        <div class="text-orange-600 text-[25px] font-semibold">
                            <i class="fa fa-phone mr-4" aria-hidden="true"></i>Contacto
                        </div>
                        <div class="">
                            <div>Atención al cliente: (+503) 2200-0032</div>
                            <div>Email: svjaleasdelpino@gmail.com</div>
                        </div>
                    </div>
                    <div class="item-detail my-12">
                        <div class="text-orange-600 text-[25px] font-semibold">
                            <i class="fa fa-phone mr-4 " aria-hidden="true"></i>Siguenos
                        </div>
                        <div class="">
                            <a href="https://www.facebook.com/profile.php?id=61560104366460&mibextid=LQQJ4d" class="block">
                                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                                <span>Facebook</span>
                            </a>
                            <a href="https://www.instagram.com/jaleasdelpino.sv?igsh=ajFvejBnZHZleWpv" class=" block">
                                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                                <span>Instagram</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        var alert_del = document.querySelectorAll('.alert-del');
        alert_del.forEach((x) =>
            x.addEventListener('click', function() {
                x.parentElement.classList.add('hidden');
            })
        );
    </script>
@endsection
