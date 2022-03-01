@extends ('layout/master')

@section('content')
<form action="{{url('post/store')}}" method="POST">
    @csrf
    Title : <br>
    <input type="text" name="title"><br><br>
    Description : <br>
    <textarea name="description" cols="20" rows="6"></textarea><br><br>
    <input type="submit" value="Submit">
</form>
@endSection('content')

