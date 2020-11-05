<?php

namespace App\MessageHandler;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use App\Message\FeelitMailNotification;
use Symfony\Component\Mime\Email;

class MailNotificationHandler implements MessageHandlerInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(FeelitMailNotification $message)
    {
        $email = (new Email())
            ->from('ionzaiat@gmail.com')
            ->to('izaiat@pentalog.com')
            ->subject('New employee created!')
            ->html('!!! Hello a new employee was created in the app !!!');

        $this->mailer->send($email);
    }
}