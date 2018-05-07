
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
                                    <a href="/titulos"><i class="fa fa-home"></i> Titulos</a>
                                </li>
                                <li>
                                    <a href="/crear-titulo"><i class="gi gi-charts"></i> Crear titulo</a>
                                </li>
                                <li>
                                    <a href="/excel-oficina"><i class="gi gi-charts"></i> Importar - Exportar</a>
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
                                            <td class="text-center">{{$titulos->grado}}</td>
                                            <td>{{$titulos->asignatura}}</td>
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















