@extends('layouts.default',['title'=>'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get in Touch</h2>
                <p>
                    If you having trouble with this service. Please <a href="mailto:youcef.kabouche@yahoo.com"></a>ask for help
                </p>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="name" class ="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email" class ="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="name" class ="control-label">Message</label>
                        <textarea class="form-control" rows="10" cols="10" name="message"required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit Enquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop