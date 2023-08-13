<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use App\Models\User;
use Validator;

class AdminSellerController extends Controller
{
    //

     public function listseller() {
         $users =Seller::select('*')->orderBy('id', 'DESC')->get()->toArray();
         // echo "<pre>"; print_r($users); die;
         return view('admin.seller.seller-list')->with(array('users'=>$users));
    }


    public function new( $end = null){ 
    $user=[];
    if(!empty($end)){
        $seller= Seller::select('*')->where('id', base64_decode($end))->get()->toArray();

         if(!empty($seller)){
             $seller =$seller['0']; 
         }else{
            return view('notfound'); 
         }  
    }else{
        $seller ='';
    }                        
         // echo "<pre>";  print_r($seller);  die;
        return view('admin.seller.seller-form', compact('seller'));
    }

        public function save(Request $request)
          {  
           //  echo "<pre>";   print_r($request->all());
           // die('===========');
            $params = $request->all();
            unset($params['_token']);
            $params['id'] = $request->id;
            //$params['role'] = 'user';
            if(isset($request->id) && $request->id != ''){  
                  
                   $user = Seller::select('*')->where('id', $request->id)->get()->first();
             
                   if(!empty($user)) {
                           unset($params['id']);
                           Seller::where('id', $request->id)->update($params);
                       
                        return redirect()->to('admincon/allseller')->with('success','Seller details updated successfull!y');
                   }else{
                        return back()->with('error','Updation error!');
                   }
            }else{
                $request->validate([
                    'phone' => 'unique:sellers',
                    ]);
                date_default_timezone_set('Asia/Kolkata');
                // Prints the day, date, month, year, time, AM or PM
                $params['created_date'] = date("j M Y h:i A"); 
                // $this->appRepository->savedata($params);
                return redirect()->to('admincon/allseller')->with('success','New Seller Added successfully!');
            }        
        }

    public function delete($id){
                             
          Seller::where('id', base64_decode($id))->delete();
          return back()->with('success','Successfully deleted.!!');
    }
}
