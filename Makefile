# パス指定の初期値
path=


# PHP関連コマンド

# PHPStan でショップ側のapp以下の静的コード解析を実行
phpstan:
	./vendor/bin/phpstan analyse ${path}
.PHONY: phpstan-app-shop

# PHP Code Sniffer のシンタックスチェックを実行
phpcs:
	./vendor/bin/phpcs --standard=phpcs.xml ${path}
.PHONY: phpcs

# PHP Code Beautifier and Fixer で PHP Code Sniffer のエラーを可能な限り自動修正
phpcbf:
	./vendor/bin/phpcbf --standard=phpcs.xml ${path}
.PHONY: phpcbf


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
