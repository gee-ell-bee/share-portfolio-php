
        <nav>
            <ul>
                <?php /* foreach ($site->children()->listed() as $item): ?>
                <li>
                    <a href="<?= $site->url() ?>"><?= $item->title() ?></a>
                </li>
                <?php endforeach */ ?>
                <li>
                    <a href="<?= $site->url() ?>">home</a>
                </li>
                <li>
                    <a href="<?= $site->url() . '/' . 'about/' ?>">about</a>
                </li>
                <li>
                    <span class="carrot"></span>
                    <a id="myBtn" class="dropbtn">work</a>
                    <ul id="navDropdown" class="hide">
                    <?php foreach (page('work')->children()->listed() as $item): ?>
                        <li>
                            <a href="<?= $site->url() . '/' . $item->id() ?>"><?= $item->page() ?></a>
                        </li>
                    <?php endforeach ?>
                        <!--<li>
                            <a href="work/webdes/">web design</a>
                        </li>
                        <li>
                            <a href="work/tradart/">traditional art</a>
                        </li>-->
                    </ul>
                </li>
                <li>
                    <a href="<?= $site->url() . '/' . 'contact/' ?>">contact</a>
                </li>
            </ul>
        </nav>