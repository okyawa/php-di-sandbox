# Docker用コマンド

# docker-composeの起動
up:
	docker compose up -d
.PHONY: up

# docker-composeでコンテナを起動する前に、定義されたイメージをビルドし直してから起動
up-build:
	docker compose up -d --build
.PHONY: up

# docker-composeの停止
down:
	docker compose down
.PHONY: down

# docker-compose ps の実行
ps:
	docker compose ps
.PHONY: ps

# docker-compose logs の実行
logs:
	docker compose logs
.PHONY: logs

# dockerコンテナ内のシェルに入る
shell:
	docker exec -it php-di-sandbox-app-1 bash
.PHONY: docker-exec

# 使っていないDockerイメージを削除
prune:
	docker image prune
.PHONY: prune
