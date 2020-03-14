<div class="neumorph global-card container" style="text-align:center;">
    <div class="card">
        <h5 class="card-header">About</h5>
        <div class="card-body">
            <img class="img-fluid" style="width: 300px !important;" src="{{ asset($about_info->image) }}" alt="Post header image">
    <br>
    <br>
    <p>{!! $about_info->description!!}</p>
    <br>
    <button class="btn btn-warning newmorph global-btn show-form">Edit</button>

    <br>
    <br>
    <br>

    {!! Form::open(['action' => ['DashboardController@updateAbout', $about_info->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'hidden hidden-form']) !!}

        <div class="form-group">
            {{ Form::label('image', 'Image')}}
            <br>
            {{ Form::file('image',['class' => 'form-control'] ) }}
        </div>
    
        <div class="form-group">
            {{ Form::label('text', 'Text') }}
            {{ Form::textArea('desc', $about_info->description, ['id' => 'summary-ckeditor','class' => 'form-control', 'placeholder' => 'About...']) }}
        </div>
        

        {{-- <div class="form-group">
            <label>Text</label>
            <textarea style="height: 250px;" name="body" class="form-control" id="exampleFormControlTextarea1" placeholder="Article..." id="summary-ckeditor"></textarea>
        </div> --}}
        
        {{Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
        </div>
    </div>
    
</div>
<br><br>