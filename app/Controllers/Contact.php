<?php

    namespace App\Controllers;
    use \App\Models\ContactModel;

    class Contact extends BaseController{

        public $contactModel;
        public function __construct(){
            helper('form');
            $this->contactModel = new ContactModel();
        }

        public function index(){

            $session = session();

            $data = [
                'page_title' => "Contact",
                'validation' => null,
            ];

            $rules = [
                'name' => 'required|min_length[3]',
                'email'=> 'required|valid_email',
                'phone'=> 'required|exact_length[10]|numeric',
                'msg'  => 'required',
            ];

            if($this->request->getMethod() == 'post'){
                    if($this->validate($rules)){
                        $cdata = [
                           'name' => $this->request->getVar('name', FILTER_SANITIZE_STRING),
                           'email' => $this->request->getVar('email', FILTER_SANITIZE_STRING),
                           'phone' => $this->request->getVar('phone', FILTER_SANITIZE_STRING),
                           'message' => $this->request->getVar('msg', FILTER_SANITIZE_STRING),
                        ];

                       $status = $this->contactModel->savaData($cdata);

                       if($status){
                            $session->setTempdata('error', 'Sorry, Try Again !', 3);
                            return redirect()->to(current_url());
                       }else{
                            $session->setTempdata('success', 'Thanks, We will get back to you soon. ', 3);
                            return redirect()->to(current_url());
                       }

                    }else{
                        $data['validation'] = $this->validator;
                    }
            }else{

            }

            return view("contactView", $data);
        }
    }