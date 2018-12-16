<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Research;
use App\ResearchImage;
use App\Traits\FileTrait;
use App\Traits\ImageTrait;
use App\Teacher;
use App\ResearchOwner;
use App\User;
use Auth;
use App\ResearchDetail;

class ResearchDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = ResearchDetail::orderBy('created_at','desc')->paginate(10); 
        $teachers = Teacher::findOrFail(19);
        $posts = ResearchDetail::orderBy('created_at','desc')->paginate(5);  
        return view('researchDetail.index', ['teacher_read' => $teachers], ['sendPost'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::findOrFail(19);
        return view('researchDetail.create', ['teacher_read' => $teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'info' => 'required',
            'publication' => 'required'
        ]);

        //create research
        $post = new ResearchDetail;
        $post->info = $request->input('info');
        $post->publication = $request->input('publication');
        $post->save();

        return redirect('/researchDetail')->with('success','Research Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        // $teachers = ResearchDetail::findOrFail(19);
        // return dd ($teachers->get());
        $teachers = Teacher::findOrFail(19);
        $showPage =  ResearchDetail::find($id);
        return view('researchDetail.edit',['teacher_read' => $teachers],['show'=> $showPage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'info' => 'required',
            'publication' => 'required'
        ]);
        
        $post = ResearchDetail::find($id);
        $post->info = $request->input('info');
        $post->publication = $request->input('publication');
        $post->save();

        return redirect('/researchDetail')->with('success','Research Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = ResearchDetail::where('id',$id)->delete();
        return redirect('/researchDetail')->with('success', 'Research Removed');
    }
}
