@extends('layout.seeker_main')

@section('title', 'Dashboard')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <img src="../images/header_image.png" alt="..." class="img-thumbnail" style="height: 180px; width: 500px;">
                </div>
                <div class="col-lg-10">
                    <h1>S.M. Kamruzzaman Pobon</h1>
                    <p>Welcome to your personal workspace</p>
                    <div>
                        <a href="" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> EDIT MY CV</a>
                        <a href="" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-eye"></i> VIEW MY CV</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>

            <!-- Nav for Dashboard applied jobs status -->
            <div class="row">
                <div class="col-lg-12">

                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">My Applications</a></li>
                        <li role="presentation"><a href="#">Account Settings</a></li>
                    </ul>

                    <div id="myApplications">
                        <br>
                        <p><strong>My Applications</strong></p>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Company</th>
                                    <th>Industry</th>
                                    <th>Location</th>
                                    <th>Applied Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Manager</td>
                                    <td>Pran RFL</td>
                                    <td>IT/Software</td>
                                    <td>Dhaka</td>
                                    <td>34/44/2042</td>
                                    <td><a href="" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-trash"></i> DELETE</a></td>
                                    <td><a href="" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-eye"></i> VIEW APPLICATION</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Account Settings page  -->
                    <div id="accountSetting" style="display: none;">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="smk@gmail.com" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter new password" value="123456">
                                </div>
                                <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">SAVE</button><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   @endsection