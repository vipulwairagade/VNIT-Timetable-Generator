<?php
$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];
$D = $_POST['D'];
$E = $_POST['E'];
$F = $_POST['F'];
$G = $_POST['G'];
$H = $_POST['H'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$batch = $_POST['batch'];
$th = [];
$pr = [];
if (isset($_POST['th'])) {
    $th = $_POST['th'];
    // $th is an array of selected values
}
if (isset($_POST['pr'])) {
    $pr = $_POST['pr'];
    // $pr is an array of selected values
}

$a='None'; $b='None';$c='None';$d='None';$e='None';$f='None';$g='None';$h='None';
foreach( $th as $v ) {
    if ($v=='AT'){
        $a=$A;
    }
    if ($v=='BT'){
        $b=$B;
    }
    if ($v=='CT'){
        $c=$C;
    }
    if ($v=='DT'){
        $d=$D;
    }
    if ($v=='ET'){
        $e=$E;
    }
    if ($v=='FT'){
        $f=$F;
    }
    if ($v=='GT'){
        $g=$G;
    }
    if ($v=='HT'){
        $h=$H;
    }
}

$m1='None'; $t1='None';$w1='None';$tr1='None';$f1='None';
$m2='None'; $t2='None';$w2='None';$tr2='None';$f2='None';

foreach($pr as $s) {
    if ($batch=='1'){
        if ($s=='BP'){
            $m1=$B;
        }
        if ($s=='CP'){
            $m2=$C;
        }
        if ($s=='DP'){
            $f1=$D;
        }
        if ($s=='EP'){
            $f2=$E;
        }
        if ($s=='FP'){
            $t2=$F;
        }
        if ($s=='GP'){
            $w1=$G;
        }
        if ($s=='HP'){
            $tr1=$H;
        }
    }
    if ($batch=='2'){
        if ($s=='BP'){
            $t1=$B;
        }
        if ($s=='CP'){
            $t2=$C;
        }
        if ($s=='DP'){
            $m1=$D;
        }
        if ($s=='EP'){
            $m2=$E;
        }
        if ($s=='FP'){
            $w2=$F;
        }
        if ($s=='GP'){
            $tr1=$G;
        }
        if ($s=='HP'){
            $f1=$G;
        }
    }
    if ($batch=='3'){
        if ($s=='BP'){
            $w1=$B;
        }
        if ($s=='CP'){
            $w2=$C;
        }
        if ($s=='DP'){
            $t1=$D;
        }
        if ($s=='EP'){
            $t2=$E;
        }
        if ($s=='FP'){
            $tr2=$F;
        }
        if ($s=='GP'){
            $f1=$G;
        }
        if ($s=='HP'){
            $m1=$G;
        }
    }

    if ($batch=='4'){
        if ($s=='BP'){
            $tr1=$B;
        }
        if ($s=='CP'){
            $tr2=$C;
        }
        if ($s=='DP'){
            $w1=$D;
        }
        if ($s=='EP'){
            $w2=$E;
        }
        if ($s=='FP'){
            $f2=$F;
        }
        if ($s=='GP'){
            $m1=$G;
        }
        if ($s=='HP'){
            $t1=$G;
        }
    }
    if ($batch=='5'){
        if ($s=='BP'){
            $f1=$B;
        }
        if ($s=='CP'){
            $f2=$C;
        }
        if ($s=='DP'){
            $tr1=$D;
        }
        if ($s=='EP'){
            $tr2=$E;
        }
        if ($s=='FP'){
            $m2=$F;
        }
        if ($s=='GP'){
            $t1=$G;
        }
        if ($s=='HP'){
            $w1=$H;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="VNIT Time Table Generator">
    <meta name="author" content="Vipul Wairagade and Shashvat Singh Chouhan">
    <title>Timetable</title>
    <link href="img/logo%20vnit.png" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css"rel="stylesheet">

    <style>
        .container{
            width: 100%;
            max-width: 1500px;
        }
        th{
            vertical-align: middle;
            text-align: center;
        }
        td{
            text-align: center;
        }
    </style>

</head>

<body>
<div class="container" id="mainpage" style="text-align:center">
    <h2> <?php echo $branch,' ','Sem', $sem  ,' ','Batch' ,$batch; ?></h2>

    <table class="table table-bordered">
        <thead>
        <tr class="active" >
            <th>#</th>
            <th>08:00 - 09:00</th>
            <th>09:00 - 10:00</th>
            <th>10:00 - 11:00</th>
            <th>11:00 - 12:00</th>
            <th>12:00 - 01:00</th>
            <th>01:00 - 02:00</th>
            <th>02:00 - 04:00</th>
            <th>04:00 - 06:00</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th  scope="row">Monday</th>
            <td style="background-color: #f0e68c" class="selection"><?php echo $c?></td>
            <td style="background-color: #ccddff"><?php echo $a?></td>
            <td style="background-color: #99ffd6"><?php echo $b?></td>
            <td style="background-color: #9999ff"><?php echo $h?></td>
            <td <?php if($sem == "5"): ?> style="background-color:#d9ff66;" <?php endif; ?>><?php if ($sem == "3" || $sem == "7") {
                    echo "--";
                } else {
                    echo $g;
                }?></td>
            <td <?php if($sem == "3" || $sem == "7"): ?> style="background-color:#d9ff66;" <?php endif; ?>><?php if ($sem == "5") {
                    echo "--";
                } else {
                    echo $g;
                }?></td>
            <td><?php echo $m1?></td>
            <td><?php echo $m2?></td>
        </tr>
        <tr>
            <th class="active" scope="row">Tuesday</th>
            <td style="background-color: #ccddff"><?php echo $a?></td>
            <td style="background-color: #f0e68c"><?php echo $c?></td>
            <td style="background-color: #dab3ff"><?php echo $d?></td>
            <td style="background-color: #ffb3b3"><?php echo $e?></td>
            <td <?php if($sem == "5"): ?> style="background-color:#ffce99;" <?php endif; ?>><?php if ($sem == "3" || $sem == "7") {
                    echo "--";
                } else {
                    echo $f;
                }?></td>
            <td <?php if($sem == "3" || $sem == "7"): ?> style="background-color:#ffce99;" <?php endif; ?>><?php if ($sem == "5") {
                    echo "--";
                } else {
                    echo $f;
                }?></td>
            <td><?php echo $t1?></td>
            <td><?php echo $t2?></td>
        </tr>
        <tr>
            <th  scope="row">Wednesday</th>
            <td style="background-color: #dab3ff"><?php echo $d?></td>
            <td style="background-color: #ccddff"><?php echo $a?></td>
            <td style="background-color: #99ffd6"><?php echo $b?></td>
            <td style="background-color: #ffb3b3"><?php echo $e?></td>
            <td <?php if($sem == "5"): ?> style="background-color:#ffce99;" <?php endif; ?>><?php if ($sem == "3" || $sem == "7") {
                    echo "--";
                } else {
                    echo $f;
                }?></td>
            <td <?php if($sem == "3" || $sem == "7"): ?> style="background-color:#ffce99;" <?php endif; ?>><?php if ($sem == "5") {
                    echo "--";
                } else {
                    echo $f;
                }?></td>
            <td><?php echo $w1?></td>
            <td><?php echo $w2?></td>
        </tr>
        <tr>
            <th class="active" scope="row">Thursday</th>
            <td style="background-color: #99ffd6"><?php echo $b?></td>
            <td style="background-color: #d9ff66"><?php echo $g?></td>
            <td style="background-color: #9999ff"><?php echo $h?></td>
            <td style="background-color: #f0e68c"><?php echo $c?></td>
            <td <?php if($sem == "5"): ?> style="background-color:#dab3ff;" <?php endif; ?>><?php if ($sem == "3" || $sem == "7") {
                    echo "--";
                } else {
                    echo $d;
                }?></td>
            <td <?php if($sem == "3" || $sem == "7"): ?> style="background-color:#dab3ff;" <?php endif; ?>><?php if ($sem == "5") {
                    echo "--";
                } else {
                    echo $d;
                }?></td>
            <td><?php echo $tr1?></td>
            <td><?php echo $tr2?></td>
        </tr>
        <tr>
            <th  scope="row">Friday</th>
            <td style="background-color: #ccddff"><?php echo $a?></td>
            <td style="background-color: #d9ff66"><?php echo $g?></td>
            <td style="background-color: #9999ff"><?php echo $h?></td>
            <td style="background-color: #ffce99"><?php echo $f?></td>
            <td <?php if($sem == "5"): ?> style="background-color:#ffb3b3;" <?php endif; ?>><?php if ($sem == "3" || $sem == "7") {
                    echo "--";
                } else {
                    echo $e;
                }?></td>
            <td <?php if($sem == "3" || $sem == "7"): ?> style="background-color:#ffb3b3;" <?php endif; ?>><?php if ($sem == "5") {
                    echo "--";
                } else {
                    echo $e;
                }?></td>
            <td><?php echo $f1?></td>
            <td><?php echo $f2?></td>
        </tr>
        </tbody>
    </table>
<p>*Practical timings may vary as per department's convenience </p>
</div>

<div class="container">
    <div id="generatebutton">
        <a href="" onclick="return xepOnline.Formatter.Format('mainpage',{render:'download', pageWidth:'350mm', pageHeight:'210mm'});  ">
            <button  class="btn btn-info ">Download as PDF</button>
        </a>


    </div>
    <br>
    <div id="generatebutton">
        <a href=""  onclick="return xepOnline.Formatter.Format('mainpage',{render:'newwin', pageWidth:'350mm', pageHeight:'210mm', mimeType:'image/jpg'});  ">
            <button  class="btn btn-info ">Download as JPG</button>
        </a>


    </div>
    </br>
    <div id="homebutton">
        <a  href="index.html" >
            <button  class="btn btn-info">Back to Home</button>
        </a>


    </div>


</div>
<div class="modal fade" id="msgBox" tabindex="-1" role="dialog" aria-labelledby="msg_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">
						<i class="pe-7s-close"></i>
					</span>
					<span class="sr-only">
						Close
					</span>
                </button>
                <h4 class="modal-title" id="msg_label">Message Title</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn blue" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Theme JavaScript -->
<script src="./js/main1.js"></script>

<script src="./js/xepOnline.jqPlugin.js"></script>
</body>

</html>




