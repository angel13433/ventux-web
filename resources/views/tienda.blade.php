<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTUX | System Catalog</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root {
            --fondo: #E3DCD2;
            --texto: #55736B;
            --acento: #A65D4A;
            --blanco: #ffffff;
            --negro: #121212;
            --grid-line: rgba(85, 115, 107, 0.12);
        }

        body { 
            background-color: var(--fondo); 
            color: var(--texto); 
            font-family: 'Montserrat', sans-serif; 
            margin: 0; 
            padding: 0; 
            overflow-x: hidden; 
        }

        .tech-bg {
            background-image: 
                linear-gradient(var(--grid-line) 1px, transparent 1px),
                linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* --- BOTÓN VOLVER --- */
        .btn-back {
            position: absolute;
            top: 40px;
            left: 50px;
            text-decoration: none;
            color: var(--texto);
            font-family: 'JetBrains Mono';
            font-size: 0.7rem;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 15px;
            border: 1px solid var(--grid-line);
            transition: 0.3s;
            background: rgba(255,255,255,0.2);
            z-index: 1000;
        }

        .btn-back:hover {
            background: var(--negro);
            color: var(--fondo);
            border-color: var(--negro);
        }

        .header-catalogo { 
            padding: 120px 50px 40px; 
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            border-bottom: 1px solid var(--grid-line);
        }

        h1 { 
            font-family: 'Bebas Neue', sans-serif; 
            font-size: 6rem; 
            letter-spacing: -2px; 
            margin: 0; 
            color: var(--texto);
            line-height: 0.8;
        }

        .grid-catalogo {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 60px; 
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 50px 100px;
        }

        .pieza-expo { 
            position: relative; 
            display: flex;
            flex-direction: column;
        }

        .img-container {
            width: 100%;
            height: auto; 
            aspect-ratio: 1 / 1.1;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            margin-bottom: 8px;
        }

        .img-link {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .pieza-expo img {
            width: 100%;
            height: 100%;
            object-fit: contain; 
            display: block;
            transition: 0.8s cubic-bezier(0.19, 1, 0.22, 1);
            filter: drop-shadow(0 15px 30px rgba(0,0,0,0.15));
        }

        .pieza-expo:hover img {
            transform: scale(1.05); 
        }

        .badge {
            position: absolute;
            top: 0;
            left: 0;
            background: var(--negro);
            color: var(--blanco);
            font-family: 'JetBrains Mono';
            padding: 5px 12px;
            font-size: 0.55rem;
            z-index: 5;
            letter-spacing: 2px;
        }

        .info-pieza { 
            padding-top: 0;
            display: block; 
            text-align: left;
        }

        .id-label {
            display: block;
            font-family: 'JetBrains Mono';
            font-size: 0.6rem;
            color: var(--acento);
            margin-bottom: 2px;
            letter-spacing: 1px;
        }

        .header-producto {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .info-pieza h3 { 
            font-family: 'Bebas Neue'; 
            font-size: 2.2rem; 
            margin: 0; 
            color: var(--negro);
            line-height: 1;
        }

        .price-text {
            font-family: 'Montserrat';
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--texto);
        }

        .btn-order { 
            display: block;
            margin-top: 12px;
            padding: 12px;
            text-align: center;
            text-decoration: none;
            font-family: 'JetBrains Mono';
            font-size: 0.7rem;
            letter-spacing: 2px;
            border: 1px solid var(--negro);
            color: var(--negro);
            transition: 0.3s;
        }

        .btn-order:hover {
            background: var(--negro);
            color: var(--blanco);
        }

        .whatsapp-float {
            position: fixed;
            bottom: 40px;
            right: 40px;
            background-color: var(--negro);
            color: var(--blanco);
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            z-index: 100;
            transition: 0.4s;
            border: 1px solid var(--acento);
            clip-path: polygon(15% 0%, 100% 0%, 100% 85%, 85% 100%, 0% 100%, 0% 15%);
        }

        /* --- OPTIMIZACIÓN MÓVIL (SISTEMA_RESPONSE_MOBILE) --- */
        @media (max-width: 768px) {
            h1 { 
                font-size: 3.5rem; 
                text-align: center;
            }

            .header-catalogo {
                padding: 100px 20px 30px;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .grid-catalogo { 
                grid-template-columns: 1fr; /* Una columna para que la prenda se vea grande */
                padding: 20px; 
                gap: 50px; 
            }

            .img-container { 
                aspect-ratio: 1 / 1.2; 
                margin-bottom: 5px;
            }

            .info-pieza h3 {
                font-size: 1.8rem;
            }

            .btn-order {
                padding: 16px; /* Área táctil más grande */
                font-size: 0.8rem;
            }

            .btn-back {
                top: 25px;
                left: 20px;
                padding: 6px 12px;
                font-size: 0.6rem;
            }

            .whatsapp-float {
                bottom: 25px;
                right: 25px;
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>

<body class="tech-bg">

    <a href="/" class="btn-back">
        <i class="fa-solid fa-terminal"></i> RETURN_TO_HOME
    </a>

    <a href="https://wa.me/584125245470" class="whatsapp-float" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <div class="header-catalogo">
        <div class="header-info">
            <span style="font-family: 'JetBrains Mono'; font-size: 0.7rem; color: var(--acento); letter-spacing: 4px;">MODULE: SYSTEM_RETAIL_v2.1</span>
            <h1>CATÁLOGO</h1>
        </div>
    </div>

    <div class="grid-catalogo">
        <div class="pieza-expo">
            <span class="badge">STOCK_READY</span>
            <div class="img-container">
                <a href="{{ route('producto.show', '001') }}" class="img-link">
                    <img src="{{ asset('img/1.png') }}" alt="Oversize Drop 01" loading="lazy"> 
                </a>
            </div>
            <div class="info-pieza">
                <span class="id-label">// VNTX_ID: 001</span>
                <div class="header-producto">
                    <h3>OVERSIZE DROP 01</h3>
                    <span class="price-text">$20.00</span>
                </div>
                <a href="https://wa.me/584125245470?text=Order_ID:VNTX-001" class="btn-order">
                    EXECUTE_PURCHASE_SISTEMA
                </a>
            </div>
        </div>

        <div class="pieza-expo">
            <div class="img-container">
                <a href="{{ route('producto.show', '002') }}" class="img-link">
                    <img src="{{ asset('img/2.png') }}" alt="Oversize Drop 02" loading="lazy">
                </a>
            </div>
            <div class="info-pieza">
                <span class="id-label">// VNTX_ID: 002</span>
                <div class="header-producto">
                    <h3>OVERSIZE DROP 02</h3>
                    <span class="price-text">$20.00</span>
                </div>
                <a href="https://wa.me/584125245470?text=Order_ID:VNTX-002" class="btn-order">
                    EXECUTE_PURCHASE_SISTEMA
                </a>
            </div>
        </div>

        <div class="pieza-expo">
            <span class="badge" style="background: var(--acento);">BEST_SELLER</span>
            <div class="img-container">
                <a href="{{ route('producto.show', '003') }}" class="img-link">
                    <img src="{{ asset('img/3.png') }}" alt="Oversize Anime 01" loading="lazy">
                </a>
            </div>
            <div class="info-pieza">
                <span class="id-label">// VNTX_ID: 003</span>
                <div class="header-producto">
                    <h3>OVERSIZE ANIME 01</h3>
                    <span class="price-text">$20.00</span>
                </div>
                <a href="https://wa.me/584125245470?text=Order_ID:VNTX-003" class="btn-order">
                    EXECUTE_PURCHASE_SISTEMA
                </a>
            </div>
        </div>

        <div class="pieza-expo">
            <span class="badge">LIMITED_EDITION</span>
            <div class="img-container">
                <a href="{{ route('producto.show', 'LTD-01') }}" class="img-link">
                    <img src="{{ asset('img/5.png') }}" alt="Limited Edition 01" loading="lazy">
                </a>
            </div>
            <div class="info-pieza">
                <span class="id-label">// VNTX_ID: LTD-01</span>
                <div class="header-producto">
                    <h3>LIMITED EDITION - 01</h3>
                    <span class="price-text">$25.00</span>
                </div>
                <a href="https://wa.me/584125245470?text=Order_ID:VNTX-LTD-01" class="btn-order">
                    EXECUTE_PURCHASE_SISTEMA
                </a>
            </div>
        </div>
    </div>
</body>
</html>