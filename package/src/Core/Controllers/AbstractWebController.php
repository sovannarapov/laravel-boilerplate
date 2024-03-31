<?php

namespace Mangopie\Core\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Mangopie\Core\Interfaces\AbstractWebControllerInterface;

abstract class AbstractWebController extends Controller implements AbstractWebControllerInterface
{
    /**
     * @var string
     */
    protected string $name = '';

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $data = $this->repository->all();

        return response($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request): View
    {
        return view($this->name . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        $attributes = $request->all();
        $attributes[$this->fileKey] = null;
        $attributes['fileKey'] = $this->fileKey;
        if ($request->hasFile($this->fileKey)) {
            $attributes[$this->fileKey] = $request->file($this->fileKey);
        }
        if ($data = $this->repository->create($attributes)) {
            return $this->respondWithMessage($data, __('message.success.create', ['name' => $this->modelName]));
        }

        return $this->respondBadRequest(__('message.success.create', ['name' => $this->modelName]));
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Request $request, int $id): View
    {
        $data = $this->repository->find($id);

        return view($this->name . '.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit(Request $request, int $id): View
    {
        return view($this->name . '.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, int $id): Response
    {
        $attributes = $request->all();
        $attributes[$this->fileKey] = null;
        $attributes['fileKey'] = $this->fileKey;
        if ($request->hasFile($this->fileKey)) {
            $attributes[$this->fileKey] = $request->file($this->fileKey);
        }
        if ($data = $this->repository->update($attributes, $id)) {
            return $this->respondWithMessage($data, __('message.success.update', ['name' => $this->modelName]));
        }

        return $this->respondBadRequest(__('message.failed.update', ['name' => $this->modelName]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     *
     * @throws Throwable
     */
    public function destroy(int $id): Response
    {
        if ($data = $this->repository->delete($id)) {
            return $this->respondWithMessage($data, __('message.success.destroy', ['name' => $this->modelName]));
        }

        return $this->respondBadRequest(__('message.failed.destroy', ['name' => $this->modelName]));
    }
}
