<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
    // 電話番号の組み立て
    $tel = $request->tel1 . '' . $request->tel2 . '' . $request->tel3;
    
    // 入力されたデータを取得
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'address', 'building', 'content', 'detail']);
    $contact['tel'] = $tel;
    
    // 確認画面へ遷移
    return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
    $contact = Contact::create([
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'gender' => $request->gender,
        'email' => $request->email,
        'tel' => $request->tel,
        'address' => $request->address,
        'building' => $request->building,
        'content' => $request->content,
        'detail' => $request->detail,
    ]);
    return view('thanks');
    }
}
