# Laravel 11 

$ laravel new project-name

$ composer require laravel/ui


$ npm install && npm run build


## Run the server: 

$ php artisan serve


## For Production: 

$ npm run build

## Need to update vite.config.js to add: 

````
In export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/react/Welcome.jsx',
                'resources/react/Welcome2.jsx',

````


## Support API : 

$ php artisan install:api