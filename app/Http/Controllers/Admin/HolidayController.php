<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\tbl_departments;
use App\Model\tbl_holidays;

class HolidayController extends Controller
{
    public function getHoliday(){
        $title="Holiday List";
        return view('admin.holidays',compact('title',$title));
    }
    public function holidayDatatable(Request $request){

        $statusCode = 200;
       if (!$request->ajax()) {
           $statusCode = 400;
           $response = array('error' => 'Error occured in form submit.');
           return response()->json($response, $statusCode);
       }
      
       $draw = $request->draw;
       $offset = $request->start;
       $length = $request->length;
       $search = $request->search ["value"];
       $order = $request->order;
      //print_r($order);die;
       $data = array();

           $holidayDetails = tbl_holidays::wherenull('deleted_at')->select('*')->orderby('id', 'desc')
                   ->where(function($q) use ($search) {
               $q->orwhere('day_name', 'like', '%' . $search . '%');
               $q->orwhere('holiday_name', 'like', '%' . $search . '%');
              
           });
       

       $record = $holidayDetails;
       $filtered_count = $holidayDetails->count();

       $page_displayed = $record->offset($offset)->limit($length)->get();
       $count = $offset + 1;
       foreach ($page_displayed as $forData) {
       //   echo"<pre>"; print_r($forData);die;
           $nestedData['id'] = $count;
           $nestedData['day_name'] = $forData->day_name;
           $nestedData['holiday_name'] = $forData->holiday_name;
           $nestedData['holiday_date'] = date('j F Y', strtotime($forData->holiday_date));
           
           
           $nestedData['action'] = '<button type="button" class="btn_action btn-warning edit-button" id="' . $forData->id . '" title="Edit"><i class="fa fa-edit"></i></button>&nbsp;';
           $nestedData['action'] .= '<button type="button" class="btn_action btn-success delete-button" id="' . $forData->id . '" title="Delete"><i class="fa fa-trash"></i></button>';
           
           $count++;
           $data[] = $nestedData;
       }
       $response = array(
           "draw" => $draw,
           "recordsTotal" => $filtered_count,
           "recordsFiltered" => $filtered_count,
           'record_details' => $data
       );
       return response()->json($response);
   }
    public function holidaySaveUpdate(Request $request){
        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        $id="";
        if(isset($request->id)){
        $id=$request->id;
        }
        $this->validate($request,[
            'day_name'=>"required|max:60|regex:/^[a-zA-Z\s]+$/i",
           // 'date_holiday'=>'required|date_format:d/m/Y',
            'holiday_name'=>"required|max:100|regex:/^[a-zA-Z\s',]+$/i",
           
            ],
            [
             'day_name.required' => 'Enter day name',
             'day_name.regex' => 'Day name contains alphabatic characters only',
             'date_holiday.required' => 'Please enter date',
             'date_holiday.date_format' => 'The format is dd/mm/yyyy',
             'holiday_name.required'=>'Enter holiday name',
             'holiday_name.regex' => 'Holiday name contains alphabatic characters',
            ]);

        try{
        $id=$request->id;
        $saveHoliday = new tbl_holidays();
        $holiDate="25/02/2020";
        $saveHoliday->day_name = $request->day_name;
        $saveHoliday->holiday_date=  date('Y-m-d', strtotime(trim(str_replace('/', '-', $holiDate))));
        $saveHoliday->holiday_name = $request->holiday_name ;
      

        if(empty($request->id)){
            $saveHoliday=$saveHoliday->save();
            $status=1;
            
        }else{
            $saveHoliday = tbl_holidays::where('id',$id)->update(['day_name'=> $saveHoliday->day_name,'holiday_date'=>$saveHoliday->holiday_date,
            'holiday_name'=>$saveHoliday->holiday_name]);
            $status=2;
        }
     
     $response = array('status'=>$status);
        
    }
    catch(\Exception $e){
        $response = array(
            'exception' => true,
            'exception_message' => $e->getMessage(),
          
        );
        $statuscode=400;
     } finally{
       return response()->json($response, $statusCode);
    }
    }
public static function getHolidaydata(){
    $record=tbl_holidays::select('*')->get();
    return $record;
}

public function holidayEdit(Request $request){
    $statusCode = 200;
    $response = array();
    $this->validate($request, [
        'edit_code' => 'required|integer',
            ], [
        'edit_code.required' => 'Edit Code is required',
        'edit_code.integer' => 'Edit Code Accepted Only Integer',
    ]);
    try {
        $edit_code = $request->edit_code;
        if ($edit_code != 0) {
            $tbl_holidays = tbl_holidays::find($edit_code);
            $date=date('d/m/Y', strtotime(trim(str_replace('/', '-',  $tbl_holidays['holiday_date']))));;
            $status=1;
        } else {
            $tbl_holidays = array();
            $status=2;
        }
        $response=array('tbl_holidays'=>$tbl_holidays, 'date'=>$date,'status'=> $status);
    } catch (\Exception $e) {
        $response = array(
            'exception' => true,
            'exception_message' => $e->getMessage(),
        );
        $statusCode = 400;
    } finally {
        return response()->json($response, $statusCode);
    }
}

public function holidayDelete(Request $request){
    $statusCode = 200;
    if (!$request->ajax()) {
        $statusCode = 400;
        $response = array('error' => 'Error occured in form submit.');
        return response()->json($response, $statusCode);
    }
    $this->validate($request,[
        'dlt_code'=>"required|regex: /^[0-9]+$/",
        ],
        [

         'dlt_code.required' => 'Delete code is required',
         'dlt_code.regex' => 'Delete code should be integer',

        ]);

    try{
        if(tbl_holidays::find($request->dlt_code)->delete()){
            $response = ['status'=>1];
        }else{
            $response = ['status'=>0];
        }
    }
    catch(\Exception $e){
        $response = array(
            'exception' => true,
            'exception_message' => $e->getMessage(),
        );
        $statuscode=400;
    } finally{
    return response()->json($response, $statusCode);
    }
    
}
}
