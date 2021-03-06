@extends('layout')

@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de Egresado</h5>
                <span>Agregar nuevo Egresado</span>
            </div>
            <div class="card-block">
                <form>
                    <h4 class="sub-title">Datos Personales</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombres</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-round" placeholder="Nombres completos">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Apellidos</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-round" placeholder="Apellidos paterno y materno">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Dirección</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-round" placeholder="Dirección actual">
                        </div>
                    </div>
                    <br>
                    <h4 class="sub-title">Datos de Egreso</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Carrera</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-round" value="Ingenieria de Sistemas" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Año de egreso</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control form-control-round" placeholder="fecha de egreso">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Numero de Promoción</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control form-control-round" placeholder="# Promoción">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Puesto</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control form-control-round" placeholder="Orden academico">
                        </div>
                    </div>                    
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Con bachiller</label>
                    </div>                   
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Titulado</label>
                    </div>                   
                </form>   
                <br>
                <br>

                <label class="btn btn-outline-success" for="success-outlined">Guardar</label>                
                <label class="btn btn-outline-danger" for="danger-outlined">Cancelar</label>
                                    
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div>

 
@endsection