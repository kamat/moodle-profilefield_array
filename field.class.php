<?php

/**
 * Array profile field.
 *
 * @package    profilefield
 * @subpackage array
 * @copyright  2014 Andrew "Kama" (kamasutra12@yandex.ru) 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class profile_field_array extends profile_field_base {

    public function display_data() {
        $data = unserialize(parent::display_data());
        if ($data) {
          $output = '';
          foreach ($data as $val) {
            if (is_array($val) or is_object($val)) {
              $arr = (array)$val;
              $output .= isset($arr['full']) ? $arr['full'] . "\n" : implode(' - ', $arr) . "\n";
            } elseif (is_string($val)) {
              $output .= "$val\n";
            }
          }
          return "<pre>$output</pre>";
        } else {
          return 'not_set';
        }
    }

    public function edit_field_add($mform) {
      //Users can`t edit this field manually
    }
}


