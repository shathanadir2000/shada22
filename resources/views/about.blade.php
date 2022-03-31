<!DOCTYPE html>
<html>
<body>

<h1> Welcome</h1>

@foreach ( $tasks as $key => $task )
<ul>
       <li> <a href="/task/{{$key}}" >{{$task}} </a></li>
</ul>
 @endforeach

</body>
</html>
