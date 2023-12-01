<?php
require_once("./get.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-2">Test Posts API</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 border border-2 mx-auto my-4 rounded">
                <?php foreach($decoded_data as $value): ?>
                <div class="post p-4 my-3 border-bottom border-4 ">
                    <div class="post-head d-lg-flex align-items-center mb-4 border-bottom py-2">
                            <div class="img text-center mb-lg-0 mb-2">
                                <img src="<?= $value->thumbnail ?>" class="img-thumbnail" style="border-radius: 50%; width: 60px;"  alt="">
                            </div>
                        <div class="col-lg-10 col-12">
                            <div class="title mx-2 text-lg-start text-center">
                                <h5 class="mb-0"><?= $value->title ?></h5>
                                <div class="date">
                                    <span style="font-size: 0.7rem;" class="text-black-50">Published At : <?= explodedate($value->publishedAt) ?></span>
                                    <span style="font-size: 0.7rem;" class="text-black-50">, Updated At : <?= explodedate($value->updatedAt) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-body">
                        <p><?= $value->content ?></p>
                    </div>
                </div>
                <?php endforeach ?>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>