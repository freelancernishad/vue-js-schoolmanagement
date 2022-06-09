<?php
namespace App\Http\Controllers\api;
use App\Models\payment;
// use PDF;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Rakibhstu\Banglanumber\NumberToBangla;
use Meneses\LaravelMpdf\Facades\LaravelMpdf;

class PaymentController extends Controller
{

    public function payments(Request $request)
    {
        $datatype = $request->datatype;
        $datas = QueryBuilder::for(payment::class)
        ->allowedFilters([
            AllowedFilter::exact('id'),
            AllowedFilter::exact('school_id'),
            AllowedFilter::exact('studentClass'),
            AllowedFilter::exact('studentRoll'),
            AllowedFilter::exact('studentId'),
            AllowedFilter::exact('admissionId'),
            AllowedFilter::exact('date'),
            AllowedFilter::exact('type'),
            AllowedFilter::exact('month'),
            AllowedFilter::exact('year'),
            AllowedFilter::exact('status'),
            AllowedFilter::exact('method'),
            'Name',
            'amount',
            'bokeya',

        ]);



        if($datatype=='count'){
            $result= $datas->sum('amount');
        }else{
            $result= $datas ->get();
        }
    return response()->json($result);
    }


    public function payments_submit(Request $r)
    {


$formtype = $r->formtype;
$id = $r->id;

        $oldItem[0] = [
            'Bmonth' => '',
            'Bamount' => 0,
        ];
        $oldItemg = json_encode($oldItem);



             $data = [
                'school_id' => $r->school_id,
                'studentClass' => $r->StudentClass,
                'studentRoll' => $r->StudentRoll,
                'studentId' => $r->StudentID,
                'admissionId' => $r->AdmissionID,
                'Name' => $r->StudentName,
                'method' => $r->method,
                'amount' => $r->amount,
                'bokeya' => $oldItemg,
                'type' => $r->type,
                'date' => $r->date,
                'month' => $r->month,
                'year' => $r->year,
                'status' => $r->status,
            ];
if($formtype=='create'){
    $data = payment::create($data);
}else{
  $payment = payment::find($id);
  $data = $payment->update($data);

}

         return response()->json($data);




    }




























    public function invoice(Request $r, $id)
    {
        $data['rows'] = DB::table('payments')->where('id', $id)->get();
        $StudentID = $data['rows'][0]->studentId;
        $wds = [
            'StudentID' => $StudentID,
        ];
        $data['stdata'] = DB::table('students')->where($wds)->get();
        $data['types'] = 'pdf';
        //in Controller
        $paths = 'frontend/sing.png';
        $types = pathinfo($paths, PATHINFO_EXTENSION);
        $datais = file_get_contents($paths);
        $logos = 'data:image/' . $types . ';base64,' . base64_encode($datais);
        $data['sign'] = $logos;
        $URL = request()->server->get('SERVER_NAME');
        $URL = $URL . '/school/payment/invoice/' . $id;
        $qrcode = \QrCode::size(70)
            ->format('svg')
            ->generate($URL);
        $output = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $qrcode);
        $data['qrcode'] = $output;
        // return view('dashboard/payments.invoice',$data);
        $numto = new NumberToBangla();
        foreach ($data['rows'] as $row) {
            $amount = $row->amount;
            $bokeya = json_decode($row->bokeya);
            $bTotal = 0;
            foreach ($bokeya as $list) {
                $bTotal = $bTotal + $list->Bamount;
            }
        }
        $Total = $amount + $bTotal;
        $data['TotalAmount'] = $numto->bnMoney($Total);
        //in Controller
        $pathgovlogo = 'frontend/schoolLogo.png';
        $typegovlogo = pathinfo($pathgovlogo, PATHINFO_EXTENSION);
        $dataigovlogo = file_get_contents($pathgovlogo);
        $govlogo = 'data:image/' . $typegovlogo . ';base64,' . base64_encode($dataigovlogo);
        $data['logo'] = $govlogo;
        $fileName = 'Invoice-' . date('Y-m-d H:m:s');
        $data['fileName'] = $fileName;
        $pdf = LaravelMpdf::loadView('dashboard/payments.invoice', $data);
        return $pdf->stream("$fileName.pdf");
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($class, $month, $year, $type)
    {

    }
    public function paymentsheet($school_id,$class, $year, $type)
    {

        $data['class'] = $class;
        $data['year'] = $year;
        $data['type'] = feesconvert($type);
        $wheredata = [
            'StudentStatus' => 'Active',
            'StudentClass' => $class,
            'Year' => date('Y'),
            'school_id' => $school_id,
        ];
        $data['rows'] = DB::table('students')->where($wheredata)->orderBy('StudentRoll', 'ASC')->get();
        $fileName = 'Payments-' . date('Y-m-d H:m:s');
        $data['fileName'] = $fileName;
        $data['sign'] = base64(sitedetails()->PRINCIPALS_Signature);
        $pdf = LaravelMpdf::loadView('admin/pdfReports.payments_sheet', $data);
        return $pdf->stream("$fileName.pdf");
        // return view('dashboard/payments.payments_sheet', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }
}
