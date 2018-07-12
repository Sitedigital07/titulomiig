@extends ('adminsite.presentacion')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


 @section('cabecera')
 @parent
    <link rel="stylesheet" href="/validaciones/dist/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="/validaciones/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="/validaciones/dist/js/bootstrapValidator.js"></script>
 @stop


@section('contenido')


<div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="/usuarios"><i class="fa fa-home"></i> Usuarios</a>
                                </li>
                                <li class="active">
                                    <a href="/crear-usuario"><i class="gi gi-charts"></i> Crear usuario</a>
                                </li>
                            </ul>
                        </div>

     <div class="container">
      @foreach($titulos as $titulos)
@endforeach
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                                        </div>
                                        <h2><strong>Crear</strong> usuarios</h2>
                                    </div>
                                    <!-- END Form Elements Title -->

                                    <!-- Basic Form Elements Content -->
                                    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/editartitulo',$titulos->id))) }}
                                       
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Titulo</label>
                                            <div class="col-md-9">
                                                {{Form::text('nombre', $titulos->nombre, array('class' => 'form-control','placeholder'=>''))}}
                                            </div>
                                        </div>

                                

                                           <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Asignatura</label>
                                            <div class="col-md-9">
                                                <select id="example-select" name="asignatura" class="form-control">
                                                    <option value="{{$titulos->asignatura}}">{{$titulos->asignatura}}</option>
                                                      <option value="1">Matematicas</option>
                                                      <option value="2">Español</option>
                                                      <option value="3">Sociales</option>
                                                      <option value="4">Comprensión lectora</option>
                                                      <option value="5">Ingles</option>
                                                      <option value="6">Artistica</option>
                                                      <option value="7">Interes general</option>
                                                      <option value="12">Prejardin</option>
                                                      <option value="13">Jardin</option>
                                                      <option value="14">Transición</option>
                                                </select>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Grado</label>
                                            <div class="col-md-9">
                                                <select id="example-select" name="grado" class="form-control">
                                                    <option value="{{$titulos->grado}}">{{$titulos->grado}}</option>
                                                      <option value="1">Primero</option>
                                                      <option value="2">Segundo</option>
                                                      <option value="3">Tercero</option>
                                                      <option value="4">Cuarto</option>
                                                      <option value="5">Quinto</option>
                                                      <option value="6">Sexto</option>
                                                      <option value="7">Septimo</option>
                                                      <option value="8">Octavo</option>
                                                      <option value="9">Noveno</option>
                                                      <option value="10">Decimo</option>
                                                      <option value="11">Once</option>
                                                      <option value="12">Prejardin</option>
                                                      <option value="13">Jardin</option>
                                                      <option value="14">Transición</option>
                                                </select>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Precio</label>
                                            <div class="col-md-9">
                                                {{Form::text('precio', $titulos->precio, array('class' => 'form-control','placeholder'=>''))}}
                                            </div>
                                        </div>
                                       
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                   {{ Form::close() }}
                                    <!-- END Basic Form Elements Content -->
                                </div>
                              </div>



<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
     
             nombre: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo dirigido es requerido'
                    },
                    stringLength: {
                        min: 2,
                        max: 200,
                        message: 'El campo nombre debe contener un minimo de 2 y un maximo de 200 Caracteres'
                    }
                }
            },
   asignatura: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo dirigido es requerido'
                    } 
                }
            },

       grado: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo dirigido es requerido'
                    }
                }
            },

             precio: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo dirigido es requerido'
                    },
                    stringLength: {
                        min: 2,
                        max: 150,
                        message: 'El campo precio debe contener un minimo de 2 y un maximo de 150 Caracteres'
                    }
                }
            }, 
    
        }
    });
  $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });

});

</script>


@stop
