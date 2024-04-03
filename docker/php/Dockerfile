# イメージを取得
FROM php:8.2-fpm
# 独自のphp.iniファイル(PHPの設定ファイル)を 
# コンテナ内の/usr/local/etc/php/ディレクトリにコピー
COPY php.ini /usr/local/etc/php/

# パッケージやPHPの拡張モジュールをインストールするコマンドを実行
RUN apt-get update && apt-get install -y \
  git \
  curl \
  zip \
  unzip \
    && docker-php-ext-install pdo_mysql

# 作業ディレクトリを/var/www/htmlに設定
WORKDIR /var/www/html
