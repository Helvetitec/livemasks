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
    $this->loadViewsFrom(__DIR__.'/../resources/views/livewire', 'livemasks');
    Livewire::component('livemasks.money', MoneyInput::class);
  }
}
