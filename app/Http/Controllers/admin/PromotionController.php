<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PromotionController extends Controller
{

public function promotionClass($class)
{
    if ($class == "Play") {
        return "Nursery";
    } else if ($class == "Nursery") {
        return "One";
    } else if ($class == "One") {
        return "Two";
    } else if ($class == "Two") {
        return "Three";
    } else if ($class == "Three") {
        return "Four";
    } else if ($class == "Four") {
        return "Five";
    } else if ($class == "Five") {
        return "Six";
    } else if ($class == "Six") {
        return "Seven";
    } else if ($class == "Seven") {
        return "Eight";
    } else if ($class == "Eight") {
        return "Nine";
    } else if ($class == "Nine") {
        return "Ten";
    } else if ($class == "Ten") {
        return "Out";
    } else {
        return '';
    }
}




    public function Promotion(Request $r)
    {

$data['class'] = '';
$data['Year'] = '';
$data['promotClass'] = '';
$data['resultCount'] = 0;





return view('admin.Promotion',$data);

    }

    public function Promotion_submit(Request $r)
    {



$StudentClass = $r->StudentClass;
$Year = $r->Year;


return redirect("school/Promotion/search/$StudentClass/$Year");

    }


    public function Promotion_search(Request $r,$class,$Year)
    {

$data['class'] = $class;
$data['Year'] = $Year;
$data['promotClass'] = $this->promotionClass($class);




$data['admissionYear'] = $Year + 1;


$Rwh = [
    'class' => $class,
    'exam_name' => 'Annual Examination',
    'year' => $Year,
];


$data['resultCount'] = DB::table('student_result')->where($Rwh)->count();
$data['rows'] = DB::table('student_result')->where($Rwh)->orderBy('failed','ASC')->orderBy('total','DESC')->get();




return view('admin.Promotion',$data);

    }



    public function Promotion_Pdf(Request $r,$class,$Year)
    {

$data['class'] = $class;
$data['promotClass'] = $this->promotionClass($class);

$year = $Year;


$data['admissionYear'] = $year + 1;


$Rwh = [
    'class' => $class,
    'exam_name' => 'Annual Examination',
    'year' => $Year,
];


$data['resultCount'] = DB::table('student_result')->where($Rwh)->count();
$data['rows'] = DB::table('student_result')->where($Rwh)->orderBy('failed','ASC')->orderBy('total','DESC')->get();



$pdf = PDF::loadView('admin.promotion_result', $data);
return $pdf->stream('document.pdf');

// return view('admin.Promotion',$data);

    }





public function Promotion_Next(Request $r)
{
//    echo '<pre>';
// print_r($r->all());


 $count  = $r->count;


for($i=0;$i<$count;$i++){




    $stwh = [
'StudentID' =>$r->stu_id[$i],
    ];

    $update = [
    'Year' =>$r->year[$i],
    'StudentRoll' =>$r->newRoll[$i],
    'StudentClass' =>$r->class[$i],


    ];

    $data = DB::table('students')->where($stwh)->update($update);



}


return redirect()->back();



}




}
