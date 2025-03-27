@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">{{ $producto->nombre }}</h1>
    <div class="mb-4">
        <div class="carousel">
            @foreach ($producto->imagenes as $imagen)
            <img src="{{ asset('storage/' . $imagen->ruta) }}" alt="{{ $producto->nombre }}" class="w-full">
            @endforeach
        </div>
    </div>
    <p class="text-lg">{{ $producto->descripcion }}</p>
    <p class="text-sm text-gray-600">Marca: {{ $producto->marca->nombre }}</p>
    <p class="text-sm text-gray-600">Proveedor: {{ $producto->proveedor->nombre }}</p>
</div>
@endsection
