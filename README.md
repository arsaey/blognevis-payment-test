# Blognevis Payment Test

This repository is a test setup for integrating and testing the `blognevis/payments` package. It allows you to simulate and verify payment processing using NowPayments, and to view payment logs through a built-in dashboard.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Viewing Logs](#viewing-logs)
- [License](#license)
- [Contact](#contact)

## Installation

Follow these steps to set up the project:

1. Clone the repository:

    ```
    git clone https://github.com/arsaey/blognevis-payment-test
    ```

2. Navigate into the project directory:

    ```
    cd blognevis-payment-test
    ```

3. Install the required dependencies:

    ```
    composer install
    ```

4. Copy the example environment file and configure your `.env`:

    ```
    cp .env.example .env
    ```

5. Generate the application key:

    ```
    php artisan key:generate
    ```

6. Run database migrations:

    ```
    php artisan migrate:fresh
    ```

7. Start the Laravel development server:

    ```
    php artisan serve
    ```

## Usage

To test the payment process:

1. Open your web browser and go to:

    ```
    http://127.0.0.1:8000/request-nowpayments
    ```

2. You will be redirected to a payment page. 

3. On the payment page, choose your preferred currency and click "Next".

4. Since this is a sandbox environment, after about one minute, the page will automatically redirect back to the application, simulating a successful payment.

## Viewing Logs

After testing the payment process, you can view the payment logs by visiting:

   ```
   http://localhost:8000/blognevis-payments?dashboard_key=password
   ```

You can customize the dashboard path and access key in the configuration file.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For more information or support, feel free to contact us at [your-email@example.com].
