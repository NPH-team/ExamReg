<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;


class ControllerLogin extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        $_SESSION['username']=$request->username;
        
        $student = DB::select('select * from student where username = :username limit 0,1', ['username' => $request->username]);
       
        $stu = json_encode($student);
        $stu = json_decode($stu);

        //echo count($student);

        if (count($student) == 0) 
        {
            $result = json_encode(array('result'=>'wrongusername'));
            echo $result;
        }
        else{
            if ($request->password != $stu[0]->password)
            {
                $result = json_encode(array('result'=>'wrongpassword'));
                echo $result;
            }
            else{
                $result = json_encode(array('result'=>'correct'));
                echo $result;
            }
            
        }

    }


}

?>