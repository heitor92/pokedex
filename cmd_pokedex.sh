#!/bin/sh

NAME_CONTAINER="$(docker ps --filter "label=app.pokedex" --filter status=running --format "{{.Names}}")"
#docker exec -it --user $(id -u):$(id -g) projeto-laravel composer "$@"
echo "Executado cmd no container $NAME_CONTAINER"
echo "WorkDir Container: /var/www/html/"
echo "WorkDir Local: $(pwd)"
docker exec -it $NAME_CONTAINER "$@"

exit $?
