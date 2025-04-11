# docker/Dockerfile
# 选择基础 PHP-FPM 镜像
FROM php:8.2-fpm-alpine # 你可以根据需要调整 PHP 版本

# 设置工作目录 (与 Nginx 配置和 docker-compose volume 对应)
WORKDIR /var/www/html

# 安装系统依赖和 PHP 扩展
RUN apk update && apk add --no-cache \
    build-base \
    nginx \
    libzip-dev \
    zip \
    curl \
    git \
    mysql-client \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libwebp-dev \
    nodejs \
    npm

# 安装核心 PHP 扩展
RUN docker-php-ext-install pdo pdo_mysql zip bcmath

# 安装 GD (带 WebP)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) gd

# 安装 Redis
RUN pecl install redis && docker-php-ext-enable redis

# 安装 Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 清理缓存
RUN rm -rf /var/cache/apk/*

# 容器默认用户 (Nginx/PHP-FPM 通常使用 www-data)
# RUN addgroup -g 1000 www && adduser -u 1000 -G www -s /bin/sh -D www
# USER www
# (用户权限设置有时需要根据基础镜像和具体需求调整，暂时保持默认 root)

# 暴露 PHP-FPM 端口
EXPOSE 9000

# 默认启动命令
CMD ["php-fpm"]
