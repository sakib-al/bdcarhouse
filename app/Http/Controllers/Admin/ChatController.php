<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ChatBot;
use DataTables;

use Illuminate\Http\Request;

class ChatController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function panel()
    {

        $data['chatbot'] = ChatBot::all();

        return view('admin.chatbot.index')->withChatbot($data);
    }

    public function create()
    {

        return view('admin.chatbot.create');
    }

    public function edit(Request $request, $id)
    {
        $data  = ChatBot::find($id);
        return view('admin.chatbot.edit')->withChatbot($data);
    }

    public function store(Request $request)
    {
        $chatbot                  = new ChatBot;
        $chatbot->queries         = $request->question;
        $chatbot->replay          = $request->reply;
        $chatbot->save();

        toast('Data added successfully !!','success');
        return redirect()->route('chat.bot');
    }

    public function update(Request $request, $id){
        //dd($request);


        $chatbot = ChatBot::find($id);
        $chatbot->queries        = $request->question;
        $chatbot->replay         = $request->reply;
        $chatbot->save();


        toast('Data hasbeen updated successfully !!','success');
        return redirect()->route('chat.bot');

    }

    public function delete($id)
    {
    $chatbot = ChatBot::find($id);
    $chatbot->delete();
    return redirect()->route('chat.bot');
    }


}
