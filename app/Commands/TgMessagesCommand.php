<?php

namespace App\Commands;

use App\Application;
use App\Telegram\TelegramApiImplementation;

class TgMessagesCommand extends Command
{
    protected Application $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    function run(array $options = []): void
    {
        $tgApi = new TelegramApiImplementation($this->app->env('TELEGRAM_TOKEN'));
        echo json_encode($tgApi->getMessages(0));
    }
}