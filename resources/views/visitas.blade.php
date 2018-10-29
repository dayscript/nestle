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
        <div class="panel-heading">Consultar</div>
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
                        <div class="form-group">
                            <label class="text-white">Numero de Visita</label>
                            <select name="visita" id="visita" class="form-control">
                                <option value="1">Visita 1</option>
                                <option value="2">Visita 2</option>
                                <option value="3">Visita 3</option>
                                <option value="4">Visita 4</option>
                                <option value="5">Visita 5</option>
                                <option value="6">Visita 6</option>
                                <option value="7">Visita 7</option>
                                <option value="8">Visita 8</option>
                                <option value="9">Visita 9</option>
                                <option value="10">Visita 10</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="text-white">Numero de NIT</label>
                            {{ Form::text('nit', null, array('placeholder' => 'NIT', 'class' => 'form-control form-control-sm mt-3 col-xl-6 col-md-12 col-sm-12' )) }}
                        </div>
                        <div class="form-group">
                            {{ Form::button( 'Buscar', array('type' => 'submit', 'class' => 'btn btn-danger mt-3' )) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
@endsection
