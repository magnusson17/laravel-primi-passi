<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include __DIR__ . '/navbar.blade.php' ?>

    <h2>hello world</h2>

    <a href=" {{ route('favoriti') }} ">Vai a favoriti</a>

    <ul>

        @foreach ($teams as $team) 
        <li>{{$team}}</li>
        @endforeach

        @forelse ($drivers as $driver)
        <li>{{$driver}}</li>

        @empty
        <li>Antonio Giovinazzi</li>

        @endforelse

    </ul>
</body>
</html>