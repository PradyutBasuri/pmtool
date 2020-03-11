<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\tbl_departments;

class DepartmentController extends Controller
{


    public function getDepartments(){
        $title="Department List";
        return view('admin.departments',compact('title',$title));
    }
    public function departmentSaveUpdate(Request $request){


        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        
        $this->validate($request,[
            'dept_name'=>"required|regex:/^[0-9A-Za-z\s]+$/i",
            'dept_head'=>"required|regex:/^[A-Za-z\s]+$/i",
            'total_emp'=>"required|digits_between:1,3",
            ],
            [

             'dept_name.required' => 'Enter Department name',
             'dept_name.regex' => 'Department name contains alphanumeric and Space only',
             
             'dept_head.required' => 'Enter Department Head Name',
             'dept_head.regex'=>'Department Head name contains only alphabatical charcters and scpaces only.',
             'total_emp.required' => 'Enter Total Number of Employee',
             'total_emp.digits_between'=>'Total Number of Employee should be 1 to 3 Digits',
             

            ]);

        try{
        if(isset($request->code)){
            $saveUpsateDepartment = tbl_departments::find($request->code);
        }else{
            $saveUpsateDepartment = new tbl_departments();

        }

        $saveUpsateDepartment->dept_name = $request->dept_name;
        $saveUpsateDepartment->dept_head = $request->dept_head;
        $saveUpsateDepartment->dept_employee = $request->total_emp;
        $saveUpsateDepartment->save();

        if(isset($request->code)){
           
           $status=2;

        }else{
            
           $status=1;

        }
       $response= array('status'=>$status);
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

    public function departmentDatatable(Request $request){

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

            $departmentDetails = tbl_departments::wherenull('deleted_at')->select('*')->orderby('id', 'desc')
                    ->where(function($q) use ($search) {
                $q->orwhere('dept_name', 'like', '%' . $search . '%');
                $q->orwhere('dept_head', 'like', '%' . $search . '%');
                $q->orwhere('dept_employee', 'like', '%' . $search . '%');
            });
        
 
        $record = $departmentDetails;
        $filtered_count = $departmentDetails->count();

        $page_displayed = $record->offset($offset)->limit($length)->get();
        $count = $offset + 1;
        foreach ($page_displayed as $forData) {
        //   echo"<pre>"; print_r($forData);die;
            $nestedData['id'] = $count;
            $nestedData['dept_name'] = $forData->dept_name;
            $nestedData['dept_head'] = $forData->dept_head;
            $nestedData['dept_employee'] = $forData->dept_employee;
            
            
            $nestedData['action'] = array('c'=>$forData->id);
            
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

    public function dapertmentEdit(Request $request){

            $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }

        $this->validate($request,[
            'dapertment_code'=>"required|integer",
            ],
            [

             'dapertment_code.required' => 'Dapertment Code is required',
             'dapertment_code.integer' => 'Dapertment Code should be Integer',

            ]);

        try{
        $dapertmentData = tbl_departments::find($request->dapertment_code);

        if($dapertmentData){
            $response = ['data'=>$dapertmentData, 'status'=>1];
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

    public function departmentDelete(Request $request){

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

            $result=tbl_departments::where('id',$request->dlt_code)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
            if($result != ''){
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
