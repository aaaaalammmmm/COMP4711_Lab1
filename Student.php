<?php 
    /*
     * A description of a student.
     * 
     * @author Angus Lam
     */
    class Student {
        /*
         * This initializes the fields of a student object.
         */
        function __construct() {
                $this->surname = '';
                $this->first_name = '';
                $this->emails = array();
                $this->grades = array();
        }

        /*
         * This adds an email along with an identifying key to the objects email map.
         * 
         * @param string $which The email type
         * @param string $address The email address
         */
        function add_email($which,$address) {
                $this->emails[$which] = $address;
        }

        /*
         * This adds a grade to the objects grade array.
         * 
         * @param int $grade The grade for a course
         */
        function add_grade($grade) {
                $this->grades[] = $grade;
        }

        /*
         * This calculates the average mark of the student
         * using the grade array and returns the value.
         * 
         * @return int|float The average mark
         */
        function average() {
            $total = 0;

            foreach ($this->grades as $value) {
                    $total += $value;
            }

            return $total / count($this->grades);
        }

        /*
         * Returns a description of the student as a string.
         * 
         * @return string A description of the student
         */
        function toString() {
            $result = $this->first_name . ' ' . $this->surname;
            $result .= ' ('.$this->average().")\n";

            foreach($this->emails as $which=>$what) {

                    $result .= $which . ': '. $what. "\n";
            }

            $result .= "\n";
            return '<pre>'.$result.'</pre>';
        }
    }