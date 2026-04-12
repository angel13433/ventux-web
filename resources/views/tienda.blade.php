<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>VENTUX | Catálogo</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        body { background-color: #000; color: #fff; font-family: 'Courier New', monospace; margin: 0; padding: 0; overflow-x: hidden; }

        .header-catalogo { text-align: center; padding: 60px 20px; }
        h1 { font-family: 'Bebas Neue', cursive; font-size: 4rem; letter-spacing: 12px; margin: 0; }
        .linea-roja { width: 80px; height: 4px; background-color: #ff0000; margin: 10px auto 40px; }

        .grid-catalogo {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 80px;
        }

        /* ANIMACIÓN DE ENTRADA */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .pieza-expo { 
            position: relative; 
            transition: 0.3s; 
            animation: fadeInUp 0.8s ease-out forwards; 
        }

        .pieza-expo img {
            width: 100%;
            height: auto;
            filter: grayscale(100%);
            transition: 0.5s ease;
            border: 1px solid #111;
            display: block;
        }

        .pieza-expo:hover img {
            filter: grayscale(0%);
            border-color: #ff0000;
        }

        .badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff0000;
            color: #fff;
            font-family: 'Bebas Neue';
            padding: 4px 10px;
            font-size: 0.9rem;
            z-index: 5;
        }

        .info-pieza { margin-top: 15px; border-left: 2px solid #ff0000; padding-left: 15px; }
        .info-pieza h3 { font-family: 'Bebas Neue'; font-size: 1.8rem; margin: 0; letter-spacing: 2px; }
        .info-pieza p { color: #666; margin: 5px 0; font-size: 0.9rem; }
        .btn-order { display: inline-block; margin-top: 10px; color: #25D366; text-decoration: none; font-size: 0.8rem; font-weight: bold; }

        /* BOTÓN FLOTANTE DE WHATSAPP */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #fff;
            color: #25d366;
        }
    </style>
</head>

<body>
    <x-navbar tipo="tienda" />

    <a href="https://wa.me/584125245470?text=Hola!%20Tengo%20una%20duda%20sobre%20las%20prendas." class="whatsapp-float" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <div class="header-catalogo">
        <h1>CATÁLOGO</h1>
        <div class="linea-roja"></div>
    </div>

    <div class="grid-catalogo">
        <div class="pieza-expo" style="animation-delay: 0.1s;">
            <img src="{{ asset('img/1.png') }}" alt="Diseño 1">
            <div class="info-pieza">
                <h3>OVERSIZE - DROP 01</h3>
                <p>STREETWEAR / $20.00</p>
                <a href="https://wa.me/584125245470?text=Me%20interesa%20la%20pieza%2001" class="btn-order">ORDENAR <i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="pieza-expo" style="animation-delay: 0.2s;">
            <img src="{{ asset('img/2.png') }}" alt="Diseño 2">
            <div class="info-pieza">
                <h3>OVERSIZE - DROP 02</h3>
                <p>STREETWEAR / $20.00</p>
                <a href="https://wa.me/584125245470?text=Me%20interesa%20la%20pieza%2002" class="btn-order">ORDENAR <i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="pieza-expo" style="animation-delay: 0.3s;">
            <img src="{{ asset('img/3.png') }}" alt="Diseño 3">
            <div class="info-pieza">
                <h3>OVERSIZE - DROP 03</h3>
                <p>ANIME SERIES / $20.00</p>
                <a href="https://wa.me/584125245470?text=Me%20interesa%20la%20pieza%2003" class="btn-order">ORDENAR <i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="pieza-expo" style="animation-delay: 0.4s;">
            <img src="{{ asset('img/4.png') }}" alt="Diseño 4">
            <div class="info-pieza">
                <h3>OVERSIZE - DROP 04</h3>
                <p>ANIME SERIES / $20.00</p>
                <a href="https://wa.me/584125245470?text=Me%20interesa%20la%20pieza%2004" class="btn-order">ORDENAR <i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="pieza-expo" style="animation-delay: 0.5s;">
            <div class="badge">NUEVO</div>
            <img src="{{ asset('img/5.png') }}" alt="Diseño 5">
            <div class="info-pieza">
                <h3>OVERSIZE - DROP 05</h3>
                <p>LIMITED EDITION / $20.00</p>
                <a href="https://wa.me/584125245470?text=Me%20interesa%20la%20pieza%2005" class="btn-order">ORDENAR <i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <x-footer />
</body>
</html>