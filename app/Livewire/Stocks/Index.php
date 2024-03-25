<?php

namespace App\Livewire\Stocks;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Stocks")]
class Index extends Component
{
    public function render()
    {
        sleep(1);
        return view('livewire.stocks.index');
    }
}
