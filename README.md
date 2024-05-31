# FYP : Crowdfunding Platform

Welcome to the Crowdfunding Platform! This project is designed to help individuals and organizations raise funds for their projects through local and cryptocurrency payments. Inspired by platforms like GoFundMe, our platform provides a seamless experience for both fundraisers and contributors.

## Features

- **User Registration and Authentication**: Secure registration and login system.
- **Project Creation**: Users can create and manage their fundraising projects.
- **Local Payment Integration**: Support for traditional payment methods such as credit/debit cards and bank transfers.
- **Cryptocurrency Payment Integration**: Support for popular cryptocurrencies like Bitcoin, Ethereum, etc.
- **Contribution Tracking**: Keep track of all contributions made to a project.
- **Payment Processing**: Secure and efficient handling of payments.
- **Project Updates**: Fundraisers can post updates to keep contributors informed.
- **Responsive Design**: Fully responsive design for a great user experience on both desktop and mobile devices.

## Tech Stack

- **Backend**: Laravel (PHP)
- **Frontend**: Vue.js, Tailwind CSS
- **Database**: MariaDB
- **Payments**: Stripe, CoinPayments, KKiaPay, ...

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- Composer
- Node.js and npm
- MySQL
- Laravel
- Stripe and CoinPayments accounts

### Installation

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/ludndev/fyp-crowdfunding.git
    cd crowdfunding
    ```

2. **Install Dependencies**:
    ```bash
    composer install
    npm install
    ```

3. **Environment Setup**:
    - Copy `.env.example` to `.env` and update the necessary configuration values, including database credentials and payment gateway API keys.
    ```bash
    cp .env.example .env
    ```

4. **Generate Application Key**:
    ```bash
    php artisan key:generate
    ```

5. **Run Migrations**:
    ```bash
    php artisan migrate
    ```

6. **Serve the Application**:
    ```bash
    php artisan serve
    npm run dev
    ```

## Usage

1. **User Registration**:
    - Visit `/register` to create a new account.

2. **Create a Project**:
    - After logging in, navigate to the "Create Project" page and fill in the project details.

3. **Make a Contribution**:
    - Visit a project's page and choose to contribute using either local payment methods or cryptocurrency.

## Local Payments Setup

- **Stripe**:
    - Sign up for a [Stripe](https://stripe.com) account.
    - Obtain your Stripe API keys and add them to your `.env` file.
  ```env
  STRIPE_KEY=your_stripe_key
  STRIPE_SECRET=your_stripe_secret
  ```

## Crypto Payments Setup

- **CoinPayments**:
    - Sign up for a [CoinPayments](https://www.coinpayments.net) account.
    - Obtain your CoinPayments API keys and add them to your `.env` file.
  ```env
  COINPAYMENTS_PUBLIC_KEY=your_coinpayments_public_key
  COINPAYMENTS_PRIVATE_KEY=your_coinpayments_private_key
  ```
  
## TODOs

- [ ] add AI to filter and flags content based on risk level
    - project
    - comment
    - new
    - payment (fraud risk)
- [ ] backup and monitoring system
- [ ] payment interfaces
    - Test with an Custom/Demo Crypto Currency
    - Test with BTC Server
    - Test with BitPay
- [ ] socialite: add routes
    - facebook sso credentials
    - google sso credentials
- [ ] payout: add payment details and options
    - bank
    - momo
    - crypto ???
- [ ] set app locale to fr with all content
    - use __ for all displayed text

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

