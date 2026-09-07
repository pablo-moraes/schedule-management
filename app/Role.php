<?php

namespace App;

enum Role: string
{
    case ADMIN = 'admin';
    case SUPERVISOR = 'supervisor';
    case LEADER = 'leader';
}
