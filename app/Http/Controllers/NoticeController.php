<?php

namespace App\Http\Controllers;

use App\Models\notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school_id = sitedetails()[0]->school_id;
        $rows = notice::where('school_id',$school_id)->get();
        return view('dashboard/notice.notice',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $edit_data = [
            'title'=>'',
            'description'=>'',
            'end'=>'',
        ];
$rows = json_decode(json_encode($edit_data));

        $data['form_type'] = 'new';
        return view('dashboard/notice.add',compact('rows'),$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school_id = sitedetails()[0]->school_id;
        $data = request()->except(['_token']);

        // echo '<pre>';
        // print_r($data);
$data['school_id'] = $school_id;

        notice::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice)
    {
        $rows = $notice;
        $data['form_type'] = 'edit';
        return view('dashboard/notice.add',compact('rows'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notice $notice)
    {

        $data = request()->except(['_token','_method']);
        $notice->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice)
    {
        $notice->delete();
        return redirect()->back();
    }
}
