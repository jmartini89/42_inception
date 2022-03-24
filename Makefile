build:
	docker-compose -f ./srcs/docker-compose.yml build

up:
	docker-compose -f ./srcs/docker-compose.yml up -d

down:
	docker-compose -f ./srcs/docker-compose.yml down

clean_volumes:
	docker-compose -f ./srcs/docker-compose.yml down --volumes
# rm -rf ~/data

stop:
	docker-compose -f ./srcs/docker-compose.yml stop

prune:
	docker system prune -a