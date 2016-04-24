@extends('app')

@section('title', 'NSU Internship Portal')
@section('description', 'description')
@section('keywords', 'keywords')

@section('content')

<div class="col-lg-8 col-md-8 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-2 col-lg-offset-2">
    <div class="panel-intern panel-primary">
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
@endsection