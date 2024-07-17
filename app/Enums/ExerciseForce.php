<?php

namespace App\Enums;

enum ExerciseForce : string
{
    case PULL ='pull';
    case PUSH = 'push';
    case STATIC = 'static';
    case DYNAMIC = 'dynamic';
    case ISOMETRIC = 'isometric';
}
