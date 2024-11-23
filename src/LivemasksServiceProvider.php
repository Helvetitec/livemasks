<?php

namespace Helvetitec\Livemasks;

use Helvetitec\Livemasks\Http\Livewire\MoneyInput;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivemasksServiceProvider extends ServiceProvider
{
  public function register()
  {
  }

  public function boot()
  {
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'livemasks');
    Livewire::component('livemask-money', MoneyInput::class);
  }
}
