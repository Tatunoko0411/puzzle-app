<style>
    .nav-links {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 40px;
    }

    .nav-links a {
        display: inline-block;
        padding: 12px 24px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .nav-links a:hover {
        background-color: #2980b9;
    }

    a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #3498db; /* ベースカラー */
        color: #fff; /* 文字色 */
        text-decoration: none; /* 下線を消す */
        border-radius: 6px; /* 角丸 */
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); /* 立体感 */
    }

    a:hover {
        background-color: #2980b9; /* ホバー時の色 */
        transform: translateY(-2px); /* 少し浮くような演出 */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

</style>

<a href= {{url('users/index')}}>ユーザー一覧へ</a>
<a href= {{url('stages/index')}}>ステージ一覧へ</a>

