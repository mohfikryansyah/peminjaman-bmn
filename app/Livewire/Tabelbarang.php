<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;
use Livewire\Attributes\Url;

class Tabelbarang extends Component
{   
    #[Url()]
    public $sort = 'desc';

    public $search = '';

    public function setSort()
    {
        $this->sort = $this->sort === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        return view('livewire.tabelbarang', [
            'barangs' => Barang::orderBy('stok', $this->sort)->where('nama', 'like', '%'.$this->search.'%')->get()
        ]);
    }
}
