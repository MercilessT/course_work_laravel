<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\CategoryService;
use App\Models\Registration;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function landing() {
        return view('landing');
    }

    public function contacts() {
        return view('contacts');
    }

    public function services() {
        return view('services');
    }

    public function about_us() {
        return view('about_us');
    }

    public function back_massage() {
        return $this->services_views('back_massage', 1, 'back_services');
    }
    public function face_massage() {
        return $this->services_views('face_massage', 2, 'face_services');
    }
    public function baby_massage() {
        return $this->services_views('baby_massage', 3, 'baby_services');
    }
    public function therapeutic_pe() {
        return $this->services_views('therapeutic_pe', 4, 'therapeutic_pe_services');
    }
    public function injury_rehabilitation() {
        return $this->services_views('injury_rehabilitation', 5, 'injury_rehabilitation_services');
    }
    public function services_views($view, $id, $key_services) {
        $category = Category::find($id);
        $services = $category->services;

        $descriptionServices = CategoryService::where('category_id', $id)->get();

        return view($view, [$key_services => $services, 'descriptions' => $descriptionServices]);
    }
    public function sign_up() {
        return view('sign_up');
    }
    public function sign_up_check(SignUpRequest $request) {
        Session::flash('success_message', 'Успішно відправлено!');

        $registration = new Registration();
        $registration->name = $request->input('name');
        $registration->phone_number = $request->input('phone');
        $registration->save();

        return back()->withInput();
    }
}
