@extends('app')

@section('title', 'NSU Internship Portal')
@section('description', 'description')
@section('keywords', 'keywords')

@section('content')

<div class="well">
    <div id="menu" class="row">
        <div class="col-md-5 col-sm-6 col-xs-8">
            <div id="account" class="col-sm-3 col-xs-4 padding-zero active" role="presentation">
                <a href="#tab_account" role="tab" id="account-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-user" style="padding-right: 3px;"></i>My Account</a>
            </div>
            <div class="col-sm-9 col-xs-8 padding-zero">
                <img id="separator" src="../images/separator.png"/>
                <div id="welcome">
                    <b>Welcome, </b>{{ Auth::user()->name }}
                    <br />
                    <span id="log-span">You are currently logged in.</span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-5 col-sm-3 col-sm-offset-3 col-xs-4 col-xs-offset-0 padding-zero">
            <img id="separator2" src="../images/separator.png" />
            <div style="margin-top:6px;">
                <a href="{{ url('/logout') }}"><i class="fa fa-sign-out" style="padding-right: 3px;"></i>Logout</a>
                <a id="help" style="margin-left:15px;" href="{{ url('/help') }}"><i class="fa fa-question-circle" style="padding-right: 3px;"></i>Help</a>
            </div>
            <div id="date" class="row">
                <div class="">
                    {{ \Carbon\Carbon::now()->toFormattedDateString() }}
                </div>
            </div>
        </div>
    </div>
    <div id="tabs" class="row">
        <div class="x_content">

            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="menuTabs" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tab_home" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_settings" role="tab" id="settings-tab" data-toggle="tab" aria-expanded="false">Settings</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_internships" role="tab" id="intership-tab" data-toggle="tab" aria-expanded="false"> Internships</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="menuTabsContent" class="tab-content col-lg-8 col-md-8 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-2 col-lg-offset-2">
        <div role="tabpanel" class="tab-pane fade active in panel" id="tab_home" aria-labelledby="home-tab">
            <div class="panel-heading">
                <nav class="navbar navbar-inverse">
                    <div class="">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#appNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand">Applications</a>
                        </div>
                        <div>
                            <div class="collapse navbar-collapse" id="appNavbar">
                                <ul id="appTabs" class="nav navbar-nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab_pending" id="pending-tab" role="tab" data-toggle="tab" aria-expanded="true">Pending</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Processed<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation" class="">
                                                <a href="#tab_accepted" role="tab" id="accepted-tab" data-toggle="tab" aria-expanded="false">Accepted</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#tab_rejected" role="tab" id="rejected-tab" data-toggle="tab" aria-expanded="false"> Rejected</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="panel-body" style="overflow-y: auto; max-height: 400px; min-height: 370px;">
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade active in" id="tab_pending" aria-labelledby="pending-tab">
                        @forelse(Auth::user()->professor_internships()->pending()->get() as $internship)
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td>Date of Submission</td>
                                <td>{{$internship->created_at->toFormattedDateString()}}</td>
                            </tr>
                            <tr>
                                <td>Student Name</td>
                                <td>{{ $internship->student->name }}</td>
                            </tr>
                            <tr>
                                <td><a href="{{url('/internship', $internship->id)}}" style="text-decoration:underline">Review Application</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="status">Application Status</label>
                                            <div class="col-sm-7">
                                                <select id="status" class="form-control" required autofocus>
                                                    <option>PENDING</option>
                                                    <option>APPROVED</option>
                                                    <option>DENIED</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="reason">Reason of Denial</label>
                                            <div class="col-sm-7">
                                                <select id="reason" class="form-control" required autofocus>
                                                    <option>Did not meet site criteria</option>
                                                    <option>Did not meet academic criteria</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="other-reason">Please Specify other reason</label>
                                            <div class="col-sm-7">
                                                <input id="other-reason" class="form-control" required autofocus />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-8 col-sm-3">
                                                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </td>
                            </tr>

                            </tbody>

                        </table>
                        <div style="border-bottom: groove; margin-bottom:25px;"></div>
                        @empty
                            <br>
                            <p style="font-style: italic; text-align: center; font-size: 25px">Currently there are no Pending Requests</p>
                        @endforelse
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_accepted" aria-labelledby="accepted-tab">
                        @forelse(Auth::user()->professor_internships()->accepted()->get() as $internship)
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>Date of Submission</td>
                                    <td>{{$internship->created_at->toFormattedDateString()}}</td>
                                </tr>
                                <tr>
                                    <td>Student Name</td>
                                    <td>{{ $internship->student->name }}</td>
                                </tr>
                                <tr>
                                    <td><a href="{{url('/internship', $internship->id)}}" style="text-decoration:underline">Review Application</a></td>
                                    <td></td>
                                </tr>
                                </tbody>

                            </table>
                            <div style="border-bottom: groove; margin-bottom:25px;"></div>
                        @empty
                            <br>
                            <p style="font-style: italic; text-align: center; font-size: 25px">Currently there are no Accepted Requests</p>
                        @endforelse
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_rejected" aria-labelledby="rejected-tab">
                        @forelse(Auth::user()->professor_internships()->rejected()->get() as $internship)
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td>Date of Submission</td>
                                    <td>{{$internship->created_at->toFormattedDateString()}}</td>
                                </tr>
                                <tr>
                                    <td>Student Name</td>
                                    <td>{{ $internship->student->name }}</td>
                                </tr>
                                <tr>
                                    <td><a href="{{url('/internship', $internship->id)}}" style="text-decoration:underline">Review Application</a></td>
                                    <td></td>
                                </tr>
                                </tbody>

                            </table>
                            <div style="border-bottom: groove; margin-bottom:25px;"></div>
                        @empty
                            <br>
                            <p style="font-style: italic; text-align: center; font-size: 25px">Currently there are no Rejected Requests</p>
                        @endforelse
                    </div>

                </div>

            </div>
        </div>


        <div role="tabpanel" class="tab-pane fade panel" id="tab_settings" aria-labelledby="settings-tab">
            <div class="panel-heading">
                <nav class="navbar navbar-inverse">
                    <div class="">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#settingsNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand">Settings</a>
                        </div>
                        <div>
                            <div class="collapse navbar-collapse" id="settingsNavbar">
                                <ul id="appTabs" class="nav navbar-nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab_admin-list" id="admin-list-tab" role="tab" data-toggle="tab" aria-expanded="true">Admin List</a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="#tab_add-admin" id="add-admin-tab" role="tab" data-toggle="tab" aria-expanded="false">Add Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="panel-body" style="overflow-y: auto; max-height: 400px; min-height: 370px;">
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade active in" id="tab_admin-list" aria-labelledby="admin-list-tab">

                        @foreach(\App\User::admins()->get() as $admin)
                        <table class="table table-hover">
                            <tbody>

                            <tr>
                                <td>Admin Name</td>
                                <td>{{ $admin->name }}</td>
                            </tr>
                            <tr>
                                <td>Date of Creation</td>
                                <td>{{ $admin->created_at->toFormattedDateString() }}</td>
                            </tr>
                            <tr>
                                <td><a href="{{url('/admin', $admin->id)}}" style="text-decoration:underline">Remove Admin</a></td>
                                <td></td>
                            </tr>
                            </tbody>

                        </table>
                        <div style="border-bottom: groove; margin-bottom:25px;"></div>
                        @endforeach

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_add-admin" aria-labelledby="add-admin-tab">
                        <form role="form" class="form-horizontal register-form" method="POST" action="{{ url('/admin') }}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="name">Name:</label>
                                <div class="col-sm-7">
                                    <input type="text" id="name" name="name" class="form-control" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="password">Password:</label>
                                <div class="col-sm-7">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Email:</label>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <input type="text" id="email" name="email" class="form-control" aria-describedby="email-addon" required autofocus>
                                        <span class="input-group-addon" id="enmail-addon">@nova.edu</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-8 col-sm-2">
                                    <button class="btn btn-primary btn-block" type="submit">Add</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>


        <div role="tabpanel" class="tab-pane fade panel panel-primary" id="tab_internships" aria-labelledby="intership-tab">
            <div class="panel-heading">
                Internships
            </div>
            <div class="panel-body">
                <div class="panel-group" id="accordion_2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="http://www.nova.edu/career/resources/letter_to_students.html" target="_blank">
                                    Letter to Students
                                </a>
                            </h4>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_2" href="#collapseOne_2">
                                    Internship Tools<span class="fa fa-minus-square"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne_2" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        <a href="http://www.nova.edu/career/resources/internship_faqs.html" target="_blank">Internship FAQ's</a>
                                    </li>
                                    <li>
                                        <a href="http://www.nova.edu/career/resources/tips_successful_internship.html" target="_blank">Tips for a successful Internship</a>
                                    </li>
                                    <li>
                                        <a href="http://www.nova.edu/career/resources/converting_your_internship.html" target="_blank">Converting Your Internship</a>
                                    </li>
                                    <li>
                                        <a href="http://www.nova.edu/career/resources/after_your_internship.html" target="_blank">After Your Internship</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_2" href="#collapseTwo_2">
                                    Student Information <span class="fa fa-plus-square"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>

                                    <li>
                                        <a href="http://www.nova.edu/career/resources/student_participation_requirements.html" target="_blank">Student Participation Requirements</a>
                                    </li>
                                    <li>
                                        <a href="http://www.nova.edu/career/forms/internship_preparation_checklist.pdf" target="_blank">Internship Preparation Checklist </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">Non-Academic Credit Syllabus</a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">Sample Academic Credit Syllabus</a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">Student Internship Agreement</a>
                                    </li>
                                    <li>
                                        <a href="http://www.nova.edu/career/forms/student_internship_reqmts_receive_academic_credit.pdf" target="_blank">Student Internship Requirements to Receive Academic Credit</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion_2" href="#collapseThree_2">
                                    Internship Listing & Web Resources <span class="fa fa-plus-square"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        <a href="http://www.nova.edu/career/resources/fortune_500_internship_listings.html" target="_blank">Fortune 500 Internship Listings</a>
                                    </li>
                                    <li>
                                        <a href="http://www.nova.edu/career/resources/internship_websites.html" target="_blank">Internship Web Resources </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade panel panel-primary" id="tab_account" aria-labelledby="account-tab">
            <div class="panel-heading">
                Change Password
            </div>
            <div class="panel-body">
                <form role="form" class="form-horizontal register-form">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="oldPassword">Old Password:</label>
                        <div class="col-sm-7">
                            <input type="password" id="oldPassword" class="form-control" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="newPassword">New Password:</label>
                        <div class="col-sm-7">
                            <input type="password" id="newPassword" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="confirmPassword">Confirm New Password:</label>
                        <div class="col-sm-7">
                            <input type="password" id="confirmPassword" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-8 col-sm-3">
                            <button class="btn btn-primary btn-block" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection