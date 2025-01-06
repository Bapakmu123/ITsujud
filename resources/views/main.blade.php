<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEB GACOR</title>

    <!-- Link to Montserrat font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Link Tailwind CSS-->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth; /* supaya saat loncat ke suatu section isa smooth brooo */
        }
        
        ::-webkit-scrollbar { /* mengatur design keseluruhan scroll yg di kanan dan bawah web */
            width: 6px; /* mengatur lebar scroll yg di kanan */
            height: 8px; /* mengatur tinggi scroll yg di bawah */
            background-color: #FBCD01; /* mengatur background color scroll*/
        }

        ::-webkit-scrollbar-thumb { /* mengatur design dr thumb saat di scroll */
            background: linear-gradient(to bottom, #FBCD01, black); /* menggradienkan thumb ben ketok estetik */
            border-radius: 10px; /* supaya thumb e melengkung  */
        }

        body {
            font-family: 'Montserrat', sans-serif; /* ben kbh tulisan Monstserrat */
        }

        @keyframes scale {
            0% {
                transform: scale(1, 1) translate(-70%, -70%);
                opacity: 0.8;
            }

            20% {
                transform: scale(1.4, 1.8) translate(-50%, -50%);
                opacity: 0.5;
            }

            40% {
                transform: scale(2, 2) translate(-20%, -50%);
                opacity: 0.2;
            }

            60% {
                transform: scale(1.1, 1.2) translate(-50%, -50%);
                opacity: 0.5;
            }

            80% {
                transform: scale(1, 1) translate(-50%, -20%);
                opacity: 0.7;
            }

            100% {
                transform: scale(1, 1) translate(-70%, -70%);
                opacity: 0.8;
            }
        }

        @keyframes scale2 {
            0% {
                transform: scale(2, 2);
                opacity: 0.5;
            }

            25% {
                transform: scale(1.9, 2.1);
                opacity: 0.4;
            }

            50% {
                transform: scale(2.7, 2.9);
                opacity: 0.1;
            }

            75% {
                transform: scale(2.5, 2.1);
                opacity: 0.5;
            }

            100% {
                transform: scale(2, 2);
                opacity: 0.5;
            }
        }

        .ele-icon {
            animation: scale 4s infinite;
        }

        .ele-icon-2 {
            animation: scale2 6s infinite;
        }
    </style>
</head>
<body>
    @include('components.navbar') {{-- navbar tak pisah mbe main ben ga ribet hehe :) --}}
    
    @include('components.header')
    
    @yield('body')
    @yield('script')
    
</body>
</html>