<?php

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Received = 'received';
    case Shipped = 'shipped';
    case Completed = 'completed';
}