<?php


namespace App\Error\View;

use App\Shared\View\View;

class NotFoundView extends View
{

    /**
     * @throws \App\Shared\Exception\ViewNotFoundException
     */
    public function render()
    {
        $this->renderView('errors/not-found.php');
    }
}
