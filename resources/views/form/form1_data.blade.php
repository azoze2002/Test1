<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>form_data</title>
</head>
<body>
    <div class="contanier mt-5" >
    <div class="alert alert-success">
        <h1>Welcom:{{ $name }}</h1>
        <p>My age:{{ $age }}</p>
        <p>the email is {{ $email }}</p>
        <p>My phone:{{ $phone }}</p>
    </div>
    </div>

</body>
</html>
