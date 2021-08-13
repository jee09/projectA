<?php

class login extends CI_Controlelr
{
    function index()
    {
        $this->load->view('login');
    }

    public function __construct()
    {
        $id = $_POST['userID'];
        $pw = $_POST['userPW'];

        $this->fnAccountCheck($id, $pw);
        {
            $tempID = 'saha';
            $tempPw = 'fkddl4946';
            if (empty($id) || empty($pw)) {
                echo "내용을 입력해주세요.";
                exit;
            }
            if ($id != $tempID || $pw != $tempPw) {
                echo "계정 정보가 일치하지 않습니다.";
                exit;
            }

        }
    }}