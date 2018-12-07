@extends('layout.layout')

@section('conteudo')

<div id="candidatos" class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">Inscritos</h4>
            </div>
            <div class="card-body">
              @yield('index')
                
                <!-- end col-md-12 -->
            </div>
        </div>
    </div>
</div>

@endsection