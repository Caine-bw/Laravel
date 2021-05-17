<?php
namespace App\http\Controllers;

use App\Models\Users;
useIlluminate\Http\Request;

class UserController extends Controller {
    public function index() {
        $users = User::all();
        return view("user", compact('users'));
    }

    public function destroy($id) {
        $user = User::find($id);
        $user ->delete();

        return redirect()->back();
    }
}