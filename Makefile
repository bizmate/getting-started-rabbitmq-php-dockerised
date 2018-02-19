SHELL := /usr/bin/env bash
up:
	export UID && docker-compose up -d

down:
	docker-compose down -v

bash:
	export UID && docker-compose run  php_sender bash

push_jobs:
	docker-compose exec php_sender sh -c 'while true; do php send.php; done;'

docker_clean:
	docker rm $(docker ps -a -q) || true
	docker rmi < echo $(docker images -q | tr "\n" " ")

tail:
	docker-compose logs -f

