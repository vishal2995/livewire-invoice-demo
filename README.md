# Invoice Dashboard Livewire Demo

A brief description of what your Laravel + Livewire project does.

## Table of Contents

1. [Installation](#installation)
2. [Usage](#usage)

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/vishal2995/livewire-invoice-demo.git
   cd livewire-invoice-demo
   ```

2. **Install dependencies**

   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Set up environment**

   Copy `.env.example` to `.env` and fill in your environment details.

   ```bash
   cp .env.example .env
   ```

4. **Generate application key**

   ```bash
   php artisan key:generate
   ```

5. **Run migrations**

   Make sure your database is set up in `.env` and run:

   ```bash
   php artisan migrate
   ```
   
6. **Seed the database**

   Optionally, if you have seeders set up, run this command to populate your database with test data:

   ```bash
   php artisan db:seed
   ```

## Usage

Start the local development server:

```bash
php artisan serve
```

Access the application at `http://localhost:8000`.
