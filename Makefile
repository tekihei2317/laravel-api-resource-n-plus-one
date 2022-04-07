create-project:
	docker compose run composer create-project --prefer-dist laravel/laravel .
up:
	docker compose up -d app
ps:
	docker compose ps
app:
	docker compose exec app bash
