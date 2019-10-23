<?php

namespace Customers\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\Backend\Store;

class CustomersController extends Controller
{
    protected $moduleName = 'customers';

    public function index(Store $request)
    {
        return view("{$this->moduleName}::backend.index");
    }
}
