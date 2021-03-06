<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_login_log;
use App\User_change_log;
use View;
use App\Http\Requests;

class SettingsController extends Controller
{
    public function index()
    {
        return View::make('settings/index');
    }

    public function getUserLoginLogs()
    {
        $userLoginRequests = User_login_log::orderBy('id', 'desc')->get();

        return View::make('settings/userLogin', ['userLoginRequests' => $userLoginRequests]);
    }

    public function getUserChangeLogs()
    {
        $userChanges = User_change_log::orderBy('id', 'desc')->get();

        return View::make('settings/userChange', ['userChanges' => $userChanges]);
    }

    public function getHelp()
    {
        return View::make('settings/help', []);
    }
}
