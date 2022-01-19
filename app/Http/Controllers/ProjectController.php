<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function view(){
        $projects = Project::all();
        return view('project', compact('projects'));
    }

    public function create(){
        return view('project.create');
    }

    public function store(Request $request){
        $id = null;
        $project = Project::findOrNew($id);
        $project->name = $request->name;
        $project->language = $request->language;
        $project->description = $request->description;
        $project->link = $request->link;

        /* file/image upload*/
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $project->image = $imageName;
        }

        $project->save();
    }

    public function allProject(){
        $data = Project::all();
        return view('home', compact('data'));
    }

    public function getDetails(Request $request){

        $id=$request->input('id');

        $result=Project::where('id','=',$id)->get();
        $jsonData=json_encode($result);

        return $jsonData;

    }


}
