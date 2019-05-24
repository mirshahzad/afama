@extends('layouts.pagelayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Status</div>
                    <div class="panel-body">

                        <div class="form-group">

                            {!! Form::open( array('route'=>['report.update', $complaint->id], 'method'=>'PATCH')) !!}
                            <div class="form-group">
                                {!! Form::label('Name', 'Enter Name') !!}
                                {!! Form::text('Name', $complaint->Name, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Address', 'Enter Address') !!}
                                {!!Form::text('Address', $complaint->Address, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('CNIC', 'Enter CNIC') !!}
                                {!! Form::text('CNIC', $complaint->CNIC, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Mobile', 'Enter Mobile #') !!}
                                {!! Form::text('Mobile', $complaint->Mobile, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Email', 'Enter Email') !!}
                                {!! Form::text('Email', $complaint->Email, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Subject', 'Enter Subject') !!}
                                {!! Form::text('Subject', $complaint->Subject, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('AreaName', 'Enter Area Name') !!}
                                {!! Form::text('AreaName', $complaint->AreaName, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Complain', 'Enter Complain') !!}
                                {!! Form::textarea('Complain', $complaint->Complain, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Suggestion', 'Enter Suggestion') !!}
                                {!! Form::textarea('Suggestion', $complaint->Suggestion, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Upload', 'Enter Upload') !!}
                                {!! Form::text('Upload', $complaint->Upload, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Status', 'Enter Status') !!}
                                {!! Form::text('Status', $complaint->Status, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>

                    @if($errors->any())
                        <ul class="aler alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection