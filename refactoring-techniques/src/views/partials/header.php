<?php

$active_style = 'style="font-weight:bold"';
$inactive_style = '';

$left_links = [
    [
        'uri' => '/',
        'label' => 'Home',
        'is_private' => false
    ],
    [
        'uri' => '/notes',
        'label' => 'Notes',
        'is_private' => true
    ],
    [
        'uri' => '/notes/create',
        'label' => 'Create note',
        'is_private' => true
    ]
];
$right_links = [
    [
        'uri' => '/register',
        'label' => 'Register'
    ],
    [
        'uri' => '/login',
        'label' => 'Login'
    ]
];

?>

<header>
    <nav>
        <ul>
            <?php foreach ($left_links as $link): ?>
                <?php if ($link['is_private'] && !isset($_SESSION['user']))
                    continue; ?>

                <li>
                    <a href="<?= $link['uri'] ?>" <?= is_current_uri($link['uri']) ? $active_style : $inactive_style ?>>
                        <?= $link['label'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>

    <?php if (isset($_SESSION['user'])): ?>
        <form method="POST" action="/session">
            <input type="hidden" name="_method" value="DELETE" />

            <button type="submit">Logout</button>
        </form>
    <?php else: ?>
        <nav>
            <ul>
                <?php foreach ($right_links as $link): ?>
                    <a href="<?= $link['uri'] ?>" <?= is_current_uri($link['uri']) ? $active_style : $inactive_style ?>>
                        <?= $link['label'] ?>
                    </a>
                <?php endforeach ?>
            </ul>
        </nav>
    <?php endif ?>
</header>