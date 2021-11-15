<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $site->title() .': ' . $page->title(); ?></title>
    <meta name="author" content="Grey Larrain Bratt" />
    <meta name="description" content="<?= $site->description() ?>" />
    <meta name="keywords" content="<?= $site->keywords() ?>" />

    <link rel="favicon" href="<?=$site->url() ?>/assets/images/favicon.jpg" type="photo/jpg" />

    <?= css('assets/css/main.css') ?>
    <?= css('assets/css/' . $page->id() . '.css') ?>
    <link rel="stylesheet" href="https://use.typekit.net/hwm5vyl.css" type="text/css" />

    <script defer src="<?= $site->url() ?>/assets/js/main.js"></script>

</head>

<body id="<?= $page->id() ?>">
    <div id="whole">
        <!-- header -->
        <?= snippet('top') ?>
        <!-- nav -->
        <?= snippet('nav') ?>

        <main>
            <!-- #region page content -->
            
            <a class="box left box1" href="work/webdes">
                <h3>Web Design &rarr;</h3>
            </a>
            <picture class="right">
                <source srcset="<?= image('webdeshead-small.png')->url() ?> 175w,
                <?= image('webdeshead-medium.png')->url() ?> 350w,
                <?= image('webdeshead-large.png')->url() ?> 700w" sizes="(max-width: 175px) 175px,
                    (max-width: 350px) 350px,
                    700px" />
                <img src="<?= image('webdeshead-medium.png')->url() ?>" alt="Examples of Grey's web design projects" />
            </picture>
            <picture class="left">
                <source srcset="<?= image('tradarthead-small.png')->url() ?> 175w,
                            <?= image('tradarthead-medium.png')->url() ?> 350w,
                            <?= image('tradarthead-large.png')->url() ?> 700w" sizes="(max-width: 175px) 175px,
                            (max-width: 600px) 350px,
                            700px" />
                <img src="<? image('tradarthead-medium.png')->url() ?>" alt="Examples of Grey's traditional art projects" />
            </picture>

            <a class="box right box2" href="work/tradart/">
                <h3>&larr; Traditional Art</h3>
            </a>

            <!-- <div class="text ">
                <h5>Homepage Title</h5>
                <p>Home page text goes here&mdash;what do you wanna do with this?? Is it a place for featured content,
                    additional introductory info, or what?? write some stuff when you have time.</p>
            </div> -->

            <!-- #endregion -->

            <?= snippet('footer') ?>
        </main>
</body>

</html>
