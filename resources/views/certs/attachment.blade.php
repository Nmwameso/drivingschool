
<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="{{asset('base.min.css')}}"/>
<link rel="stylesheet" href="{{asset('fancy.min.css')}}"/>
<link rel="stylesheet" href="{{asset('main.css')}}"/>
<script src="{{asset('js/compatibility.min.js')}}"></script>
<script src="{{asset('js/theViewer.min.js')}}"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
@if(count($students) > 0)
    @foreach($students->all() as $student)
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{ url('/img/bg1.png') }}"/><div class="c x1 y1 w0 h2"><div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">                                    <span class="fs1"> </span></div><div class="t m0 x2 h4 y3 ff1 fs0 fc0 sc0 ls0 ws0">                                                                                                                                             </div><div class="t m0 x2 h5 y4 ff2 fs2 fc1 sc0 ls0 ws0">Ken<span class="fc2">safe <span class="fc0">Limited.<span class="_ _0"> </span></span></span><span class="ff1 fs0">         </span>Ken<span class="fc2">safe<span class="fc0"> Training &amp; Driving School.</span></span></div><div class="t m0 x3 h5 y5 ff3 fs2 fc0 sc0 ls0 ws0">      For Competent and Safe Driving</div></div><div class="c x1 y6 w0 h6"><div class="t m0 x4 h7 y7 ff2 fs3 fc1 sc0 ls0 ws0">Ken<span class="fc2">safe<span class="fc0"> Limited: Making Kenya a Safer Place to Live and Work</span></span></div></div><div class="c x5 y8 w2 h8"><div class="t m0 x6 h9 y9 ff4 fs3 fc0 sc0 ls0 ws0">Mombasa-Malindi Rd. </div><div class="t m0 x6 h9 ya ff4 fs3 fc0 sc0 ls0 ws0">Opp. Khadija Primary</div><div class="t m0 x6 h9 yb ff4 fs3 fc0 sc0 ls0 ws0">Mombasa, Kenya</div><div class="t m0 x6 h9 yc ff4 fs3 fc0 sc0 ls0 ws0">P.O Box 95487-80106 </div><div class="t m0 x6 h9 yd ff4 fs3 fc0 sc0 ls0 ws0">Cell No:  +254 719 355 157</div><div class="t m0 x6 h9 ye ff4 fs3 fc0 sc0 ls0 ws0">Email: info@kensafe.net</div><div class="t m0 x6 h9 yf ff4 fs3 fc0 sc0 ls0 ws0">Website: www.kensafe.net</div></div><div class="t m0 x7 h9 y10 ff4 fs3 fc0 sc0 ls0 ws0"><?php echo $today = date("F j, Y"); ?></div><div class="t m0 x8 ha y11 ff4 fs4 fc0 sc0 ls0 ws0"></div><div class="t m0 x9 h9 y10 ff4 fs3 fc0 sc0 ls0 ws0"></div><div class="t m0 x2 h9 y12 ff4 fs3 fc0 sc0 ls0 ws0">Dear Sir/Madam,</div><div class="t m0 x2 h9 y13 ff4 fs3 fc0 sc0 ls0 ws0">TO WHOM IT MAY CONCERN.</div><div class="t m0 x2 hb y14 ff5 fs3 fc0 sc0 ls0 ws0">RE: APPLICATION FOR INDUSTRIAL ATTACHMENT </div><div class="t m0 x2 h9 y15 ff4 fs3 fc0 sc0 ls0 ws0">KenSafe Limited provides professional Health &amp; Safety Training &amp; Consultancy services to </div><div class="t m0 x2 h9 y16 ff4 fs3 fc0 sc0 ls0 ws0">Companies  and Multi National Corporations to Government Departments. We also provide </div><div class="t m0 x2 h9 y17 ff4 fs3 fc0 sc0 ls0 ws0">Construction Machinery Operator Training courses to the Construction Industry under Kensafe </div><div class="t m0 x2 h9 y18 ff4 fs3 fc0 sc0 ls0 ws0">Training &amp; Driving School. </div><div class="t m0 x2 h9 y19 ff4 fs3 fc0 sc0 ls0 ws0">This is to certify that <span class="ff5">Mr. {{$student->studentname}}</span> of I.D No. <span class="ff2">{{$student->Id_number}}<span class="ff5"> </span></span>was trained by our </div><div class="t m0 x2 h9 y1a ff4 fs3 fc0 sc0 ls0 ws0">Institution during the month of  {{ \Carbon\Carbon::parse($student->start_date)->format('F')}} – {{ \Carbon\Carbon::parse($student->start_date)->addMonths(1)->format('F')}} as a <span class="ff5">{{$student->coursename}} Operator</span>.</div><div class="t m0 x2 h9 y1b ff4 fs3 fc0 sc0 ls0 ws0">It is in this regards that the Institution wishes to recommend <span class="ff5">the above student </span>for a <span class="ff5">One month</span> </div><div class="t m0 x2 h9 y1c ff4 fs3 fc0 sc0 ls0 ws0">attachment to enable him gain practical skills in an Industrial setup. We believe the experience </div><div class="t m0 x2 h9 y1d ff4 fs3 fc0 sc0 ls0 ws0">he will gain will be valuable for his future career as a Plant Machine Operator.</div><div class="t m0 x2 h9 y1e ff4 fs3 fc0 sc0 ls0 ws0">Any consideration and support given to him is highly anticipated and appreciated.</div><div class="t m0 x2 h9 y1f ff4 fs3 fc0 sc0 ls0 ws0">Yours faithfully,</div><div class="t m0 x2 h9 y20 ff4 fs3 fc0 sc0 ls0 ws0">________________________________</div><div class="t m0 x2 hb y21 ff5 fs3 fc0 sc0 ls0 ws0">Edith Kananu</div><div class="t m0 x2 hb y22 ff5 fs3 fc0 sc0 ls0 ws0">Office Manager</div><div class="t m0 x2 hb y23 ff5 fs3 fc0 sc0 ls0 ws0">Kensafe Ltd</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
@endforeach
@endif
