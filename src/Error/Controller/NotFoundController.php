<?php


namespace App\Error\Controller;


use App\Error\View\NotFoundView;

class NotFoundController
{
    /**
     * @throws \App\Shared\Exception\ViewNotFoundException
     */
    public function notFound() {
        $view = new NotFoundView();

        $view->render();
    }
}
