@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">






    <table class="table">
        <thead>
        <tr>

            <th scope="col"></th>
            <th scope="col">All Messages</th>
            <th scope="col">Sender's Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><a href="/bootcard">Message</a></td>
            <td>Messi</td>
            <td><button type="submit" class="btn btn-primary mb-2">Delete</button>  </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a href="bootcard">Message</a></td>
            <td>Ronaldo</td>
            <td><button type="submit" class="btn btn-primary mb-2">Delete</button>     </td>
        </tr>
        <tr>

        </tr>
        </tbody>
    </table>



@endsection