<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class IsssteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $demo;
    public function __construct($demo)
    {
        $this->demo = $demo;
    }
    public function build()
    {
        return $this->from('postulados@issste.gob.mx')
                    ->view('mails.demo')
                    ->text('mails.demo_plain')
                    ->with(
                      [
                            'testVarOne' => '1',
                            'testVarTwo' => '2',
                      ]);
    }
}

