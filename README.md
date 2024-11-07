# Recursive File Search

```bash
# install dependencies
composer install

edit "config.php" with your db credentials

# create tables
mysql -u yourusername -p yourpassword yourdatabase < tables.sql

# seed the database
mysql -u yourusername -p yourpassword yourdatabase < data.sql

# run at localhost:8080 or use any web server
php -S 127.0.0.1:8000 ./index.php
```
