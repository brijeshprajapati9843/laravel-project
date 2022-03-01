@include('layout/header')
<h1>Blog Post Application</h1>
<hr>
<a href="{{url('post/create')}}">Add Post</a>
<br/>
<a href="{{url('post/show')}}">Show Post</a>
<hr>
@yield('content')

@include('layout/footer')