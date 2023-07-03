<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plotdata;
use PhpParser\Node\Stmt\Return_;

class PlotController extends Controller
{
    public function addplot(){

        return view('plots.addplot');
    }
    public function showplot(){

        return view('plots.showplots');
    }
 
     public function storedata(Request $request)
    {
        $plotdata = new Plotdata();

        $plotdata->block = $request->input('block');
        $plotdata->size_in_yard = $request->input('size_in_yard');
        $plotdata->dimension = $request->input('dimensions');
        $plotdata->sector = $request->input('sector');
        $plotdata->plot_no = $request->input('plot_no');
        $plotdata->size_in_marla_kanal = $request->input('size_marla');
        $plotdata->facing = $request->input('facing');
        $plotdata->type = $request->input('type');

        $plotdata->save();

       return redirect('viewplots');
    }
    public function viewdata()
    {
        $plotdata = Plotdata::all();
      
        return view('plots/showplots', ['plotdata' => $plotdata]);
    }
    public function deleteplot(Request $request)
    {  

        $plotdata = Plotdata::find($request->id);
        $plotdata->delete();

        return redirect('viewplots');
    }
    public function editplotdata($id){

        $plotdata = Plotdata::find($id);
      
        return view('plots/editplot',compact('plotdata'));

    }
      public function editplotsave( Request $request){
        
        
        $plotdata = Plotdata::find($request->id);
        $plotdata->block = $request->input('block');
        $plotdata->size_in_yard = $request->input('size_in_yard');
        $plotdata->dimension = $request->input('dimensions');
        $plotdata->sector = $request->input('sector');
        $plotdata->plot_no = $request->input('plot_no');
        $plotdata->size_in_marla_kanal = $request->input('size_marla');
        $plotdata->facing = $request->input('facing');
        $plotdata->type = $request->input('type');

        $plotdata->save();
        return redirect('viewplots');

      }
       public function checkplotvalue(Request $request){

        $plotNo = $request->input('plot_no');
        $plot = Plotdata::where('plot_no', $plotNo)->first();
        if($plot){

            Return response()->json(['exists' =>true]);
        }else{

            return response()->json(['exists' => false]);
        }



       }
  

}
