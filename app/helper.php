<?php

use Illuminate\Support\Facades\DB;
use App\Models\Visitor;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

function sitedetails()
{

    $fullURL = 'http://' . $_SERVER['HTTP_HOST'];


    $arrUrl = explode('.', $fullURL);

    // print_r($arrUrl);
    $count = count($arrUrl);
    if ($count == 1) {
        $fullURL = 'http://' . $_SERVER['HTTP_HOST'];
    } else {
        $fullURL = 'http://' . $arrUrl[1];
    }



    $count = DB::table('school_details')->where('school_domain', $fullURL)->count();

    if ($count > 0) {


        return  $data = DB::table('school_details')->where('school_domain', $fullURL)->first();


        // if($name=='school_id'){
        //     return $data[0]->school_id;
        // }else if($name=='school_domain'){
        //     return $data[0]->school_domain;
        // }else if($name=='SMS_TOKEN'){
        //     return $data[0]->SMS_TOKEN;
        // }else if($name=='SCHOLL_NAME'){
        //     return $data[0]->SCHOLL_NAME;
        // }else if($name=='SCHOLL_ADDRESS'){
        //     return $data[0]->SCHOLL_ADDRESS;
        // }else if($name=='SCHOLL_BUILD'){
        //     return $data[0]->SCHOLL_BUILD;
        // }else if($name=='SCHOLL_CODE'){
        //     return $data[0]->SCHOLL_CODE;
        // }else if($name=='HISTORY_OF_THE_ORGANIZATION'){
        //     return $data[0]->HISTORY_OF_THE_ORGANIZATION;
        // }else if($name=='PRINCIPALS_WORDS'){
        //     return $data[0]->PRINCIPALS_WORDS;
        // }else if($name=='VICE_PRINCIPALS_STATEMENT'){
        //     return $data[0]->VICE_PRINCIPALS_STATEMENT;
        // }else if($name=='facebook_page'){
        //     return $data[0]->facebook_page;
        // }else if($name=='meta_keywords'){
        //     return $data[0]->meta_keywords;
        // }else if($name=='meta_description'){
        //     return $data[0]->meta_description;
        // }else if($name=='meta_author'){
        //     return $data[0]->meta_author;
        // }else if($name=='contact_email'){
        //     return $data[0]->contact_email;
        // }else if($name=='theme'){
        //     return $data[0]->theme;
        // }

    } else {
        echo "
        <script>
            window.location.href = '/restricted'
        </script>

        ";
    }
}

function subjectCol($subject)
    {
        if($subject=='ইংলিশ'){
            return 'English_1st';
        }else if($subject=='বাংলা'){
            return 'Bangla_1st';
        }else{
            $orginal = array("বাংলা ১ম","বাংলা ২য়","ইংলিশ ১ম","ইংলিশ ২য়","গনিত","বিজ্ঞান","পদার্থ","রসায়ন","জীব-বিজ্ঞান","ভূগোল","অর্থনীতি","ইতিহাস","বাংলাদেশ ও বিশ্ব পরিচয়","ধর্ম","ইসলাম-ধর্ম","হিন্দু-ধর্ম","কৃষি","তথ্য ও যোগাযোগ প্রযোক্তি");
            $colname = array("Bangla_1st","Bangla_2nd","English_1st","English_2nd","Math","Science","physics","Chemistry","Biology","vugol","orthoniti","itihas","B_and_B","Religion","ReligionIslam","ReligionHindu","Agriculture","ICT");
            return str_replace($orginal, $colname, $subject);
        }
    }


function int_en_to_bn($number)
{

    $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
    $en_digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

    return str_replace($en_digits, $bn_digits, $number);
}
function int_bn_to_en($number)
{

    $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
    $en_digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

    return str_replace($bn_digits, $en_digits, $number);
}

function class_en_to_bn($class)
{

    $bn = array('শিশু শ্রেণি', 'নার্সারি', 'প্রথম শ্রেণি', 'দ্বিতীয় শ্রেণি', 'তৃতীয় শ্রেণী', 'চতুর্থ শ্রেণী', 'পঞ্চম শ্রেণী', 'ষষ্ঠ শ্রেণী', 'সপ্তম শ্রেণী', 'অষ্টম শ্রেণী', 'নবম শ্রেণী', 'দশম শ্রেণী');
    $en = array('Play', 'Nursery', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten');

    return str_replace($en, $bn, $class);
}

function month_en_to_bn($month)
{

    $bn_month = array('জানুয়ারি', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগষ্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
    $en_month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');


    return str_replace($en_month, $bn_month, $month);
}

function day_en_to_bn($day)
{

    $bn_month = array('শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার ', 'শুক্রবার');
    $en_month = array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');


    return str_replace($en_month, $bn_month, $day);
}







function numberTowords($num)
{
    $ones = array(
        0 => "ZERO",
        1 => "ONE",
        2 => "TWO",
        3 => "THREE",
        4 => "FOUR",
        5 => "FIVE",
        6 => "SIX",
        7 => "SEVEN",
        8 => "EIGHT",
        9 => "NINE",
        10 => "TEN",
        11 => "ELEVEN",
        12 => "TWELVE",
        13 => "THIRTEEN",
        14 => "FOURTEEN",
        15 => "FIFTEEN",
        16 => "SIXTEEN",
        17 => "SEVENTEEN",
        18 => "EIGHTEEN",
        19 => "NINETEEN",
        "014" => "FOURTEEN"
    );
    $tens = array(
        0 => "ZERO",
        1 => "TEN",
        2 => "TWENTY",
        3 => "THIRTY",
        4 => "FORTY",
        5 => "FIFTY",
        6 => "SIXTY",
        7 => "SEVENTY",
        8 => "EIGHTY",
        9 => "NINETY"
    );
    $hundreds = array(
        "HUNDRED",
        "THOUSAND",
        "MILLION",
        "BILLION",
        "TRILLION",
        "QUARDRILLION"
    ); /*limit t quadrillion */
    $num = number_format($num, 2, ".", ",");
    $num_arr = explode(".", $num);
    $wholenum = $num_arr[0];
    $decnum = $num_arr[1];
    $whole_arr = array_reverse(explode(",", $wholenum));
    krsort($whole_arr, 1);
    $rettxt = "";
    foreach ($whole_arr as $key => $i) {

        while (substr($i, 0, 1) == "0")
            $i = substr($i, 1, 5);
        if ($i < 20) {
            /* echo "getting:".$i; */
            $rettxt .= $ones[$i];
        } elseif ($i < 100) {
            if (substr($i, 0, 1) != "0")  $rettxt .= $tens[substr($i, 0, 1)];
            if (substr($i, 1, 1) != "0") $rettxt .= " " . $ones[substr($i, 1, 1)];
        } else {
            if (substr($i, 0, 1) != "0") $rettxt .= $ones[substr($i, 0, 1)] . " " . $hundreds[0];
            if (substr($i, 1, 1) != "0") $rettxt .= " " . $tens[substr($i, 1, 1)];
            if (substr($i, 2, 1) != "0") $rettxt .= " " . $ones[substr($i, 2, 1)];
        }
        if ($key > 0) {
            $rettxt .= " " . $hundreds[$key] . " ";
        }
    }
    if ($decnum > 0) {
        $rettxt .= " and ";
        if ($decnum < 20) {
            $rettxt .= $ones[$decnum];
        } elseif ($decnum < 100) {
            $rettxt .= $tens[substr($decnum, 0, 1)];
            $rettxt .= " " . $ones[substr($decnum, 1, 1)];
        }
    }
    return $rettxt;
}


//translate


// function sessionFlush()
// {
//     Session::forget('source');
//     Session::forget('target');
// }

// function setTarget($target)
// {
//     Session::put('target', $target);
// }

// function setSource($source)
// {
//     Session::put('source', $source);
// }

// function translateText($text)
// {
//     $src = Session::get('source');
//     $target = Session::get('target');
//     if ($target == '' || $target == null) return $text;
//     if ($src == '' || $src == null) {
//         $src = env('BaseLanguage');
//         Session::put('source', env('BaseLanguage'));
//     }
//     if ($src == $target) return $text;
//     else {
//         $translation = TranslateText::translate($src, $target, $text);
//         return $translation;
//     }
// }




function filterarray($arryvalue){
    return ($arryvalue->stu_id==2206033);
}
function attendancemonthCheck($cutentdate, $class, $StudentID)
{



    $months = date("F", strtotime($cutentdate));


    $wh = [
        'month' => $months,
        'student_class' => $class,
        'date' => $cutentdate,
    ];

    $attendancescount = DB::table('attendances')->where($wh)->count();
    if ($attendancescount > 0) {
        $attendances = DB::table('attendances')->where($wh)->get();
        $attendance = json_decode($attendances[0]->attendance);
        $attendance = array_filter($attendance,function($attendances) use($StudentID){
            return ($attendances->stu_id==$StudentID);
        });


        foreach ($attendance as $rr) {

            if ($rr->stu_id == $StudentID) {
                if ($rr->attendence == 'Present') {

                    return  $td =  '<td><i class="fas fa-check text-success"></i>  </td>';
                } else if ($rr->attendence == 'Absent') {
                    $attendace = 'fas fa-times text-danger';
                   // return '<td>'.$rr->stu_id.'-'.$StudentID.'</td>';
                   return  $td =  '<td><i class="fas fa-times text-danger"></i></td>';
                }else{
                    return  $td = '<td>-</td>';
                }

            }else{
                return  $td = '<td>-</td>';
            }
           // return  $td;

          // return filterarray($$rr->stu_id,$StudentID);
            //  if ($rr->stu_id == $StudentID) {
            //     return $StudentID.'true';
            // }else{
            //     return $StudentID.'false';
            // }

        //return $type;


        }


    } else {
       // return 'dont have';
    }
}


function attendancemonth($cutentdate, $class, $StudentID,$tt,$school_id)
{

    // $school_id = sitedetails()->school_id;

    $months = date("F", strtotime($cutentdate));


    $wh = [
        'month' => $months,
        'student_class' => $class,
        'date' => $cutentdate,
        'school_id'=> $school_id
    ];


     $attendancescount = DB::table('attendances')->where($wh)->count();
    if ($attendancescount > 0) {
          $attendances = DB::table('attendances')->where($wh)->get();
             $attendance = json_decode($attendances[0]->attendance);

        foreach ($attendance as $rr) {

            if ($rr->stu_id == $StudentID) {
                if ($rr->attendence == 'Present') {
                    if($tt=='pdf'){
                        $td =  '<td><img width="20px" src="https://static.vecteezy.com/system/resources/previews/001/200/261/large_2x/check-png.png" /> </td>';

                    }else{

                        $td =  '<td><i class="fas fa-check text-success"></i> </td>';
                    }

                } else if ($rr->attendence == 'Absent') {
                    // $attendace = 'fas fa-times text-danger';
                   // return '<td>'.$rr->stu_id.'-'.$StudentID.'</td>';

                   if($tt=='pdf'){
                    $td =  '<td><img width="20px" src="https://www.mycryptons.com/img/delete-icon.png" /> </td>';
                }else{

                    $td =  '<td><i class="fas fa-times text-danger"></i></td>';
                }


                }else{
                    $td = '<td>-</td>';
                }
                return  $td;
            }


        }



    } else {
        return '<td>-</td>';
    }

}




    function visitor(){
        $ip =  $_SERVER['REMOTE_ADDR'];

        $visitorWhere = [
            'ip'=>$ip,
            'date'=>date('d-m-Y'),
        ];

     $Visitor = Visitor::where($visitorWhere)->count();
      if($Visitor>0){

      }else{

          $datainsert = [
              'ip'=>$ip,
              'date'=>date('d-m-Y'),
              'month'=>date('F'),
              'year'=>date('Y'),
          ];
          Visitor::create($datainsert);
      }
    }





function sent_response($message,$data=[]){
    $response = [
        'status'=>true,
        'message'=>$message,
        'data'=>$data,
    ];
    return response()->json([$response]);

}

function sent_error($message ,$messages=[],$code=404){
    $response = [
        'status'=>false,
        'message'=>$message,
        'code'=>$code
    ];
    !empty($messages) ? $response['errors'] = $messages : null;


    return response()->json(['response'=>$response],$code);

}

function feesconvert($text){


if($text=='Monthly_fee'){
    $result = 'মাসিক বেতন';
}elseif($text=='মাসিক বেতন'){
    $result = 'Monthly_fee';
}else
if($text=='Session_fee'){
    $result = 'সেশন ফি';
}elseif($text=='সেশন ফি'){
    $result = 'Session_fee';
}else
if($text=='Exam_fee'){
    $result = 'পরিক্ষার ফি';
}elseif($text=='পরিক্ষার ফি'){
    $result = 'Exam_fee';
}else
if($text=='Other'){
    $result = 'অন্যান্য';
}elseif($text=='অন্যান্য'){
    $result = 'Other';
}
return $result;


}



function allList($type='',$class='',$group='')
{
    $data = [];
    if($type=='year'){


        //year list
      $data = [];
         $cerrentYear = date('Y');
       $first = $cerrentYear+1-1;
         array_push($data,$first);
      for ($i=0; $i < 25; $i++) {
          $cerrentYear = $cerrentYear-1;
           array_push($data,$cerrentYear);
         //  echo $cerrentYear;
         //  echo "<br>";
      }

     }else if($type=='month'){
         $data = ["January","February","March","April","May","June","July","August","September","October","November","December"];

     }else if($type=='days'){
         $data = ["Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday"];

     }else if($type=='subjects'){


 if($class=='Nursery'){
     $data = ["বাংলা","ইংলিশ","গনিত"];
 }elseif($class=='Play' || $class=='One' || $class=='Two'){
     $data = ["বাংলা","ইংলিশ","গনিত"];
 }elseif($class=='Three' || $class=='Four' || $class=='Five'){
     $data = ["বাংলা","ইংলিশ","গনিত","বাংলাদেশ ও বিশ্ব পরিচয়","বিজ্ঞান","ধর্ম"];
 }elseif($class=='Six' || $class=='Seven' || $class=='Eight'){
     $data = ["বাংলা ১ম","বাংলা ২য়","ইংলিশ ১ম","ইংলিশ ২য়","গনিত","বিজ্ঞান","বাংলাদেশ ও বিশ্ব পরিচয়","ধর্ম","কৃষি","তথ্য ও যোগাযোগ প্রযোক্তি"];
 }elseif($class=='Nine' || $class=='Ten'){


     if($group=='Science'){

         $data = ["বাংলা ১ম","বাংলা ২য়","ইংলিশ ১ম","ইংলিশ ২য়","গনিত","পদার্থ","রসায়ন","জীব-বিজ্ঞান","বাংলাদেশ ও বিশ্ব পরিচয়","ধর্ম","কৃষি","তথ্য ও যোগাযোগ প্রযোক্তি"];
     }elseif($group=='Humanities'){

         $data = ["বাংলা ১ম","বাংলা ২য়","ইংলিশ ১ম","ইংলিশ ২য়","গনিত","বিজ্ঞান","ভূগোল","অর্থনীতি","ইতিহাস","ধর্ম","কৃষি","তথ্য ও যোগাযোগ প্রযোক্তি"];
     }elseif($group=='Commerce'){

         $data = ["বাংলা ১ম","বাংলা ২য়","ইংলিশ ১ম","ইংলিশ ২য়","গনিত","বিজ্ঞান","পদার্থ","রসায়ন","জীব-বিজ্ঞান","ভূগোল","অর্থনীতি","ইতিহাস","বাংলাদেশ ও বিশ্ব পরিচয়","ধর্ম","কৃষি","তথ্য ও যোগাযোগ প্রযোক্তি"];
     }else{

         $data = ["বাংলা ১ম","বাংলা ২য়","ইংলিশ ১ম","ইংলিশ ২য়","গনিত","বিজ্ঞান","পদার্থ","রসায়ন","জীব-বিজ্ঞান","ভূগোল","অর্থনীতি","ইতিহাস","বাংলাদেশ ও বিশ্ব পরিচয়","ধর্ম","কৃষি","তথ্য ও যোগাযোগ প্রযোক্তি"];
     }



 }

     }else if($type=='groups'){
     $data = ["Science","Humanities","Commerce"];
     }
 else if($type=='exams'){
     $data = ["Weakly Examination","ADMITION TEST RESULT","First Terminals Examination","Second Terminals Examination","Annual Examination","Test Examination"];
     }else if($type=='religions'){
     $data = ["Islam","Hindu","Other"];
     }

     return $data;


}




function base64($Image)
{
//  return $Image;

    if(File::exists(env('FILE_PATH').$Image)){

        $Image= env('FILE_PATH').$Image;
    }else{
        $Image= env('FILE_PATH').'backend/image.png';

    }

// return $Image;
    return $b64image = 'data:image/png;base64,'.base64_encode(file_get_contents($Image));
}

 function fileupload($Image,$path,$width,$height)
{



    $position = strpos($Image, ';');
    $sub = substr($Image, 0, $position);
    $ext = explode('/', $sub)[1];
    $random = rand(10000,99999);
    $name = time().'____'.$random.'.'.$ext;
    $img = Image::make($Image)->resize($width, $height);

    $upload_path = $path;
    $image_url = $upload_path.$name;
     $img->save(env('FILE_PATH').$image_url);
     return $image_url;
}
















///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




define("SERVER", "https://bulksms.brotherit.net");
define("API_KEY", "2668e548a3250c3e4126e2e2c830d2797084f918");

define("USE_SPECIFIED", 0);
define("USE_ALL_DEVICES", 1);
define("USE_ALL_SIMS", 2);

/**
 * @param string     $number      The mobile number where you want to send message.
 * @param string     $message     The message you want to send.
 * @param int|string $device      The ID of a device you want to use to send this message.
 * @param int        $schedule    Set it to timestamp when you want to send this message.
 * @param bool       $isMMS       Set it to true if you want to send MMS message instead of SMS.
 * @param string     $attachments Comma separated list of image links you want to attach to the message. Only works for MMS messages.
 * @param bool       $prioritize  Set it to true if you want to prioritize this message.
 *
 * @return array     Returns The array containing information about the message.
 * @throws Exception If there is an error while sending a message.
 */
function sendSingleMessage($number, $message, $device = 0, $schedule = null, $isMMS = false, $attachments = null, $prioritize = false)
{
    $url = SERVER . "/services/send.php";
    $postData = array(
        'number' => $number,
        'message' => $message,
        'schedule' => $schedule,
        'key' => API_KEY,
        'devices' => $device,
        'type' => $isMMS ? "mms" : "sms",
        'attachments' => $attachments,
        'prioritize' => $prioritize ? 1 : 0
    );
    return sendRequest($url, $postData)["messages"][0];
}

/**
 * @param array  $messages        The array containing numbers and messages.
 * @param int    $option          Set this to USE_SPECIFIED if you want to use devices and SIMs specified in devices argument.
 *                                Set this to USE_ALL_DEVICES if you want to use all available devices and their default SIM to send messages.
 *                                Set this to USE_ALL_SIMS if you want to use all available devices and all their SIMs to send messages.
 * @param array  $devices         The array of ID of devices you want to use to send these messages.
 * @param int    $schedule        Set it to timestamp when you want to send these messages.
 * @param bool   $useRandomDevice Set it to true if you want to send messages using only one random device from selected devices.
 *
 * @return array     Returns The array containing messages.
 *                   For example :-
 *                   [
 *                      0 => [
 *                              "ID" => "1",
 *                              "number" => "+11234567890",
 *                              "message" => "This is a test message.",
 *                              "deviceID" => "1",
 *                              "simSlot" => "0",
 *                              "userID" => "1",
 *                              "status" => "Pending",
 *                              "type" => "sms",
 *                              "attachments" => null,
 *                              "sentDate" => "2018-10-20T00:00:00+02:00",
 *                              "deliveredDate" => null
 *                              "groupID" => ")V5LxqyBMEbQrl9*J$5bb4c03e8a07b7.62193871"
 *                           ]
 *                   ]
 * @throws Exception If there is an error while sending messages.
 */
function sendMessages($messages, $option = USE_SPECIFIED, $devices = [], $schedule = null, $useRandomDevice = false)
{
    $url = SERVER . "/services/send.php";
    $postData = [
        'messages' => json_encode($messages),
        'schedule' => $schedule,
        'key' => API_KEY,
        'devices' => json_encode($devices),
        'option' => $option,
        'useRandomDevice' => $useRandomDevice
    ];
    return sendRequest($url, $postData)["messages"];
}

/**
 * @param int    $listID      The ID of the contacts list where you want to send this message.
 * @param string $message     The message you want to send.
 * @param int    $option      Set this to USE_SPECIFIED if you want to use devices and SIMs specified in devices argument.
 *                            Set this to USE_ALL_DEVICES if you want to use all available devices and their default SIM to send messages.
 *                            Set this to USE_ALL_SIMS if you want to use all available devices and all their SIMs to send messages.
 * @param array  $devices     The array of ID of devices you want to use to send the message.
 * @param int    $schedule    Set it to timestamp when you want to send this message.
 * @param bool   $isMMS       Set it to true if you want to send MMS message instead of SMS.
 * @param string $attachments Comma separated list of image links you want to attach to the message. Only works for MMS messages.
 *
 * @return array     Returns The array containing messages.
 * @throws Exception If there is an error while sending messages.
 */
function sendMessageToContactsList($listID, $message, $option = USE_SPECIFIED, $devices = [], $schedule = null, $isMMS = false, $attachments = null)
{
    $url = SERVER . "/services/send.php";
    $postData = [
        'listID' => $listID,
        'message' => $message,
        'schedule' => $schedule,
        'key' => API_KEY,
        'devices' => json_encode($devices),
        'option' => $option,
        'type' => $isMMS ? "mms" : "sms",
        'attachments' => $attachments
    ];
    return sendRequest($url, $postData)["messages"];
}

/**
 * @param int $id The ID of a message you want to retrieve.
 *
 * @return array     The array containing a message.
 * @throws Exception If there is an error while getting a message.
 */
function getMessageByID($id)
{
    $url = SERVER . "/services/read-messages.php";
    $postData = [
        'key' => API_KEY,
        'id' => $id
    ];
    return sendRequest($url, $postData)["messages"][0];
}

/**
 * @param string $groupID The group ID of messages you want to retrieve.
 *
 * @return array     The array containing messages.
 * @throws Exception If there is an error while getting messages.
 */
function getMessagesByGroupID($groupID)
{
    $url = SERVER . "/services/read-messages.php";
    $postData = [
        'key' => API_KEY,
        'groupId' => $groupID
    ];
    return sendRequest($url, $postData)["messages"];
}

/**
 * @param string $status         The status of messages you want to retrieve.
 * @param int    $deviceID       The deviceID of the device which messages you want to retrieve.
 * @param int    $simSlot        Sim slot of the device which messages you want to retrieve. Similar to array index. 1st slot is 0 and 2nd is 1.
 * @param int    $startTimestamp Search for messages sent or received after this time.
 * @param int    $endTimestamp   Search for messages sent or received before this time.
 *
 * @return array     The array containing messages.
 * @throws Exception If there is an error while getting messages.
 */
function getMessagesByStatus($status, $deviceID = null, $simSlot = null, $startTimestamp = null, $endTimestamp = null)
{
    $url = SERVER . "/services/read-messages.php";
    $postData = [
        'key' => API_KEY,
        'status' => $status,
        'deviceID' => $deviceID,
        'simSlot' => $simSlot,
        'startTimestamp' => $startTimestamp,
        'endTimestamp' => $endTimestamp
    ];
    return sendRequest($url, $postData)["messages"];
}

/**
 * @param int $id The ID of a message you want to resend.
 *
 * @return array     The array containing a message.
 * @throws Exception If there is an error while resending a message.
 */
function resendMessageByID($id)
{
    $url = SERVER . "/services/resend.php";
    $postData = [
        'key' => API_KEY,
        'id' => $id
    ];
    return sendRequest($url, $postData)["messages"][0];
}

/**
 * @param string $groupID The group ID of messages you want to resend.
 * @param string $status  The status of messages you want to resend.
 *
 * @return array     The array containing messages.
 * @throws Exception If there is an error while resending messages.
 */
function resendMessagesByGroupID($groupID, $status = null)
{
    $url = SERVER . "/services/resend.php";
    $postData = [
        'key' => API_KEY,
        'groupId' => $groupID,
        'status' => $status
    ];
    return sendRequest($url, $postData)["messages"];
}

/**
 * @param string $status         The status of messages you want to resend.
 * @param int    $deviceID       The deviceID of the device which messages you want to resend.
 * @param int    $simSlot        Sim slot of the device which messages you want to resend. Similar to array index. 1st slot is 0 and 2nd is 1.
 * @param int    $startTimestamp Resend messages sent or received after this time.
 * @param int    $endTimestamp   Resend messages sent or received before this time.
 *
 * @return array     The array containing messages.
 * @throws Exception If there is an error while resending messages.
 */
function resendMessagesByStatus($status, $deviceID = null, $simSlot = null, $startTimestamp = null, $endTimestamp = null)
{
    $url = SERVER . "/services/resend.php";
    $postData = [
        'key' => API_KEY,
        'status' => $status,
        'deviceID' => $deviceID,
        'simSlot' => $simSlot,
        'startTimestamp' => $startTimestamp,
        'endTimestamp' => $endTimestamp
    ];
    return sendRequest($url, $postData)["messages"];
}

/**
 * @param int    $listID      The ID of the contacts list where you want to add this contact.
 * @param string $number      The mobile number of the contact.
 * @param string $name        The name of the contact.
 * @param bool   $resubscribe Set it to true if you want to resubscribe this contact if it already exists.
 *
 * @return array     The array containing a newly added contact.
 * @throws Exception If there is an error while adding a new contact.
 */
function addContact($listID, $number, $name = null, $resubscribe = false)
{
    $url = SERVER . "/services/manage-contacts.php";
    $postData = [
        'key' => API_KEY,
        'listID' => $listID,
        'number' => $number,
        'name' => $name,
        'resubscribe' => $resubscribe
    ];
    return sendRequest($url, $postData)["contact"];
}

/**
 * @param int    $listID The ID of the contacts list from which you want to unsubscribe this contact.
 * @param string $number The mobile number of the contact.
 *
 * @return array     The array containing the unsubscribed contact.
 * @throws Exception If there is an error while setting subscription to false.
 */
function unsubscribeContact($listID, $number)
{
    $url = SERVER . "/services/manage-contacts.php";
    $postData = [
        'key' => API_KEY,
        'listID' => $listID,
        'number' => $number,
        'unsubscribe' => true
    ];
    return sendRequest($url, $postData)["contact"];
}

/**
 * @return string    The amount of message credits left.
 * @throws Exception If there is an error while getting message credits.
 */
function getBalance()
{
    $url = SERVER . "/services/send.php";
    $postData = [
        'key' => API_KEY
    ];
    $credits = sendRequest($url, $postData)["credits"];
    return is_null($credits) ? "Unlimited" : $credits;
}

/**
 * @param string $request   USSD request you want to execute. e.g. *150#
 * @param int $device       The ID of a device you want to use to send this message.
 * @param int|null $simSlot Sim you want to use for this USSD request. Similar to array index. 1st slot is 0 and 2nd is 1.
 *
 * @return array     The array containing details about USSD request that was sent.
 * @throws Exception If there is an error while sending a USSD request.
 */
function sendUssdRequest($request, $device, $simSlot = null)
{
    $url = SERVER . "/services/send-ussd-request.php";
    $postData = [
        'key' => API_KEY,
        'request' => $request,
        'device' => $device,
        'sim' => $simSlot
    ];
    return sendRequest($url, $postData)["request"];
}

/**
 * @param int $id The ID of a USSD request you want to retrieve.
 *
 * @return array     The array containing details about USSD request you requested.
 * @throws Exception If there is an error while getting a USSD request.
 */
function getUssdRequestByID($id)
{
    $url = SERVER . "/services/read-ussd-requests.php";
    $postData = [
        'key' => API_KEY,
        'id' => $id
    ];
    return sendRequest($url, $postData)["requests"][0];
}

/**
 * @param string   $request        The request text you want to look for.
 * @param int      $deviceID       The deviceID of the device which USSD requests you want to retrieve.
 * @param int      $simSlot        Sim slot of the device which USSD requests you want to retrieve. Similar to array index. 1st slot is 0 and 2nd is 1.
 * @param int|null $startTimestamp Search for USSD requests sent after this time.
 * @param int|null $endTimestamp   Search for USSD requests sent before this time.
 *
 * @return array     The array containing USSD requests.
 * @throws Exception If there is an error while getting USSD requests.
 */
function getUssdRequests($request, $deviceID = null, $simSlot = null, $startTimestamp = null, $endTimestamp = null)
{
    $url = SERVER . "/services/read-ussd-requests.php";
    $postData = [
        'key' => API_KEY,
        'request' => $request,
        'deviceID' => $deviceID,
        'simSlot' => $simSlot,
        'startTimestamp' => $startTimestamp,
        'endTimestamp' => $endTimestamp
    ];
    return sendRequest($url, $postData)["requests"];
}

function sendRequest($url, $postData)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch));
    }
    curl_close($ch);
    if ($httpCode == 200) {
        $json = json_decode($response, true);
        if ($json == false) {
            if (empty($response)) {
                throw new Exception("Missing data in request. Please provide all the required information to send messages.");
            } else {
                throw new Exception($response);
            }
        } else {
            if ($json["success"]) {
                return $json["data"];
            } else {
                throw new Exception($json["error"]["message"]);
            }
        }
    } else {
        throw new Exception("HTTP Error Code : {$httpCode}");
    }
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*

try {
    // Send a message using the primary device.
    $msg = sendSingleMessage("+8801909756552", "This is a test of single message.");

    // Send a message using the Device ID 1.
    $msg = sendSingleMessage("+8801909756552", "This is a test of single message.", 94);

     // Send a prioritize message using Device ID 1 for purpose of sending OTP, message reply etc…
    $msg = sendSingleMessage("+8801909756552", "This is a test of single message.", 94, null, false, null, true);

    // Send a MMS message with image using the Device ID 1.
    $attachments = "https://example.com/images/footer-logo.png,https://example.com/downloads/sms-gateway/images/section/create-chat-bot.png";
    $msg = sendSingleMessage("+8801909756552", "This is a test of single message.", 94, null, true, $attachments);

    // Send a message using the SIM in slot 1 of Device ID 1 (Represented as "1|0").
    // SIM slot is an index so the index of the first SIM is 0 and the index of the second SIM is 1.
    // In this example, 1 represents Device ID and 0 represents SIM slot index.
    $msg = sendSingleMessage("+8801909756552", "This is a test of single message.", "94|1");

    // Send scheduled message using the primary device.
    $msg = sendSingleMessage("+8801909756552", "This is a test of schedule feature.", null, strtotime("+2 minutes"));
    print_r($msg);

    echo "Successfully sent a message.";
} catch (Exception $e) {
    echo $e->getMessage();
}
 */


//  $messages = array();

// for ($i = 1; $i <= 3; $i++) {
//     array_push($messages,
//         [
//             "number" => "+8801909756552",
//             "message" => "This is a test #{$i} of PHP version. Testing bulk message functionality."
//         ]);
// }

// try {
//     // Send messages using the primary device.
//     $msgs = sendMessages($messages);

    // Send messages using default SIM of all available devices. Messages will be split between all devices.
   //sendMessages($messages, USE_ALL_DEVICES);

    // Send messages using all SIMs of all available devices. Messages will be split between all SIMs.
    //sendMessages($messages, USE_ALL_SIMS);

    // Send messages using only specified devices. Messages will be split between devices or SIMs you specified.
    // If you send 12 messages using this code then 4 messages will be sent by Device ID 1, other 4 by SIM in slot 1 of
    // Device ID 2 (Represendted as "2|0") and remaining 4 by SIM in slot 2 of Device ID 2 (Represendted as "2|1").
   // sendMessages($messages, USE_SPECIFIED, [1, "2|0", "2|1"]);

    // Send messages on schedule using the primary device.
   // sendMessages($messages, null, null, strtotime("+2 minutes"));

    // Send a message to contacts in contacts list with ID of 1.
    //sendMessageToContactsList(1, "Test", USE_SPECIFIED, 1);

    // Send a message on schedule to contacts in contacts list with ID of 1.
   // sendMessageToContactsList(1, "Test", null, null, strtotime("+2 minutes"));

    // Array of image links to attach to MMS message;
/*     $attachments = [
        "https://example.com/images/footer-logo.png",
        "https://example.com/downloads/sms-gateway/images/section/create-chat-bot.png"
    ];
    $attachments = implode(',', $attachments);

    $mmsMessages = [];
    for ($i = 1; $i <= 12; $i++) {
        array_push($mmsMessages,
            [
                "number" => "+11234567890",
                "message" => "This is a test #{$i} of PHP version. Testing bulk MMS message functionality.",
                "type" => "mms",
                "attachments" => $attachments
            ]);
    } */
    // Send MMS messages using all SIMs of all available devices. Messages will be split between all SIMs.
   // $msgs = sendMessages($mmsMessages, USE_ALL_SIMS);

//     print_r($msgs);

//     echo "Successfully sent bulk messages.";
// } catch (Exception $e) {
//     echo $e->getMessage();
// }




