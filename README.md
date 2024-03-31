# Laravel Boilerplate

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.

## 1. Requirements:

- php >= 8.1
- mysql >= 8.0
- node >= 14
- composer >= 2.2

## 2. Get started:

### Setup:

1. Clone Repository

```sg
git clone git@github.com:Silak-mb/laravel-boilerplate.git
cd laravel-boilerplate
```

2. Copy .env.example

```sh
cp .env.example .env
```

3. Create database

```sh
mysql -u {MYSQL_USER} -p -e "CREATE DATABASE IF NOT EXISTS {MYSQL_DATABASE} DEFAULT CHARACTER SET utf8;"
```

4. Install php dependencies

```sh
composer install
```

5. Install javascript dependencies

```sh
yarn
```

6. Generate app key

```sh
php artisan key:generate
```

7. Run migrate

```sh
php artisan migrate
```

8. Run seeder

```sh
php artisan db:seed
```

### Code of Conduct:

In order to ensure that the project is clean, consistansy of coding style, we follow the rule of coding style like below:

- PHP: [PSR-12](https://www.php-fig.org/psr/psr-12)
- Javascript: [Eslint](https://eslint.org)

## 3. Software Development Tool:

### Database

One tool for all data sources. Work with data in a professional way. We're highly recommanded to use tool like below:

- [DBeaver](https://dbeaver.io/download) (Free)
- [Navicat](https://www.navicat.com/en/download/navicat-for-mysql)

### Code Editor:

Code editors are equipped with features such as auto-completion, syntax highlighting, and indentation for easier and faster coding. We're strongly recommended to tool like below:

- [Visual Studio Code](https://code.visualstudio.com) (Free)
- [Webstorm](https://www.jetbrains.com/webstorm)

### Git:

Commit Message: **"type" must be one of the following mentioned below!**

- `build`: Build related changes (eg: npm related/ adding external dependencies)
- `chore`: A code change that external user won't see (eg: change to .gitignore file or .prettierrc file)
- `feat`: A new feature
- `fix`: A bug fix
- `docs`: Documentation related changes
- `refactor`: A code that neither fix bug nor adds a feature. (eg: You can use this when there is semantic changes like renaming a variable/ function name)
- `perf`: A code that improves performance
- `style`: A code that is related to styling
- `test`: Adding new test or making changes to existing test

More: https://www.conventionalcommits.org/en/v1.0.0

## 4. License

The framework is copy right software licensed under the [MIT license](https://opensource.org/licenses/MIT).
