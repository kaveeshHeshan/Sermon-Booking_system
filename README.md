![Repo Icon](https://res.cloudinary.com/practicaldev/image/fetch/s--9NgX-7yY--/c_imagga_scale,f_auto,fl_progressive,h_900,q_auto,w_1600/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/gan8yaqvmbfg7w3kj5fx.png)

# Sermon Booking System!

Hi! I'm Kaveesh Heshan. As an Introduction, this is an web based Sermon Booking System built using following **Tech Stack and Versions**. Please go through the **Guidelines** to setup this project. Also need to mention, For the alerts, I have used third party library called "Sweet Alerts".

# Guidelines

## Tech Stack and Versions

As I mentioned in the introduction, I have used following technologies to build this application.

1. Node JS - v18.16.0
2. Vue Js - v3
3. Laravel - v9
4. Inertia
5. Tailwind CSS

## Guide

1. **Clone** the project from github.
2. Copy and paste the **.env.example** file and rename it to the **.env**.
3. Then add **Database configurations** to the **.env** file (what you created in second step).
4. Then run **composer update**.
5. Make sure to run **php artisan key:generate** to generate the key.
6. Run **npm install**.
7. Run **php artisan migrate** to create tables in database.
8. You will have to run seeders respectively.

    -   1. RolesSeeder
    -   2. AdminSeeder
    -   3. PoyaDaysSeeder

9. Then again run **php artisan serve** in a terminal.
10. After that run **npm run dev** in another terminal.
11. Then click the URL generated in **Ninth (9)** step and you are good to go.
