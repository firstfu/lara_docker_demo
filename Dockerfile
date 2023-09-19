FROM php:8.2-fpm


# Arguments defined in docker-compose.yml(在docker-compose.yml中定義的參數)
ARG user
ARG uid

# Install system dependencies(安裝系統依賴)
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip


# Clear cache(清除緩存)
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# # Install PHP extensions(安裝PHP擴展)
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

# # Get latest Composer(獲取最新的Composer)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Create system user to run Composer and Artisan Commands(創建系統用戶以運行Composer和Artisan命令)
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user



USER $user

# Set working directory(設置工作目錄)
WORKDIR /var/www

