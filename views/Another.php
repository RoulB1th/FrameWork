<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roul</title>
</head>
<body>
    
    <?php if($id) :?>
        <h1>Welcome To <?=$id?></h1>
        <?php else: ?>
            <h1>No ID Provided</h1>
    <?php endif ?>
</body>
</html>