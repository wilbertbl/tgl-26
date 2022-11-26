<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\missing_item;
use Illuminate\Http\Request;

class missing_itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $missing_item = missing_item::where('item_code', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('location_id', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('missing_item_status', 'LIKE', "%$keyword%")
                ->orWhere('img_url', 'LIKE', "%$keyword%")
                ->orWhere('taken_at', 'LIKE', "%$keyword%")
                ->orWhere('taken_by', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $missing_item = missing_item::latest()->paginate($perPage);
        }

        return view('admin.missing_item.index', compact('missing_item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.missing_item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        missing_item::create($requestData);

        return redirect('admin/missing_item')->with('flash_message', 'missing_item added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $missing_item = missing_item::findOrFail($id);

        return view('admin.missing_item.show', compact('missing_item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $missing_item = missing_item::findOrFail($id);

        return view('admin.missing_item.edit', compact('missing_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $missing_item = missing_item::findOrFail($id);
        $missing_item->update($requestData);

        return redirect('admin/missing_item')->with('flash_message', 'missing_item updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        missing_item::destroy($id);

        return redirect('admin/missing_item')->with('flash_message', 'missing_item deleted!');
    }
}
