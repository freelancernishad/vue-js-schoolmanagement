<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Conversion;
use Illuminate\Http\Request;
use App\Events\MessageCreated;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class MessageController extends Controller
{


public function usersget(Request $request)
{
        $result = QueryBuilder::for(User::class)
            ->allowedFilters([
                'name',
                'role',
                AllowedFilter::exact('school_id'),
                AllowedFilter::exact('email'),
                AllowedFilter::exact('teacherOrstudent'),
                AllowedFilter::exact('id')
            ])
            ->orderBy('id', 'desc')
            ->paginate(20);
        return response()->json($result);

}



public function messagesget(Request $request)
{
        $result = QueryBuilder::for(Message::class)
            ->allowedFilters([

                'body',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('conversion_id'),
                AllowedFilter::exact('from_id'),
                AllowedFilter::exact('to_id'),
            ])
            ->orderBy('id', 'asc')
            ->get();
        return response()->json($result);

}


public function messagessent(Request $request)
{


 $conversion_id = $request->conversion_id;

    if($request->conversion_id=='new'){
            $dataconver = [
                'user_one'=>$request->from_id,
                'user_two'=>$request->to_id,
            ];
         $getid =    Conversion::create($dataconver);
$conversion_id = $getid->id;
    }



    $data =  [
        'conversion_id'=>$conversion_id,
        'from_id'=>$request->from_id,
        'to_id'=>$request->to_id,
        'body'=>$request->body,
    ];
    return Message::create($data);




}



public function conversionget(Request $request)
{
    $userone =$request->filter['user_one'];
    $usertwo =$request->filter['user_two'];

        $result = Conversion::where(['user_one'=>$userone,'user_two'=>$usertwo])
        ->orWhere(['user_one'=>$usertwo,'user_two'=>$userone])
            ->orderBy('id', 'desc')
            ->first();
        return response()->json($result);

}





}
