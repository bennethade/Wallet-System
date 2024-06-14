<p align="center"><a href="https://www.linkedin.com/in/benneth-nyekefamo" target="_blank"><img src="https://benneth.benjastech.com/wp-content/uploads/2023/04/cropped-pngtree-shiny-golden-alphabet-letter-b-isolated-on-transparent-background-png-image_6954989-removebg-preview.png" width="100" height="auto" alt="Benneth"></a></p>


## About The Wallet System

This is a Laravel API Application for managing users and their wallets. Each wallet can have different types with specific attributes like minimum balance and monthly interest rate. The wallets can send and receive money from other wallets.

## Project Overview

#### This API allows users to:
- Create multiple wallets.
- Manage wallet types.
- Perform transactions between wallets.


## Installation Instructions

### Prerequisites

- PHP >= 8.1
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
    ```sh
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
        - (Click on the 'Headers' tab under the url, then add 'Content-Type' for key, and 'application/json' for value)
        - (Then click on the 'body' tab next to Headers, choose raw from the sub-tab and paste the code given below in the space provided. Make sure that JSON is selected from the drop down list at the righ hand side of the 'body' tab you clicked)
    - Body: 
        ```sh
        {
            "sender_wallet_id": 2,
            "receiver_wallet_id": 4,
            "amount": 300
        }


## Contributing
Contributions are welcome! Please fork the repository and submit a pull request.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
