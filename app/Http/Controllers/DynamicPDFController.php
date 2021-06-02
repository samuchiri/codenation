<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;

class DynamicPDFController extends Controller
{
    //
    function index(){
    	$student_data=$this->get_student_data();
    	return view('dynamic_pdf.index')->with('student_data', $student_data);
    }
    function get_customer_data(){
    	$student_data=DB::table('students')
    				  ->limit(8)
    				  ->get();	
    }
}
