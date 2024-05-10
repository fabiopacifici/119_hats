# Hats store

images:

- <https://www.neweracap.eu/globalassets/products/d08_792/60565639/houston-astros-floral-fill-light-beige-9fifty-snapback-cap-60565639-left.jpg>
- <https://www.neweracap.eu/globalassets/60565645.jpg>
- <https://www.neweracap.eu/globalassets/products/d08_794/60565641/detroit-tigers-floral-fill-light-beige-9fifty-snapback-cap-60565641-left.jpg>
- <https://www.neweracap.eu/globalassets/products/d08_803/60565650/philadelphia-phillies-floral-fill-light-beige-9fifty-snapback-cap-60565650-left.jpg>

# Table: hats

- id BIGINT AI PK UQ
- sku VARCHAR(10) NOT NULL
- name VARCHAR(50)
- brand VARCHAR(50)
- description TEXT
- size VARCHAR(20)
- price DECIMAL(5, 2) UNSIGNED
- color VARCHAR(20)
- is_available TINYINT UNSIGNED
- created_at DATETIME
- updated_at DATETIME

## Migrations

- migrate all migrations `php artisan migrate`
- creaste a new table `php artisan make:migration create_hats_table`
- rollback migrations batches `php artisan migrate:rollback`
- ⚡ drop everything with `php artisan migrate:reset`

## Controller

Add controller for the given model `php artisan make:controller Guests/HatController -m Hat`
