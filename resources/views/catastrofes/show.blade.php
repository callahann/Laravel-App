@extends('layouts.principal')
@section('content')
      
                <div class="container">
                  <div class="panel-body">
                   <center><p><FONT SIZE = 4><strong> Nombre Catastrofe:</strong> {{$catastrofes->nombre_catas}}</FONT></p>
                <div class="form-group row">
                  <div class="col-md-4">
                    <p><FONT SIZE = 4><strong>Tipo:</strong> {{$catastrofes->tipo_catas}}</FONT></p>
                  </div>
                  @foreach($catastrofe_comunas as $cc)
                    @if($catastrofes->id == $cc->catastrofe_id)
                      @foreach($comunas as $comuna)
                        @if($cc->comuna_id == $comuna->id)
                          <div class="col-md-4">
                            <p><FONT SIZE = 4><strong>Comuna:</strong> {{$comuna->nombre_com}}</FONT></p>
                          </div>
                          @foreach($regions as $region)
                            @if($region->id == $comuna->regions_id)
                              <div class="col-md-4">
                                <p><FONT SIZE = 4><strong>Región:</strong> {{$region->nombre_reg}}</FONT></p>
                              </div>
                            @endif
                          @endforeach
                        @endif
                      @endforeach
                    @endif
                  @endforeach                   
                    <p><FONT SIZE = 4><strong>Descripción:</strong> {{$catastrofes->descripcion_c}}</FONT></p>
                </div> </center>               
                  </div>                  

                <div class="col-md-12" style="margin-top: 20px;">
                <div class="pricing-table">
                 <div class="panel panel-primary" style="border: none;">
                        <div class="controle-header panel-heading panel-heading-landing">
                            <h1 class="panel-title panel-title-landing">

                                     <div class="col-md-4 col-md-offset-0">
                                        <FONT SIZE = "5">MEDIDAS DE AYUDA</FONT>
                                     </div>
                                  <button class="active"><a href="/catastrofes/detalle/{{$catastrofes->id}}/crear_bingo"><i class="fa fa-home fa-fw"></i><font color="black"><B> Crear Bingos</B></font></a></button>

                                  <button class="active"><a href="/catastrofes/detalle/{{$catastrofes->id}}/crear_recoleccion"><i class="fa fa-home fa-fw"></i><font color="black"><B> Crear Recolecciones </B></font></a></button>

                                  <button class="active"><a href="/catastrofes/detalle/{{$catastrofes->id}}/crear_voluntariado"><i class="fa fa-home fa-fw"></i><font color="black"><B> Crear Voluntariados </B></font></a></button>

                                  <button class="active"><a href="/catastrofes/detalle/{{$catastrofes->id}}/crear_donacion"><i class="fa fa-home fa-fw"></i><font color="black"><B> Crear Donaciones </B></font></a></button>
                            </h1>

                        </div>
                        <div class="controle-panel-heading panel-heading panel-heading-landing-box">
                        </div>
                        <div class="panel-body panel-body-landing">
                            <table class="table">
                                <tr>
                                <td><font color="black">TIPO</font> </td>
                                    <td><font color="green"><B>PORCENTAJE</B></font></td>
                                    <td><font color="blue"><B>FECHA_INICIO<B></font></td>
                                    <td><font color="red"><B>FECHA_TERMINO<B></font></td>
                                    
                                </tr>
                                      <tr>
                                        
                                        @foreach($medidas as $medida)
                                          @if($medida->catastrofes_id == $catastrofes->id)
                                            @foreach($recoleccions as $recoleccion)
                                              @if($recoleccion->medidas_id == $medida->id)
                                                  <th>Recolección</th>
                                                  <th>{{$recoleccion->progreso}}</th>
                                                  <th>{{$recoleccion->fecha_inicio}}</th>  
                                                  <th>{{$recoleccion->fecha_termino}}</th>
                                                  <td class="text-center"><a href="comentar" class="btn btn-ok btn-xs"><span class="glyphicon glyphicon-remove"></span> Comentar</a></td>

                                              @endif
                                            @endforeach
                                          @endif
                                        @endforeach
                                        </tr>
                                        <tr>
                                        @foreach($medidas as $medida)
                                          @if($medida->catastrofes_id == $catastrofes->id)
                                            @foreach($bingos as $bingo)
                                              @if($bingo->medidas_id == $medida->id)
                                                  <th>Bingo</th>
                                                  <th>{{$bingo->progreso}}</th>
                                                  <th>{{$bingo->fecha_inicio}}</th>  
                                                  <th>{{$bingo->fecha_termino}}</th>
                                                  <td class="text-center"><a href="comentar" class="btn btn-ok btn-xs"><span class="glyphicon glyphicon-remove"></span> Comentar</a></td>
                                              @endif
                                            @endforeach
                                          @endif
                                        @endforeach
                                        </tr>
                                        <tr>
                                        @foreach($medidas as $medida)
                                          @if($medida->catastrofes_id == $catastrofes->id)
                                            @foreach($donacions as $donacion)
                                              @if($donacion->medidas_id == $medida->id)
                                                  <th>Donación</th>
                                                  <th>{{$donacion->progreso}}</th>
                                                  <th>{{$donacion->fecha_inicio}}</th>  
                                                  <th>{{$donacion->fecha_termino}}</th>
                                                  <td class="text-center"><a href="comentar" class="btn btn-ok btn-xs"><span class="glyphicon glyphicon-remove"></span> Comentar</a></td>
                                              @endif
                                            @endforeach
                                          @endif
                                        @endforeach
                                        </tr>
                                        <tr>
                                        @foreach($medidas as $medida)
                                          @if($medida->catastrofes_id == $catastrofes->id)
                                            @foreach($voluntariados as $voluntariado)
                                              @if($voluntariado->medidas_id == $medida->id)
                                                  <th>Voluntariado</th>
                                                  <th>{{$voluntariado->progreso}}</th>
                                                  <th>{{$voluntariado->fecha_inicio}}</th>  
                                                  <th>{{$voluntariado->fecha_termino}}</th>
                                                  <td class="text-center"><a href="comentar" class="btn btn-ok btn-xs"><span class="glyphicon glyphicon-remove"></span> Comentar</a></td>
                                              @endif
                                            @endforeach
                                          @endif
                                        @endforeach
                                        </tr>

                            
                            </table>
                        </div>
                    </div>
                </div>
                  </div>
                </div>
@endsection