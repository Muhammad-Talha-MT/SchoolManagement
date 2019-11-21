<?php
class results extends CI_Controller
{
    function index()
    {
        $this->load->model('Subject_model');
        $this->load->model('Student_model');
        $this->load->model('Results_model');
        $this->load->model('Class_model');
        $classes=$this->Class_model->getClasses_Name();
        $data['class'] = $classes;
        // Get All Students
        $students=$this->Student_model->getStudents_Class();
        $results=array();
        if (isset($students) && isset($classes))
        {
            foreach ($classes as $class)
            {
                $newStudents=array();
                $subjects= $this->Subject_model->getSubjectByClass($class['id']);
                if(isset($subjects))
                {
                    foreach ($subjects as $subject)
                    {
                        $newStudents=array();
                        for ($i=0 ; $i<count($students);$i++)
                        {
                            $std=array();
                            $std['studentid']=$students[$i]['id'];
                            $std['regNumber']=$students[$i]['regNumber'];
                            $std['studentName']=$students[$i]['studentName'];
                            $std['classid']=$students[$i]['class'];
                            $std['classname']=$class['className'];
                            $std['totalmarks']=$subject['totalMarks'];
                            $std['subjectName']=$subject['subjectName'];
                            $std['subjectid']=$subject['id'];
                            $std['obtainedmarks']=4;
                            $marks=$this->Results_model->getResult($std['studentid'],$std['subjectid']);
                            if(isset($marks))
                            {
                                $std['obtainedmarks']=$marks;
                            }
                            array_push($newStudents,$std);
                        }
                        $results=array_merge($results,$newStudents);
                    }
                }
            }
        }
        $data['results']=$results;
        $this->load->view('results',$data);
    }
    
    function save()
    {
        $this->load->model('Results_model');
        // $data = array(
        //     'studentid' => 12,
        //     'subjectid' => 21,
        //     'obtainedmarks' => 12,
        // );
        //$this->Results_model->add($data);
        $data=$_POST['newData'];
        foreach ($data as $d)
        {
            //$marks=$this->Results_model->getResult($d['studentid']);
            $this->Results_model->add($d);
        }
    }
}