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
            class="w-full h-[400px] sm:h-[500px] lg:h-[600px]" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container mx-auto px-4 lg:w-10/12 my-8">
        <!-- Título -->
        <h2 class="text-center font-bold text-2xl sm:text-4xl mb-8">¡Ponte en contacto con nosotros!</h2>

        <!-- Contenedor principal -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start ">

            <!-- Formulario de contacto -->
            <div class="bg-white shadow-lg rounded-lg p-6 lg:p-10">
                <form action="{{ route('contact-post') }}" method="POST" class="space-y-6" id="contact-form">
                    @csrf
                    <!-- Nombre -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre completo:</label>
                        <input type="text" id="name" name="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-3 text-sm"
                            placeholder="" required>
                        @error('name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Correo -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo de contacto:</label>
                        <input type="email" id="email" name="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-3 text-sm"
                            placeholder="" required>
                        @error('email')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Mensaje -->
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Asunto:</label>
                        <textarea id="message" rows="6" name="message"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-3 text-sm resize-none"
                            placeholder=""></textarea>
                        @error('message')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Mensaje de éxito -->
                    @if (session('success'))
                        <div class="flex justify-between text-green-200 shadow-inner rounded p-2 bg-green-600">
                            <p class="self-center">
                                <strong> {{ session('success') }} </strong>
                            </p>
                            <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
                        </div>
                    @endif

                    <!-- Botón -->
                    <button type="submit"
                        class="w-full bg-black text-white font-bold px-6 py-3 rounded-lg hover:bg-orange-500 transition">Enviar</button>
                </form>
            </div>

            <!-- Información de contacto -->
            <div class="space-y-10 text-gray-800">
                <div>
                    <h3 class="text-orange-600 text-xl font-bold flex items-center"><i class="fa fa-map-marker mr-3"></i> Dirección</h3>
                    <p class="font-medium">Casa Matriz: Carretera panamericana km 20 1/2, San Martín, San Salvador</p>
                </div>
                <div>
                    <h3 class="text-orange-600 text-xl font-bold flex items-center"><i class="fa fa-phone mr-3"></i> Contacto</h3>
                    <p class="font-medium">Atención al cliente: (+503) 2200-0032</p>
                    <p class="font-medium">Email: svjaleasdelpino@gmail.com</p>
                </div>
                <div>
                    <h3 class="text-orange-600 text-xl font-bold flex items-center"><i class="fa fa-calendar mr-3"></i> Horario</h3>
                    <p class="font-medium">Lun. - Vier.: 6 am - 5 pm</p>
                </div>
                <div>
                    <h3 class="text-orange-600 text-xl font-bold flex items-center"><i class="fa fa-thumbs-up mr-3"></i> Síguenos</h3>
                    <div class="flex items-center space-x-4">
                        <a href="https://www.facebook.com/profile.php?id=61560104366460&mibextid=LQQJ4d" class="     flex items-center">
                            <i class="fa fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="https://www.instagram.com/jaleasdelpino.sv?igsh=ajFvejBnZHZleWpv" class=" flex items-center">
                            <i class="fa fa-instagram fa-2x"></i>
                        </a>
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
