# Laravel Package Skeleton

## Setup & Start

1. Set up [Laravel Package Dev Env with Docker](https://github.com/afridlund85/laravel-package-docker)
2. Clone this repo to packages dir and rename, `git clone git@github.com:afridlund85/laravel-package-skeleton.git packages/PACKAGE_NAME`
3. `cd packages/PACKAGE_NAME`
4. `rm -rf .git && git init`, setup repo origin etc
5. Update composer.json and ServiceProvider
6. Add package to require or require-dev in laravel-package-docker's composer.json
7. `composer dump-autoload` in root
