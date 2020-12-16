<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.index');
    }

    public function searching(Request $request){
        if ($request->ajax()){
            $output= '';
            $query = $request->get('query');
            //bat dau viet cho su kien nhap search
            if ($query != ''){
                $data = DB::table('customer')->where('name','like','%' .$query . '%')
                    ->orWhere('phone','='. $query)
                    ->orWhere('address','like','%' .$query . '%')
                    ->orderBy('id','desc')->get();
            }
            else{
                $data = DB::table('customer')
                    ->orderBy('id','desc')
                    ->get();
            }
            // bat dau tinh' hien thi du lieu
            $total_row = $data->count();
            if ($total_row > 0){
//                $path = base_path().'/public';
                foreach ($data as $row){
                    $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->age.'</td>
         <td>'.$row->phone.'</td>
         <td>'.$row->address.'</td>
         <td><img width="100" src="/images/'.$row->image .'" class="img-thumbnail"></td>
        </tr>
        ';
                }
            }
            else{
                $output = '<tr><h3 align="center">No Data Found</h3></tr>';
            }

            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            );

            echo json_encode($data);
        }
    }
}
