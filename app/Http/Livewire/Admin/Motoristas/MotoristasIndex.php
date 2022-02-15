<?php

namespace App\Http\Livewire\Admin\Motoristas;

use Livewire\Component;

use Livewire\WithPagination;

use App\Models\User;

class MotoristasIndex extends Component
{
    use WithPagination;

    public $readyToLoad = false;
    public $cant = '15';
    public $q = '';
    public $sort = 'id';
    public $direction = "DESC";

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'cant' => ['except' => '15'],
        'q' => ['except' => ''],
        'sort' => ['except' => 'id']
    ];

    public function render()
    {
        if ($this->readyToLoad) {
            $users = User::searchUser($this->q)
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant, ['*'], 'p');
        } else {
            $users = [];
        }

        return view('livewire.admin.motoristas.motoristas-index', compact('users'))->layout('layouts.admin');
    }

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function updatingQ()
    {
        $this->resetPage('p');
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == "DESC") {
                $this->direction = 'ASC';
            } else {
                $this->direction = 'DESC';
            }
        } else {
            $this->sort = $sort;

            $this->direction = 'ASC';
        }
    }
}
