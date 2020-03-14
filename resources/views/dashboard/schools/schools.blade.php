<div class="container">
    <a class="btn btn-primary" href="{{ url('/_3dunn3ct_@dm!n_p@n3l_/schools/add') }}">Add School</a>

    <br><br>

    <div class="row schools">
        @foreach ($schools as $school)
            <div class="col-md-4">
                <div class="each-school container" style="text-align: center;">

                    <!-- Button trigger modal -->
                    <div class="modal-inner">
                        <img data-toggle="modal" data-target={{ "#exampleModalCenter".$school->id }} class="img-fluid" src="{{ asset($school->badge) }}" alt="">
                        <h3>{{ $school->name }}</h3>
                        <a href="{{ $school->website }}">{{ $school->website }}</a>
                    </div>
                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id={{ "exampleModalCenter".$school->id }} tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset($school->badge) }}" alt="">
                                <h3>{{ $school->name }}</h3>
                                <a href="{{ $school->website }}">{{ $school->website }}</a>
                                <br><br>
                                <p>{{ $school->description }}</p>
                                <br><br>
                                
                                @foreach ($school->overview as $overview)
                                    <table style="text-align:left;" class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>First Language</th>
                                                <td>{{ $overview->first_language }}</td>
                                            </tr>
                                            <tr>
                                                <th>Second Language</th>
                                                <td>{{ $overview->second_language  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pass Rate</th>
                                                <td>{{ $overview->pass_rate  }}%</td>
                                            </tr>
                                            <tr>
                                                <th>Level</th>
                                                <td>{{ $overview->level }}</td>
                                            </tr>
                                            <tr>
                                                <th>EMIS Number</th>
                                                <td>{{ $overview->emis_no }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endforeach
                                
                            </div>
                            <div class="modal-footer" style="text-align: left !important;">
                                <div class="btn-group">
                                    <a class="btn btn-outline-warning" href="{{ url('/_3dunn3ct_@dm!n_p@n3l_/schools/'.$school->id.'/edit') }}">Edit</a>
                                    {!! Form::open(['action' => ['DashboardController@deleteSchool', $school->id], 'method' => 'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                    {!!Form::close()!!}
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>