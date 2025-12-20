<?php

$activeStyle = 'style="font-weight:bold"';
$inactiveStyle = '';
$links = [
    [
        'path' => '/',
        'label' => 'Home'
    ],
    [
        'path' => '/notes',
        'label' => 'Notes'
    ],
    [
        'path' => '/note-create',
        'label' => 'Create note'
    ]
];

?>

<header>
    <nav>
        <ul>
            <?php foreach ($links as $link): ?>
                <li>
                    <a href="<?= $link['path'] ?>" <?= is_current_uri($link['path']) ? $activeStyle : $inactiveStyle ?>>
                        <?= $link['label'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</header>