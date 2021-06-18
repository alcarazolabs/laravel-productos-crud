@extends('plantilla.plantilla')
@section('titulo','Crear Categoría')

@section('cabecera')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link " href="{{ route('producto.index') }}">Productos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('categoria.index') }}">Categorias</a>
    </li>

    </ul>

@endsection
@section('subtitulo','Crear Categoria')

@section('contenido')
<hr>
<form method='POST', action="{{ route('categoria.store')}}">
@csrf
    <div class="form-group">
       <p>Nombre:</p>
       <input type="text" class="form-control" name="nombre"">
    </div>
    <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Guardar</button>
     {{-- <a href="{{ route('cancelar_categoria') }}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a> --}}
     <a href="{{ route('cancelar', 'categoria.index') }}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
    
</form>

@endsection