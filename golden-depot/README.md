# Golden Depot

Golden Depot is a web application that provides a shopping cart functionality for users to browse and purchase products. This project is built using the Laravel framework, which offers a robust and elegant syntax for web development.

## Features

- **Product Management**: Manage products and their variants.
- **Shopping Cart**: Add, update, and delete items in the shopping cart.
- **User-Friendly Interface**: A clean and intuitive interface for users to navigate and make purchases.
- **Localization**: Support for multiple languages.

## Directory Structure

```
golden-depot
├── app
│   ├── Console
│   ├── Exceptions
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── Controller.php
│   │   │   └── web
│   │   │       └── CartController.php
│   │   └── Middleware
│   ├── Models
│   │   ├── Product.php
│   │   └── Variant.php
├── bootstrap
├── config
├── database
│   ├── factories
│   ├── migrations
│   └── seeders
├── public
│   └── index.php
├── resources
│   ├── lang
│   └── views
│       └── screens
│           └── web
│               └── cart
│                   └── index.blade.php
├── routes
│   └── web.php
├── storage
├── tests
├── artisan
├── composer.json
└── package.json
```

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/golden-depot.git
   ```

2. Navigate to the project directory:
   ```
   cd golden-depot
   ```

3. Install dependencies:
   ```
   composer install
   npm install
   ```

4. Set up your environment file:
   ```
   cp .env.example .env
   ```

5. Generate the application key:
   ```
   php artisan key:generate
   ```

6. Run migrations:
   ```
   php artisan migrate
   ```

7. Start the local development server:
   ```
   php artisan serve
   ```

## Usage

- Access the application in your web browser at `http://localhost:8000`.
- Use the shopping cart functionality to add and manage products.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.