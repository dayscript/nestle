@extends('voyager::master')
@section('content')
    <div class="container">
        <div class="col-md-12">
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
            @endif
            <div class="panel-heading"></div>
            {{ Form::open(array('url' => '/visitas')) }}
            @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-bordered">
                        <div class="panel-body">
                            <div class="panel-body">
                                {{ $nit->nombre_cliente }} 
                                {{ $nit->nit }} 
                                {{ $nit->razon_social }} 
                                <div class="form-group">
                                    <input type="hidden" name="nombre_cliente" id="nombre_cliente" class="form-control" value="{{ $nit->nombre_cliente }}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="nit" id="nit" class="form-control" value="{{ $nit->nit }}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="razon_social" id="razon_social" class="form-control" value="{{ $nit->razon_social }}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="n_visita" id="n_visita" class="form-control" value="{{ $nit->n_visita }}">
                                </div>
                                <div class="form-group">
                                    <h4 class="text-white">Cumple con ventas</h4>
                                    <select name="ventas" id="ventas">
                                        <option value="si">SI</option>
                                        <option value="no">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group" id="inflatablesNescafe">
                                    <hr>
                                    <h4 class="text-white">Inflatables Nescafe</h4>
                                    <div class="checkbox">
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesNescafe1" name="checkbox[]" value="inflatablesNescafe1">Nescafe Tradicion
                                            </label>
                                            <label class="col-sm-9 inflatablesNescafe1" for="imageInput">Cargar Imagen
                                                <input name="inflatablesNescafe1" type="file" id="inflatablesNescafe1">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesNescafe2" name="checkbox[]" value="inflatablesNescafe2">Nescafe Tradicion
                                            </label>
                                            <label class="col-sm-9 inflatablesNescafe2" for="imageInput">Cargar Imagen
                                                <input name="inflatablesNescafe2" type="file" id="inflatablesNescafe2">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesNescafe3" name="checkbox[]" value="inflatablesNescafe3">Nescafe Tradicion
                                            </label>
                                            <label class="col-sm-9 inflatablesNescafe3" for="imageInput">Cargar Imagen
                                                <input name="inflatablesNescafe3" type="file" id="inflatablesNescafe3">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesNescafe4" name="checkbox[]" value="inflatablesNescafe4">2 Referencias Nescafe Dolca
                                            </label>
                                            <label class="col-sm-9 inflatablesNescafe4" for="imageInput">Cargar Imagen
                                                <input name="inflatablesNescafe4" type="file" id="inflatablesNescafe4">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesNescafe5" name="checkbox[]" value="inflatablesNescafe5">Nescafe Cafe con Leche
                                            </label>
                                            <label class="col-sm-9 inflatablesNescafe5" for="imageInput">Cargar Imagen
                                                <input name="inflatablesNescafe5" type="file" id="inflatablesNescafe5">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group" id="inflatablesMaggi">
                                    <hr>
                                    <h4 class="text-white">Inflatables Maggi</h4>
                                    <div class="checkbox">
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesMaggi1" name="checkbox[]" value="inflatablesMaggi1">Uno
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="inflatablesMaggi1" type="file" id="inflatablesMaggi1">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesMaggi2" name="checkbox[]" value="inflatablesMaggi2">Dos
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="inflatablesMaggi2" type="file" id="inflatablesMaggi2">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesMaggi3" name="checkbox[]" value="inflatablesMaggi3">Tres
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="inflatablesMaggi3" type="file" id="inflatablesMaggi3">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesMaggi4" name="checkbox[]" value="inflatablesMaggi4">Cuatro
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="inflatablesMaggi4" type="file" id="inflatablesMaggi4">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesMaggi5" name="checkbox[]" value="inflatablesMaggi5">Cinco
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="inflatablesMaggi5" type="file" id="inflatablesMaggi5">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesMaggi6" name="checkbox[]" value="inflatablesMaggi6">Seis
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="inflatablesMaggi6" type="file" id="inflatablesMaggi6">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" id="inflatablesMaggi7" name="checkbox[]" value="inflatablesMaggi7">Siete
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="inflatablesMaggi7" type="file" id="inflatablesMaggi7">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ Form::button( 'Siguiente', array('type' => 'submit', 'class' => 'btn btn-danger mt-3' )) }}
        </div>
    </div>
@endsection
