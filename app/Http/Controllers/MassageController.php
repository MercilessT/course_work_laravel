<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\Accept;
use App\Models\Admin;
use App\Models\Registration;
use App\Models\Reject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MassageController extends Controller
{
    public function save_data(Request $request)
    {
        // Отримання даних із запиту
        $name = $request->input('name');
        $phone = $request->input('phone');

        // Збереження даних у таблицю accepts
        $accept = new Accept();
        $accept->name = $name;
        $accept->phone_number = $phone;
        $accept->save();

        Registration::where('name', $name)
            ->where('phone_number', $phone)
            ->first()
            ->delete();
    }


    public function delete_data(Request $request)
    {
        // Отримання даних із запиту
        $name = $request->input('name');
        $phone = $request->input('phone');

        // Збереження даних у таблицю rejects
        $reject = new Reject();
        $reject->name = $name;
        $reject->phone_number = $phone;
        $reject->save();

        Registration::where('name', $name)
            ->where('phone_number', $phone)
            ->first()
            ->delete();
    }

    public function delete_accept_data(Request $request)
    {
        // Отримання даних із запиту
        $name = $request->input('name');
        $phone = $request->input('phone');

        // Збереження даних у таблицю rejects
        $reject = new Reject();
        $reject->name = $name;
        $reject->phone_number = $phone;
        $reject->save();

        Accept::where('name', $name)
            ->where('phone_number', $phone)
            ->first()
            ->delete();
    }

    public function delete_delete_data(Request $request)
    {
        // Отримання даних із запиту
        $name = $request->input('name');
        $phone = $request->input('phone');

        Reject::where('name', $name)
            ->where('phone_number', $phone)
            ->first()
            ->delete();
    }

    public function accept_delete_data(Request $request)
    {
        // Отримання даних із запиту
        $name = $request->input('name');
        $phone = $request->input('phone');

        // Збереження даних у таблицю accepts
        $accept = new Accept();
        $accept->name = $name;
        $accept->phone_number = $phone;
        $accept->save();

        Reject::where('name', $name)
            ->where('phone_number', $phone)
            ->first()
            ->delete();
    }

    public function entry() {
        return view('entry');
    }
    public function entry_check(EntryRequest $request) {
        $email = $request->email;
        $name = 'admin';
        $password = $request->password;
        $existingUser = User::where('email', $email)->first();

        if (!$existingUser) {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => md5($password)
            ]);

            Auth::login($user);
        }
        else {
            Auth::login($existingUser);
        }
        return redirect('/massages');
    }
}
