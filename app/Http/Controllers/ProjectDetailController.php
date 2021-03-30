<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDetailModel;
use Intervention\Image\Facades\Image;

class ProjectDetailController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectDetailModel::all()->sortByDesc('priority');

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new ProjectDetailModel;

        return view("projects.create", compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = ProjectDetailModel::create($this->validateRequest());

        $this->storeImage($project);

        return redirect('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectDetailModel $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectDetailModel $project)
    {
        // not needed, using eloquent route model binding
        // $project = ProjectDetailModel::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectDetailModel $project)
    {
        // $project = ProjectDetailModel::findOrFail($id);
        $project->update($this->validateRequest());

        $this->storeImage($project);

        return redirect('projects/' . $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectDetailModel $project)
    {
        //
    }

    private function validateRequest()
    {
        return request()->validate([
            'title'             => 'required|String|max:20',
            'short_description' => 'required|max:100',
            'description'       => 'required',
            'tags'              => 'required',
            'image'             => 'sometimes|file|image|max:5000',
        ]);
    }

    private function storeImage($project)
    {
        if (request()->has('image')) {
            $project->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
            
            $image = Image::make(public_path('storage/' . $project->image))->fit(300, 300);
            $image->save();
        }
    }
}
