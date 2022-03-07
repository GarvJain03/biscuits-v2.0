# Biscuits v2.0

Using the Laravel web framework written in PHP. The frontend is written using the blade templating engine and tailwindcss.

## Setup

### Clone the repository

```bash
git clone https://github.com/GarvJain03/biscuits-v2.0.git
```

### Install Dependecies

```bash
composer install
```

### Fill out .env

```bash
cp .env.example .env
```

#### Add Webhook Url in .env (For Discord notifications)

`DISCORD_WEBHOOK_URL`

### Run migrations and seed database

```bash
php artisan migrate:fresh --seed
```

#### Admin Credentials

```bash
Username: RoboKnights
Password: adminadmin
```

### Run App

```bash
php artisan serve
```

### Middleware

`guest` and `admin` middleware for authorization. They can be found in `app/Http/Middleware`.
