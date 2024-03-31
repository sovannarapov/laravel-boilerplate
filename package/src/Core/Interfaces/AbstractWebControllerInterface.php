<?php

namespace Mangopie\Core\Interfaces;

use Illuminate\Http\Request;
use Illuminate\View\View;

interface AbstractWebControllerInterface extends AbstractControllerInterface
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request): View;

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Request $request, int $id): View;

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit(Request $request, int $id): View;
}
