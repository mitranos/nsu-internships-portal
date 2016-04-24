<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta id="request-method" name="request-method" content="GET">
    <meta name="author" content="Nicky">
    <meta name="keywords" content="Nicky">
    <link rel="shortcut icon" href="../../images/only-nsu.png" type="image/png" />
    <title>Shark Internship Portal</title>
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css" />
    <link href="../../fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../styles/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../styles/review_app.css" />
    <script src="../../js/jquery-1.10.2.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fileinput.min.js"></script>
</head>
<body>
<header id="header" class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-0" id="logo"><a href="http://nsu-sharkportal.netne.net/" target="_blank"><img src="../../images/logo.png" width="239" height="61" border="0" alt="Nova Southeastern University"></a></div>
        <div class="col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-0" >
            <h3 class="nsu-title">Shark Internship Portal</h3>
        </div>
    </div>
</header>
<div class="col-lg-8 col-md-8 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-2 col-lg-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Application Details
        </div>
        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <tbody>

                <tr>
                    <td>Date of Submission</td>
                    <td>{{$internship->created_at->toFormattedDateString()}}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{$internship->student->name}}</td>
                </tr>
                <tr>
                    <td>NSU ID</td>
                    <td>{{$internship->student->nsu_id}}</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>{{$internship->student->phone}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$internship->student->email}}</td>
                </tr>
                <tr>
                    <td>Term for the internship</td>
                    <td>{{$internship->term}}</td>
                </tr>
                <tr>
                    <td> Major</td>
                    <td>{{$internship->major}}</td>
                </tr>
                <tr>
                    <td>Name of agency for internship</td>
                    <td>{{$internship->agency}}</td>
                </tr>
                <tr>
                    <td>Agency Address</td>
                    <td>{{$internship->agency_address}}</td>
                </tr>
                <tr>
                    <td>Agency’s Website</td>
                    <td>{{$internship->agency_website}}</td>
                </tr>
                <tr>
                    <td>Name of Supervisor</td>
                    <td>{{$internship->supervisor}}</td>
                </tr>
                <tr>
                    <td>Supervisor’s phone number</td>
                    <td>{{$internship->supervisor_phone}}</td>
                </tr>
                <tr>
                    <td>Supervisor’s email</td>
                    <td>{{$internship->supervisor_email}}</td>
                </tr>
                <tr>
                    <td class="col-lg-5 col-md-5 col-sm-5 col-xs-5" ><a target="_blank"  href="" style="text-decoration:underline">Offer Letter</a></td>
                    <td class="col-lg-7 col-md-7 col-sm-7 col-xs-7"><a target="_blank"  href="" style="text-decoration:underline">Job Description</a></td>
                </tr>
                </tbody>
            </table>
            <div style="border-bottom: groove; margin-bottom:25px;"></div>
        </div>
    </div>
</div>

<div id="footer">
    <p>&copy; 2016 Nova Southeastern University <span>|</span> 3301 College Avenue, Fort Lauderdale, Florida 33314-7796 <span>|</span> 800-541-6682</p>
</div>
</body>
</html>