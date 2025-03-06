<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class DatatablesFeaturedArt extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.datatables-featured-art', [
            'articles' => Article::paginate(4),
        ]);
    }
    public function paginationView()
    {
        return 'livewire.custom-pagination-links-view';
    }
}
