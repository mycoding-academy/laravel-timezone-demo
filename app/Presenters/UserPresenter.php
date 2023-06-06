<?php

namespace App\Presenters;

use Laracodes\Presenter\Presenter;

class UserPresenter extends Presenter
{
    public function createdAt()
    {
        $timezone = auth()->user()->timezone ?? config('app.timezone');
        return $this->model->created_at->timezone($timezone)->format('d/m/Y H:i:s');
    }
}