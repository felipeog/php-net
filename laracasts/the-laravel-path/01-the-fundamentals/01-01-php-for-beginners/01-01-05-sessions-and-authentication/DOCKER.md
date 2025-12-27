# Docker

- `docker stop $(docker ps -q)`: stop all containers
- `docker rm $(docker ps -aq)`: remove all containers
- `docker builder prune -a`: remove all build cache

## Compose

- `docker compose up`: create and start containers
  - `-d, --detach`: run in the background
  - `--build`: builds images before starting containers
- `docker compose down`: stop and remove containers and networks
  - `-v, --volumes`: remove declared volumes and anonymous volumes attached to containers
