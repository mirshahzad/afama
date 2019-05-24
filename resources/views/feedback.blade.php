@extends('layouts.pagelayout')
@section('feedback')



    <form method="POST" action="{!! url('complaints') !!}" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <div class="col-md-6 col-md-offset-3">

            <h1>Submit your Request</h1>
        </div>

        <div class="col-md-4 col-md-offset-4">

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Write your name here">
            </div>

            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="Address" id="Address" placeholder="Write your address here">
            </div>

            <div class="form-group">
                <label for="CNIC">CNIC</label>
                <input type="text" class="form-control" name="CNIC" id="CNIC" placeholder="Write your CNIC # here">
            </div>
            <div class="form-group">
                <label for="Mobile">Mobile #</label>
                <input type="text" class="form-control" name="Mobile" id="Mobile" placeholder="Write your Mobile #">
            </div>

            <div class="form-group">
                <label for="Email">Email Address</label>
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Write your Email Address">
            </div>

            <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Write your Subject">
            </div>
            <div class="form-group">
                <label for="AreaName">Area Name</label>
                <input type="text" class="form-control" name="AreaName" id="AreaName" placeholder="Write your Area Name">
            </div>

            <div class="form-group">
                <label for="Complain">Complain</label>
                <textarea class="form-control" rows="4" name="Complain" id="Complain" placeholder="Write your complain detail here"></textarea>
            </div>

            <div class="form-group">
                <label for="Suggestion">Suggestion</label>
                <textarea class="form-control" rows="4" name="Suggestion" id="Suggestion" placeholder="Write your suggestion here"></textarea>
            </div>

            {!! Form::open(array('url'=>'feedback', 'files'=>true)) !!}
                <label for = "video">Select video or image to upload</label>
                {!! Form::file('vid') !!}

            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary  pull-right" value="post">
                    Submit
                </button>

            </div>
    </form>
    {!! Form::close() !!}
@endsection