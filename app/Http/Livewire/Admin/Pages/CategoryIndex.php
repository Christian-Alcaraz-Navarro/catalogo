<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Http\Livewire\Traits\InteractsWithModal;
use App\Http\Livewire\Traits\WithSortingAndPagination;
use App\Models\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    use WithSortingAndPagination, InteractsWithModal;

    public $search = '';

    protected $listeners = [
        'list:refresh' => '$refresh',
        'list:unset' => 'delete'
    ];


    protected $queryString = [
        'search' => ['except' => '']
    ];


    public function mount()
    {
        $this->setSort('order');
    }


    public function render()
    {
        return view('livewire.admin.pages.category-index', [
            'categories' => $this->queryBuilder(
                Category::search('name', $this->search)
            )
        ]);
    }


    public function create()
    {
        $this->openModal('admin.forms.category-form', [], 'sm');
    }


    public function edit(Category $category)
    {
        $this->openModal('admin.forms.category-form', $category, 'sm');
    }


    public function confirmDelete(Category $category)
    {
        $this->openDeleteModal(
            $category['id'],
            'Eliminar categoria',
            'Estas seguro de eliminar la categoria\''.$category['name']
        );
    }


    public function delete(Category $category)
    {
        $category->delete();
        $this->emit('toast', 'Categoria eliminada', $category['name'].' se elimino.');
    }


}
