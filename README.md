# octobercms-usingDB-sample
A sample using ocotober cms


## Setup records

#### Quick start install

```
curl -s https://octobercms.com/api/installer | php
```

#### Composer install

```
composer create-project october/october myoctober
```

open the file config/cms.php and enable the disableCoreUpdates setting.

```
'disableCoreUpdates' => true,
```

When updating October, use the composer update command as normal before performing a database migration.

```
composer update
```

#### Install command

```
php artisan october:install
```

```
INSTALLATION

 Database type:
  [0] MySQL
  [1] Postgres
  [2] SQLite
  [3] SQL Server
 > 0

 MySQL Host [127.0.0.1]:
 > 127.0.0.1

 MySQL Port []:
 > 3306

 Database Name [database]:
 > animatecafe_customer_survy

 MySQL Login [root]:
 > root

 MySQL Password []:
 > password

Enter a new value, or press ENTER for the default

 First Name [Admin]:
 > Admin

 Last Name [Person]:
 > Person

 Email Address [admin@domain.tld]:
 > woohoeon@gmail.com

 Admin Login [admin]:
 > admin

 Admin Password [admin]:
 > password

 Is the information correct? (yes/no) [yes]:
 > yes

 Application URL [http://localhost]:
 > http://animate.dev

 Configure advanced options? (yes/no) [no]:
 > yes

Enter a new value of 32 characters, or press ENTER to use the generated key

 Application key [MzzsGXX0oDZgef1ujdWq6qsxPE3l2e74]:
 > MzzsGXX0oDZgef1ujdWq6qsxPE3l2e74

Application key [MzzsGXX0oDZgef1ujdWq6qsxPE3l2e74] set successfully.

 Backend URL [backend]:
 > backend

 File Permission Mask [777]:
 > 777

 Folder Permission Mask [777]:
 > 777

 Enable Debug Mode? (yes/no) [yes]:
 > yes

Migrating application and plugins...

INSTALLATION COMPLETE
```

#### System update

```
php artisan october:update
```

#### Database migration

```
php artisan october:up
```

#### Install plugin

```
php artisan create:plugin Acme.Demo
```

#### Create model

```
php artisan create:model Acme.Demo Task
```

#### Refresh plugin

```
php artisan plugin:refresh Acme.Demo
```

#### Create component

```
php artisan create:component Acme.Demo Todo
```