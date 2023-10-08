<?php

namespace App\Http\Livewire\Admin\Forms;

use App\Http\Livewire\Traits\InteractsWithModal;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryForm extends BaseForm
{
    use InteractsWithModal;

    public $title;

    public $form = [
        'id' => null,
        'name' => '',
        'order' => '',
    ];

    public function mount(array $params = [])
    {
        parent::mount($params);
        $this->title = isset($params['id']) ? 'Actualizar categoria' : 'Agregar categoria';
    }

    public function submit()
    {
        $data = Validator::make($this->form, [
            'id' => 'nullable',
            'name' => 'required',
            'order' => 'required'
        ])->validate();

        $category = Category::updateOrCreate(
            ['id' => $data['id']],
            $data
        );

        $this->closeModal();

        $this->emit('list:refresh');
        $this->emit('toast', 'Categoria guardada', $category['name'].',se guardo.');

    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.forms.category-form');
    }
}
