<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_clients;

class ClientController extends Controller
{
    public function clientSave(Request $request){


        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        
        $this->validate($request,[
            'client_name'=>"required|regex:/^[0-9A-Za-z\s]+$/i",
            'location'=>"required|regex:/^[A-Za-z\s]+$/i",
            'address'=>"required",
            'email'=>"required",
            'mobile_no'=>"required",
            'image'=>"required",
            'linkedin_link'=>"nullable",
            'twitter_link'=>"nullable",
            ],
            [

             // 'client_name.required' => 'Enter Department name',
             // 'client_name.regex' => 'Department name contains alphanumeric and Space only',
             
             // 'location.required' => 'Enter Department Head Name',
             // 'location.regex'=>'Department Head name contains only alphabatical charcters and scpaces only.',
             // 'address.required' => 'Enter Total Number of Employee',
             // 'address.digits_between'=>'Total Number of Employee should be 1 to 3 Digits',
             

            ]);

        try{
            $date=date("Ymshis");
            if (!empty($request->file('image'))) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $filename = rand(101, 99999) . "_" . $date . "." . $ext;
                $destination_path = "upload/client_image";
                $image->move($destination_path, $filename);
            }

            if(isset($request->code)){
            $saveClient = tbl_clients::find($request->code);
            }else{
            $saveClient = new tbl_clientstbl_clients();

            }

      
           // $saveClient = new tbl_clients();


        $saveClient->location = $request->location;
        $saveClient->address = $request->address;
        $saveClient->client_name = $request->client_name;

        $saveClient->client_email = $request->email;
        $saveClient->client_ph = $request->mobile_no;
        $saveClient->image = $filename;
        $saveClient->twitter_link = $request->twitter_link;
        $saveClient->linkedin_link = $request->linkedin_link;
      
        $saveClient->save();
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

    public function getClientDetails(Request $request){


            $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }

       
        try{
        $clientData = tbl_clients::get();

       
            $response = ['clientData'=>$clientData];
     
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

    public function getProfileView(Request $request){

         $statusCode = 200;
         if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        try{
            $profile_id=$request->profile_id;
            $clientData = tbl_clients::where('id',$profile_id)->first();
            $response = ['clientData'=>$clientData]; 
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
