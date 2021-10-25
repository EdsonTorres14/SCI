@extends('layouts.layoutAdmin') 
@section('title', 'Productos | SICRA')
@section('subtema1','Agregar Producto') 
@section('ruta')
    <li class="breadcrumb-item"><a href="/productos/list">Productos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Agregar producto</li>
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulario</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('producto.save') }}" role="form">{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="nombre">Nombre:</label> 
                                <input type="text" class="form-control" value="{{ old('nombre') }}" name="nombre" id="nombre" required>
                            </div>
                            <div class="col-md-4 mb-3">
                               <label for="precio">Precio:</label> 
                                <input type="number" class="form-control" value="{{ old('precio') }}" name="precio" id="precio" required>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="descripcion">Descripcion:</label>
                                <textarea class="form-control" value="{{ old('descripcion') }}" name="descripcion" id="descripcion" required rows="3"></textarea> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Categoria:</label> 
                                <select class="form-control " name="categoria" id="categoria" required>
                                    <option value="">Seleccione una categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->id}}">
                                            {{$categoria->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Sucursal:</label> 
                                <select class="form-control " name="sucursal" id="sucursal" required>
                                    <option value="">Seleccione una sucursal</option>
                                    @foreach ($sucursales as $sucursal)
                                        <option value="{{$sucursal->id}}">
                                            {{$sucursal->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="fechaCompra">Fecha compra:</label> 
                                <input type="date" class="form-control" value="{{ old('fechaCompra') }}" name="fechaCompra" id="fechaCompra" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12" align="right">
                                <a href="/productos/list" class="btn btn-danger" style="background: #CB4335">Cancelar</a>
                                <input type="submit" value="Registrar" class="btn btn-info" style="background: #3ba8b4 ; color: white"/> 
                            </div> 
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection