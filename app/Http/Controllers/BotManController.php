<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Maneja las interacciones del BotMan.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {
            $message = strtolower($message); // Convertir a minúsculas para facilitar la comparación

            if ($message == 'hola') {
                $this->askName($botman);
            } elseif ($message == 'necesito ayuda') {
                $this->provideHelp($botman);
            } elseif ($message == 'necesito informacion') {
                $this->getCurrentTime($botman);
            } elseif ($message == 'noticias') {
                $this->getLatestNews($botman);
            } elseif (strpos($message, 'produccion') !== false || strpos($message, 'audiovisual') !== false || strpos($message, 'musical') !== false || strpos($message, 'audio') !== false) {
                $this->provideProductionInfo($botman);
            } else {
                $botman->reply("¡Hola! Soy un bot y estoy aquí para ayudarte. Puedes preguntarme sobre noticias, la hora actual, o cualquier cosa relacionada con producción audiovisual, musical o de audio.");
            }
        });

        $botman->listen();
    }

    /**
     * Pregunta por el nombre del usuario y sus preferencias.
     */
    public function askName($botman)
    {
        $botman->ask('¡Hola! ¿Cuál es tu nombre?', function (Answer $answer) use ($botman) {
            $name = $answer->getText();
            $this->say('Mucho gusto, ' . $name);

           $descripcion='Somos especialistas en producción audiovisual, musical y de audio. ¿En qué puedo ayudarte hoy?';
          $this->say($descripcion);
        });
    }

    /**
     * Proporciona ayuda al usuario.
     */
    public function provideHelp($botman)
    {
        $botman->reply('¡Claro! Puedo ayudarte con noticias, la hora actual y cualquier pregunta sobre producción audiovisual, musical o de audio. ¿En qué puedo asistirte?');
        // Puedes agregar más información o enlaces útiles aquí
    }

    /**
     * Obtiene la hora actual.
     */
    public function getCurrentTime($botman)
    {
        $currentTime = now()->format('H:i:s');
        $botman->reply('La hora actual es: ' . $currentTime);
    }

    /**
     * Obtiene las últimas noticias.
     */
    public function getLatestNews($botman)
    {
        // Puedes implementar la lógica para obtener noticias de una fuente externa
        $news = "Aquí están las últimas noticias en el mundo de la producción audiovisual, musical y de audio...";
        $botman->reply($news);
    }

    /**
     * Proporciona información sobre producción audiovisual, musical y de audio.
     */
    public function provideProductionInfo($botman)
    {
        $info = "Somos especialistas en producción audiovisual, musical y de audio. Pregunta lo que quieras saber, ¡estoy aquí para ayudarte!";
        $botman->reply($info);
    }
}
