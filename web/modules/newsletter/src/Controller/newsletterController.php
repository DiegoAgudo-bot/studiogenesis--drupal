<?php

namespace Drupal\newsletter\Controller;

class newsletterController {

    public function show() {

        $header = ['#','Email'];
        $data2 = $this->get_emails();
        $data = array();
        $i = 0;
        
        foreach($data2 as $email){
            array_push($data, array(++$i, $email->value));
        }
        
        $output[] = array(
            '#theme' => 'table',
            //'#cache' => ['disabled' => TRUE],
            '#header' => $header,
            '#rows' => $data,
        );

        return array('#title' => 'Emails subscribed to Newsletter', $output);
    }

    private function get_emails() {
        $conn = \Drupal::database();
        $query = $conn->query("SELECT value FROM {webform_submission_data} where name = 'email'");
        $result = $query->fetchAll();

        return $result;
    }

}
