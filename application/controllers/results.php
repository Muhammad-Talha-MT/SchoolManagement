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
        $data['current']=-1;
        $this->load->view('results',$data);
    }
    function showResult($id)
    {   
        $this->load->model('Subject_model');
        $this->load->model('Student_model');
        $this->load->model('Results_model');
        $this->load->model('Class_model');
        $class=$this->Class_model->getClassById($id);
        $classes=$this->Class_model->getClasses_Name();
        $data['class'] = $classes;
        // Get All Students
        $students=$this->Student_model->getStudents_Class();
        $results=array();
        if (isset($students) && isset($class))
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
        $data['results']=$results;
        $data['current']=$id;
        $this->load->view('results',$data);
    }
    function save()
    {
        $this->load->model('Results_model');
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
    function print($d)
    {
        $this->load->model("Results_model");
        $this->load->model("Subject_model");
        $values=explode('_',urldecode($d));
        $results=array();
        $results['studentid']=$values[0];
        $results['regNumber']=$values[1];
        $results['studentName']=$values[2];
        $results['className']=$values[3];
        $records=$this->Results_model->getResults($values[0]);
        for ($i=0 ; $i<count($records) ; $i=$i+1)
        {
            $r=$this->Subject_model->getSubjectById($records[$i]['subjectid']);
            $records[$i]['subjectName']=$r->subjectName;
            $records[$i]['totalmarks']=$r->totalMarks;
        }
        $data=array();
        $data['main']=$results;
        $data['results']=$records;
        $this->load->view('printResult',$data);
    }
}