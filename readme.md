# Heza
Blogging web application written in PHP/Laravel

## Screenshot
![Screen Shot 2019-12-21 at 00 59 01](https://user-images.githubusercontent.com/27460888/71297669-1c470a00-238d-11ea-8e86-260196d0ff48.png)

## Usage
### Clone
```
[Clone Repository](https://github.com/itsgracian/Heza.git)
```
### Install Dependencies using composer
```
composer install
```

### Install Package using NPM
```
npm install
```
### Change Environment Variable
 - APP is using cloudder package for uploading image make sure that you have cloudinary account
 - cloudinary Link [cloudinary](https://cloudinary.com/)
#### Change Cloudinary Setup  in .env file
- CLOUDINARY_CLOUD_NAME=CLOUD_NAME
- CLOUDINARY_API_KEY=CLOUD_API_KEY
- CLOUDINARY_API_SECRET=CLOUDINARY_API_SECRET

### Run Migration
```
php artisan migrate
```
### Run App
```
php artisan serve
```

## License
MIT
