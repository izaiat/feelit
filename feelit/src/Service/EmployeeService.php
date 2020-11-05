<?php

namespace App\Service;

use App\Entity\Employee;
use App\Interfaces\FeelitUserInterface;
use App\Message\FeelitMailNotification;
use Symfony\Component\Messenger\MessageBusInterface;

class EmployeeService
{
    private $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    public function createMailNotification(Employee $employee)
    {
        $notification = new FeelitMailNotification($employee->getId());
        $this->messageBus->dispatch($notification);
    }
}