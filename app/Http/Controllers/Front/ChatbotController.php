<?php

namespace App\Http\Controllers\Front;
use App\Models\ChatBot;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;


class ChatbotController extends Controller
{

    public function message(Request $request)
    {

        $data = ChatBot::where("queries", "LIKE", $request->value)->first();
        if (empty($data)) {
            $bot = new ChatBot;
            $bot->queries = $request->value;
            $bot->save();
            $replay = 'Sorry cannot be able to understand you!';
        }else{
            $replay = $data->replay;
        }
        return json_encode($replay);
    }

}
