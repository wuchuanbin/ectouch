<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return 'Welcome to ECTouch Dashboard.';
    }
}
