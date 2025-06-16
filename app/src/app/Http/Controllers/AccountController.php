<?php

namespace App\Http\Controllers;


use App\Models\Account;
use App\Models\user;
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
    public function index(Request $request)
    {
        //テーブルのすべてのレコードを取得
        $users = User::All();
        $accounts = Account::All();
        $title = 'アカウント一覧';
        $count = Account::count();//レコード数
        $account = Account::findOrFail(1);//ID検索(無ければ404エラー)
        $account = Account::where('name', "=", 'jobi')->get();//条件指定で検索
        $account = Account::where(Account::where('name', '=', 'jobi')
            ->where('created_at', '>=', '2024-06-08')
            ->get());

        if (!empty($request->name)) {
            $users = User::where('name', '=', "{$request->name}")->get();
        }

        return view('accounts/index', ['title' => $title, 'users' => $users]);
    }

}
