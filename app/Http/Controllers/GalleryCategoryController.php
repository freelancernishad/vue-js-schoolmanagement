<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school_id = sitedetails()[0]->school_id;
        $rows = GalleryCategory::where('school_id',$school_id)->get();
        return view('dashboard/gallery.gallery_category',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit_data = [
            'name'=>'',
            'image'=>''
        ];
$rows = json_decode(json_encode($edit_data));

        $data['form_type'] = 'new';
        return view('dashboard/gallery.gallery_category_form',compact('rows'),$data);
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
        $request->validate([
            'name' => 'required|unique:gallery_categories',
        ]);

        $data = request()->except(['_token']);

        $imaagedata =   $request->image;
        $imaagedata =  explode(',',$imaagedata);

$imagecount = count($imaagedata);
if($imagecount==2){
        $imaagedata = $imaagedata[1];
        $imageid = uniqid();
        $imaagedata = base64_decode($imaagedata);
        $NewsImage ="$imageid.jpg";
        $im = imagecreatefromstring($imaagedata);
        if ($im !== false) {
            header('Content-Type: image/png');
            imagejpeg($im,"images/".$NewsImage,10);
        }else {
            echo 'An error occurred.';
        }
        $data['image']="images/".$NewsImage;
    }

    $data['school_id']=$school_id;
// return $data;
        // echo '<pre>';
        // print_r($data);

        GalleryCategory::create($data);

       return redirect(route('gallery_category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryCategory $galleryCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryCategory $galleryCategory)
    {
        $rows = $galleryCategory;
        $data['form_type'] = 'edit';
        return view('dashboard/gallery.gallery_category_form',compact('rows'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryCategory $galleryCategory)
    {
        $data = request()->except(['_token','_method']);

        $imaagedata =   $request->image;
        $imaagedata =  explode(',',$imaagedata);

$imagecount = count($imaagedata);
if($imagecount==2){
        $imaagedata = $imaagedata[1];
        $imageid = uniqid();
        $imaagedata = base64_decode($imaagedata);
        $NewsImage ="$imageid.jpg";
        $im = imagecreatefromstring($imaagedata);
        if ($im !== false) {
            header('Content-Type: image/png');
            imagejpeg($im,"images/".$NewsImage,10);
        }else {
            echo 'An error occurred.';
        }
        $data['image']="images/".$NewsImage;
    }

        $galleryCategory->update($data);
        return redirect(route('gallery_category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryCategory $galleryCategory)
    {
        $galleryCategory->delete();
        // return redirect()->back();
    }
}
