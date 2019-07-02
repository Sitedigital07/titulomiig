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
                                         <label class="col-md-3 control-label" for="example-password-input">Asignatura</label>
                                          <div class="col-md-9">
                                           {{ Form::select('asignatura', [$titulos->asignatura => $titulos->asignatura,
                                           '1' => 'Matemáticas',
                                           '2' => 'Español',
                                           '3' => 'Sociales',
                                           '4' => 'Comprensión Lectora',
                                           '5' => 'Inglés',
                                           '6' => 'Artística',
                                           '7' => 'Interés General',
                                           '12' => 'Pre Jardín',
                                           '13' => 'Jardín',
                                           '14' => 'Transición'], null, array('class' => 'form-control')) }}
                                          </div>
                                        </div>

                                         <div class="form-group">
                                         <label class="col-md-3 control-label" for="example-password-input">Grado</label>
                                          <div class="col-md-9">
                                           {{ Form::select('grado', [$titulos->grado => $titulos->grado,
                                           '1' => 'Primero',
                                           '2' => 'Segundo',
                                           '3' => 'Tercero',
                                           '4' => 'Cuarto',
                                           '5' => 'Quinto',
                                           '6' => 'Sexto',
                                           '7' => 'Séptimo',
                                           '8' => 'Octavo',
                                           '9' => 'Noveno',
                                           '10' => 'Décimo',
                                           '11' => 'Once',
                                           '12' => 'Pre Jardín',
                                           '13' => 'Jardín',
                                           '14' => 'Transición'], null, array('class' => 'form-control')) }}
                                          </div>
                                        </div>

                                        <div class="form-group">
                                         <label class="col-md-3 control-label" for="example-password-input">Portafolio</label>
                                          <div class="col-md-9">
                                           {{ Form::select('portafolio', [$titulos->portafolio => $titulos->portafolio,
                                           '1' => 'Portafolio Privado',
                                           '2' => 'Portafolio Público',
                                           '3' => 'Portafolio Especial'], null, array('class' => 'form-control')) }}
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
