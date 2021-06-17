<p align="center"><img src="http://ti-enterprise.com/images/carousel/true-img.png" width="600"></p>

<br>

# Table of Contents
- [About](#About)
- [Installation](#Installation)
- [ReCaptchaV3](#ReCaptchaV3)
- [Frameworks](#Frameworks)
- [APIs](#APIs)
- [License](#License)

## About
TI(True Image)-Enterprise is a Competitive Fishing Team and Fishing Bait Vendor under the same name located in Southern California

## Installation
1. Clone the repository
2. Install [PHP](https://www.php.net/downloads), [Composer](https://getcomposer.org/download/), and [Node.js](https://nodejs.org/en/) if needed
3. Make a copy of `.env.example` and rename it to `.env`
4. Fill out `.env` with correct information
5. Start up your SQL server
    - Create a Database in your SQL Server named `true_image_DB`
6. Run Setup Commands:
    ```properties
    $ php artisan key:generate
    $ composer install
    $ npm install
    $ php artisan migrate
    ```
7. Commands for running the app:
    ```properties
    $ php artisan serve
    $ npm run watch
    ```

## ReCaptchaV3
To be able to access forms requiring you to pass ReCaptcha you must obtain a `SECRET_KEY` and a `SITE_KEY` from Google
1. If you do not have one already, create an account on [Google's ReCaptcha Site](https://www.google.com/u/0/recaptcha/admin/create) by logging in with your GMAIL account.
2. Fill in the Label field with a name of your choosing
3. **IMPORTANT:** select reCAPTCHA v3 under reCAPTCHA type
4. Add a domain name that you will be using to access the site (e.g. example.com or localhost)
5. Accept the terms of service
6. Add your keys to your `.env` file on these lines
   ```properties
   RECAPTCHA_V3_SECRET_KEY=
   RECAPTCHA_V3_SITE_KEY=
   ```
   - Also add the same `SITE_KEY` again to `MIX_SITE_KEY=` (MIX prefix enables you to be able to access the .env variable within vue components)

## Frameworks
1. [Vue.js](https://vuejs.org/)
2. [Bulma.io](https://bulma.io/)
3. [Laravel](https://laravel.com/docs/8.x/readme)

## APIs
1. [Google reCAPTCHA](https://developers.google.com/recaptcha/intro)

## License

Check back soon!
