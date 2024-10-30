<?php
namespace App\View\Components;

use Illuminate\View\Component;

class MainLayout extends Component
{
    /**
     * Shablonni render qilganda qo'llaniladigan metoddur.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('layouts.main'); // `layouts.main` faylini ishlatamiz
    }
}
