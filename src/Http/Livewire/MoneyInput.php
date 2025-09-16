<?php

namespace Helvetitec\Livemasks\Http\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class MoneyInput extends Component
{
    #[Modelable]
    public $unmaskedValue = '';
    public $id = "moneyInput";
    public $name = "moneyInput";
    public $currencySign = '';
    public $class = '';
    public $required = false;
    #[Reactive]
    public $disabled = false;

    public function render()
    {
        return view('livemasks::money-input');
    }

    public function rendered()
    {
        $this->dispatch('money-input-updated', id: $this->id, value: $this->unmaskedValue);
    }
}
