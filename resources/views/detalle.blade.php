<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>VNTX_SYSTEM | {{ $producto['nombre'] }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --fondo: #E3DCD2;
            --texto: #55736B;
            --acento: #A65D4A;
            --negro: #121212;
            --grid-line: rgba(85, 115, 107, 0.12);
        }

        body { 
            background-color: var(--fondo); 
            color: var(--texto); 
            font-family: 'Montserrat', sans-serif; 
            margin: 0; 
            background-image: 
                linear-gradient(var(--grid-line) 1px, transparent 1px),
                linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 100px 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .product-id {
            font-family: 'JetBrains Mono';
            font-size: 0.8rem;
            color: var(--acento);
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        h1 {
            font-family: 'Bebas Neue';
            font-size: 5rem;
            line-height: 0.9;
            margin: 0 0 10px 0;
            color: var(--negro);
        }

        .price-tag {
            font-family: 'JetBrains Mono';
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: var(--texto);
        }

        .status-badge {
            display: inline-block;
            background: var(--negro);
            color: white;
            padding: 5px 15px;
            font-family: 'JetBrains Mono';
            font-size: 0.6rem;
            margin-bottom: 30px;
        }

        .description {
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 40px;
            border-left: 2px solid var(--acento);
            padding-left: 20px;
        }

        .btn-back {
            text-decoration: none;
            color: var(--texto);
            font-family: 'JetBrains Mono';
            font-size: 0.7rem;
            border: 1px solid var(--texto);
            padding: 10px 20px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: var(--negro);
            color: var(--fondo);
        }

        .product-preview {
            width: 100%;
            filter: drop-shadow(0 30px 50px rgba(0,0,0,0.2));
        }

        @media (max-width: 768px) {
            .container { grid-template-columns: 1fr; padding: 50px 20px; }
            h1 { font-size: 3rem; }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="visual-side">
            <img src="{{ asset('img/' . $producto['imagen']) }}" class="product-preview" alt="{{ $producto['nombre'] }}">
        </div>

        <div class="info-side">
            <div class="product-id">// DATA_FETCH: {{ $id }}</div>
            <div class="status-badge">SISTEMA_OPERATIVO_CONECTADO</div>
            
            <h1>{{ $producto['nombre'] }}</h1>
            
            <div class="price-tag">{{ $producto['precio'] }}</div>
            
            <div class="description">
                {{ $producto['descripcion'] }}
            </div>

            <a href="{{ route('tienda.index') }}" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> RETURN_TO_CATALOG
            </a>
        </div>
    </div>

</body>
</html>