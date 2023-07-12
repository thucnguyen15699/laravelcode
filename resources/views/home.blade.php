<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1> test </h1>
    <a href="<?php echo route('admin.tintuc', ['slug'=>'tin-tuc','id'=>'1']); ?>"> show link</a>
    {{-- {{ echo date('Y-m-d H:i:s') }} --}}
    <?php
    echo date('Y-m-d H:i:s').'<br>';

    if (env('APP_ENV')== 'local'){
        echo env('APP_ENV');
    }
    else {
        # code... 
        echo ('live');
    }
    ?>
</body>
</html>