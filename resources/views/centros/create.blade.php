@extends('layouts.plantilla')

@section('title','Create')

@section('content')
<h2 class="text-center">Crear Centro</h2>
<div class="continer d-flex justify-content-center">
    <form class="form border border-secondary text-start bg-light m-2 w-75" action="{{route('centros.store', $centro)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            @foreach ($errors->all() as $error)
            <ul>
                <li class="text-danger">
                {{ $error }}
                </li> 
            </ul>
            <br/>
            @endforeach
        <div>
        
        <div class="form-group m-2">
            <label>@lang('Name')<br> <input class="form-control" type="text" name="name" value="{{ old('name'), $centro->name}}" required></label>
            @error('name')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="form-group m-2">
            <label>@lang('Image')<br> <input class="form-control" type="file" name="avatar" required></label>
            @error('avatar')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror
        </div>
        
        <div class="form-group m-2">
            <label>@lang('Capacity') <br> <input type="number" class="form-control" name="capacidad" value="{{ old('capacidad'), $centro->capacidad }}" required></label>
            @error('capacidad')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror
        </div>
        
        <div class="form-group m-2">
            <label>@lang('Founded'): <br> <input type="date" class="form-control" name="fundado" value="{{ old('fundado')}}"></label>
            @error('fundado')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror
        </div>
        
        <div class="form-group m-2">
            <label>@lang('Entity'):</label>
            <br> 
                <label>Pública<input type="radio" name="entidad" value="publica" {{ old('entidad')=="publica" ? 'checked='.'"checked"' : '' }} ></label><br>
                <label>Privada<input type="radio" name="entidad" value="privada" {{old('entidad') == "privada" ? 'checked='.'"checked"' : '' }}></label><br>
                <label>Concertada<input type="radio" name="entidad" value="concertada" {{old('entidad') == "concertada" ? 'checked='.'"checked"' : '' }}></label><br>
            <br>
            @error('entidad')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror
        </div>
        
        <div class="form-group m-2">
            <label>@lang('Extraescolar'):</label>
            <br>
            <label for="extraescolar">Selecciona</label>
            <br>
            <select name="extraescolar" id="extraescolar">
                <option value="">--Selecciona una opcion--</option>
                <option value="futbol" @if (old('extraescolar') === 'futbol') selected @endif> futbol</option>
                <option value="baile" @if (old('extraescolar') === 'baile') selected @endif>baile</option>
                <option value="repaso" @if (old('extraescolar') === 'repaso') selected @endif>repaso</option>
            </select>
        </div>
        
        <div class="form-group m-2">
            <label>@lang('Description'):</label>
            <br>
            <textarea name="descripcion" rows="2" required>
                {{ old('descripcion') }}
            </textarea>
        
            @error('descripcion')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror
        </div>
        
        <div class="form-group m-2">
            <label>@lang('Terms of Service'):</label>
                
            <input type="checkbox" value="true" name="terminos" {{ old('terminos') === 'true' ? 'checked='.'"checked"' : '' }}>

            @error('terminos')
                <br>
                <small class="text-danger">*{{$message}}</small>
                <br>
            @enderror
        </div>
        <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">
        <button type="submit" class="btn btn-success p-1 m-2">@lang('Create')</button>
    </form>
</div>
@endsection