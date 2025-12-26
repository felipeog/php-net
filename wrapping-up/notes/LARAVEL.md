# Laravel

## Sail

- `curl -s https://laravel.build/my-app | bash`: creates a Laravel Sail project
- `vendor/bin/sail up`: starts Docker containers
  - `-d`: starts in the background
- `vendor/bin/sail stop`: stops all containers
- `vendor/bin/sail ps`: lists all containers
- `vendor/bin/sail artisan`: runs Artisan commands
- `vendor/bin/sail php`: runs PHP commands
- `vendor/bin/sail composer`: runs Composer commands
- `vendor/bin/sail node`: runs Node commands
- `vendor/bin/sail npm`: runs NPM commands
- `vendor/bin/sail yarn`: runs Yarn commands
- `vendor/bin/sail test`: runs tests
- `vendor/bin/sail shell`: starts a shell
