@extends ('adminsite.presentacion')
<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop

@section('cabecera')
 @parent
@stop

@section('contenido')

<div class="content-header">
                            <ul class="nav-horizontal text-center">
                            	<li class="active">
                                    <a href="/areas"><i class="gi gi-charts"></i> grados</a>
                                </li>
                                <li>
                                    <a href="/crear-area"><i class="fa fa-home"></i> Crear grado</a>
                                </li>
                            </ul>
                        </div>

 <div class="container">
   <?php $status=Session::get('status');?>

    @if($status=='ok_create')
     <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Sector</strong> registrado con éxito.
     </div>
    @endif

    @if($status=='ok_delete')
     <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Sector</strong> eliminado con éxito.
     </div>
    @endif

    @if($status=='ok_update')
     <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <strong>Sector</strong> actualizado con éxito.
     </div>
    @endif
  </div>

	<div class="container">
          <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Grados</strong> registrados</h2>
                            </div>
                            <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Grado</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($areas as $areas)
                                        <tr>
                                            <td class="text-center">{{$areas->id}}</td>
                                            <td class="text-center">{{$areas->grado}}</td>
                                            <td class="text-center">
                                               <a href="editar-grado/{{$areas->id}}" class="btn btn-primary">Editar</a>

                                               <script language="JavaScript">
                                                 function confirmar ( mensaje ) {
                                                 return confirm( mensaje );}
                                                </script>
                                               <a href="eliminar-grado/{{$areas->id}}"  class="btn btn-danger" onclick="return confirmar('¿Está seguro que desea eliminar el registro?')">Eliminar</button>
                                                                   
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
  </div>




@stop
