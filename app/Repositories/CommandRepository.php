<?php

namespace App\Repositories;

use App\Repositories\ResourceRepository;
use App\Models\Command;

class CommandRepository extends ResourceRepository {

    public function __construct(Command $command){
        $this->model = $command;
    }
}