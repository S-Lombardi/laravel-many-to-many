<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Types;

use App\Models\Portfolio;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types= Types::all();
        $works = Portfolio::all();
        return view('admin.works.index', compact('works','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //FFORM
    public function create()
    {
        //Recupero tutti i dati dalla tabella types
        $types=Types::all();
        return view('admin.works.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {
        $form_data=$request-> all();

        $project= new Portfolio();
        
        //Controllo per le immagini
        if($request->hasFile('image')){
            $path = Storage::put('image', $request->image);
            
            $form_data['image']=$path;
        }
        
        $project->fill($form_data);
        $project->save();
        return redirect()->route('admin.works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $project = Portfolio::findOrFail($id);
        return view('admin.works.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Recupero tutti i dati 
        $project = Portfolio::findOrFail($id);
        $types=Types::all();

        return view('admin.works.edit', compact ('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioRequest  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, $id)
    {
        $form_data = $request->all();
        $project = Portfolio::findOrFail($id);
        
        //Controllo per le immagini
        if($request->hasFile('image')){
            $path = Storage::put('image', $request->image);

            $form_data['image']=$path;
        }

        $project->update($form_data);
        return redirect()->route('admin.works.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Portfolio::findOrFail($id);

        $project->delete();
        return redirect()->route('admin.works.index');
    }
}
