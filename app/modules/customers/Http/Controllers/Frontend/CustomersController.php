<?php

namespace Customers\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    protected $moduleName = 'customers';

    public function index()
    {
        return view("{$this->moduleName}::frontend.index");
    }
}
