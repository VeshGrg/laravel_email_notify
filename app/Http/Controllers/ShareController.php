<?php

namespace App\Http\Controllers;

use App\Models\Share;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Share $share)
    {
        $share = $share->latest()->paginate(8);
        return view('share.index')
            ->with('shares', $share);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('share.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Share $share)
    {
        //dd($request->all());
        $request->validate([
            'company_type' => 'required|in:hydropower,bfi,investment,hotel',
            'name_of_company' => 'required',
            'share_no' => 'required',
            'amt' => 'required'
        ]);
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;

//        Share::create($request->all());
        $share->fill($data);
        $share->save();

        return redirect()->route('shares.index')
            ->with('message', 'Share application made successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Share $share)
    {
        return view('share.show')
            ->with('share_data', $share);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Share $share)
    {
        Gate::authorize('update', $share);
             return view('share.edit')->with('share', $share);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Share $share)
    {
        Gate::authorize('delete', $share);
        $share->delete();
       return redirect()->route('shares.index');

    }
}
