@extends ('adminsite.presentacion')

<!-- Define el titulo de la Página -->    
@section('title')
Gestión de usuarios Libros & Libros
@stop


 @section('cabecera')
 @parent
    <link rel="stylesheet" href="validaciones/dist/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="validaciones/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="validaciones/dist/js/bootstrapValidator.js"></script>
 @stop


@section('contenido')

<div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="/titulos"><i class="fa fa-file-text"></i> Titulos</a>
                                </li>
                                <li class="active">
                                    <a href="/crear-titulo"><i class="fa fa-plus-circle"></i> Crear titulo</a>
                                </li>
                            </ul>
                        </div>

     <div class="container">
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
                                    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/creartitulo'))) }}
                                       
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Titulo</label>
                                            <div class="col-md-9">
                                                {{Form::text('nombre', '', array('class' => 'form-control','placeholder'=>''))}}
                                            </div>
                                        </div>

                                

                                           <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Asignatura</label>
                                            <div class="col-md-9">
                                                <select id="example-select" name="asignatura" class="form-control">
                                                    <option value="" disabled selected>Seleccione asignatura</option>
                                                      <option value="1">Matemáticas</option>
                                                      <option value="2">Español</option>
                                                      <option value="3">Sociales</option>
                                                      <option value="4">Comprensión Lectora</option>
                                                      <option value="5">Inglés</option>
                                                      <option value="6">Artística</option>
                                                      <option value="7">Interés General</option>
                                                      <option value="12">Pre Jardín</option>
                                                      <option value="13">Jardín</option>
                                                      <option value="14">Transición</option>
                                                </select>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Grado</label>
                                            <div class="col-md-9">
                                                <select id="example-select" name="grado" class="form-control">
                                                    <option value="" disabled selected>Seleccione grado</option>
                                                      <option value="1">Primero</option>
                                                      <option value="2">Segundo</option>
                                                      <option value="3">Tercero</option>
                                                      <option value="4">Cuarto</option>
                                                      <option value="5">Quinto</option>
                                                      <option value="6">Sexto</option>
                                                      <option value="7">Séptimo</option>
                                                      <option value="8">Octavo</option>
                                                      <option value="9">Noveno</option>
                                                      <option value="10">Décimo</option>
                                                      <option value="11">Once</option>
                                                      <option value="12">Pre Jardín</option>
                                                      <option value="13">Jardín</option>
                                                      <option value="14">Transición</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="col-md-3 control-label" for="example-select">Portafolio</label>
                                           <div class="col-md-9">
                                            {{ Form::select('portafolio', ['' => 'Seleccione Portafolio',
                                            '1' => 'Completo',
                                            '2' => 'Especial'], null, array('class' => 'form-control')) }}
                                          </div>
                                      </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Precio</label>
                                            <div class="col-md-9">
                                                {{Form::text('precio', '', array('class' => 'form-control','placeholder'=>''))}}
                                            </div>
                                        </div>
                                       
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Crear titulo</button>
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
                        message: 'El campo nombre es requerido'
                    },
                    stringLength: {
                        min: 2,
                        max: 200,
                        message: 'El campo nombre debe contener un mínimo de 2 y un máximo de 200 caracteres'
                    }
                }
            },
   asignatura: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo asignatura es requerido'
                    } 
                }
            },

       grado: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo grado es requerido'
                    }
                }
            },

             precio: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo precio es requerido'
                    },
                    stringLength: {
                        min: 2,
                        max: 150,
                        message: 'El campo precio debe contener un mínimo de 2 y un máximo de 6 caracteres'
                    }
                }
            }, 

              portafolio: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'El campo portafolio es requerido'
                    },
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
