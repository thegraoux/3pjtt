@extends('layouts.app')

@section('content')
<body>
<div>
    <center><h1> Upload a file</h1></center>
        <form action="/store" enctype="multipart/form-data" method="post">
           {{csrf_field()}}
            <input type="file" name="Image">
            <br>
            <input type="submit" value="upload">
        </form>
</div>
</body>
    @endsection