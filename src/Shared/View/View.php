<?php


namespace App\Shared\View;


use App\Shared\Exception\ViewNotFoundException;

abstract class View
{
    abstract public function render();

    /**
     * @param string $path
     *
     * @throws ViewNotFoundException
     */
    public function renderView(string $path) {
        if (!is_file(VIEWS_PATH . $path)) {
            throw new ViewNotFoundException();
        }
        include VIEWS_PATH . $path;
    }
}
