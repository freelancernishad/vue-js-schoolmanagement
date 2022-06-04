<?php
namespace App\Http\Controllers\api;
use URL;
use PDF;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Meneses\LaravelMpdf\Facades\LaravelMpdf;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
class studentsController extends Controller
{
    public function list(Request $r)
    {
        $data['class'] = "All";
        $result = QueryBuilder::for(student::class)
            ->allowedFilters([
                'StudentName',
                'StudentRoll',
                AllowedFilter::exact('school_id'),
                AllowedFilter::exact('StudentClass'),
                'StudentID',
                'AdmissionID',
                'StudentFatherName',
                'StudentFatherOccupation',
                'StudentMotherName',
                'StudentMotherOccupation',
                'StudentGender',
                'StudentReligion',
                'StudentDateOfBirth',
                'StudentBirthCertificateNo',
                'StudentAddress',
                'StudentPhoneNumber',
                'StudentEmail',
                'AreaPostalCode',
                'StudentPicture',
                'JoiningDate',
                'StudentGroup',
                AllowedFilter::exact('Year'),
                AllowedFilter::exact('StudentStatus'),
                'StudentTranferStatus',
                'StudentTranferFrom',
                'AplicationStatus',
                'ThisMonthPaymentStatus', AllowedFilter::exact('id')
            ])
            ->allowedSorts([
                'StudentName',
                'StudentRoll',
                'school_id',
                'StudentClass',
                'StudentID',
                'AdmissionID',
                'StudentFatherName',
                'StudentFatherOccupation',
                'StudentMotherName',
                'StudentMotherOccupation',
                'StudentGender',
                'StudentReligion',
                'StudentDateOfBirth',
                'StudentBirthCertificateNo',
                'StudentAddress',
                'StudentPhoneNumber',
                'StudentEmail',
                'AreaPostalCode',
                'StudentPicture',
                'JoiningDate',
                'StudentGroup',
                'Year',
                'StudentStatus',
                'StudentTranferStatus',
                'StudentTranferFrom',
                'AplicationStatus',
                'ThisMonthPaymentStatus', 'id'
            ])
            ->orderBy('StudentRoll', 'ASC')
            ->paginate(20);
        return response()->json($result);
    }
    public function student_action(Request $request, $action)
    {
        if ($action == 'Delete') {
            $data = [];
            foreach ($request->all() as  $value) {
                $data[$value] = $value;
                $students = student::find($value);
                $students->delete();
            }
        } else {
            $data = [];
            foreach ($request->all() as  $value) {
                $data[$value] = $value;
                $students = student::find($value);
                $students->update(['StudentStatus' => $action]);
            }
        }
        return response()->json($data);
    }
    public function StudentAdmissionId($admition_id,$school_id)
    {

        $mutiple = (rand(1, 9));
        $admition_ID = $school_id . $admition_id;
        return $admition_ID += $mutiple;
    }
    public function word_digit($word)
    {
        $warr = explode(';', $word);
        $result = '';
        foreach ($warr as $value) {
            switch (trim($value)) {
                case 'Play':
                    $result .= '0';
                    break;
                case 'Nursery':
                    $result .= '11';
                    break;
                case 'One':
                    $result .= '1';
                    break;
                case 'Two':
                    $result .= '2';
                    break;
                case 'Three':
                    $result .= '3';
                    break;
                case 'Four':
                    $result .= '4';
                    break;
                case 'Five':
                    $result .= '5';
                    break;
                case 'Six':
                    $result .= '6';
                    break;
                case 'Seven':
                    $result .= '7';
                    break;
                case 'Eight':
                    $result .= '8';
                    break;
                case 'Nine':
                    $result .= '9';
                    break;
                case 'Ten':
                    $result .= '10';
                    break;
            }
        }
        return $result;
    }
    public function StudentId($class, $roll,$school_id)
    {

        $classidd = $this->word_digit($class);
        $classid = str_pad($classidd, 2, '0', STR_PAD_LEFT);
        $yearid = date("y");
        $rollid = str_pad($roll, 3, '0', STR_PAD_LEFT);
        return $school_id . '-' . $yearid . $classid . $rollid;
    }
    public function student_check(Request $r)
    {

        $school_id = $r->school_id;
        $class = $r->classvalue;
        if ($class == '') {
            $data = ['admition_ID' => '', 'StudentID' => '', 'StudentRoll' => ''];
            return response()->json($data);
        }
        $wheredata = [
            'StudentStatus' => 'Active',
            'StudentClass' => $class,
            'Year' => date('Y'),
            'school_id' => $school_id,
        ];
        $count = DB::table('students')->where($wheredata)->count();
        if ($count > 0) {
            $row = DB::table('students')->where($wheredata)->orderBy('StudentRoll', 'DESC')->get();
            $admition_id = $row[0]->AdmissionID;
            $roll = $row[0]->StudentRoll + 1;
            $admition_ID = $this->StudentAdmissionId($admition_id,$school_id);
            $StudentID = $this->StudentId($class, $roll,$school_id);
            $data = ['admition_ID' => $admition_ID, 'StudentID' => $StudentID, 'StudentRoll' => $row[0]->StudentRoll + 1];
        } else {
            $one = "0001";
            $year = date("dmy");
            $admition_ID = $school_id . $year . $one;
            ////////////////////////////////
            $StudentID = $this->StudentId($class, "1",$school_id);
            $data = ['admition_ID' => $admition_ID, 'StudentID' => $StudentID, 'StudentRoll' => '1'];
        }
        return response()->json($data);
    }
    public function student_submit(Request $r)
    {
        // return $r->all();
        $id = $r->id;
        $status = $r->status;
        $data = [];
        $inputData = $r->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token' || $key == 'status') {
            } else {
                $data[$key] = $value;
            }
        }
        if ($id == '') {
            $result =   student::create($data);
            $results['result'] = $result;
            $results['status'] = 'Created';
        } else {
            $student = student::find($r->id);
            $result = $student->update($data);
            $results['result'] = $result;
            $results['status'] = 'Updated';
        }
        return response()->json($results);
    }

    public function imageupload(Request $request)
    {
        $id =  $request->id;
        $student = student::find($id);
        if(File::exists($student->StudentPicture)){
            unlink($student->StudentPicture);
        }
      $StudentPicture=  fileupload($request->StudentPicture,'backend/students/',250,300,$student->StudentID);

        return $student->update(['StudentPicture'=>$StudentPicture]);


    }

    public function imageget(Request $request)
    {
        $id =  $request->id;
        $student = student::find($id);

    return   $StudentPicture=  base64($student->StudentPicture);




    }


    public function singlestudent(Request $request)
    {
        $result = QueryBuilder::for(student::class)
            ->allowedFilters([
                'StudentName',
                'StudentRoll',
                AllowedFilter::exact('school_id'),
                AllowedFilter::exact('StudentClass'),
                'StudentID',
                'AdmissionID',
                'StudentFatherName',
                'StudentFatherOccupation',
                'StudentMotherName',
                'StudentMotherOccupation',
                'StudentGender',
                'StudentDateOfBirth',
                'StudentBirthCertificateNo',
                'StudentAddress',
                'StudentPhoneNumber',
                'StudentEmail',
                'AreaPostalCode',
                'StudentPicture',
                'JoiningDate',
                AllowedFilter::exact('StudentGroup'),
                AllowedFilter::exact('StudentReligion'),
                AllowedFilter::exact('Year'),
                AllowedFilter::exact('StudentStatus'),
                'StudentTranferStatus',
                'StudentTranferFrom',
                'AplicationStatus',
                'ThisMonthPaymentStatus', AllowedFilter::exact('id')
            ])
            ->orderBy('StudentRoll', 'ASC')
            ->get();
        return response()->json($result);
    }
    public function card_form()
    {
        return view('dashboard/students.card_form');
    }
    public function card_form_submit(Request $r)
    {
        $class = $r->class;
        return redirect("school/student/card/class/$class");
    }
    public function card(Request $r, $datavalue, $id,$school_id)
    {
        ini_set('max_execution_time', '60000');
        ini_set("pcre.backtrack_limit", "5000000000000000050000000000000000");
        ini_set('memory_limit', '12008M');

        if ($datavalue == 'class') {
            if ($id == 'All') {
                $data['rows'] = DB::table('students')->orderBy('StudentRoll', 'ASC')->get();
            } else {
                $wds = [
                    'StudentClass' => $id,
                    'school_id' => $school_id,
                    'Year' => date('Y'),
                ];
                $data['rows'] = DB::table('students')->where($wds)->orderBy('StudentRoll', 'ASC')->get();
            }
        } else {
            $wds = [
                'id' => $id,
            ];
            $data['rows'] = DB::table('students')->where($wds)->orderBy('StudentRoll', 'ASC')->get();
        }
        $data['types'] = 'pdf';


        $data['sign'] = base64('backend/students/1654069265____2211001.png');


         $data['card'] = base64('frontend/jss.PNG');



        $fileName = 'cards-' . date('Y-m-d H:m:s');
        $data['fileName'] = $fileName;
        $foldername = $data['rows'][0]->school_id;
        // return $data;
// return view('admin/cards.' . $foldername, $data);
        $pdf = PDF::loadView('admin/cards.' . $foldername, $data);
        return $pdf->stream("$fileName.pdf");
    }
    public function student_attendance(Request $request)
    {
        $id = $request->id;
        $veiwtype = $request->veiwtype;
        $dateormonth = $request->dateormonth;
        $StudentClass = $request->StudentClass;
        $school_id = $request->school_id;
        if ($veiwtype == 'Monthly') {
            $where = [
                'school_id' => $school_id,
                'month' => date("F", strtotime($dateormonth)),
                'year' =>  date("Y", strtotime($dateormonth)),
                'student_class' =>  $StudentClass,
            ];
            $data =  Attendance::where($where)->orderBy('date', 'ASC')->get();
        } elseif ($veiwtype == 'Daily') {
            $count =  Attendance::where(['school_id' => $school_id, 'date' => $dateormonth, 'year' => date("Y", strtotime($dateormonth))])->count();
            if ($count > 0) {
                $data['data'] = Attendance::where(['school_id' => $school_id, 'date' => $dateormonth, 'year' => date("Y", strtotime($dateormonth))])->get();
                $data['counttype'] = 1;
            } else {
                $data['data'] = student::where(['school_id' => $school_id, 'StudentClass' => $StudentClass, 'StudentStatus' => 'Active'])->get();
                $data['counttype'] = 0;
            }
        } elseif ($veiwtype == 'edit') {
            $result = Attendance::where(['school_id' => $school_id, 'date' => $dateormonth, 'year' => date("Y", strtotime($dateormonth))])->get();
            $result = json_decode($result[0]->attendance);
            $data  = array_filter($result, function ($var) use ($id) {
                return $var->id == $id;
            });
        }
        return response()->json($data);
    }
    public function student_attendance_submit(Request $request)
    {
        $id = $request->id;
        $date = $request->date;
        $student_class = $request->student_class;
        $data = [];
        $staffs = [];
        foreach ($request->attendence as $key => $value) {
            if ($value == null) {
            } else {
                $staffs[$key] = student::find($key);
                $data[$key] = $value;
            }
        }
        $attendance = [];
        if ($id != '') {
            $attendanceRecord = Attendance::where('date', $date)->get();
            foreach ($attendanceRecord as $value) {
                $attendancedata = json_decode($value->attendance);
                foreach ($attendancedata as $value2) {
                    if ($value2->id == $id) {
                        $attendenceValue = $request->attendence[$value2->id];
                    } else {
                        $attendenceValue = $value2->attendence;
                    }
                    $attendances = [
                        'id' => $value2->id,
                        'stu_roll' => $value2->stu_roll,
                        'fatherName' => $value2->fatherName,
                        'motherName' => $value2->motherName,
                        'stu_id' => $value2->stu_id,
                        'stu_name' => $value2->stu_name,
                        'phone' => $value2->phone,
                        'attendence' => $attendenceValue,
                        'status' => 'pending',
                    ];
                    array_push($attendance, $attendances);
                }
            }
        } else {
            foreach ($staffs as $value) {
                //    print_r($value->TeacherName );
                $attendances = [
                    'id' => $value->id,
                    'stu_roll' => $value->StudentRoll,
                    'fatherName' => $value->StudentFatherName,
                    'motherName' => $value->StudentMotherName,
                    'stu_id' => $value->StudentID,
                    'stu_name' => $value->StudentName,
                    'phone' => $value->StudentPhoneNumber,
                    'attendence' => $request->attendence[$value->id],
                    'status' => 'pending',
                ];
                array_push($attendance, $attendances);
                // $attendance.push($attendances);
            }
        }
        $attendances = json_encode($attendance);
        $data = [
            'date' => $request->date,
            'month' =>  date("F", strtotime($request->date)),
            'year' => date("Y", strtotime($request->date)),
            'student_class' => $student_class,
            'attendance' => $attendances,
            'message_status' => 'Pending',
        ];
        if ($id == '') {
            $results  =    Attendance::create($data);
            $results['status'] = 'Created';
        } else {
            // return $data;
            $results['data'] =  Attendance::where('date', $date)->update($data);
            $results['status'] = 'Updated';
        }
        return response()->json($results);
    }
    public function student_attendance_row(Request $request)
    {
        $date_month = $request->date_month;
        $class = $request->class;
        $school_id = $request->school_id;
        $monthYear = explode('-', $date_month);
        $cal = cal_days_in_month(CAL_GREGORIAN, $monthYear[1], $monthYear[0]);
        $months = date('F', strtotime($date_month));
        $year = date('Y', strtotime($date_month));
        $students = student::where(['school_id' => $school_id, 'StudentClass' => $class, 'Year' => $year, 'StudentStatus' => 'Active'])->get();
        // die();
        $table = "



            <div class='heading-layout1'>
                <div class='item-title'>
                    <h5>
                        <center class='mobilefonthead'>$class  ATTENDANCE</center>
                        </center>
                    </h5>
                </div>
                <h5>
                    <div class='well tex-center mobilefonthead'>DATE : $date_month
                    </div>
                </h5>
            </div>
            <div class='table-responsive double-scroll'>
<table class='table bs-table table-striped table-bordered text-nowrap'>
<thead>
    <tr>
        <th class='text-left'>রোল</th>
        <th class='text-left'>নাম</th>";
        for ($monthcount = 1; $monthcount <= $cal; $monthcount++) {
            $table .= "<th>" . int_en_to_bn(sprintf('%02d', $monthcount)) . "</th>";
        }
        $table .= "</tr>
</thead>
<tbody>";
        foreach ($students as $value) {
            $table .= "<tr>
    <td class='text-left'>$value->StudentRoll </td>
    <td class='text-left'>$value->StudentName </td>";
            for ($monthcount = 1; $monthcount <= $cal; $monthcount++) {
                $datas =  date("Y-m", strtotime($date_month));
                $cutentdate = $datas . '-' . sprintf("%02d", $monthcount);
                // print_r(attendancemonth($cutentdate,$class,$value->StudentID,$tt=''));
                if (attendancemonth($cutentdate, $class, $value->StudentID, $tt = '', $value->school_id) == '') {
                    $table .= '<td>-</td>';
                } else {
                    $table .= attendancemonth($cutentdate, $class, $value->StudentID, $tt = '', $value->school_id);
                    // dd(attendancemonth($cutentdate,$class,$value->StudentID,$tt=''));
                }
                //echo attendancemonthCheck($cutentdate,$class,$row->StudentID);
            }
            $table .= "</tr>";
        }
        $table .= "</tbody>
            </table>
             </div>



        ";
        return $table;
    }




    public function attendence_sheet_result_pdf(Request $r, $school_id, $student_class, $view, $date)
    {
        ini_set('max_execution_time', '60000');
        ini_set("pcre.backtrack_limit", "5000000000000000050000000000000000");
        ini_set('memory_limit', '12008M');


        $data['data'] = $view;
        $data['class'] = $student_class;
        $data['date_month'] = $date;
        if ($data['data'] == 'Daily') {
            $coutnWhere = [
                'student_class' => $student_class,
                'date' => $date,
                'year' => date("Y"),
                'school_id'=>$school_id
            ];
            $data['count'] = DB::table('attendances')->where($coutnWhere)->count();
            if ($data['count'] > 0) {

                $aWhere = [
                    'date' => $date,
                    'student_class' => $student_class,
                    'school_id'=>$school_id

                ];
                $data['attten'] = DB::table('attendances')->where($aWhere)->get();

            } else {
                $sWhere = [
                    'school_id' => $school_id,
                    'StudentClass' => $student_class,
                    'Year' => date('Y'),
                    'StudentStatus' => 'Active',
                ];
                $data['rows'] = DB::table('students')->where($sWhere)->orderBy('StudentRoll', 'ASC')->get();
            }
        }else if ($data['data'] == 'Monthly'){


            $aWhere = [
                'month' => date("F", strtotime($date)),
                'student_class' => $student_class,
                'school_id'=>$school_id
            ];
            $data['rows'] = DB::table('attendances')->where($aWhere)->get();
            $sWhere = [
                'school_id' => $school_id,
                'StudentClass' => $student_class,
                'Year' => date('Y'),
                'StudentStatus' => 'Active',
            ];
            $data['students'] = DB::table('students')->where($sWhere)->orderBy('StudentRoll', 'ASC')->get();



        }
        $data['sign'] = base64(sitedetails()->PRINCIPALS_Signature);
        $data['tt'] = 'pdf';
        $pdf = PDF::loadView('admin/pdfReports.attendance', $data);
        return $pdf->stream($date.'.pdf');
        // return view('dashboard/attendence.attenFull', $data);
    }











    public function student_list_pdf(Request $r,$year,$class)
    {
        $school_id = sitedetails()->school_id;

        $wd = [
            'school_id'=>$school_id,
            'StudentClass' => $class,
            'Year' => $year,
            'StudentStatus' => 'Active',
        ];
        $data['count'] = DB::table('students')->where($wd)->count();
        if ($data['count'] > 0) {
            $data['rows'] = DB::table('students')->where($wd)->orderBy('StudentRoll','ASC')->get();
        }
        $data['pdf']='pdf';


        // frontend/schoolLogo.png

        //in Controller
        $pathgovlogo = 'frontend/schoolLogo.png';
        $typegovlogo = pathinfo($pathgovlogo, PATHINFO_EXTENSION);
        $dataigovlogo = file_get_contents($pathgovlogo);
        $govlogo = 'data:image/' . $typegovlogo . ';base64,' . base64_encode($dataigovlogo);
        $data['logo'] = $govlogo;

        $fileName = 'students-'.date('Y-m-d H:m:s');

        $data['fileName'] = $fileName;
        // return $data;

        $pdf = LaravelMpdf::loadView('admin/pdfReports.total_student', $data);
        return $pdf->stream("$fileName.pdf");

        // return view('', $data);


    }




}
