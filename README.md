#NUXT + YII2 application on DOCKER
Simple application build with NUXT as frontend and YII2 as backed on Docker.

##Installation
### NUXT
1. Execute `npm install` command in `nuxt` folder.

### YII2
1. Execute `composer install` in `yii2` folder
2. Change database credentials in `config/db.php`

### DOCKER
1. Run docker containers: `docker compose up`

### YII MIGRATIONS
1. Run `Yii2` migrations `docker exec yii php yii migrate`