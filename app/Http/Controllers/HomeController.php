<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Гостьова книга - Головна',
            'pageTitle' => 'GuestBook',
            'messages' => Message::latest()->get(),
            'count' => Message::count()
        ];

        return view('pages.messages.index', $data);
    }

    public function admin()
    {
        $data = [
            'title' => 'Гостьова книга - Адмінка',
            'pageTitle' => 'GuestBook Admin',
            'messages' => Message::latest()->get(),
            'count' => Message::count()
        ];

        return view('pages.messages.index-admin', $data);
    }

    public function edit($id)
    {
        $message = Message::where('id', $id)->first();

        $data = [
            'title' => 'Гостьова книга - Головна',
            'pageTitle' => 'GuestBook',
            'name' => $message->name,
            'email' => $message->email,
            'message' => $message->message,
            'id' => $id
        ];

        return view('pages.messages.edit', $data);
    }

    public function addMessage(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        if (empty($name) || empty($message)) {
            return redirect('/');
        }

        $newMessage = new Message();
        $newMessage->name = $name;
        $newMessage->email = $email;
        $newMessage->message = $message;
        $newMessage->save();

        $request->session()->flash('status', 'Відгук успішно доданий.');

        return redirect('/');
    }

    public function updateMessage(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        if (empty($name) || empty($message)) {
            return redirect('/');
        }

        $newMessage = Message::find($id);
        $newMessage->name = $name;
        $newMessage->email = $email;
        $newMessage->message = $message;
        $newMessage->save();

        return redirect('admin');
    }

    public function deleteMessage($id)
    {
        Message::find($id)->delete();

        return redirect('admin');
    }
}
