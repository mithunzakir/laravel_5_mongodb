<?php

namespace App\Http\Controllers;

class CustomerController extends Controller {

    public function __construct() {
        $this->middleware('guest');
    }

    public function index() {
        return view('welcome');
    }
    public function new_customer() {
        return view('customer.new_customer');
    }

}
