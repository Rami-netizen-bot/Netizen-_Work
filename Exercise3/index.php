<?php

interface NotificationSender
{
    public function send(string $message, string $to): void;
}
class EmailNotification implements NotificationSender
{

    public function send(string $message, string $to): void
    {
        echo "Email sent to $to with message : $message\n";
    }
}
class SMSNotification implements NotificationSender
{

    public function send(string $message, string $to): void
    {
        echo "SMS send to $to with message: $message\n";
    }
}
class PushNotification implements NotificationSender
{

    public function send(string $message, string $to): void
    {
        echo "Push alert sent to $to with message $message\n";
    }
}

class Useralert
{
    public function __construct(private NotificationSender $sender) {}

    public function trigger(string $msg, string $userContact): void
    {
        $this->sender->send($msg, $userContact);
    }
}

$emailAlert = new Useralert(new EmailNotification("", ""));
$emailAlert->trigger("Your code Works!", "dev@develop.com\n");

$smsAlert = new Useralert(new SMSNotification("", ""));
$smsAlert->trigger("Security Alert", "+069910033\n");
