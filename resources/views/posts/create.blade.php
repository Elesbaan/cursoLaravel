@extends('layout.app')

@section('content')
<div class="card" >
    <div class="card-header">
        <h2></h2>Crear Nuevo Post</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="form-group"></div>
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea name="contenido" id="contenido" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Guardar</button>

        </form>
    </div>
</div>
@endsection