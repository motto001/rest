<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Requests;

class SchedulerController extends Controller
{
     public function index()
    {

$h= [['Id'=>'1',
'Title'=>'title1',
'Description'=>'desc1',
'TimeStart'=>'09:00',
'TimeEnd'=>'10:00',
'Location'=>'bp',
'Type'=>'type',
'Status'=>'ok',
' DateCreated'=>'2012:11:11',
'DateUpdated'=>'2012:11:11',
'Creator '=>'craete',
'CreatorId'=>'11',
' Attendees '=>'aaa'],
['Id'=>'2',
'Title'=>'title2',
'Description'=>'desc2',
'TimeStart'=>'09:00',
'TimeEnd'=>'10:00',
'Location'=>'bp',
'Type'=>'type',
'Status'=>'ok',
' DateCreated'=>'2012:11:11',
'DateUpdated'=>'2012:11:11',
'Creator '=>'craete',
'CreatorId'=>'12',
' Attendees '=>'aaa']]
;

$j=json_encode($h);
return response()->json($h);
//return Response::json($h);
 //print_r($j);
    }
}
