@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    @include('layouts.welcome')
    <div class="row clearfix">
        <div class="col-lg-3">
            <div class="card" style="background:#fff">                   
                <div class="body text-center">
                    <input type="text" class="knob" value="{{$clientes}}" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#ECA52F">
                    <p class="text-muted m-b-0">Clientes</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="background:#fff">                   
                <div class="body text-center">
                    <input type="text" class="knob" value="{{$pendientes}}" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#ECA52F">
                    <p class="text-muted m-b-0">Orden de Trabajo Pendientes</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="background:#fff">                   
                <div class="body text-center">
                    <input type="text" class="knob" value="{{$canceladas}}" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#ECA52F">
                    <p class="text-muted m-b-0">Orden de Trabajo Canceladas</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="background:#fff">                   
                <div class="body text-center">
                    <input type="text" class="knob" value="{{$vehiculos}}" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#ECA52F">
                    <p class="text-muted m-b-0">Vehículos</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>Clientes Vigentes</h6>
                        <span>#</span>
                    </div>
                    <small class="text-muted"><a href="{{route('clientes.vigentes.excel')}}">Descargar Excel</a></small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>Clientes No Vigentes</h6>
                        <span>#</span>
                    </div>
                    <small class="text-muted"><a href="{{route('clientes.novigentes.excel')}}">Descargar Excel</a></small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#4f81bc" data-fill-Color="#95b3d7">1,3,5,1,4,2</div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>Ordenes Facturadas</h6>
                        <span>#</span>
                    </div>
                    <small class="text-muted"><a href="{{route('ordenes.facturadas.excel')}}">Descargar Excel</a></small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>Ordenes No Facturadas</h6>
                        <span>#</span>
                    </div>
                    <small class="text-muted"><a href="{{route('ordenes.no.facturadas.excel')}}">Descargar Excel</a></small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#4f81bc" data-fill-Color="#95b3d7">1,3,5,1,4,2</div>
            </div>
        </div>
    </div>
</div>
@endsection