@extends('app')

@section('title', 'NSU Internship Portal')
@section('description', 'description')
@section('keywords', 'keywords')

@section('content')

<div class="well">

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-1  panel panel-primary menu-panel">
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked filter wow bounceIn" data-wow-delay="500ms">
                    <li class="active"><a data-toggle="pill" href="#register-Form">Registration Form</a></li>
                    <li><a data-toggle="pill" href="#purpose">Purpose</a></li>
                    <li><a data-toggle="pill" href="#responsibilities">Responsibilities</a></li>
                    <li><a data-toggle="pill" href="#labor-Internship-Law">Labor Internship Law</a></li>
                    <li><a data-toggle="pill" href="#responsibilities-of-NSU">Responsibilities of NSU</a></li>
                    <li><a data-toggle="pill" href="#responsibilities-of-Supervisor">Responsibilities of Supervisor</a></li>
                    <li><a data-toggle="pill" href="#terms-of-Internship">Terms of Internship</a></li>
                    <li><a href="/">Back to Login</a></li>
                </ul>
            </div>
        </div>

        <div class="tab-content  col-lg-6 col-md-6 col-sm-7 col-sm-offset-1 col-xs-12 col-md-offset-1 col-lg-offset-1">
            <!-- Registration Form content -->
            <div id="register-Form" class="tab-pane fade in active panel panel-primary">
                <div class="panel-heading">
                    Please fill in the following internship information. <span style="font-weight:500;">(All fields are mandatory.)</span>
                </div>
                <div class="panel-body">
                    <form role="form" class="form-horizontal register-form">

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="name">Name:</label>
                            <div class="col-sm-7">
                                <input type="text" id="name" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="NsuId">NSU ID:</label>
                            <div class="col-sm-7">
                                <input type="text" id="NsuId" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="password">Password:</label>
                            <div class="col-sm-7">
                                <input type="password" id="password" class="form-control" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-4" for="phoneNo">Phone Number:</label>
                            <div class="col-sm-7">
                                <input type="text" id="phoneNo" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Email:</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <input type="text" id="email" class="form-control" aria-describedby="email-addon" required autofocus>
                                    <span class="input-group-addon" id="enmail-addon">@nova.edu</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="term">Term for the internship:</label>
                            <div class="col-sm-6">
                                <label class="radio-inline checked">
                                    <input type="radio" name="term" value="Fall" checked>
                                    Fall
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="term" value="Winter">
                                    Winter
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="term" value="Summer">
                                    Summer
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="major">Your Major:</label>
                            <div class="col-sm-7">
                                <input type="text" id="major" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="agencyName">Name of agency for internship:</label>
                            <div class="col-sm-7">
                                <input type="text" id="agencyName" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="agencyAddress">Agency Address:</label>
                            <div class="col-sm-7">
                                <input type="text" id="agencyAddress" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="agencyWebsite">Agency Website:</label>
                            <div class="col-sm-7">
                                <input type="text" id="agencyWebsite" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="supervisorName">Name of Supervisor:</label>
                            <div class="col-sm-7">
                                <input type="text" id="supervisorName" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="supervisorPhoneNo">Supervisor phone number:</label>
                            <div class="col-sm-7">
                                <input type="text" id="supervisorPhoneNo" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="supervisorEmail">Supervisor email:</label>
                            <div class="col-sm-7">
                                <input type="text" id="supervisorEmail" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="offerLetter">Offer Letter Upload (PDF or Scanned Image ONLY):</label>
                            <div class="col-sm-7">
                                <input id="offerLetter" multiple type="file" class="file file-loading" data-allowed-file-extensions='["pdf", "jpg", "png", "gif"]' data-show-upload="false" data-max-file-count="1" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="jobDescription">Job Description Upload (PDF or Scanned Image ONLY):</label>
                            <div class="col-sm-7">
                                <input id="jobDescription" multiple type="file" class="file file-loading" data-allowed-file-extensions='["pdf", "jpg", "png", "gif"]' data-show-upload="false" data-max-file-count="1" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="checkbox col-md-offset-1 col-sm-11">
                                <label class="control-label">
                                    <input type="checkbox">I have read and agree to the <a href="#termsModal" data-toggle="modal">Terms of the Internship Agreement.</a>
                                </label>
                            </div>
                            <!-- Terms Modal -->
                            <div class="modal fade" id="termsModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Terms of Internship Arrangement</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>An internship arrangement for each student will be a period agreed upon by the Site Sponsor and the University. Should the Site Supervisor become dissatisfied with the performance of a student, the Site Supervisor may request termination of the internship arrangement. This should occur only after University personnel have been notified in advance and a satisfactory resolution cannot be obtained. Conversely, NSU may request termination of the arrangement for any student not complying with NSU guidelines and procedures for the internship program, or if the Site Supervisor does not uphold the responsibilities mentioned above, as long as Site Supervisor personnel have been notified in advance and satisfactory resolution cannot be obtained.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-8 col-sm-3">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Purpose content -->
            <div id="purpose" class="tab-pane fade panel panel-primary">
                <div class="panel-heading">
                    Purpose
                </div>
                <div class="panel-body">
                    <p>
                        Nova Southeastern UniversityÃ¢â‚¬â„¢s (NSU) College of Engineering Internship Program provides an educational strategy whereby students complement their academic preparation with direct practical experience.
                        The effort to combine a productive work experience with an intentional learning component is
                        a proven method for promoting the academic, personal, and career development of students.
                        Your participation exhibits your interest and commitment to this educational strategy and to the growth and development
                        of students as future professionals. We look forward to collaborating with you in this work/learning endeavor.
                    </p>
                </div>
            </div>

            <!-- Responsibilities content -->
            <div id="responsibilities" class="tab-pane fade panel panel-primary">
                <div class="panel-heading">
                    Responsibilities
                </div>
                <div class="panel-body">
                    <p>
                        To help ensure the interests and promote the benefits of an internship arrangement for all parties involved,
                        NSU has developed this agreement of understanding to describe the mutual responsibilities between NSU and your
                        organization.
                    </p>
                </div>
            </div>

            <!-- Labor Internship Law content -->
            <div id="labor-Internship-Law" class="tab-pane fade panel panel-primary">
                <div class="panel-heading">
                    Department of Labor Internship Law
                </div>
                <div class="panel-body">
                    <p>
                        The internship is considered educational training and an integral part of the studentÃ¢â‚¬â„¢s curriculum.
                        A Nova Southeastern University undergraduate or graduate business student who participates in the Internship Program is
                        <i> not considered to be employed </i> at a formal job, but rather is temporarily hired for the strict purpose of an
                        internship. According to the U.S. Dept. of Labor, Wage and Hour Division, Ã¢â‚¬Å“If an employer uses inters as substitutes
                        for regular workers or to augment its existing workforce during specific time periods, these interns should be paid
                        at least the minimum wage.

                        <br />
                        <br />
                        <a href="http://www.dol.gov/whd/regs/compliance/whdfs71.htm">http://www.dol.gov/whd/regs/compliance/whdfs71.htm</a>
                        <br />
                        <br />
                        <b>The following are criteria for unpaid internship according to Department of Labor:</b>
                    <ul>
                        <li>
                            The internship, even though it includes actual operation of the facilities of the employer
                            , is similar to training which would be given in an educational environment
                        </li>
                        <li>
                            The internship experience is for the benefit of the intern;
                        </li>
                        <li>
                            The intern does not displace regular employees, but works under close supervision of existing staff;
                        </li>
                        <li>
                            The employer that provides the training derives no immediate advantage from the activities of the intern;
                            and on occasion its operations may actually be impeded;
                        </li>
                        <li>
                            The intern is not necessarily entitled to a job at the conclusion of the internship
                        </li>
                        <li>
                            The employer and the intern understand that the intern is not entitled to wages for the time spent
                            in the internship.
                        </li>
                    </ul>
                    If all of the factors listed above are met, an employment relationship does not exist under the FLSA,
                    and the ActÃ¢â‚¬â„¢s minimum wage and overtime provisions do not apply to the intern.
                    This exclusion from the definition of employment is necessarily quite narrow because the FLSAÃ¢â‚¬â„¢s definition of Ã¢â‚¬Å“employÃ¢â‚¬Â
                    is very broad.  Some of the most commonly discussed factors for Ã¢â‚¬Å“for-profitÃ¢â‚¬Â private sector internship programs are
                    considered below.
                    </p>
                </div>
            </div>

            <!-- Responsibilities of NSU content -->
            <div id="responsibilities-of-NSU" class="tab-pane fade panel panel-primary">
                <div class="panel-heading">
                    Responsibilities of Nova Southeastern University
                </div>
                <div class="panel-body">
                    <p>
                    <ol>
                        <li>
                            Encourage the student's productive contribution to the overall mission of the organization.
                        </li>
                        <li>
                            Certify the student's academic eligibility to participate in an internship assignment
                        </li>
                        <li>
                            Provide student with responsibilities, assist in  setting learning objectives, confer with Site
                            Supervisor Personnel, monitor the progress of the internship assignment, and monitor the overall performance
                            of the student at site.
                        </li>
                        <li>
                            Maintain communication with the Site Supervisor and clarify NSU policies and procedures.
                        </li>
                        <li>
                            Maintain the confidentiality of any information designated by the Site Supervisor as confidential
                            related to the internship.
                        </li>
                        <li>
                            Uphold any additional policies and procedures that are mutually agreed upon in advance in writing
                            between NSU and the Site Supervisor.
                        </li>
                    </ol>
                    </p>
                </div>
            </div>

            <!-- Responsibilities of Supervisor content -->
            <div id="responsibilities-of-Supervisor" class="tab-pane fade panel panel-primary">
                <div class="panel-heading">
                    Responsibilities of the Site Supervisor
                </div>
                <div class="panel-body">
                    <p>
                    <ol>
                        <li>
                            Encourage and support the learning objectives of the student's internship experience.
                        </li>
                        <li>
                            Designate an employee to serve as student supervisor with responsibilities to help orient
                            the student to the site and its culture, assist in the development of learning objectives, confer
                            regularly with the student and his/her instructor, and to monitor progress of the student.
                        </li>
                        <li>
                            Provide adequate supervision to the student and assign duties that are career-related, developmental,
                            progressive and challenging.
                        </li>
                        <li>
                            Make available equipment, supplies, and space necessary for the student to perform his/her duties.
                        </li>
                        <li>
                            Provide a safe working environment.
                        </li>
                        <li>
                            Will not displace regular workers with students secured through internship referral.
                        </li>
                        <li>
                            Notify NSU personnel of any changes in the student's work status, schedule, or performance.
                        </li>
                        <li>
                            Maintain general liability, professional liability and workerÃ¢â‚¬â„¢s compensation insurance as required by law.
                        </li>
                        <li>
                            Internship supervisor must fill out midterm and final evaluation provided by the program instructor
                        </li>
                    </ol>
                    </p>
                </div>
            </div>

            <!-- Terms of Internship content -->
            <div id="terms-of-Internship" class="tab-pane fade panel panel-primary">
                <div class="panel-heading">
                    Terms of Internship Arrangement
                </div>
                <div class="panel-body">
                    <p>
                        An internship arrangement for each student will be a period agreed upon by the Site Sponsor and the University.
                        Should the Site Supervisor become dissatisfied with the performance of a student, the Site Supervisor may request
                        termination of the internship arrangement. This should occur only after University personnel have been notified in
                        advance and a satisfactory resolution cannot be obtained. Conversely, NSU may request termination of the arrangement
                        for any student not complying with NSU guidelines and procedures for the internship program, or if the Site Supervisor
                        does not uphold the responsibilities mentioned above, as long as Site Supervisor personnel have been notified in
                        advance and satisfactory resolution cannot be obtained.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection