<header>
    <nav>
        <ul>
            <li>
                <a href="/" <?= isCurrentUri('/') ? 'style="font-weight:bold"' : '' ?>>Home</a>
            </li>
            <li>
                <a href="/about" <?= isCurrentUri('/about') ? 'style="font-weight:bold"' : '' ?>>About</a>
            </li>
        </ul>
    </nav>
</header>