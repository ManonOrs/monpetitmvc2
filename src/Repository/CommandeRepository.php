<?php

namespace APP\Repository;

use Tools\Repository;

class CommandeRepository extends Repository{
  
  public function __construct(string $entity) {
    parent::__construct($entity);
  }
}