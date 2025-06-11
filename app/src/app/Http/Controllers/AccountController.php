<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;

class AccountController extends Controller
{
    private $data = [
        [
            'id' => 1,
            'name' => 'name01',
            'password' => 'aaa'
        ],
        [
            'id' => 2,
            'name' => 'name002',
            'password' => 'bbb'
        ]
    ];

    private $scores =
        [
            [
                'id' => 1,
                'name' => 'name01',
                'value' => 10000
            ],
            [
                'id' => 2,
                'name' => 'name002',
                'value' => 8900
            ]
        ];

    //アカウント一覧を表示する
    public function index(
        Request $request
    ) {
        $title = 'アカウント一覧';
        return view('accounts/index', ['title' => $title, 'accounts' => $this->data]);
    }

    public function scores(Request $request)
    {
        $title = 'アカウント一覧';
        return view('accounts/scores', ['title' => $title, 'accounts' => $this->scores]);
    }

    public function login(Request $request)
    {

        return view('accounts/login', ['error_id' => $request->error_id]);
    }

    public function logout(Request $request)
    {

        return view('accounts/login', ['error_id' => $request->error_id]);
    }

    public function dologin(Request $request)
    {
        foreach ($this->data as $account) {
            if ($account['name'] === $request->name && $account['password'] === $request->pass) {
                return redirect('accounts/index');
            }
        }


        return redirect('/1');

    }
}
