<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Studenti</title>
    <link rel="stylesheet" href="../style.css">
    <title>DISCHI</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="containerlogo">
                <img src="https://ajourneyintosound.de/wp-content/uploads/2019/02/spotify_logo.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <?php include __DIR__ . '/dischi.php' ?> <?php foreach ($disks as $cd) : ?>
                <div class="card">
                    <img src="<?php echo $cd['poster'] ?>" alt="">
                    <h3 class="title"><?= $cd["title"] ?></h3>
                    <div class="info">
                        <div><?= $cd['author'] ?></div>
                        <div><?= $cd['year'] ?></div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>
</body>

</html>