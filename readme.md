# Heza
Blogging web application written in PHP/Laravel

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
 - APP is using cloudder package for uploading image. 
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
## App Screenshot
<img width="1440" alt="Screen Shot 2019-07-09 at 17 05 08" src="https://user-images.githubusercontent.com/27460888/60900062-de857780-a26b-11e9-9299-5f3b45e49d49.png">

## License
MIT
