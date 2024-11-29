# GROWTH AI 2

Growth AI 2 is a new mautic project based on mautic v5.

## How to develop
### Clone Project

```sh
git clone https://github.com/Analytist-co/growth2.git
```

### Run project using ddev

```sh
# start project
ddev start

# stop project
ddev stop
```

### How to update style

After modify `/CoreBundle/Assets/builder.less` & others less file then run the following command.

```
lessc --js app.less app.css
```

### How to install composer

Run composer install & ignore redis & imap on local

```
composer require --dev drenso/symfony-oidc-bundle:^3.4 --no-scripts --ignore-platform-req=ext-imap --ignore-platform-req=ext-redis
```

Delete `/var/cache` directory

### How to add new bundle
