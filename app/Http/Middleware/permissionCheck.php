<?php

namespace App\Http\Middleware;

use App\Model\tbl_permission;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Illuminate\Support\Facades\Route;


use Redirect;

class permissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    
     if(Auth::check()){
      $user_type =  Auth::user()->roll_type;
      $currentRouteName= Route::currentRouteName(); 
      
$getPermission=tbl_permission::where('page_url', $currentRouteName)->count();
if($getPermission==0){
  $data=array('roll_type'=>$user_type,'page_url'=>$currentRouteName,'created_at'=>date('Y-m-d H:i:s'),
  'updated_at'=>date('Y-m-d H:i:s'));
  tbl_permission::insert($data);
}

$permission_data = tbl_permission::where('roll_type', $user_type)->where('page_url', $currentRouteName)->get();
        $cnt_permission_data = $permission_data->count();    
        if($cnt_permission_data < 1){
          //Session::flush();
         return redirect()->route('admin.login'); 
           
        }
     } 
     else{
       
      return redirect()->route('admin.login'); 
     }
     
     
            return $next($request);
        
     

        
    }
}
