php artisan migrate
php artisan serve

composer require laravel/breeze --dev
php artisan breeze:install

npm install @headlessui/react @heroicons/react daisyui emoji-picker-react react-markdown uuid
php artisan install:broadcasting

php artisan make:model Group -m
php artisan make:model Conversation -m
php artisan make:model Message -m
php artisan make:model MessageAttachememt -m

php artisan make:factory GroupFactory
php artisan make:factory MessageFactory

php artisan migrate:fresh --seed