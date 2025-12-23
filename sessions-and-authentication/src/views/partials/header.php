<?php

$activeStyle = 'style="font-weight:bold"';
$inactiveStyle = '';
$links = [
    [
        'uri' => '/',
        'label' => 'Home'
    ],
    [
        'uri' => '/notes',
        'label' => 'Notes'
    ],
    [
        'uri' => '/notes/create',
        'label' => 'Create note'
    ]
];

?>

<header>
    <nav>
        <ul>
            <?php foreach ($links as $link): ?>
                <li>
                    <a href="<?= $link['uri'] ?>" <?= is_current_uri($link['uri']) ? $activeStyle : $inactiveStyle ?>>
                        <?= $link['label'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>

    <div>
        <?php if (isset($_SESSION['user'])): ?>
            <a href="#">Logout</a>
        <?php else: ?>
            <a href="#">Login</a>
            <a href="/register">Register</a>
        <?php endif ?>
    </div>
</header>