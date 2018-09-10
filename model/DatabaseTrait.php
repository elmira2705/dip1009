<?php
    require_once 'model/Database.php';

    trait DatabaseTrait
    {
        private $db = NULL;

        public function doRequest($request, $params)
        {
           $this -> get_database();
           return $this -> db -> do_request($request, $params);
        }

        private function get_database()
        {
            if ($this -> db === NULL) {
                $this -> db = new Database();
            }
        }

    }
