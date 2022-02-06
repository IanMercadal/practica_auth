@extends('layouts.plantilla')
@section('title','Index')
    
@section('content')
<h1 class="text-center">{{__('Centers')}}</h1>

<div class="container">
    <table class="table table-dark">
        <thead>
            <p>{{Auth::user()->user_role}}</p>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Imagen</th>
                <th scope="col">Centro</th>
                <th scope="col">Fundado</th>
                <th>
                    @can('create', \App\Models\Centro::class)
                        <button class="btn btn-primary"><a class="text-white" href="{{route('centros.create')}}">@lang('Create')</a></button>
                    @endcan  
                </th>      
            </tr>
        </thead>
        <tbody>

            @foreach($centros as $centro)
            <tr class="text-center">
                <td>{{ $centro->id}}</td>
                <td> <img width="100px" src="{{Storage::url($centro->avatar)}}" alt=""></td>
                <td>{{ $centro->name}}</td>
                <td>{{ $centro->fundado}}</td>
                <td>
                    <a href="{{route('centros.edit', $centro->id)}}"><button class="btn btn-primary">@lang('Edit')</button></a>

                    <button class="btn btn-danger"><a class="text-white" href="{{route('centros.show',$centro->id)}}">@lang('Delete')</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection