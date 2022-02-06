@extends('layouts.plantilla')
@section('title','Eliminar')
    
@section('content')
<h2 class="text-center">Eliminar Centro</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('centros.destroy', $centro)}}" method="post">
        @csrf
        @method('delete')
        <h2>Nombre:</h2>
        <div class="container m-2">
            <ul>
                <li>ID: {{ old('name',$centro->id)}}</p></li>
                <li>{{ old('name',$centro->name)}}</p></li>
            </ul>
            <p>
        </div>
        <button type="submit" class="btn btn-danger p-1 mb-2">@lang('Delete')</button>
    </form>
</div>
@endsection