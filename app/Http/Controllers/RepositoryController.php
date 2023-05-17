<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repository;
use App\Http\Requests\RepositoryRequest;

class RepositoryController extends Controller
{
    public function create(){
        return view('repositories.create');
    }
    public function store(RepositoryRequest $request){

        $request->user()->repositories()->create($request->all());

        return redirect()->route('repositories.index');
    }
    public function update(RepositoryRequest $request, Repository $repository){

        if($request->user()->id != $repository->user_id){
            abort(403);
        }

        $repository->update($request->all());
    
        return redirect()->route('repositories.edit' , $repository);
    }
    public function destroy(Repository $repository){
       $this->authorize('pass' ,$repository);

        $repository->delete();
    
        return redirect()->route('repositories.index');
    }
    public function index(){
        return view('repositories.index',[
            'repositories' => auth()->user()->repositories
        ]);

    }
    public function show(Repository $repository){
        $this->authorize('pass' ,$repository);

        return view('repositories.show', compact('repository'));
    }
    public function edit(Repository $repository){
        $this->authorize('pass' ,$repository);

        return view('repositories.edit', compact('repository'));
    }

}

