<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma FESC</title>
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .font-title {
            font-family: 'Montserrat Alternates', serif;
        }
        
        .font-cursive {
            font-family: 'Great vibes', cursive;
        }

        .corona-background {
            background-image: url('{{ asset('images/corona-triunfal.svg') }} '); 
            background-size: 55rem 55rem;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 300%; 
        }
    </style>
    
</head>
<body class="p-4 h-full bg-gray-100">

    <div class="p-8 bg-gradient-to-b from-[#841315] via-[#E10600] to-[#841315] m-auto h-full w-full ">
        
        <div class="relative h-full w-full bg-white">
            
            <div class="absolute -bottom-[32px] -right-[32px] z-40 rotate-180">
                <!-- SVG Esquina superior izquierda -->
                <svg width="316" height="255" viewBox="0 0 316 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M315 1C157 27.5 63 93.5 1 254V161V119V1H315Z" fill="#E10600" stroke="#E10600"/>
                    <path d="M1 161V120.875C87.3485 45.6395 140.256 25.5768 276.018 1H286C151.236 28.5862 78.8064 68.9239 1 161Z" fill="#841315" stroke="#841315"/>
                </svg>
            </div>
            
            <div class="absolute -top-[32px] -left-[32px] z-40">
                <!-- SVG Esquina superior izquierda -->
                <svg width="316" height="255" viewBox="0 0 316 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M315 1C157 27.5 63 93.5 1 254V161V119V1H315Z" fill="#E10600" stroke="#E10600"/>
                    <path d="M1 161V120.875C87.3485 45.6395 140.256 25.5768 276.018 1H286C151.236 28.5862 78.8064 68.9239 1 161Z" fill="#841315" stroke="#841315"/>
                </svg>
            </div>
            

            <!-- Logo FESC (superior izquierda) -->
            <div class="absolute top-20 lg:left-[10rem] sm:left-14 z-50">
                <img src="{{ asset('images/Logo_of_FESC_University.svg.png') }}" alt="Logo FESC" class="lg:w-48 sm:w-32 h-auto drop-shadow-lg">
            </div>

            <!-- Logo Proyectando (superior derecha) -->
            <div class="absolute top-[65px] lg:right-[10rem] sm:right-14 z-50">
                <img src="{{ asset('images/unnamed.png') }}" alt="Logo Proyectando" class="lg:w-36 sm:w-28 h-auto drop-shadow-lg">
            </div>

            <!-- Logo MinEducacion lateral izquierdo -->
            <div class="absolute -left-12 top-1/2 transform -translate-y-1/2 -rotate-90 z-50">
                <img src="{{ asset('images/1750889371716.png') }}" alt="" class="h-auto w-32">
            </div>

            <!-- Contenido principal -->
            <div class="relative z-30 h-full flex flex-col gap-6 justify-center items-center p-8 pt-8  ">
                
                <!-- Borde externo delgado dorado -->
                <div class="bg-gradient-to-r from-yellow-200 via-yellow-700 to-yellow-200 w-full h-full m-auto p-[2px]">
                    <div class="relative h-full w-full bg-white p-2">
                        
                        <!-- Borde interno grueso dorado -->
                            <div class="bg-gradient-to-r from-yellow-200 via-yellow-700 to-yellow-200 w-full h-full m-auto p-[4px]">
                                <div class="relative h-full w-full bg-white">
                                    
                                    <!-- Corona de espigas de fondo -->
                                    <div class="absolute inset-0 corona-background z-0"></div>
                                    
                                    <!-- Contenido del diploma con z-index mayor -->
                                    <div class="relative z-10">
                                        <!-- Título principal -->
                                        <h1 class="absolute top-10 left-1/2 transform -translate-x-1/2 sm:text-3xl lg:text-5xl font-bold text-gray-800 text-center font-title">
                                            DIPLOMA DE<br>PARTICIPACIÓN
                                        </h1>
                                        
                                        <!-- "Otorgado a:" centrado -->
                                        <span class="absolute top-44 left-1/2 transform -translate-x-1/2 lg:text-xl text-gray-600">Otorgado a:</span>
                                        
                                        <!-- Nombre centrado dinámicamente -->
                                        <h1 class="absolute top-60 left-1/2 transform -translate-x-1/2 lg:text-5xl sm:text-[2.5rem] border-b-2 border-gray-500 font-cursive whitespace-nowrap">{{ $users->name }}</h1>
                                        
                                        <!-- Texto de participación centrado -->
                                        <span class="lg:w-[70%]  sm:w-[80%] absolute lg:top-[19rem] sm:top-[21rem] left-1/2 transform -translate-x-1/2  text-center sm:mt-10">Por su participación en el V Congreso Internacional Proyectando: Impulsando el desarrollo turístico y productivo de Norte de Santander, a través de la educación superior.</span>
                                        
                                        <!-- Contenedor para los dos textos de firma -->
                                        <div class="absolute lg:top-[28rem] sm:top-[30rem] left-1/2 transform -translate-x-1/2 w-full max-w-4xl">
                                            <div class="flex justify-center lg:gap-48 sm:gap-24 px-8 sm:mt-8">
                                                <!-- Texto de fecha y lugar -->
                                                <span class="text-center border-t-2 border-gray-500 pt-2 lg:w-60 sm:w-60 font-title whitespace-nowrap">
                                                    Fecha y Lugar del Evento
                                                </span>
                                                
                                                <!-- Medalla de participación -->
                                                <div class="absolute lg:-bottom-28 lg:left-[22rem] sm:left-[12rem] sm:-bottom-60" >
                                                    <img src="images/1750794047513.png" alt="" class="w-48 h-auto ">
                                                </div>

                                                <!-- Texto de Firma -->
                                                <span class="text-center border-t-2 border-gray-500 pt-2 lg:w-60 sm:w-60 font-title">
                                                    Firma Autorizada
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        
                    </div>
                </div>
                
            </div>

        </div>

    </div>

</body>
</html>