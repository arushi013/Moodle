<?php

require_once("$CFG->libdir/formslib.php");
 
class ext_test_form extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
 
        $mform = $this->_form; // Don't forget the underscore! 
 
        $mform->addElement('text', 'fname', get_string('first_name','ext_test')); 
        //$mform->setType('fname', PARAM_NOTAGS);                   
        $mform->setDefault('fname', 'Please enter Your first name');        
        
        $mform->addElement('text', 'lname', get_string('last_name' ,'ext_test')); 
        //$mform->setType('last_name', PARAM_NOTAGS);                   
        $mform->setDefault('lname', 'Please enter your last name');        
     
        $mform->addElement('text', 'email', get_string('email')); 
        $mform->setType('email', PARAM_NOTAGS);                   
        $mform->setDefault('email', 'Please enter your email');        
        
        $this->add_action_buttons( false , 'save');
            
    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}