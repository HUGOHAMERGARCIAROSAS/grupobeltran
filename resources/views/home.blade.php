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
            <div class="card">                   
                <div class="body text-center">
                    <input type="text" class="knob" value="86" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#ff598f">
                    <p class="text-muted m-b-0">Unidades para mantenimiento</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>SALES</h6>
                        <span>$500</span>
                    </div>
                    <small class="text-muted">19% compared to last week</small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#604a7b" data-fill-Color="#a092b0">1,4,2,3,6,2</div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>VISITS</h6>
                        <span>$21,215</span>
                    </div>
                    <small class="text-muted">19% compared to last week</small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>LIKES</h6>
                        <span>$421,215</span>
                    </div>
                    <small class="text-muted">19% compared to last week</small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#4f81bc" data-fill-Color="#95b3d7">1,3,5,1,4,2</div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>VISITS</h6>
                        <span>$21,215</span>
                    </div>
                    <small class="text-muted">19% compared to last week</small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card overflowhidden number-chart">
                <div class="body">
                    <div class="number">
                        <h6>LIKES</h6>
                        <span>$421,215</span>
                    </div>
                    <small class="text-muted">19% compared to last week</small>
                </div>
                <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                data-line-Width="1" data-line-Color="#4f81bc" data-fill-Color="#95b3d7">1,3,5,1,4,2</div>
            </div>
        </div>
    </div>
</div>
@endsection