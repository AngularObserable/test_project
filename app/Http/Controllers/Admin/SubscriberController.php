<?php

namespace App\Http\Controllers\Admin;
use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
  public function index(){
    $subscribers = Subscriber::latest()->get();
    return view('admin.subscriber',compact('subscribers'));
}

 public function destroy($id){
    $subscribers = Subscriber::findOrFail($id)->delete();
    flash('Delete Sucessfully !');
    return redirect()->back();
 }
}
