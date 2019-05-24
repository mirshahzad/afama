@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                    <div class="panel-heading">Status Report</div>
                    <div class="panel-body">
                        <table class="table">

                            <tr>


                                <th>Name</th>
                                <th>Address</th>
                                <th>CNIC</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>AreaName</th>
                                <th>Complain</th>
                                <th>Suggestion</th>
                                <th>Upload</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>

                            @foreach($complaints as $complaint)

                                <tr>


                                    <td>{{$complaint->Name}}</td>
                                    <td>{{$complaint->Address}}</td>
                                    <td>{{$complaint->CNIC}}</td>
                                    <td>{{$complaint->Mobile}}</td>
                                    <td>{{$complaint->Email}}</td>
                                    <td>{{$complaint->Subject}}</td>
                                    <td>{{$complaint->AreaName}}</td>
                                    <td>{{$complaint->Complain}}</td>
                                    <td>{{$complaint->Suggestion}}</td>
                                    <td>{{$complaint->Upload}}</td>
                                    <td>{{$complaint->Status}}</td>

                                    <td>

                                        {!! Form::open(array('route'=>['report.destroy', $complaint->id],'method'=>'DELETE')) !!}

                                        {!! link_to_route('report.edit', 'Edit', [$complaint->id], ['class'=>'btn btn-primary']) !!}
                                    </td>
                                    <td>
                                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

