<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrudTable extends Component
{
    public $users = [
        [
            'forename' => 'Borislav',
            'surname' => 'Mohammad',
            'edit' => false,
        ],
        [
            'forename' => ' Afi',
            'surname' => 'Clementia',
            'edit' => false,
        ],
        [
            'forename' => 'Cyra',
            'surname' => 'Ajay',
            'edit' => false,
        ],
        [
            'forename' => 'Hendry',
            'surname' => 'Reinhild',
            'edit' => false,
        ],
        [
            'forename' => 'Wilburh',
            'surname' => 'Govinda',
            'edit' => false,
        ],
    ];

    public $selected = [];

    public function edit($index) 
    {
        $this->users[$index]['edit'] = true;
        array_push($this->selected, ['index' => $index, 'forename' => $this->users[$index]['forename'], 'surname' => $this->users[$index]['surname']]);
    }

    public function update()
    {
        dd($this->selected);
    }

    public function render()
    {
        return view('livewire.crud-table')->with('users', $this->users);
    }
}
