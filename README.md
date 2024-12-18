## Echo.tj

Run your own music streaming service with Echo.tj.

## Installation

- Clone the repository
- Install the dependencies

    ```bash
    composer install
    ```
- Create a `.env` file
    - Copy the contents of `.env.example` to `.env`
    - Fill the DB credentials in the `.env` file
    - Generate an application key
        ```bash
        php artisan key:generate
        ```

- Run the migrations
    ```bash
      php artisan migrate
    ```

- Install npm dependencies
    ```bash
    npm install
    ```
- Start the server
    ```bash
    php artisan serve
    ```

- Build the assets in watch mode
    ```bash
    npm run dev
    ```

