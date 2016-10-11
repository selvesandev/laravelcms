<?php

namespace App\Traits;

trait SessionVar
{

    public function message()
    {
        $session = Request()->session();
        if ($session->has('error')) {
            $this->data('error', $session->pull('error'));
        }
        if ($session->has('success')) {
            $this->data('success', $session->pull('success'));
        }
        if ($session->has('info')) {
            $this->data('info', $session->pull('info'));
        }
        if ($session->has('warning')) {
            $this->data('warning', $session->pull('warning'));
        }
    }
}