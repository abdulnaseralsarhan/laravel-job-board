<?php

namespace App\Models;

use Illuminate\Support\Facades\View;


class Job
{
  public static function all(): array
{
    return [
        ["id" => 1, "name" => "Software Developer", "salary" => 2000],
        ["id" => 2, "name" => "Graphic Designer", "salary" => 2000]
    ];
}
}
