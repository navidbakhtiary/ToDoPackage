# ToDoPackage
This package is a tool to add ToDo capability to various Laravel projects. 
Depending on the needs of the project, you can use it to define tasks and labels and attach labels to task.
Change of status and task information is possible.
When the status of a task is closed, an email notification is sent to the task owner. [MailTrap.io](https://mailtrap.io) is used to receive notification emails.
Sanctum package has been used for authentications.
The TDD approach has been used to test all APIs. Attempts have been made to consider all happy-path and unhappy-path.
For<br /><br />
You can develop it or challenge it if you wish. I will be grateful if you give me your comments. You can send me your comments via [NavidBakhtiary@yahoo.com](mailto:NavidBakhtiary@yahoo.com) or [GitHub Issues](https://github.com/navidbakhtiary/ToDoPackage/issues).<br />
Thank you for your attention.

# How To Use
1. Install Laravel 7.*
    ```
    composer create-project --prefer-dist laravel/laravel:^7.0 project-name
    ``` 
2. Install [Sanctum](https://laravel.com/docs/7.x/sanctum) and configure it.
3. Install navid bakhtiary ToDo Package
   ```
   composer require navidbakhtiary/todo
   ```
4. Create database in MySQL and set DB_DATABASE in .env file based on its name. Then run migrations.
   ```
   php artisan migrate
   ```
5. Create an account in [MailTrap.io](https://mailtrap.io). Change .env file MAIL configuration based on SMTP settings of your account for Laravel 7+ Integrations. After email notification sent, you can see sent email in inbox of your MailTrap account.<br /><br />
   ![image](https://user-images.githubusercontent.com/56556526/173661347-8b91a71b-faa8-40bf-be5e-5db40790777b.png)
<br /><br /><br />
6. Add following code into testsuites tag in phpunit.xml of Laravel project. Adding these lines makes it possible to run package tests.
   ```
    <testsuite name="NavidBakhtiary\ToDo\Tests\Feature">
        <directory suffix="Test.php">./vendor/navidbakhtiary/todo/tests/Feature</directory>
    </testsuite>

    <testsuite name="NavidBakhtiary\ToDo\Tests\Unit">
        <directory suffix="Test.php">./vendor/navidbakhtiary/todo/tests/Unit</directory>
    </testsuite>
   ```
   ![image](https://user-images.githubusercontent.com/56556526/173681891-c7dd45ff-3c72-4113-9147-536f5109abf9.png)
<br /><br /><br />
7. You can run all tests. In terminal run command ```vendor\bin\phpunit```. If you want to run a specific test class in package run command ```vendor\bin\phpunit --filter "NavidBakhtiary\\ToDo\\Tests\\Feature\\TestClass"```



