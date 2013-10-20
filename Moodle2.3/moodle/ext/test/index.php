<?php
require_once('..\..\config.php');
require_once('form.php');
global $output, $PAGE, $DB;

echo $OUTPUT->header();

class index {
/*$jsmodule = array(
'name' => 'test',
'fullpath' => new moodle_url('/test/module.js')); 

$PAGE->requires->js_init_call('M.test.init',null, true, $jsmodule);*/
    function get_form(){
        $mform = new ext_test_form();

        if ($mform->is_cancelled()) {


        } else if ($data = $mform->get_data()) {
            $this->update_form($data);

        } else {
            $mform->set_data($toform);

            $mform->display();
        }
    }
    
    function update_form($data){
        print_r($data);
        echo $data->fname;
        $record = new stdClass();
        $record->fname         = 'overview';
        $record->lname         = 'asd';
        $DB->insert_record('newform', $record);
     }
}

$ob = new index();
$ob->get_form();
echo $OUTPUT->footer();