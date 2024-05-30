<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login', ['title' => 'تسجيل الدخول']);
    }

    public function login(Request $request)
    {
        $username = $request->input('user_name');
        $password = $request->input('password');

        $loginEndpoint = 'https://al-maher.net/ar/demo_rest_api/demo_resource?_format=json&code=1183118037061&pid=66&time=1601118153&flags=login';
        $basicAuth = 'Basic ' . base64_encode($username . ':' . $password);
        $client = new Client();

        try {
            $response = $client->request('GET', $loginEndpoint, [
                'headers' => [
                    'Authorization' => $basicAuth
                ]
            ]);

            $jsonResponse = json_decode($response->getBody()->getContents(), true);

            if ($jsonResponse['status'] == 'login-sucess') {
                $request->session()->put('user_name', $jsonResponse['userName']);
                $request->session()->put('user_id', $jsonResponse['user_id']);
                return redirect('/');
            }else{
                return redirect()->back()->with('error', 'تأكد من اسم المستخدم وكلمة المرور');
            }

//            $this->setLogin($jsonResponse['user_id']);
        } catch (\Exception $e) {
            // Handle exception if the request fails
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function setLogin($userId)
    {
        $setLoginEndpoint = 'https://al-maher.net/api/set_islogin.php?os_type=windows&uid='.$userId;
        $client = new Client();

        try {
//            $response = $client->request('POST', $setLoginEndpoint);
//             json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            // Handle exception if the request fails
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect(route('login'));
    }

}
