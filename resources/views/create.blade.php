@extends('layout')

@section('title')
Añadir items
@endsection

@section('content')
<h1>Añade un item</h1>
{{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <li> {{ $error }}</li>
@endforeach
@endif --}}

<form method="post" action="{{ route('items.store') }}">
    @csrf
    <!-- <input name="id" placeholder="Introduzca id" minlength="3" pattern="[1,9]{*}" required value="{{ old('id') }}"><br>
    {!! $errors->first('id','<small>:message</small><br>') !!}-->
    <label for="nombre"> Nombre </label><br>
    <input name="nombre" placeholder="Introduzca nombre" maxlength="24" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required value="{{ old('nombre') }}"><br>
    {!! $errors->first('nombre','<small>:message</small><br>') !!}
    <label for="precio"> Precio </label><br>
    <input name="precio" placeholder="Introduzca precio" pattern="^\d{1,8}(?:\.\d{1,2})?$" required value="{{ old('precio') }}"><br>
    {!! $errors->first('precio','<small>:message</small><br>') !!}
    <label for="color"> Color </label><br>
    <input name="color" type="color" required value="{{ old('color') }}"><br>
    {!! $errors->first('color','<small>:message</small><br>') !!}
    <label for="material"> Material <br>
        <label for="indestructible">
            <input type="radio" name="material" value="indestructible" {{ old('material' == 'indestructible' ? 'checked' : '' ) }}"}} />
            Indestructible</label> <br>
        <label for="consumible">
            <input type="radio" name="material" value="consumible" {{ old('material' == 'consumible'  ? 'checked' : '' ) }} />
            Consumible</label> <br>
        <label for="normal">
            <input type="radio" name="material" value="normal" {{ old('material' == 'normal'  ? 'checked' : '' ) }} />
            Normal</label> <br>
    </label>
    {!! $errors->first('material','<small>:message</small><br>') !!}
    <label for="repuesto_diat"> Last sold at</label></br>
    <input type="date" name="repuesto_dia" value="{{ old('repuesto_dia') }}" /><br>
    {!! $errors->first('repuesto_dia','<small>:message</small><br>') !!}


    <button>Crear</button>
</form>
@endsection