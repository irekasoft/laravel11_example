# Laravel 11 

This project using Laravel 11, Vite, React, Tailwind CSS. 

## Install Laravel 11: 

How to to create a new project: 

$ laravel new project-name

$ composer require laravel/ui

$ npm install 

### To run the vite: 

$ npm run dev

### To build the vite: 

$ npm run build

### To run the PHP server: 

$ php artisan serve


### Update vite.config.js: 

Need to update vite.config.js when adding the new React components, so it will work when being built.

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