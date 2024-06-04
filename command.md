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

php artisan make:controller HomeController

npm run dev

php artisan reverb:start --debug

php artisan make:resource UserResource

php artisan make:controller MessageController
php artisan make:request StoreMessageRequest
php artisan make:resource MessageResource
php artisan make:event SocketMessage

php artisan make:resource MessageAttachmentResource

php artisan make:observer MessageObserver

php artisan storage:link

php artisan make:controller UserController

php artisan make:middleware AdminUser

php artisan make:middleware ActiveUser