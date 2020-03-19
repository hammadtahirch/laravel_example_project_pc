<?php

namespace App\Http\Controllers;


use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * @param Request $request
     * @param UserService $userService
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function login(Request $request, UserService $userService)
    {

        if ($request->isMethod("post")) {
            $request = $request->all();
            $response = $userService->verifyUser(
                [
                    "email" => $request["email"],
                    "password" => $request["password"]
                ]);
            if($response){
                return redirect("admin/board-members");
            }else{
                return redirect("/admin")->with('message', 'danger|Username or password is wrong.');
            }

        }
        return view("pages.admin.admin");
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logout(){
        Auth::logout();
        return redirect("admin");
    }
}