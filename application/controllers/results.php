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
                            $std['obtainedmarks']=null;
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
        //     'studentid' => 3,
        //     'subjectid' => 36,
        //     'obtainedmarks' => 100002,
        // );
        // //$this->Results_model->add($data);
        // $id=$this->Results_model->getResultIndex($data['studentid'] , $data['subjectid']);
        // if(isset($id))
        // {
        //     $data['id']=$id;
        //     $this->Results_model->update($data);
        // }
        // print($marks);
        $data=$_POST['newData'];
        foreach ($data as $d)
        {
            $id=$this->Results_model->getResultIndex($d['studentid'] , $d['subjectid']);
            if(isset($id))
            {
                //update
                $this->Results_model->update($d['obtainedmarks'],$id);
            }
            else
            {
                //insert
                $this->Results_model->add($d);
            }  
        }
    }
}