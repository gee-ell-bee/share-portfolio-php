<!-- what i'm trying to do with this snippet:

    1. organize layout
    - create an anchor + picture for each item listed in the "work" folder 
    - depending on whether the item is even or odd:
        - switch the anchor + picture order in the HTML
        - arrange the classes to match
            (ie. since there are only two items per row,
             if the anchor tag is on the left side of the main element, assign it a class of "left."
             the picture will therefore be on the right side, so assign it a class of "right."
             however, if the anchor is on the right, assign it a class of "right," and assign the
             picture to "left.")

    2. make dynamic picture elements
    - use dynamic content to fill in the image URLs, so instead of using the name of each individual
      file it will use '$item->id() . "head-small.png"' for the small size, etc.
    - use dynamic content for image alt text, where the URL for the information is
        $site->url() . $item->id() . "head.image.txt"
      and the field i want to use from that page is "alt()." -->

<!-- line 15 is copied from my nav's php foreach code, but it lists the children instead of listing the number order of the given child/item -->
<?php $number = (page('work')->children()->listed()) ?>
<?php foreach (page('work')->children()->listed() as $item): ?> 
        <!-- my attempt at making an "if" statement for an even item -->
        
         <?php if ($number % 2 == 0) : ?>

        <!-- IF TRUE (aka even): picture element stated first, with a class of "left," & anchor has class of "right" -->
            <picture class="left">
                <source srcset="<?= image('tradarthead-small.png')->url() ?> 175w,
                            <?= image('tradarthead-medium.png')->url() ?> 350w,
                            <?= image('tradarthead-large.png')->url() ?> 700w" sizes="(max-width: 175px) 175px,
                            (max-width: 600px) 350px,
                            700px" />
                <img src="<? image('tradarthead-medium.png')->url() ?>" alt="Examples of Grey's traditional art projects" />
            </picture>

            <a class="box right box2" href="<?= $site->url() . '/' . $item->id() ?>">
                <h3>&larr; <?= $item->page() ?></h3>
            </a>
            
        <!-- not sure if this is right, but i used the php endif tag to finish the declaration.. -->

         <?php else : ?>
        <!-- ELSE (aka odd): anchor element stated first, with a class of "left," & picture has class of "right" -->
            <a class="box left box1" href="<?= $site->url() . '/' . $item->id() ?>">
                <h3><?= $item->page() ?> &rarr;</h3>
            </a>

            <picture class="right">
                <source srcset="<?= image('webdeshead-small.png')->url() ?> 175w,
                <?= image('webdeshead-medium.png')->url() ?> 350w,
                <?= image('webdeshead-large.png')->url() ?> 700w" sizes="(max-width: 175px) 175px,
                    (max-width: 350px) 350px,
                    700px" />
                <img src="<?= image('webdeshead-medium.png')->url() ?>" alt="Examples of Grey's web design projects" />
            </picture>
        <?php endif; ?>
<?php endforeach ?>