<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

</head>
<body>

<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at debitis doloremque eos eum, excepturi hic maxime mollitia nisi nobis odio, quisquam reiciendis, voluptates! Aliquid at dignissimos ea, harum in magnam mollitia nobis possimus quidem quos sapiente voluptatum. Minima, saepe!</h3>


<script src="{{mix('js/app.js')}}"></script>


<script>
    Echo.channel('testChannel')
        .listen('BroadcastEvent', (e) => {
            console.log(e.dell);
            $.notify(e.dell +" has been successfully create");
        });
</script>
</body>
</html>
