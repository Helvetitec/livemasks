<?php

namespace Helvetitec\Livemasks;

use Helvetitec\Livemasks\Http\Livewire\MonetaryInput;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivemasksServiceProvider extends ServiceProvider
{
  public function register()
  {
  }

  public function boot()
  {
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'livemask');
    Livewire::component('livemask.money', MonetaryInput::class);
  }
}
