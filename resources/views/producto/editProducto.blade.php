@extends('layouts.layoutAdmin') 
@section('title', 'Productos | SICRA')
@section('subtema1','Editar Producto') 
@section('ruta')
    <li class="breadcrumb-item"><a href="/productos/list">Productos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar producto</li>
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
                 <form method="POST" action="{{ route('producto.update', $producto->id) }}" role="form">{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="nombre">Nombre:</label> 
                                <input type="text" class="form-control" value="{{$producto->nombre}}" name="nombre" id="nombre" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                               <label for="precio">Precio:</label> 
                                <input type="number" class="form-control" value="{{$producto->precio}}" name="precio" id="precio" readonly>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="descripcion">Descripcion:</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" readonly rows="3">{{$producto->descripcion}}</textarea> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Categoria:</label> 
                                <input type="text" class="form-control" value="{{$producto->categoria}}" name="precio" id="precio" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Sucursal:</label> 
                                <input type="text" class="form-control" value="{{$producto->sucursal}}" name="precio" id="precio" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="fechaCompra">Fecha compra:</label> 
                                <input type="date" class="form-control" value="{{$producto->fechaCompra}}" name="fechaCompra" id="fechaCompra" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="comentarios">Comentarios:</label>
                                <textarea class="form-control" name="comentarios" id="comentarios" required rows="3">{{$producto->comentarios}}</textarea> 
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Estado</label> 
                                <select class="form-control " name="estado" id="estado" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="Abierto">Abierto</option>
                                    <option value="Cerrado">Cerrado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12" align="right">
                                <a href="/productos/list" class="btn btn-danger" style="background: #CB4335">Cancelar</a>
                                <input type="submit" value="Guardar" class="btn btn-info" style="background: #3ba8b4 ; color: white"/> 
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