<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;
use Telegram\Bot\Api;

class TelegramController extends Controller
{
    private Api $telegram;

    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    public function __invoke(MessageRequest $request)
    {
        $data = $request->validated();
        try {
            $message = sprintf(
                "<b>Новое сообщение с сайта!</b>\n<b>Тип сообщения:</b><i>%s</i>\n<b>Имя:</b> %s\n<b>Телефон:</b> %s\n",
                $data['type'],
                $data['name'],
                $data['phone']
            );

            if(isset($data['email'])) {
                $message .= sprintf("<b>Email:</b>%s \n", $data['email']);
            }
            if(isset($data['message'])) {
                $message .= sprintf("<b>Сообщение:</b>%s \n", $data['message']);
            }
            if(isset($data['flag'])) {
                if($data['flag']) {
                    $message .= "<b>Требуется монтаж:</b> Да \n";
                }
            }

            $this->telegram->sendMessage([
                'chat_id' => config('telegram.chat_id'),
                'text' => $message,
                'parse_mode' => 'HTML'
            ]);
            return response()->json(['message' => 'message sent', 'err' => 'none'], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'something went wrong', 'err' => $exception->getMessage()], 500);
        }
    }
}
