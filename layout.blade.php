<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<div>
    <h1>BIODATA</h1>
    <p>Berikut ini adalah beberapa biodata mengenai diri saya : </p>
</div>

<div>
    @yield('content')
    <a href="{{ route('m4.identitas') }}"><button class="btn btn-danger">IDENTITAS</button></a>
    <a href="{{ route('m4.pendidikan') }}"><button class="btn btn-primary">PENDIDIKAN</button></a>
    <a href="{{ route('m4.skill') }}"><button class="btn btn-success">SKILL</button></a>
</div>

</body>
</html>