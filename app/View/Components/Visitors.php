<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Visitor;

class Visitors extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {



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

        return view('components.visitors');
    }
}
