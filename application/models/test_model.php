<?php

class Test_model extends CI_model {

    public function getCustomer(){
        $names=array(
            array("fn"=>'Ann',"ln"=>'Smith'),
            array("fn"=>'Ben',"ln"=>'Smith'),
            array("fn"=>'Don',"ln"=>'Smith')
            );
        return $names;
    }

}