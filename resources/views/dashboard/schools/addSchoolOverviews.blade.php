
@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#A4A4AA; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="card">
                <div class="card-header">
                    <div class="rounded-circle d-inline-block step1 border border-primary">
                        <strong>1</strong>
                    </div>
                    <p class="d-inline-block">Add School</p>
                    <br>
                    <div class="rounded-circle d-inline-block step1 bg-primary">
                        <strong style="color: white;">2</strong>
                    </div>
                    <p class="d-inline-block">Add School Overviews</p>
                </div>

                <div class="card-body">
                    <div class="container">
                        {!! Form::open(['action' => ['DashboardController@saveSchoolOverviews'], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>First Language</th>
                                        <td>{{ Form::text('first_language', '', ['class' => 'form-control']) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Second Language</th>
                                        <td>{{ Form::text('second_language', '', ['class' => 'form-control']) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pass Rate</th>
                                        <td>{{ Form::number('pass_rate', '', ['class' => 'form-control']) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Level</th>
                                        <td>{{ Form::text('level', '', ['class' => 'form-control']) }}</td>
                                    </tr>
                                    <tr>
                                        <th>EMIS Number</th>
                                        <td>{{ Form::text('emis_no', '', ['class' => 'form-control']) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            {{ Form::hidden('school_id', $school_id) }}

                            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
              </div>

        </div>
    </div>
    
@endsection
