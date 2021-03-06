
@extends ('adminsite.presentacion')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop



@section('cabecera')
 @parent
 {{ Html::style('http://cdn.datatables.net/plug-ins/be7019ee387/integration/bootstrap/3/dataTables.bootstrap.css') }}
@stop

@section('contenido')





<div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li class="active">
                                    <a href="/titulos"><i class="fa fa-file-text"></i> Titulos</a>
                                </li>
                                <li>
                                    <a href="/crear-titulo"><i class="fa fa-plus-circle"></i> Crear titulo</a>
                                </li>
                                <li>
                                    <a href="/excel-oficina"><i class="fa fa-download"></i> Importar - Exportar</a>
                                </li>
                            </ul>
                        </div>


<div class="container">
   <?php $status=Session::get('status');?>

    @if($status=='ok_create')
     <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Usuario</strong> registrada con éxito.
     </div>
    @endif

    @if($status=='ok_delete')
     <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Usuario</strong> eliminado con éxito.
     </div>
    @endif

    @if($status=='ok_update')
     <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Usuario</strong> actualizado con éxito.
     </div>
    @endif
  </div>
<div class="container">
    

                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Titulos</strong> registrados</h2>
                            </div>
                            <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Grado</th>
                                            <th>Asignatura</th>
                                            <th>Precio</th>
                                            <th>Subscription</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($titulos as $titulos)
                                        <tr>
                                            <td class="text-center">{{$titulos->nombre}}</td>
                                            @if($titulos->grado == 1)
                                            <td class="text-center">Primero</td>
                                            @elseif($titulos->grado == 2)
                                            <td class="text-center">Segundo</td>
                                            @elseif($titulos->grado == 3)
                                            <td class="text-center">Tercero</td>
                                            @elseif($titulos->grado == 4)
                                            <td class="text-center">Cuarto</td>
                                            @elseif($titulos->grado == 5)
                                            <td class="text-center">Quinto</td>
                                            @elseif($titulos->grado == 6)
                                            <td class="text-center">Sexto</td>
                                            @elseif($titulos->grado == 7)
                                            <td class="text-center">Séptimo</td>
                                            @elseif($titulos->grado == 8)
                                            <td class="text-center">Octavo</td>
                                            @elseif($titulos->grado == 9)
                                            <td class="text-center">Noveno</td>
                                            @elseif($titulos->grado == 10)
                                            <td class="text-center">Décimo</td>
                                            @elseif($titulos->grado == 11)
                                            <td class="text-center">Once</td>
                                            @elseif($titulos->grado == 12)
                                            <td class="text-center">Pre Jardín</td>
                                            @elseif($titulos->grado == 13)
                                            <td class="text-center">Jardín</td>
                                            @elseif($titulos->grado == 14)
                                            <td class="text-center">Transición</td>
                                            @endif

                                            @if($titulos->asignatura == 1)
                                            <td>Matemáticas</td>
                                            @elseif($titulos->asignatura == 2)
                                            <td>Español</td>
                                            @elseif($titulos->asignatura == 3)
                                            <td>Sociales</td>
                                            @elseif($titulos->asignatura == 4)
                                            <td>Comprensión Lectora</td>
                                            @elseif($titulos->asignatura == 5)
                                            <td>Interés General</td>
                                            @elseif($titulos->asignatura == 6)
                                            <td>Artística</td>
                                            @elseif($titulos->asignatura == 7)
                                            <td>Inglés</td>
                                            @elseif($titulos->asignatura == 12)
                                            <td>Pre Jardín</td>
                                            @elseif($titulos->asignatura == 13)
                                            <td>Jardín</td>
                                            @elseif($titulos->asignatura == 14)
                                            <td>Transición</td>
                                            @endif
                                            <td>{{$titulos->precio}}</td>
                                            <td><span class="label label-info">Business</span></td>
                                            <td class="text-center">
                                                <div>
                                                <a href="/editar-titulo/{{$titulos->id}}" class="btn btn-primary">Editar</a>
                                                <a href="/eliminar-titulo/{{$titulos->id}}"  class="btn btn-danger">Eliminar</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
   </div>                  
      
   {{ HTML::script('https://code.jquery.com/jquery-1.11.1.min.js') }}

@stop















