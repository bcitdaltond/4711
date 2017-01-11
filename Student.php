<?php
/**
 * Created by PhpStorm.
 * User: Dalton
 * Date: 2017-01-11
 * Time: 10:09 AM
 */

/**
 * Describes a student by their
 * surname, first name, email, and grade (in courses)
 *
 * @author Dalton Danis
 */
class Student {

    /*
     * Default constructor for creating a student
     */
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /*
     * Adds an email to the email list
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /*
     * Adds a grade to the student (course grade)
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /*
     * Calculates the student's grade average
     * @return grade average
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }

    /*
     * Concatenates the student's information into a string
     * stored within the variable result.
     * @return concatenated student's information
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
