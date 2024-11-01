@extends('layouts.app')
@section('title', 'Trainers Edit')
@section('content')

<form class="form-group" method="POST" action="{{ action([\App\Http\Controllers\TrainerController::class, 'update'], $trainer->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ $trainer->name }}" class="form-control">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="{{ $trainer->apellido }}" class="form-control">
    </div>

    <div class="form-group">
        @if($trainer->avatar)
            <p>Avatar actual: {{ $trainer->avatar }}</p>
        @else
            <p>No hay avatar disponible.</p>
        @endif
    </div>

    <div class="form-group">
        <label for="avatar">Subir nuevo avatar:</label>
        <input type="file" name="avatar">
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
