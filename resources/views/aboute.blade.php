
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h1>Hellow , <?php echo $name ?></h1>
    <form action="store", method="POST">
        @csrf
        <input type="text" name ="name">
        <button type="submit"  >send </button>
    </form>
</body>
</html>