<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNTX_SYSTEM // ANALYZE: {{ $producto['nombre'] }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root {
            --fondo-profundo: #0a0f0d; 
            --fondo-kit: #E3DCD2;    
            --texto-suave: rgba(227, 220, 210, 0.5);
            --verde-pizarra: #55736B; 
            --acento-rojo: #A65D4A;   
            --terminal-glow: rgba(166, 93, 74, 0.15);
        }

        body { 
            background-color: var(--fondo-profundo); 
            color: var(--fondo-kit); 
            font-family: 'Montserrat', sans-serif; 
            margin: 0; 
            overflow-x: hidden;
        }

        .tech-bg {
            background-image: 
                radial-gradient(circle at 50% -20%, rgba(85, 115, 107, 0.15), transparent 80%),
                linear-gradient(rgba(166, 93, 74, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(166, 93, 74, 0.02) 1px, transparent 1px);
            background-size: 100% 100%, 30px 30px, 30px 30px;
            background-attachment: fixed;
        }

        /* BARRA SUPERIOR RESPONSIVA */
        .system-top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            border-bottom: 1px solid rgba(227, 220, 210, 0.1);
            font-family: 'JetBrains Mono';
            font-size: 10px;
            color: var(--verde-pizarra);
            text-transform: uppercase;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 60px 40px;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 60px;
            align-items: start;
        }

        /* VISUALIZADOR */
        .visual-side {
            position: relative;
            background: #000;
            border: 1px solid rgba(227, 220, 210, 0.1);
            padding: 20px;
            aspect-ratio: 1/1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .corner-data {
            position: absolute;
            font-family: 'JetBrains Mono';
            font-size: 8px;
            color: var(--acento-rojo);
            opacity: 0.7;
        }
        .top-l { top: 15px; left: 15px; }
        .top-r { top: 15px; right: 15px; }
        .bot-l { bottom: 15px; left: 15px; }
        .bot-r { bottom: 15px; right: 15px; }

        .product-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: contrast(1.1) brightness(0.9);
        }

        /* TEXTOS */
        .product-id {
            font-family: 'JetBrains Mono';
            font-size: 10px;
            color: var(--verde-pizarra);
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        h1 {
            font-family: 'Bebas Neue';
            font-size: clamp(3.5rem, 8vw, 6rem);
            line-height: 0.85;
            margin: 0 0 20px 0;
            color: var(--fondo-kit);
        }

        /* TABLA DE DATOS */
        .data-table {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1px;
            background: rgba(227, 220, 210, 0.1);
            border: 1px solid rgba(227, 220, 210, 0.1);
            margin-bottom: 35px;
        }

        .data-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 15px;
            background: var(--fondo-profundo);
            font-family: 'JetBrains Mono';
            font-size: 10px;
        }

        .label { color: var(--acento-rojo); text-transform: uppercase; }
        .value { color: var(--fondo-kit); font-weight: bold; }

        .description {
            font-size: 0.9rem;
            line-height: 1.8;
            color: var(--texto-suave);
            margin-bottom: 40px;
            font-family: 'JetBrains Mono';
        }

        /* BOTONES */
        .action-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn-main {
            background: var(--fondo-kit);
            color: var(--fondo-profundo);
            text-decoration: none;
            padding: 22px;
            font-family: 'JetBrains Mono';
            font-size: 11px;
            text-align: center;
            font-weight: bold;
            transition: 0.3s;
            border: 1px solid var(--fondo-kit);
            text-transform: uppercase;
        }

        .btn-main:hover {
            background: transparent;
            color: var(--fondo-kit);
            box-shadow: 0 0 20px var(--terminal-glow);
        }

        .btn-back {
            text-decoration: none;
            color: var(--verde-pizarra);
            font-family: 'JetBrains Mono';
            font-size: 9px;
            text-align: center;
            padding: 15px;
            transition: 0.3s;
        }

        /* MEDIA QUERIES PARA MÓVIL */
        @media (max-width: 992px) {
            .container { 
                grid-template-columns: 1fr; 
                padding: 40px 20px;
                gap: 40px;
            }
            .system-top-bar {
                padding: 15px 20px;
            }
            .system-top-bar span:last-child {
                display: none; /* Simplifica la barra en móviles */
            }
        }

        @media (max-width: 480px) {
            h1 { font-size: 3.5rem; }
            .visual-side { padding: 10px; }
            .data-row { padding: 15px 10px; }
            .description { font-size: 0.85rem; }
        }
    </style>
</head>
<body class="tech-bg">

    <div class="system-top-bar">
        <span>VNTX_SYSTEM // NODE_{{ $id }}</span>
        <span>STATUS: DATA_VISUALIZATION_ACTIVE</span>
    </div>

    <div class="container">
        <div class="visual-side">
            <div class="corner-data top-l">SCAN_ID: {{ $id }}</div>
            <div class="corner-data top-r">OBJ: PIECE_0{{ $id }}</div>
            <div class="corner-data bot-l">RES: 4K_MOCK</div>
            <div class="corner-data bot-r">LOC: VNTX_LAB</div>
            
            <img src="{{ asset('img/' . $producto['imagen']) }}" class="product-preview" alt="{{ $producto['nombre'] }}">
        </div>

        <div class="info-side">
            <div class="product-id">// ORIGIN: VENTUX_STUDIO_DEEP_SYSTEM</div>
            
            <h1>{{ $producto['nombre'] }}</h1>
            
            <div class="data-table">
                <div class="data-row">
                    <span class="label">ADQUISICIÓN</span>
                    <span class="value">{{ $producto['precio'] }} USD</span>
                </div>
                <div class="data-row">
                    <span class="label">ESTADO</span>
                    <span class="value">AVAILABLE_STOCK</span>
                </div>
                <div class="data-row">
                    <span class="label">TEXTIL</span>
                    <span class="value">HEAVY_COTTON_240G</span>
                </div>
                <div class="data-row">
                    <span class="label">SYSTEM_V</span>
                    <span class="value">DEEP_OS_2.6</span>
                </div>
            </div>
            
            <div class="description">
                > ANALYSIS_SUMMARY: <br>
                {{ $producto['descripcion'] }}
            </div>

            <div class="action-group">
                <a href="https://wa.me/584125245470?text=Solicito_Informacion_Activo:_{{ $producto['nombre'] }}" class="btn-main">
                    INICIAR_PROTOCOLO_DE_COMPRA
                </a>

                <a href="{{ route('tienda.index') }}" class="btn-back">
                    <i class="fa-solid fa-chevron-left"></i> RETURN_TO_SYSTEM_INDEX
                </a>
            </div>
        </div>
    </div>

</body>
</html>