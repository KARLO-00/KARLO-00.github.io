<?php
    class Errors {
        public $errors = [];

        function getErrorCount() {
            $this->errors = [];

            $variables = func_get_args();

            foreach ($variables as $key => $value) {
                if (empty($value)) {
                    $this->errors[] = "Variable " . $key . " is empty";
                }
            }

            return count($this->errors);
        }

        public function getError() {
            return print_r($this->errors);
        }
    }