@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#A4A4AA; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="card">
                <div class="card-header">
                    <div class="rounded-circle d-inline-block step1 bg-primary">
                        <strong style="color: white;">1</strong>
                    </div>
                    <p class="d-inline-block">Add School</p>
                    <br>
                    <div class="rounded-circle d-inline-block step1 border border-primary">
                        <strong>2</strong>
                    </div>
                    <p class="d-inline-block">Add School Overviews</p>
                </div>

                <div class="card-body">
                    <div class="container">
                        {!! Form::open(['action' => ['DashboardController@saveSchool'], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                            {{ Form::label('image', 'School badge')}}
                            {{ Form::file('image',['class' => 'form-control'] ) }}
                            <br>    
                            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'School Name']) }}
                            <br>
                            {{ Form::textArea('description', '', ['class' => 'form-control',  'placeholder' => 'Bio/description']) }}
                            <br>
                            {{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address']) }}
                            <br>
                            {{ Form::text('website', '', ['class' => 'form-control', 'placeholder' => 'Website address']) }}
                            <br>
                            {{ Form::text('phone_number', '', ['class' => 'form-control', 'placeholder' => 'Telephone numer']) }}
                            <br>
                            {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail address']) }}
                            <br>
                            {{ Form::number('school_fees', '', ['class' => 'form-control', 'placeholder' => 'School fees p/y']) }}
                            <br>
                            {{ Form::number('rating', '', ['class' => 'form-control', 'placeholder' => 'Site rating']) }}
                            <br>
                            {{ Form::text('level', '', ['class' => 'form-control', 'placeholder' => 'Academic level']) }}
                            <br>
    
                            {{ Form::submit('Next', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
              </div>

        </div>
    </div>
    
@endsection