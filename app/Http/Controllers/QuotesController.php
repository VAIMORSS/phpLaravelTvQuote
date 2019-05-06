<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;
class QuotesController extends Controller
{
    public function home(){
        $Quotes = Quote::all();
        
        
       
        return view('modal',['Quotes'=>$Quotes]);
    }

    public function tableView(){
        $Quotes = Quote::all();
        return view('home',['Quotes'=>$Quotes]);
    }

    public function create(Request $req){
        $quote = new Quote;
        $quote->Show=$req->input('Show');
        $quote->season=$req->input('Season');
        $quote->Episode=$req->input('Episode');
        $quote->Quote=$req->input('Quote');
        $quote->save();

        return redirect('/')->with('info','Quote Saved Successfully');

    }

    public function update($id){
        $Quotes = Quote::find($id);
        return view('update',['Quote'=>$Quotes]);
    }

    public function finalUpdate(Request $request,$id){

        $data=array(
            'Show'=>$request->input('Show'),
            'season'=>$request->input('Season'),
            'Episode'=>$request->input('Episode'),
            'Quote'=>$request->input('Quote')
        );

        Quote::where('id',$id)->update($data);

        return redirect('/')->with('info','Quote Updated Successfully');
    }

    public function remove($id){
        Quote::where('id',$id)->delete();
        return redirect('/')->with('info','Quote Removed Successfully');
    }


}
