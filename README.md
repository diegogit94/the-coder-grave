## The Coder Grave

Hi, this is my project to the Placetopay’s challenge, is a simple store with only one product, register and login system, admin and user history and, of course, redirection to Placetopay gateway, let’s see how to install it:

- Create a folder for the project and go into it with the command line.
- Execute **git clone https://github.com/diegogit94/the-coder-grave.git**
- Go into the-coder-grave project
- Execute **composer install** (This process may take a moment)
- Go to project’s root and rename de .env.example file as .env
- Execute **php artisan key:generate**
- Go into .env file and configure the follow variables:

>P2P_ENDPOINT = Add the Placetopay’s base URL included the endpoint at the end (Line 54). <br>
>PLACETOPAY_LOGIN = Add the Placetopay’s login (Line 55). <br>
>PLACETOPAY_SECRETKEY = Add the Placetopay’s secretKey (Line 56).

<br>

Let’s continue with the DB configuration:

- Go to your DB administrator and create a new DB with this name **the-coder-grave**
- Enter into .env file and stablish the DB’s username and password on lines 15 and 16 respectively
- Execute the **php artisan migrate --seed** (Now you can see all your tables with some test info)

<br>

Turn on the Laravel’s serve:

- Execute the php artisan serve command and go to **https://127.0.0.1:8000** (Sorry, I will change this soon)

<br>

Now, we’re ready to use the store, but before, let me say some important stuff:

>- You can take the user that you want from DB and access to his account, all of them has the same password is **password**
>- By default you have an admin user to test the admin history, his email is **gravemaster666@admin.com**, remember, the password is still the word **password**
>- To execute the schedule task (SONDA), execute the follow command **php artisan schedule:run**
>- If you want to execute the cronjob instantly, then, execute php **artisan placetopay:cron**

And that’s all, hope you like it <3.
