@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Sign-up</h1>
            <p class="lead">Please use this page to join us!.</p></div>

        <div class="card-body">
            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input name="Name" class="form-control" id="" placeholder="Last name, First name">
                </div>
                <form action="/contact" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Name">Create Email</label>
                        <input name="email" class="form-control" id="email" placeholder="psy@example.com">
                    </div>
                    <form action="/contact" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Name">Create Password</label>
                            <input name="email" class="form-control" id="email" placeholder="password">
                            <form action="/contact" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Name">Confirm Password</label>
                                    <input name="email" class="form-control" id="email" placeholder="verify password">
                                </div>
                                <div class="form-group">
                                    <label for="body">Message</label>
                                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </form>
                        </div>
@endsection
