<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {

    /**
     * @var \App\Serie
     */
    private $serie;

    public function __construct(Serie $serie){

        $this->serie = $serie;
    }

	public function index(){
        $series = $this->serie->get();

        return view('series.index', compact('series'));
    }

    public function show(Serie $serie){

       return view('series.show', compact('serie'));
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request, Serie $serie){

       $serie->create($request->all());
        return redirect()->route('series.index');
    }

    public function edit(Serie $serie){

        return view('series.edit', compact('serie'));
    }

    public function update(Serie $serie, Request $request)
    {


        $serie->fill($request->input())->save();






        return redirect('series');
    }

}
