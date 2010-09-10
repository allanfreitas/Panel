<?php
/**
 * User: Karthik
 * Date: Sep 10, 2010
 * Time: 3:54:23 PM
 */
 
class MY_Form_validation extends CI_Form_validation
{
    function unique($str, $field) {
        $CI =& get_instance();
        list($table, $column) = explode('.', $field, 2);

        $CI->form_validation->set_message('unique', 'This %s is already being used.');

        $query = $CI->db->query("SELECT COUNT(*) AS dupe FROM $table WHERE $column = '$str'");
        $row = $query->row();
        return ($row->dupe > 0) ? FALSE : TRUE;
    }
}
