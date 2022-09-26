## 1. Database Design
![Screenshot](db-diagram.png)
## 2. Setup Project
- Clone repository

```bash
git clone https://github.com/yusril86/DOT-Intern.git
```

- Install Composer
install composer pada project menggunakan perintah berikut :

```bash
composer install
```
- Setup .env .Copy isi .env.example kemudian buat file baru dengan nama .env dan paste 


- Setup Database
Buat table database mysql sesuai dengan nama database yang berada di .env 


- Lakukan database migration and seeder :
```bash
php artisan migrate --seed
```