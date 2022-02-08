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

<form method="post" action="{{ route('items.update', $item->id) }}">
    @method('patch')
    @csrf

    @csrf
    <!-- <input name="id" placeholder="Introduzca id" minlength="3" pattern="[1,9]{*}" required value="{{ old('id') }}"><br>
    {!! $errors->first('id','<small>:message</small><br>') !!}-->
    <label for="nombre"> Nombre </label><br>
    <input name="nombre" placeholder="Introduzca nombre" maxlength="24" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required value="{{ old('nombre', $item->nombre) }}"><br>
    {!! $errors->first('nombre','<small>:message</small><br>') !!}
    <label for="precio"> Precio </label><br>
    <input name="precio" placeholder="Introduzca precio" pattern="^\d{1,8}(?:\.\d{1,2})?$" required value="{{ old('precio', $item->precio) }}"><br>
    {!! $errors->first('precio','<small>:message</small><br>') !!}
    <label for="color"> Color </label><br>
    <input name="color" type="color" required value="{{ old('color', $item->color) }}"><br>
    {!! $errors->first('color','<small>:message</small><br>') !!}
    <label for="material"> Material </label><br>
    <input type="radio" name="material" value="indestructible" { {checked = old('material')=="indestructible" } } />
    <label for="indestructible">Indestructible</label> <br>
    <input type="radio" name="material" value="consumible" { { old('material')=="consumible" ? 'checked=' .'"checked"' : '' } } />
    <label for="consumible">Consumible</label> <br>
    <input type="radio" name="material" value="normal" { { old('material')=="normal" ? 'checked=' .'"checked"' : '' } } />
    <label for="normal">Normal</label> <br>
    {!! $errors->first('material','<small>:message</small><br>') !!}
    <label for="last_sold_at"> Last sold at</label></br>
    <input type="date" name="repuesto_dia" value="{{ old('repuesto_dia', $item->repuesto_dia) }}" /><br>
    {!! $errors->first('repuesto_dia','<small>:message</small><br>') !!}


    <button>Actualizar</button>
</form>
@endsection