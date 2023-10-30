<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Peminjam;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class DaftarPeminjam extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    #[Url(history: true)]
    public $search = '';

    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.daftar-peminjam', [
            'peminjams' => Peminjam::where('status', 'like', '%'.$this->search.'%')
                            ->orWhere('nama', 'like', '%'.$this->search.'%')
                            ->simplePaginate(7)
        ]);
    }
}
