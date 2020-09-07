## Getting Started

### 下載專案
```
git clone https://github.com/lanxan/aj-demo.git
```

### 複製 env.example 建立一個 .env 檔案
```
cp env.example .env
```

### 修改 .env 參數
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test
DB_USERNAME=test
DB_PASSWORD=Test-0309
```

### 安裝 composer
```
composer install
```

### 生成專用的金鑰
```
php artisan key:generate
```

### 建立相應的資料表
```
php artisan migrate
```

## Launch
```
php artisan serve
```
