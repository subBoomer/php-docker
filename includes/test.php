<?php
    echo "some text";
    echo "<br>";
    echo "some other text";

    class Person {
        public $name;
        public $surname;
        private $personCode;
        public $dateOfBirth;
        public $gender;


        public function setName($inputName) {
            $this->name = $inputName;
        }

        public function getName() {
            return $this->name;
        }
        
    }

    class Employee {
        public $name;
        public $role;
        public $access;

        public function setAccess($inputAccess) {
            $this->access = $inputAccess;
        }

        public function getAccess() {
            return $this->access;
        }

        public function setName($inputName) {
            $this->name = $inputName;
        }

        public function getName() {
            return $this->name;
        }
    }

    class Manager extends Employee {
        
    }
?>