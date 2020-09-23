<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/*
    Nick notes:
    - This php file is "the one that will give you your page".
    - This php file helps declutter the growing line of codes located in "First-Laravel/routes/web.php"
    
    - To create new components, open Laravel's terminal and enter:
        > php artisan make:
        - several options will appear for which component is to be installed.
        - to create compontents, the terminal must have its directory set to the main project folder (.../www/First-Laravel).
    - Naming convention: controller component
        - <capital plural word> + 'Controller.php'
        > UsersController.php
        > CatsController.php
*/

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
