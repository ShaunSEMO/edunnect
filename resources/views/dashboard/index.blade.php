@extends('layouts.app')

@section('content')
  
    <div class="row">
        <div class="col-md-2 side-menu" style="background-color:#A4A4AA; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="content row">
                <div class="col-md-6">
                    @include('dashboard.index.about')
                </div>
            </div>
        </div>
    </div>
  
@endsection
