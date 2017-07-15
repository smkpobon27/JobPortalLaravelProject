@extends('layout.seeker_main')

@section('title', 'Jobseeker CV')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <h3><strong>Public CV view</strong></h3>
            <div class="row">
                <div class="col-lg-2">
                    <img src="../images/header_image.png" alt="..." class="img-thumbnail" style="height: 180px; width: 500px;">
                </div>
                <div class="col-lg-10">
                    <h3>S.M. Kamruzzaman Pobon</h3>
                    <p><strong>Lives in </strong>Rajshahi</p>
                    <p><strong>Email: </strong>smk@gmail.com</p>
                    <p><strong>Phone: </strong>01714601116</p>
                    <div>
                        <a href="" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> EDIT MY CV</a>
                        <a href="" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-download"></i> DOWNLOAD AS PDF</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!-- row ends here -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h4><Strong>About me</Strong></h4><hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt, ipsa quae officia dignissimos eligendi placeat blanditiis fugiat totam veniam unde cupiditate maxime, autem voluptate! Iusto, perferendis. Numquam reiciendis, libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo hic fugit dignissimos magnam, mollitia vero, deleniti non. Deleniti reiciendis tempora vel est unde velit, fugiat eaque ab animi, expedita possimus.</p>
                </div>
            </div> <!-- row ends here---- -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Work experience</strong></h4><hr>
                    <div class="row">
                        <div class="col-lg-3">
                           <p><strong>Job title: </strong>Manager</p>
                           <p><strong>Company: </strong>Pran rfl</p>
                           <p><strong>Job role: </strong>Programmer</p>
                        </div>
                        <div class="col-lg-3">
                            <p><strong>Industry: </strong>IT/Software</p>
                            <p><strong>Country: </strong>Bangladesh</p>
                            <p><strong>City: </strong>Rajshahi</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p><strong>Description: </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi explicabo sequi nemo aspernatur vitae sit officiis dolor quasi sed! Ab sapiente ad quos assumenda, magni fugit eligendi delectus necessitatibus molestias.</p>
                        </div>
                    </div>
                </div>
            </div><!-- row ends here --- -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Education</strong></h4><hr>
                    <h5><strong>University of Rajshahi</strong></h5>
                    <p>Bachelor's degree</p>
                    <p>Field of study: <strong>Computer science</strong></p>
                    <p>Grade: <strong>100%</strong></p>
                </div>
            </div> <!-- row ends here ---- -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Languages</strong></h4><hr>
                    <p>Bangla, english, hindi</p>
                </div>
            </div><!-- row ends here ---- -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Top skills</strong></h4><hr>
                    <p><strong>Programming</strong></p>
                    <div class="col-lg-2">
                        <p><strong>Level: </strong>professional</p>
                    </div>
                    <div class="col-lg-2">
                        <p><strong>Experience: </strong>1 - 5 years</p>
                    </div>
                </div>
            </div><!-- row ends here -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Interests &amp; Activities</strong></h4><hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae atque ullam laboriosam laborum fuga, ut dolorum, praesentium error repudiandae eaque dignissimos, deleniti, aliquid eum. Quo voluptates cupiditate sequi ipsum nisi.</p>
                </div>
            </div> <!-- row ends here -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Attachments</strong></h4><hr>
                    <a href="">My cv</a>
                    <h4><strong>Links</strong></h4><hr>
                    <a href="">Name of the Url</a>
                    
                    <br><br><br>
                </div>
            </div>

        </div>
        <!--First container-fluid ends here -->

    </section>
@endsection