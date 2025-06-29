# Vitality App – Laravel Deployment

This repository contains a **Laravel application** designed and deployed as part of Assignment 3: Deployment.  
The application demonstrates access control, prevention of IDOR (Insecure Direct Object Reference), and the Principle of Least Privilege (PoLP).  

##  Hosted Application URL

 [https://docker-fix-app-2f6910b01d9c.herokuapp.com](https://docker-fix-app-2f6910b01d9c.herokuapp.com)

## Login / Registration

- You can **register a new account** at the hosted app link above.
- Alternatively, use this test account:
- User email :  

tologo2358@ronete.com 

User password :  

Es9jfKdE6t8EwrW 

##  Features with Access Control (Prevents IDOR)

### 1️ Thoughts CRUD (or replace with your module name)
- Navigate to: `https://docker-fix-app-2f6910b01d9c.herokuapp.com/thought`
- Only authenticated users can create, view, edit, or delete their **own** thoughts.
- Users cannot modify or access thoughts created by other users. Access control policies in `ThoughtController` and `ThoughtPolicy` enforce this.

### 2️(Optional additional CRUD module if relevant)
- Example: Diary entries, challenges, reminders — where applicable.

##  Security Measures

- **HTTPS enforced:** All traffic is encrypted by Heroku’s automatic SSL.
- **Authentication required** for protected routes (Laravel Breeze / Sanctum used).
- **Principle of Least Privilege:** Users only have access to their own records. Policies restrict access at the controller level.
- **Session security:** Laravel’s default cookie settings and HTTPS reduce the risk of session hijacking.

##  How to Test IDOR Prevention
- Log in as one user, create a record (e.g., a thought).
- Attempt to access a record owned by another user by manipulating the URL ID (e.g., `/thought/2/edit`).
- The system will block access with a 403 Forbidden or redirect you, demonstrating protection against IDOR.

## Local Setup (optional for reviewers)
```bash
git clone https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
cd YOUR_REPO_NAME
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve


