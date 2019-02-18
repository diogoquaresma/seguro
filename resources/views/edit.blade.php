<!doctype html>
<html>
    <head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">        <title></title>

    </head>
    <body>
@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['url' => '/update/', 'class' => 'form-horizontal']) !!}
        <fieldset>

            <legend>Legend</legend>

            <!-- Email -->
            <div class="form-group">
                {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('name', $value = $client['name'], ['required' => 'required','class' => 'form-control', 'placeholder' => 'Name']) !!}
                    {{ Form::hidden('id', $client['id']) }}
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary'] ) !!}
                </div>
            </div>

        </fieldset>

        {!! Form::close()  !!}

    </div>





    </body>

</html>
