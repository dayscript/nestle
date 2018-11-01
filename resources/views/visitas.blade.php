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
            {{ Form::open(array('url' => '/visitas', 'files'=> true)) }}
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
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
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
                                                <input type="checkbox" name="inflatablesNescafe1" value="1">Nescafe Tradicion
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgNescafe1" type="file" id="imgNescafe1">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesNescafe2" value="1">Nescafe Tradicion
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgNescafe2" type="file" id="imgNescafe2">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesNescafe3" value="1">Nescafe Tradicion
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgNescafe3" type="file" id="imgNescafe3">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesNescafe4" value="1">2 Referencias Nescafe Dolca
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgNescafe4" type="file" id="imgNescafe4">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesNescafe5" value="1">Nescafe Cafe con Leche
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgNescafe5" type="file" id="imgNescafe5">
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
                                                <input type="checkbox" name="inflatablesMaggi1" value="1">Uno
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgMaggi1" type="file" id="imgMaggi1">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesMaggi2" value="1">Dos
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgMaggi2" type="file" id="imgMaggi2">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesMaggi3" value="1">Tres
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgMaggi3" type="file" id="imgMaggi3">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesMaggi4" value="1">Cuatro
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgMaggi4" type="file" id="imgMaggi4">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesMaggi5" value="1">Cinco
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgMaggi5" type="file" id="imgMaggi5">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesMaggi6" value="1">Seis
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgMaggi6" type="file" id="imgMaggi6">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline col-sm-3">
                                                <input type="checkbox" name="inflatablesMaggi7" value="1">Siete
                                            </label>
                                            <label class="col-sm-9" for="imageInput">Cargar Imagen
                                                <input name="imgMaggi7" type="file" id="imgMaggi7">
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