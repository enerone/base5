<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSerieRequest;
use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


class SeriesController extends Controller {

    /**
     * @var \App\Serie
     */
    private $serie;


    /**
     * @param Serie $serie
     */
    public function __construct(Serie $serie){

        $this->serie = $serie;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index(){
        $series = $this->serie->get();

        return view('series.index', compact('series'));
    }

    /**
     * @param Serie $serie
     * @return \Illuminate\View\View
     */
    public function show(Serie $serie){
       return view('series.show', compact('serie'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create(){
        return view('series.create');
    }

    /**
     * @param Request $request
     * @param Serie $serie
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateSerieRequest $request, Serie $serie){

        $serie->create($request->all());
        return redirect()->route('series.index');
    }

    /**
     * @param Serie $serie
     * @return \Illuminate\View\View
     */
    public function edit(Serie $serie){
        return view('series.edit', compact('serie'));
    }

    /**
     * @param Serie $serie
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Serie $serie, Request $request)
    {
        $serie->fill($request->input())->save();
        return redirect('series');
    }

    public function ultimo( Request $request, Serie $serie,$slug)
    {
            $serie1 = $this->serie->whereSlug($slug)->first();
         $serie1->fill(['ultimo'=>$request->get('ultimo')])->save();
        
        return redirect('series');
    }

    public function destroy(Serie $serie){
        $serie->delete();

        return redirect('series');
    }

}
