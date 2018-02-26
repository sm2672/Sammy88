@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Log-in</h1>
            <p class="lead">Log-in below</p></div>

        <div class="card-body">
            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Email Addressl</label>
                    <input name="name" class="form-control" id="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input name="name" class="form-control" id="name" placeholder="">
                </div>

                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
