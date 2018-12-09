@extends('voyager::master')
@section('content')
    <div class="container">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif
        {{ Form::model ($visita) }}
            @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
        <div class="panel panel-bordered">
            <div class="panel-body">
                <div id="datosBasicos">
                    <h4 class="text-white">Datos Básicos</h4>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="ciudad">Ciudad</label>
                          <input type="text" name="ciudad" class="form-control" id="ciudad" value="{{ $visita->ciudad }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="fecha_visita">Fecha Visita</label>
                          <input type="date" name="fecha_visita" class="form-control" id="fecha_visita" value="{{ $visita->fecha_visita }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="punto_venta">Nombre del Punto de Venta</label>
                          <input type="text" name="punto_venta" class="form-control" id="punto_venta" value="{{ $visita->punto_venta }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="nombre_tendero">Nombre del Tendero</label>
                          <input type="text" name="nombre_tendero" class="form-control" id="nombre_tendero" value="{{ $visita->nombre_tendero }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="nombre_visitador">Nombre del Visitador</label>
                          <input type="text" name="nombre_visitador" class="form-control" id="nombre_visitador" value="{{ $visita->nombre_visitador }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="barrio">Barrio</label>
                          <input type="text" name="barrio" class="form-control" id="barrio" value="{{ $visita->barrio }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="direccion">Direccion</label>
                          <input type="text" name="direccion" class="form-control" id="direccion" value="{{ $visita->direccion }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="celular">Numero de Teléfono o Celular</label>
                          <input type="text" name="celular" class="form-control" id="celular" value="{{ $visita->celular }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="numero_visita">Numero de Visita</label>
                          <input type="text" name="numero_visita" class="form-control" id="numero_visita" value="{{ $visita->numero_visita }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="nit">Nit</label>
                          <input type="text" name="nit" class="form-control" id="nit" value="{{ $visita->nit }}" readonly>
                        </div>
                    </div>
                </div>
                <div id="ventas">
                    <h4>Cumple con ventas</h4>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <select name="ventas" id="ventas" class="form-control" value="{{ $visita->ventas }}" disabled>
                                <option value="1">SI</option>
                                <option value="0">NO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="infaltables">
                    <h4>Productos Infaltables</h4>
                    <div class="row">
                        <div class="col-sm-6" id="inflatablesNescafe">
                            <label for="nescafe">Nescafe</label>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesNescafe1" name="inflatablesNescafe1" {{ $visita->inflatablesNescafe1 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesNescafe1">Nescafe Tradicion dawn jar 12*170g</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesNescafe2" name="inflatablesNescafe2" {{ $visita->inflatablesNescafe2 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesNescafe2">Nescafe Tradicion dawn jar 24*50g</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesNescafe3" name="inflatablesNescafe3" {{ $visita->inflatablesNescafe3 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesNescafe3">Nescafe Tradicion dawn jar 18*85g</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesNescafe4" name="inflatablesNescafe4" {{ $visita->inflatablesNescafe4 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesNescafe4">Dos de las tres referencias de Nescafe Dolca frasco</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesNescafe5" name="inflatablesNescafe5" {{ $visita->inflatablesNescafe5 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesNescafe5">Nescafe café con leche bolsa de 12*200g</label>
                            </div>                            
                        </div>
                        <div class="col-sm-6" id="inflatablesMaggi">
                            <label for="maggi">Maggi</label>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesMaggi1" name="inflatablesMaggi1" {{ $visita->inflatablesMaggi1 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesMaggi1">Maggi en cubo *8 o 12</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesMaggi2" name="inflatablesMaggi2" {{ $visita->inflatablesMaggi2 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesMaggi2">Maggi desmenuzado gallina</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesMaggi3" name="inflatablesMaggi3" {{ $visita->inflatablesMaggi3 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesMaggi3">Maggi desmenuzado costilla</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesMaggi4" name="inflatablesMaggi4" {{ $visita->inflatablesMaggi4 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesMaggi4">Base de bolognesa mas otra base</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesMaggi5" name="inflatablesMaggi5" {{ $visita->inflatablesMaggi5 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesMaggi5">Maggi jugoso al sarten cualquier formato</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesMaggi6" name="inflatablesMaggi6" {{ $visita->inflatablesMaggi6 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesMaggi6">Maggi sopas claras cualquier formato</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" id="inflatablesMaggi7" name="inflatablesMaggi7" {{ $visita->inflatablesMaggi7 =='1' ? 'checked' : '' }} disabled="disabled">
                              <label class="form-check-label" for="inflatablesMaggi7">Maggi crema gourmet pollo 24*76 g</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Caras">
                    <h4>Caras de Exhibicion Inicial</h4>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="caras_ex_nescafe">Caras de Exhibicion Nescafe</label>
                          <select name="caras_ex_nescafe" id="caras_ex_nescafe" class="form-control" disabled>
                              <option value="0" {{ $visita->caras_ex_nescafe =='0' ? 'selected' : '' }}>0</option>
                              <option value="1" {{ $visita->caras_ex_nescafe =='1' ? 'selected' : '' }}>1</option>
                              <option value="2" {{ $visita->caras_ex_nescafe =='2' ? 'selected' : '' }}>2</option>
                              <option value="3" {{ $visita->caras_ex_nescafe =='3' ? 'selected' : '' }}>3</option>
                              <option value="4" {{ $visita->caras_ex_nescafe =='4' ? 'selected' : '' }}>4</option>
                              <option value="5" {{ $visita->caras_ex_nescafe =='5' ? 'selected' : '' }}>5</option>
                              <option value="6" {{ $visita->caras_ex_nescafe =='6' ? 'selected' : '' }}>6</option>
                              <option value="7" {{ $visita->caras_ex_nescafe =='7' ? 'selected' : '' }}>7</option>
                              <option value="8" {{ $visita->caras_ex_nescafe =='8' ? 'selected' : '' }}>8</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="caras_ex_maggi">Caras de Exhibicion Maggi</label>
                          <select name="caras_ex_maggi" id="caras_ex_maggi" class="form-control" disabled>
                              <option value="0" {{ $visita->caras_ex_maggi =='0' ? 'selected' : '' }}>0</option>
                              <option value="1" {{ $visita->caras_ex_maggi =='1' ? 'selected' : '' }}>1</option>
                              <option value="2" {{ $visita->caras_ex_maggi =='2' ? 'selected' : '' }}>2</option>
                              <option value="3" {{ $visita->caras_ex_maggi =='3' ? 'selected' : '' }}>3</option>
                              <option value="4" {{ $visita->caras_ex_maggi =='4' ? 'selected' : '' }}>4</option>
                              <option value="5" {{ $visita->caras_ex_maggi =='5' ? 'selected' : '' }}>5</option>
                              <option value="6" {{ $visita->caras_ex_maggi =='6' ? 'selected' : '' }}>6</option>
                              <option value="7" {{ $visita->caras_ex_maggi =='7' ? 'selected' : '' }}>7</option>
                              <option value="8" {{ $visita->caras_ex_maggi =='8' ? 'selected' : '' }}>8</option>
                          </select>
                        </div>
                    </div>
                    <h4>Caras Adicionales de Nescafe y Maggi</h4>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="caras_ad_nescafe">Caras de Exhibicion Nescafe</label>
                          <select name="caras_ad_nescafe" id="caras_ad_nescafe" class="form-control" disabled>
                              <option value="0" {{ $visita->caras_ad_nescafe =='0' ? 'selected' : '' }}>0</option>
                              <option value="1" {{ $visita->caras_ad_nescafe =='1' ? 'selected' : '' }}>1</option>
                              <option value="2" {{ $visita->caras_ad_nescafe =='2' ? 'selected' : '' }}>2</option>
                              <option value="3" {{ $visita->caras_ad_nescafe =='3' ? 'selected' : '' }}>3</option>
                              <option value="4" {{ $visita->caras_ad_nescafe =='4' ? 'selected' : '' }}>4</option>
                              <option value="5" {{ $visita->caras_ad_nescafe =='5' ? 'selected' : '' }}>5</option>
                              <option value="6" {{ $visita->caras_ad_nescafe =='6' ? 'selected' : '' }}>6</option>
                              <option value="7" {{ $visita->caras_ad_nescafe =='7' ? 'selected' : '' }}>7</option>
                              <option value="8" {{ $visita->caras_ad_nescafe =='8' ? 'selected' : '' }}>8</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="caras_ad_maggi">Caras de Exhibicion Maggi</label>
                          <select name="caras_ad_maggi" id="caras_ad_maggi" class="form-control" disabled>
                              <option value="0" {{ $visita->caras_ad_maggi =='0' ? 'selected' : '' }}>0</option>
                              <option value="1" {{ $visita->caras_ad_maggi =='1' ? 'selected' : '' }}>1</option>
                              <option value="2" {{ $visita->caras_ad_maggi =='2' ? 'selected' : '' }}>2</option>
                              <option value="3" {{ $visita->caras_ad_maggi =='3' ? 'selected' : '' }}>3</option>
                              <option value="4" {{ $visita->caras_ad_maggi =='4' ? 'selected' : '' }}>4</option>
                              <option value="5" {{ $visita->caras_ad_maggi =='5' ? 'selected' : '' }}>5</option>
                              <option value="6" {{ $visita->caras_ad_maggi =='6' ? 'selected' : '' }}>6</option>
                              <option value="7" {{ $visita->caras_ad_maggi =='7' ? 'selected' : '' }}>7</option>
                              <option value="8" {{ $visita->caras_ad_maggi =='8' ? 'selected' : '' }}>8</option>
                          </select>
                        </div>
                    </div>
                    <h4>Total de Stickers Ganados</h4>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="stickers">Stickers Ganados</label>
                          <select name="stickers" id="stickers" class="form-control" disabled>
                              <option value="0" {{ $visita->stickers =='0' ? 'selected' : '' }}>0</option>
                              <option value="1" {{ $visita->stickers =='1' ? 'selected' : '' }}>1</option>
                              <option value="2" {{ $visita->stickers =='2' ? 'selected' : '' }}>2</option>
                              <option value="3" {{ $visita->stickers =='3' ? 'selected' : '' }}>3</option>
                              <option value="4" {{ $visita->stickers =='4' ? 'selected' : '' }}>4</option>
                              <option value="5" {{ $visita->stickers =='5' ? 'selected' : '' }}>5</option>
                              <option value="6" {{ $visita->stickers =='6' ? 'selected' : '' }}>6</option>
                              <option value="7" {{ $visita->stickers =='7' ? 'selected' : '' }}>7</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div id="images">
                  <h4>Imágenes</h4>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="images">Ruta Imágenes</label>
                      <?php
                        $route = explode('|', $visita->images);
                        foreach ($route as $key => $value): ?>
                          @if($value == '')

                          @else
                          <div class="list-group">
                            <a href="{{ url('storage/visitas/'.'visita-'.$visita->numero_visita.'/'.$visita->nit.'/'.'img-'.$value.'.jpg') }}" target="_blank" >{{ 'img-'.$value.'.jpg' }}</a>
                          </div>
                          @endif
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
                <div id="win">
                  <h4>El pdv es ganador</h4>
                  <div class="row">
                    <div class="form-group col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="ganador" id="gridRadios1" {{ $visita->ganador =='1' ? 'checked' : '' }} disabled="disabled">
                          <label class="form-check-label" for="gridRadios1">Si</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="ganador" id="gridRadios2" {{ $visita->ganador =='0' ? 'checked' : '' }} disabled="disabled">
                          <label class="form-check-label" for="gridRadios2">No</label>
                        </div>
                    </div>
                  </div>
                  <fieldset class="form-group">
                  </fieldset>
                </div>
                <div id="observaciones">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="observaciones">Observaciones</label>
                      <textarea rows="4" cols="54" name="observaciones" class="form-control" style="resize:none," readonly>{{ $visita->observaciones }}</textarea>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection