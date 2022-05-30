<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class smsController extends Controller
{
    public function int_en_to_bn($number){

        $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
        $en_digits=array('0','1','2','3','4','5','6','7','8','9');

       return str_replace($en_digits,$bn_digits, $number);
           }
           public function int_bn_to_en($number){

        $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
        $en_digits=array('0','1','2','3','4','5','6','7','8','9');

       return str_replace($bn_digits,$en_digits, $number);
           }

public function sent_sms()
{
    return view('dashboard.sms');

}


public function sent_sms_submit(Request $r)
{
    $school_id = sitedetails()[0]->school_id;

    $class = $r->class;
    $deccription = $r->deccription;

    if ($class == "All") {

        $year = date('Y');
        $date = date("Y-m-d");

        $wh = [

            'school_id'=>$school_id,
            'StudentStatus'=>'Active',
        ];

$count = DB::table('students')->where($wh)->count();
if($count>0){
    $query = DB::table('students')->where($wh)->get();


        $counter = 1;

         foreach ($query as $row) {
            $phone = '88'.$this->int_bn_to_en($row->StudentPhoneNumber) . ",";
            $to = "$phone";
            $token = env('SMS_TOKEN');
            $message = "$deccription";
             $url = "http://api.greenweb.com.bd/api2.php";
            $data = array(
                'to' => "$to",
                'message' => "$message",
                'token' => "$token"
            ); // Add parameters in key value
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_ENCODING, '');
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);
            //Result
            $smsresult;
            echo '<style>.alert.alert-success.alert-dismissible {
                background: #009688;
                margin: 5px;
                padding: 10px;
                color: white;
            }</style> <div class="alert alert-success alert-dismissible" role="alert"><strong>' . $counter . ' : ' . $smsresult . '</strong></div>';
            //Error Display
            curl_error($ch);
            $counter++;
        }

        echo '

        <a href="'
        .back().'
        " > Back</a>
        ';
}else{
    return back();
}





    } else {

        $year = date('Y');
        $date = date("Y-m-d");

        $wh = [
            'school_id'=>$school_id,
            'StudentClass'=>$class,
            'StudentStatus'=>'Active',
        ];

$count = DB::table('students')->where($wh)->count();
if($count>0){
    $query = DB::table('students')->where($wh)->get();


        $counter = 1;
         foreach ($query as $row) {

            $phone = '88'.$this->int_bn_to_en($row->StudentPhoneNumber) . ",";

            $to = "$phone";
             $token = env('SMS_TOKEN');
            $message = "$deccription";
             $url = "http://api.greenweb.com.bd/api2.php";
            $data = array(
                'to' => "$to",
                'message' => "$message",
                'token' => "$token"
            ); // Add parameters in key value
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_ENCODING, '');
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);

            //Result
            $smsresult;
            echo '<style>.alert.alert-success.alert-dismissible {
                background: #009688;
                margin: 5px;
                padding: 10px;
                color: white;
            }</style> <div class="alert alert-success alert-dismissible" role="alert"><strong>' . $counter . ' : ' . $smsresult . '</strong></div>';
            //Error Display
            curl_error($ch);
            $counter++;
        }

        echo '

        <a href="'
        .back().'
        " > Back</a>
        ';

        }
    }

}






        public function attendence_sheet_sms($class,$view,$date,)
        {
            $school_id = sitedetails()[0]->school_id;

            $wh = [
                'school_id'=>$school_id,
                'date'=>$date,
                'student_class'=>$class,
                'message_status'=>'Pending',
            ];
            $count = DB::table('attendances')->where($wh)->count();
if($count>0){
                $data = DB::table('attendances')->where($wh)->get();
            $attendance = json_decode($data[0]->attendance);
$counter = 1;
            foreach($attendance as $list){

                if($list->attendence=='Absent'){





                     $phone = '88'.$this->int_bn_to_en($list->phone) . ",";

                    $to = "$phone";
                     $token = env('SMS_TOKEN');
                    $message = "আপনার সন্তান আজ স্কুলে অনুপস্থিত! কারণ দর্শানোর জন্য অনুরোধ করা হইল";
                     $url = "http://api.greenweb.com.bd/api2.php";
                    $data = array(
                        'to' => "$to",
                        'message' => "$message",
                        'token' => "$token"
                    ); // Add parameters in key value
                    $ch = curl_init(); // Initialize cURL
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_ENCODING, '');
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $smsresult = curl_exec($ch);

                    //Result
                    $smsresult;
                    echo '<style>.alert.alert-success.alert-dismissible {
                        background: #009688;
                        margin: 5px;
                        padding: 10px;
                        color: white;
                    }</style> <div class="alert alert-success alert-dismissible" role="alert"><strong>' . $counter . ' : ' . $smsresult . '</strong></div>';
                    //Error Display
                    curl_error($ch);
                    $counter++;



                }


            }




}
DB::table('attendances')->where($wh)->update(['message_status'=>'Completed']);

            echo '

            <a href="'
            .back().'
            " > Back</a>
            ';
        }



}
