# Job Portal
<br />
>Installation at the bottom 
<br />

<br />
## Installations

<br />
## If you receive and error while installation below::

> run composer update instead of composer install
> also run php artisan key:generate

## 2. Set the basic config

> Edit example.env to .env <br />
> Put your db username and password here with DB_DATABASE=job_lister. <br />
> ''' <br />

    DB_CONNECTION=mysql <br />
    DB_HOST=127.0.0.1 <br />
    DB_PORT=3306 <br />
    DB_DATABASE=job_lister <br /> !important
    DB_USERNAME=root <br />
    DB_PASSWORD= <br />

'''
<br />

## 3. Install Dependencies

> ~composer install <br />
> ~npm install <br />
> ~npm run dev
> <br />

## 4. Migrate Database

> ~php artisan migrate:fresh <br />
> ~php artisan db:seed <br /> > <br />

## 5. Serve application

> ~php artisan serve <br />

