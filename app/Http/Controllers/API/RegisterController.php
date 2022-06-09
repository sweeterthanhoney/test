<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register_customer(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'customer_name' => 'required',
            'customer_address' => 'required',
            'customer_city' => 'required',
            'customer_province' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'customer_location' => 'required',
        ]);

        $user = new User;
        $customer = new Customer;

        $password = Hash::make($request->password);

        $user->username = $request->username;
        $user->password = $password;
        $user->user_category = 4;
        $user->save();

        $customer->username = $request->username;
        $customer->customer_name = $request->customer_name;
        $customer->customer_address = $request->customer_address;
        $customer->customer_city = $request->customer_city;
        $customer->customer_province = $request->customer_province;
        $customer->customer_phone = $request->customer_phone;
        $customer->customer_email = $request->customer_email;
        $customer->customer_location = $request->customer_location;
        $customer->save();

        return response()->json([
            'message'       => 'Data Customer Berhasil Ditambahkan',
            'data_customer' => $customer,
        ], 200);
    }
}
