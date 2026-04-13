@extends('layouts.app')

@section('title', 'VNTX // DEEP_SYSTEM_CATALOG')

@section('extra-css')
<style>
    :root {
        --fondo-profundo: #0a0f0d; 
        --fondo-kit: #E3DCD2;    
        --texto-suave: rgba(227, 220, 210, 0.5);
        --verde-pizarra: #55736B; 
        --acento-rojo: #A65D4A;   
        --terminal-glow: rgba(166, 93, 74, 0.15);
    }

    .tech-bg {
        background-color: var(--fondo-profundo);
        background-image: 
            radial-gradient(circle at 50% -20%, rgba(85, 115, 107, 0.15), transparent 80%),
            linear-gradient(rgba(166, 93, 74, 0.02) 1px, transparent 1px),
            linear-gradient(90deg, rgba(166, 93, 74, 0.02) 1px, transparent 1px);
        background-size: 100% 100%, 30px 30px, 30px 30px;
        background-attachment: fixed;
    }

    /* --- BARRA DE ESTADO SUPERIOR --- */
    .system-top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 40px;
        border-bottom: 1px solid rgba(227, 220, 210, 0.1);
        font-family: 'JetBrains Mono', monospace;
        font-size: 10px;
        color: var(--verde-pizarra);
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .status-indicator { display: flex; align-items: center; gap: 8px; }
    .status-dot { width: 6px; height: 6px; background: var(--acento-rojo); border-radius: 50%; box-shadow: 0 0 8px var(--acento-rojo); animation: pulse 2s infinite; }

    @keyframes pulse { 0% { opacity: 1; } 50% { opacity: 0.3; } 100% { opacity: 1; } }

    /* --- HEADER BRUTALISTA --- */
    .header-catalogo { padding: 60px 40px; border-bottom: 1px solid rgba(227, 220, 210, 0.05); }
    .header-catalogo h1 { 
        font-family: 'Bebas Neue', cursive; 
        font-size: clamp(4rem, 10vw, 9rem); 
        margin: 0; 
        color: var(--fondo-kit); 
        letter-spacing: -2px;
        line-height: 0.8;
    }
    .header-subtitle {
        font-family: 'JetBrains Mono';
        color: var(--acento-rojo);
        font-size: 12px;
        margin-top: 10px;
        display: block;
    }

    /* --- GRID DE ACTIVOS --- */
    .grid-catalogo {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
        gap: 2px; 
        background: rgba(227, 220, 210, 0.05); 
        border: 1px solid rgba(227, 220, 210, 0.05);
    }

    .pieza-expo {
        position: relative;
        background: var(--fondo-profundo);
        padding: 30px;
        overflow: hidden;
        transition: 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .corner-data {
        position: absolute;
        font-family: 'JetBrains Mono';
        font-size: 8px;
        color: var(--verde-pizarra);
        opacity: 0.4;
    }
    .top-l { top: 10px; left: 10px; }
    .bot-r { bottom: 10px; right: 10px; }

    .img-container {
        position: relative;
        width: 100%;
        aspect-ratio: 1/1;
        background: #000;
        border: 1px solid rgba(227, 220, 210, 0.1);
        margin-bottom: 25px;
    }

    .pieza-expo img { 
        width: 100%; height: 100%; object-fit: cover;
        filter: grayscale(1) contrast(1.2); 
        transition: 0.6s;
        opacity: 0.7;
    }

    .pieza-expo:hover img {
        filter: grayscale(0.2) contrast(1.1);
        opacity: 1;
        transform: scale(1.02);
    }

    .info-pieza h3 { 
        font-family: 'Bebas Neue'; 
        font-size: 2.5rem; 
        color: var(--fondo-kit); 
        margin: 0 0 15px 0;
        text-transform: uppercase;
    }

    .data-table {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        border-top: 1px solid rgba(227, 220, 210, 0.1);
        padding-top: 15px;
        margin-bottom: 25px;
    }

    .data-item { font-family: 'JetBrains Mono'; font-size: 9px; }
    .label { color: var(--acento-rojo); display: block; margin-bottom: 2px; }
    .value { color: var(--fondo-kit); text-transform: uppercase; }

    .btn-action-group { display: flex; gap: 1px; background: rgba(227, 220, 210, 0.1); }
    
    .btn-view-spec {
        flex: 1;
        background: transparent;
        color: var(--fondo-kit);
        border: 1px solid rgba(227, 220, 210, 0.2);
        padding: 15px;
        font-family: 'JetBrains Mono';
        font-size: 10px;
        text-align: center;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-view-spec:hover {
        background: var(--fondo-kit);
        color: var(--fondo-profundo);
    }

    .btn-order {
        padding: 15px 25px;
        background: rgba(37, 211, 102, 0.05);
        color: #25D366;
        border: 1px solid rgba(37, 211, 102, 0.2);
        text-decoration: none;
        transition: 0.3s;
    }

    /* --- AJUSTES MÓVILES --- */
    @media (max-width: 768px) {
        .system-top-bar { padding: 15px 20px; }
        .system-top-bar span:last-child { display: none; } 

        .header-catalogo { padding: 40px 20px; }
        .header-catalogo h1 { font-size: 4.5rem; }

        .grid-catalogo { 
            grid-template-columns: 1fr; 
            gap: 0; 
        }

        .pieza-expo { padding: 25px 20px; }
        .info-pieza h3 { font-size: 2rem; }
        
        .data-table { grid-template-columns: 1fr; gap: 5px; } 
        
        .btn-view-spec, .btn-order { padding: 18px 15px; font-size: 11px; }
    }
</style>
@endsection

@section('content')
    <div class="system-top-bar">
        <div class="status-indicator">
            <div class="status-dot"></div>
            <span>VNTX_SECURE_CONNECTION: ACTIVE</span>
        </div>
        <div class="status-indicator">
            <span>LOC: ACARIGUA_PORTUGUESA // 09.5597° N, 69.2019° W</span>
        </div>
    </div>

    <div class="header-catalogo">
        <span class="header-subtitle">// SELECCIÓN DE ACTIVOS_CORE</span>
        <h1>CATÁLOGO</h1>
        <div style="margin-top: 20px; font-family: 'JetBrains Mono'; font-size: 10px; color: var(--texto-suave);">
            [ MOSTRANDO 05 RESULTADOS ENCONTRADOS EN EL NODO DEEP_SYSTEM ]
        </div>
    </div>

    <div class="grid-catalogo">
        {{-- Nodo 01: Maki --}}
        <div class="pieza-expo">
            <div class="corner-data top-l">ID: 001_VNTX</div>
            <div class="corner-data bot-r">TIMESTAMP: 2026_MAR</div>
            <div class="img-container">
                <div style="position: absolute; top: 10px; left: 10px; z-index: 5; background: var(--acento-rojo); color: white; padding: 2px 6px; font-family: 'JetBrains Mono'; font-size: 9px;">DISPONIBLE</div>
                <img src="{{ asset('img/1.png') }}" alt="Maki Drop">
            </div>
            <div class="info-pieza">
                <h3>OVERSIZE DROP 01</h3>
                <div class="data-table">
                    <div class="data-item"><span class="label">CATEGORÍA</span><span class="value">Streetwear</span></div>
                    <div class="data-item"><span class="label">PRECIO</span><span class="value">$20.00 USD</span></div>
                </div>
                <div class="btn-action-group">
                    <a href="{{ route('producto.show', ['id' => '1']) }}" class="btn-view-spec">ADQUIRIR_ESPECIFICACIONES</a>
                    <a href="https://wa.me/584125245470?text=Solicito%20Nodo_01" class="btn-order">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Nodo 02: Saint Line --}}
        <div class="pieza-expo">
            <div class="corner-data top-l">ID: 002_VNTX</div>
            <div class="corner-data bot-r">TIMESTAMP: 2026_MAR</div>
            <div class="img-container">
                <div style="position: absolute; top: 10px; left: 10px; z-index: 5; background: var(--verde-pizarra); color: white; padding: 2px 6px; font-family: 'JetBrains Mono'; font-size: 9px;">BEST_SELLER</div>
                <img src="{{ asset('img/2.png') }}" alt="Saint Line">
            </div>
            <div class="info-pieza">
                <h3>SAINT LINE OVERSIZE</h3>
                <div class="data-table">
                    <div class="data-item"><span class="label">CATEGORÍA</span><span class="value">Premium Line</span></div>
                    <div class="data-item"><span class="label">PRECIO</span><span class="value">$20.00 USD</span></div>
                </div>
                <div class="btn-action-group">
                    <a href="{{ route('producto.show', ['id' => '2']) }}" class="btn-view-spec">ADQUIRIR_ESPECIFICACIONES</a>
                    <a href="https://wa.me/584125245470?text=Solicito%20Nodo_02" class="btn-order">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Nodo 03: Evangelion --}}
        <div class="pieza-expo">
            <div class="corner-data top-l">ID: 003_VNTX</div>
            <div class="corner-data bot-r">TIMESTAMP: 2026_MAR</div>
            <div class="img-container">
                <div style="position: absolute; top: 10px; left: 10px; z-index: 5; background: #4A55A6; color: white; padding: 2px 6px; font-family: 'JetBrains Mono'; font-size: 9px;">ANIME_COLLAB</div>
                <img src="{{ asset('img/3.png') }}" alt="Evangelion Collab">
            </div>
            <div class="info-pieza">
                <h3>VNTX x EVANGELION</h3>
                <div class="data-table">
                    <div class="data-item"><span class="label">CATEGORÍA</span><span class="value">Limited Edit</span></div>
                    <div class="data-item"><span class="label">PRECIO</span><span class="value">$20.00 USD</span></div>
                </div>
                <div class="btn-action-group">
                    <a href="{{ route('producto.show', ['id' => '3']) }}" class="btn-view-spec">ADQUIRIR_ESPECIFICACIONES</a>
                    <a href="https://wa.me/584125245470?text=Solicito%20Nodo_03" class="btn-order">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Nodo 04: Urban Tech --}}
        <div class="pieza-expo">
            <div class="corner-data top-l">ID: 004_VNTX</div>
            <div class="corner-data bot-r">TIMESTAMP: 2026_APR</div>
            <div class="img-container">
                <div style="position: absolute; top: 10px; left: 10px; z-index: 5; background: var(--verde-pizarra); color: white; padding: 2px 6px; font-family: 'JetBrains Mono'; font-size: 9px;">STOCK_READY</div>
                <img src="{{ asset('img/4.png') }}" alt="Urban Tech">
            </div>
            <div class="info-pieza">
                <h3>URBAN TECH OVERSIZE</h3>
                <div class="data-table">
                    <div class="data-item"><span class="label">CATEGORÍA</span><span class="value">Streetwear</span></div>
                    <div class="data-item"><span class="label">PRECIO</span><span class="value">$20.00 USD</span></div>
                </div>
                <div class="btn-action-group">
                    <a href="{{ route('producto.show', ['id' => '4']) }}" class="btn-view-spec">ADQUIRIR_ESPECIFICACIONES</a>
                    <a href="https://wa.me/584125245470?text=Solicito%20Nodo_04" class="btn-order">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Nodo 05: Brutalist --}}
        <div class="pieza-expo">
            <div class="corner-data top-l">ID: 005_VNTX</div>
            <div class="corner-data bot-r">TIMESTAMP: 2026_APR</div>
            <div class="img-container">
                <div style="position: absolute; top: 10px; left: 10px; z-index: 5; background: var(--acento-rojo); color: white; padding: 2px 6px; font-family: 'JetBrains Mono'; font-size: 9px;">NEW_DATA</div>
                <img src="{{ asset('img/5.png') }}" alt="Brutalist Edition">
            </div>
            <div class="info-pieza">
                <h3>BRUTALIST EDITION</h3>
                <div class="data-table">
                    <div class="data-item"><span class="label">CATEGORÍA</span><span class="value">Exclusive</span></div>
                    <div class="data-item"><span class="label">PRECIO</span><span class="value">$25.00 USD</span></div>
                </div>
                <div class="btn-action-group">
                    <a href="{{ route('producto.show', ['id' => '5']) }}" class="btn-view-spec">ADQUIRIR_ESPECIFICACIONES</a>
                    <a href="https://wa.me/584125245470?text=Solicito%20Nodo_05" class="btn-order">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div style="padding: 60px 20px; text-align: center; font-family: 'JetBrains Mono'; font-size: 9px; color: var(--verde-pizarra); border-top: 1px solid rgba(227, 220, 210, 0.05);">
        <p>TERMINAL_ACCESS_GRANTED // VENTUX_STUDIO // 2026</p>
    </div>
@endsection