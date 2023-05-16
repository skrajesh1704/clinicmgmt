<?php

    namespace App\Models;
    use \CodeIgniter\Model;

    class ContactModel extends Model{

        public function savaData($data){
            $db = \Config\Database::connect();
            $build = $db->table('contact');

            $res = $build->insert($data);
            if($res->connID->affected_rows >=1){
                return true;
            }else{
                return false;
            }
        }
    }