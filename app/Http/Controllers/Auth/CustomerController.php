<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function login()
    {
        return view('auth.customers.login');
    }
    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('customer')->attempt($credentials)) {
            $request->session()->regenerate();
            $customer = Auth::guard('customer')->user();
            if ($customer) {
                session()->put('customer', $customer);
            }
            return redirect()->route("home");
        }
        return redirect()->back();
    }
    public function register()
    {
        return view('auth.customers.register');
    }
//    public function handleRegisterClient(RegisterRequest $request)
//    {
//        $customer = [
//            'name' => $request->name,
//            'phone' => $request->phone,
//            'email' => $request->email,
//            'password' => bcrypt($request->password),
//        ];
//        $statusCustomer = $this->customerRepository->addCustomer($customer);
//        if (!empty($statusCustomer)) {
//            $customer_id = [
//                'customer_id' => $statusCustomer->id,
//            ];
//            $statusCart = $this->cartRepository->addCart($customer_id);
//            if (!empty($statusCart)) {
//                return redirect()->route('client.login');
//            }
//        }
//
//    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->forget('customer');
        return redirect()->route("home");

    }
}
