<?php

namespace MostafaEssaAhmed755\RandomCatPkg\Providers;

use Illuminate\Support\ServiceProvider;

class RandomCatProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'randomCat');
    }
}
