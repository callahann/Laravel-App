@extends('layouts.principal')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading"><h4><b><center>Listado de Catastrofes</center></b></h4></div>
              <div class="panel-body">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8">
                              <table class="table table-responsive">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>NOMBRE</th>
                                      <th>TIPO</th>
                                      <th>REGIÓN</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($catastrofes as $cat)
                                      <tr>
                                        <th>{{ $cat->id }}</th>
                                        <th>{{ $cat->nombre_catas }}</th>
                                        <th>{{ $cat->tipo_catas }}</th>
                                        @foreach($catastrofe_comunas as $cc)
                                          @if($cat->id == $cc->catastrofe_id)
                                            @foreach($comunas as $comuna)
                                              @if($cc->comuna_id == $comuna->id)
                                                @foreach($regions as $region)
                                                  @if($region->id == $comuna->regions_id)
                                                    <th>{{ $region->nombre_reg }}</th> 
                                                  @endif
                                                @endforeach
                                              @endif
                                            @endforeach
                                          @endif
                                        @endforeach
                                        <!--<a href="/catastrofes/{{ $cat->id }}">-->
                                        <td><a href="/catastrofes/detalle/{{$cat->id}}" class="btn btn-primary btn-sm" ><i class="fa fa-eye" aria-hidden="true"></i> Ver Detalle</a>
                                    </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>  
              </div>
          </div>
      </div>
    </div>
</div>
@endsection