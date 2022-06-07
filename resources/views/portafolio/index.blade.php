@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row justify-content-center'>
        <div class='col-md-8'>
            <div class='card'>
                <div class='card-header card-body d-flex justify-content-between align-items-center'>
                    Gestion de Portafolios
                    <a href="{{route('create')}} " class="btn btn-primary bt-sm">Crear </a>
                </div>
               
            </div>
        </div>
    </div>
    <br>
    @forelse($portafolios as $portafolio)
    <h5 class="card-title">Nombre: {{$portafolio->nombre}} </h5>
    <h5 class="card-title">Descripcion: {{$portafolio->descripcion}} </h5>
    <h5 class="card-title">Categoria: {{$portafolio->categoria}} </h5>
    <h5 class="card-title">Imagen: {{$portafolio->imagen}} </h5>
    <h5 class="card-title">Video: {{$portafolio->url}} </h5>
    <a href="{{route('show',$portafolio)}}" class="btn btn-primary bt-sm">Mas información </a>
    <hr>
    @empty
    <p>No existen proyectos</p>
    @endforelse
</div>
@endsection