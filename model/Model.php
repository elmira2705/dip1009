<?php

require_once 'model/ModelInterface.php';
require_once 'model/RecordsTrait.php';
require_once 'model/NameTrait.php';
require_once 'model/DatabaseTrait.php';

abstract class Model implements ModelInterface
{
    use RecordsTrait;

}
