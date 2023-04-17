image:
	@printf ">>> Making docker image\n"
	docker build -t community-fixing-api-local -f Dockerfile .
start:
	@printf ">>> Starting api via docker-compose\n"
	docker-compose -f docker-compose.yml up -d

bash:
	@printf ">>> Starting api via docker-compose\n"
	docker exec -ti community-fixing-api-local bash

refresh:
	@printf ">>> Starting api via docker-compose\n"
	docker exec -ti community-fixing-api-local php artisan migrate:refresh
	docker exec -ti community-fixing-api-local php artisan db:seed
