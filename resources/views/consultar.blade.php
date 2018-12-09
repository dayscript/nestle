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
        <h1>Consultar visitas</h1>
        {{ Form::open(['route' => 'consultar.index', 'method' => 'GET', 'class' => 'form-inline' ]) }}
        {{ Form::text('nit', null, array('placeholder' => 'NIT', 'class' => 'form-control' )) }}
        {{ Form::button( 'Buscar', array('type' => 'submit', 'class' => 'btn btn-danger mt-3' )) }}
        {{ Form::close() }}

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Nit</th>
            <th class="hidden-xs">Ciudad</th>
            <th>Visita N°</th>
            <th class="hidden-xs">Fecha Visita</th>
            <th>Ver Visita</th>
        </tr>
        @foreach ($visitas as $visita)
                            
            <tr>
                <td>{{ $visita->id }}</th>
                <td>{{ $visita->nit }}</td>
                <td class="hidden-xs">{{ $visita->ciudad }}</td>
                <td>{{ $visita->numero_visita }}</td>
                <td class="hidden-xs">{{ $visita->fecha_visita }}</td>
                <td><a href="/visitas/{{ $visita->id }}"><span class="label label-info">Ver</span></a></td>
            </tr>

        @endforeach
    </table>
    {{ $visitas->render() }}

    </div>
</div>
@endsection
