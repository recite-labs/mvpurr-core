<?php

namespace ReciteLabs\MvpurrCore\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use ReciteLabs\MvpurrCore\Dtos\CreatePageData;
use ReciteLabs\MvpurrCore\Dtos\EditPageData;
use ReciteLabs\MvpurrCore\Dtos\IndexPageData;
use ReciteLabs\MvpurrCore\Dtos\ShowPageData;
use ReciteLabs\MvpurrCore\Traits\Crudable;

abstract class CoreController
{
    use Crudable;
    protected $app = "";
    protected IndexPageData $indexPageData;
    protected CreatePageData $createPageData;
    protected ShowPageData $showPageData;
    protected EditPageData $editPageData;
    abstract function menu();

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render(app('mvpurr')->theme.'/Crud/Index', [
            'app' => $this->app,
            'menu' => $this->menu(),
            'title' => $this->indexPageData->title,
            'desc' => $this->indexPageData->description,
            'table' => [
                'data' => $this->indexPageData->data,
                'header' => $this->indexPageData->header,
                'actions' => $this->indexPageData->actions
            ],
            'links' => [
                'createUrl' => $this->create_url ?? null,
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $view = $this->create_view ?? app('mvpurr')->theme.'/Crud/Create';
        return Inertia::render($view, [
            'app' => $this->app,
            'menu' => $this->menu(),
            'title' => $this->createPageData->title,
            'desc' => $this->createPageData->description,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $view = $this->show_view ?? app('mvpurr')->theme.'/Crud/Show';
        return Inertia::render($view, [
            'app' => $this->app,
            'menu' => $this->menu(),
            'data' => $this->showPageData,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $view = $this->show_view ?? app('mvpurr')->theme.'/Crud/Edit';
        return Inertia::render($view, [
            'app' => $this->app,
            'menu' => $this->menu(),
            'data' => $this->editPageData,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
