call us
<!DOCTYPE html>
<html>
<body>

<h1> Welcome</h1>


<form action="/contact" method = "post" >
    @csrf
    <input type = "text" name="name" id="name">
    <input type = "submit" value="send" >
</form >

<!-- @if (isset($name))
Hello , {{$name}}
@endif -->
</body>
</html>
