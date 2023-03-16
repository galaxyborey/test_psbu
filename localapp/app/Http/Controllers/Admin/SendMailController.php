<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SendMail;
use Mail;
use Illuminate\Support\Facades\Redirect;
class SendMailController extends Controller
{
    public function store(Request $request){
    	$this->Validate($request, [
	        'email' => 'required',
	        'subject' => 'required',
	    ]);
	    $id = SendMail::insertGetId([
	    	'full_name'=>$request->full_name,
	    	'from'=>'info@kohronglocalservice.com',
	    	'to'=>$request->email,
	    	'email'=>$request->email,
	    	'subject'=>$request->subject,
	    	'phone'=>$request->phone,
	    	'message'=>$request->message,
	    	'cc'=>'',
	    	'created_at'=>date('Y-m-d H:i:s'),
        	'updated_at'=>date('Y-m-d H:i:s')
	    ]);     
	    $dataTable = SendMail::find($id);
    	if(!empty($dataTable)){
    		Mail::send(['html'=>'mail'],array('body' =>
				$dataTable->message,'dataTable' => $dataTable),function ($message) use ($dataTable) {
				$message->from('info@kohronglocalservice.com', $dataTable->title);
				$message->to($dataTable->to, $dataTable->full_name)->subject( $dataTable->subject);	
				$message->cc('info@kohronglocalservice.com')->subject( $dataTable->subject);
		   });
    	}   
    	return redirect::to('cat/contact-us')->with('message', 'Send Mail Success.');; 	
    }
    public function delete(Request $data,$id){
    	if($id){
    		SendMail::Where('id',$id)->delete();
    		return redirect::to('message'); 	
    	}
    }
}
