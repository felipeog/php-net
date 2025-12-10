<?php

$activeStyle = 'style="font-weight:bold"';
$inactiveStyle = '';
$links = [
    [
        'path' => '/',
        'label' => 'Home'
    ],
    [
        'path' => '/about',
        'label' => 'About'
    ]
];

?>

<header>
    <nav>
        <ul>
            <?php foreach ($links as $link): ?>
                <li>
                    <a href="<?= $link['path'] ?>" <?= isCurrentUri($link['path']) ? $activeStyle : $inactiveStyle ?>>
                        <?= $link['label'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</header>