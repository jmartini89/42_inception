GREEN = \033[32m
BLUE = \033[34m
RESET = \033[0m
LOG = echo "$(BLUE)MAKE LOG$(RESET) "

run: up

volumes:
	@$(LOG)Creating local volumes
	@mkdir -p ~/data/db-data
	@mkdir -p ~/data/www-data

build: volumes
	@$(LOG)Building composition
	@docker-compose -f ./srcs/docker-compose.yml build

up: build
	@$(LOG)Running composition
	@docker-compose -f ./srcs/docker-compose.yml up -d

down:
	@$(LOG)Composition down
	@docker-compose -f ./srcs/docker-compose.yml down

stop:
	@$(LOG)Stopping composition
	@docker-compose -f ./srcs/docker-compose.yml stop

clean: down
	@$(LOG)Cleaning local volumes
	@rm -rf ~/data

prune: clean
	@$(LOG)Prune docker
	@docker system prune -a

status:
	@echo "$(GREEN)Docker Containers$(RESET)"
	@docker ps -a
	@echo "$(GREEN)Docker Images$(RESET)"
	@docker images