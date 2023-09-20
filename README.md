# By Kuli IT Tecno


```
Admin login
email: admin@gmail.com
password : 12345678
```
```
Siswa login
email: siswa@gmail.com
password : 12345678
```
# Installation

1. **Clone or download this Repository.**
2. **Run the command**
   ```
   composer install
   ```
   if you get any problems while running above command then run the following command.
   ```
   composer update
   ```

3. **Create `.env` file by copying the `.env.example`, or run the following command**
   ```
   cp .env.example .env
   ```

4. **Update the database name and credentials in `.env` file**  
   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE="Your database name"
    DB_USERNAME="your database username"
    DB_PASSWORD="your database password"
   ```
5. **Run the following command**
   ```
   php artisan migrate --seed
   ```
6. **Run npm command**
   ```
   npm install
   ```
7. **Run the command to compile the theme**
    ```
    npm run dev
    ```
8. **Finally run the application**
   ```
   php artisan serve
   ```
