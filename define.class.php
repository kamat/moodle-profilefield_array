<?php

/**
 * Array profile field.
 *
 * @package    profilefield
 * @subpackage array
 * @copyright  2014 Andrew "Kama" (kamasutra12@yandex.ru) 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class profile_define_array extends profile_define_base {

    /**
     * Adds elements to the form for creating/editing this type of profile field.
     * @param moodleform $form
     */
    public function define_form_specific($form) {
        $form->addElement('text', 'defaultdata', get_string('profiledefaultdata', 'admin'), ' size=50');
        $form->setType('defaultdata', PARAM_TEXT);
    }

}


