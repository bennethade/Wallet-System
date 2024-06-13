<p align="center"><a href="https://benneth.benjastech.com/" target="_blank"><img src="https://benneth.benjastech.com/wp-content/uploads/2023/04/cropped-pngtree-shiny-golden-alphabet-letter-b-isolated-on-transparent-background-png-image_6954989-removebg-preview.png" width="200" alt="Benneth"></a></p>

<!-- <p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> -->

## About The Wallet System

A Laravel API for managing users and their wallets. Each wallet can have different types with specific attributes like minimum balance and monthly interest rate. The wallets can send and receive money from other wallets.

## Project Overview

#### This API allows users to:
- Create multiple wallets.
- Manage wallet types.
- Perform transactions between wallets.


<!-- - [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting). -->


## Installation Instructions

### Prerequisites

- PHP >= 7.3
- Composer
- MySQL


### Setup

1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/walletapp.git
   cd walletapp

2. Install dependencies:
    ```sh
    composer install

3. Copy .env.example to .env and configure your database settings:
    ```sh
    cp .env.example .env

4. Generate application key:
    ```sh
    php artisan key:generate


5. Run migrations and seed the database:
    ```sh
    php artisan migrate --seed

6. Start the development server:
    ```sh
    php artisan serve



## API Endpoints

### Get All Users
- Method: GET
- URL: "/api/users"

### Get All Wallets
- Method: GET
- URL: "/api/wallets"


### Get Wallet Details
- Method: GET
- URL: "/api/wallets/{id}" 
- "id" (integer): The ID of the wallet.


### Send Money
- Method: POST
- URL: "/api/wallets/transfer"
- Body:
    ``sh
    {
        "sender_wallet_id": 2,
        "receiver_wallet_id": 4,
        "amount": 300
    }



## Usage Instructions

### Using Postman

1. Get All Users:

- Method: GET
- URL: "http://127.0.0.1:8000/api/users"


2. Get All Wallets:

- Method: GET
- URL: "http://127.0.0.1:8000/api/wallets"


3. Get Wallet Details:

- Method: GET
- URL: http://127.0.0.1:8000/api/wallets/1


4. Send Money:

- Method: POST
- URL: http://127.0.0.1:8000/api/wallets/transfer
- Headers:
    - Content-Type: application/json
    (Click on the 'Headers' tab under the url, then add 'Content-Type' for key, and 'application/json' for value)
    (Then click on the 'body' tab next to Headers, choose raw from the sub-tab and past the code below in the space provided. Make sure that JSON is selected from the drop down at the righ hand side)
- Body: 
    ``sh
    {
        "sender_wallet_id": 2,
        "receiver_wallet_id": 4,
        "amount": 300
    }

    Click on the 'send' button at the top right.


## Contributing
Contributions are welcome! Please fork the repository and submit a pull request.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
