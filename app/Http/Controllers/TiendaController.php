<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller
{
    // Carga el catálogo principal (tienda.blade.php)
    public function index()
    {
        return view('tienda');
    }

    // Carga la información dinámica de cada camisa
    public function show($id)
    {
        // Diccionario de datos de Ventux Studio
        $productos = [
            '001' => [
                'nombre' => 'OVERSIZE DROP 01',
                'descripcion' => 'Diseño técnico con estética urbana. Corte relax-fit premium con gráficos de alto impacto en serigrafía digital.',
                'precio' => '$20.00',
                'imagen' => '1.png'
            ],
            '002' => [
                'nombre' => 'OVERSIZE DROP 02',
                'descripcion' => 'Línea "Saint". Inspiración gótica técnica con arte expansivo en el reverso. Algodón de alto gramaje.',
                'precio' => '$20.00',
                'imagen' => '2.png'
            ],
            '003' => [
                'nombre' => 'OVERSIZE ANIME 01',
                'descripcion' => 'VNTX x Evangelion. Gráficos de la Unidad-01 con especificaciones técnicas integradas en el diseño.',
                'precio' => '$20.00',
                'imagen' => '3.png'
            ],
            'LTD-01' => [
                'nombre' => 'LIMITED EDITION - 01',
                'descripcion' => 'Pieza exclusiva de colección. Detalles en rojo carmesí sobre base técnica. Solo para usuarios nivel Alpha.',
                'precio' => '$25.00',
                'imagen' => '4.png'
            ],
        ];

        // Verificamos si el ID existe, si no, manda un error 404
        if (!array_key_exists($id, $productos)) {
            abort(404);
        }

        $producto = $productos[$id];

        // Enviamos la variable $producto a la vista detalle.blade.php
        return view('detalle', compact('producto', 'id'));
    }
}