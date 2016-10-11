<?php

namespace App\Http\Controllers\Admin;

use App\Traits\AdminManager;
use App\Traits\General;
use App\Traits\SessionVar;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class MainController extends Controller
{
    /**
     * @var Logged in user information
     */
    public $user;

    /**
     * @var Collection of values to be sent to view
     */
    public $data;

    use General, SessionVar, AdminManager;

    public function __construct()
    {
        $this->data('menu_items',config('nav.admin'));
        $this->message();
    }


}
