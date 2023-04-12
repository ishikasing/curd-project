<?php
namespace Curd\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Curd\Project\Models\curd;

class curdcontroller extends Controller{


    public function store(Request $req)
    {
        // dd($req->all());
        $data= new curd;
        $data->title=$req->title;
        $data->other=$req->other;
        $data->category=$req->category;
        $data->save();
        return redirect('show');
    }
    public function show(){
        $data=curd::all();

   return view('Project::show',compact('data'));
    }

    public function delete($id){
          $data=curd::find($id);
          $data->delete();
          return redirect('show');
    }

    public function edit($id){
        $data=curd::find($id);
        return view('Project::edit',compact('data'));
    }


           public function update(Request $req){
              $Data=curd::find($req->id);
              $Data->title=$req->title;
              $Data->other=$req->other;
              $Data->category=$req->category;
              $Data->save();
              return redirect('show');
           }

           public function view($id){
            $data=curd::find($id);
            return view('Project::view',compact('data'));
        }
}
