<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public $projects = [
        ['id'=>'1', 'img'=>'https://i.gifer.com/8Etj.gif', 'title'=>'Progetto di Mobile Robotics', 'article'=>'lorem ipsum dolor ...'],
        ['id'=>'2', 'img'=>'https://i.gifer.com/8Ake.gif', 'title'=>'Progetto di Embedded Control', 'article'=>'lorem ipsum dolor ...'],
        ['id'=>'3', 'img'=>'https://i.gifer.com/Mr3W.gif', 'title'=>'Progetto di Industrial Handling', 'article'=>'lorem ipsum dolor ...'],
    ];

    public function showProjectView(){
        return view('projects', ['projects'=>$this->projects]);
    }

    public function showProject($id){
        foreach($this->projects as $project){
            if($project['id'] == $id){
                return view('project', ['project'=>$project]);
            }
        }
    }
    public function showProjectDetailPage($id){
        foreach($this->projects as $project){
            if($project['id'] == $id){
                return view('project-page', ['project'=>$project]);
            }
        }
    }
}
