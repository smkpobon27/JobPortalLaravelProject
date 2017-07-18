@extends('layout.employer_main')

@section('title', 'Create new company')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container-fluid">
            <h3 style="text-align:center;"><strong>Create a New Company</strong></h3>
            <br>
            <div class="row">
                <div class="col-lg-2">
                    <img src="{{asset('storage/company_images/'.$company->image)}}" alt="Company Brand Image" class="img-thumbnail img-responsive" style="height: 180px; width: 500px;">
                    <br>
                    <form action="{{route('employer.company_image')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="file" name="image">
                        <br>
                        <input type="submit" class="btn btn-primary" id="upload" value="UPLOAD">
                    </form>
                </div>
                <div class="col-lg-10">
                    <!-- -----------------First section------------------ -->
                    <div class="form-horizontal" id="company_form">
                        <div class="form-group{{$errors->has('name')?' has-error':''}}">
                            <label for="name" class="col-sm-2 control-label">Name: </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{$company->name}}" class="form-control" id="name" placeholder="Company name" required>
                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-sm-2 control-label">Country: </label>
                            <div class="col-sm-10">
                                <select name="country" id="country" class="form-control">
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Canada">Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">City: </label>
                            <div class="col-sm-10">
                                <select name="city" id="city" class="form-control">
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Bogra">Bogra</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="industry" class="col-sm-2 control-label">Select Company Industry: </label>
                            <div class="col-sm-10">
                                <select name="industry" id="industry" class="form-control">
                                    <option value="Bank">Bank</option>
                                    <option value="IT/Software">IT/Software</option>
                                    <option value="NGO">NGO</option>
                                    <option value="Insurance company">Insurance company</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="website" class="col-sm-2 control-label">Website: </label>
                            <div class="col-sm-10">
                                <input type="text" name="website" value="{{$company->website}}" class="form-control" id="website" placeholder="eg. www.example.com">
                            </div>
                        </div>
                        <div class="col-sm-10 col-sm-offset-2">
                            <textarea class="form-control" rows="4" cols="20" id="about" name="about" placeholder="Write something about your Company">{{$company->about}}</textarea>
                            <br>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="save" class="btn btn-warning">Save</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->
        </div>
        <!-- First container-fluid ends here -->
        {{csrf_field()}}
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // $('#save').click(function(event) {//when clicking on the Save btn second time this code doesn't work.So i need to use the code given below.
            //     var name = $('#name').val();
            //     var country = $('#country').val();
            //     var city = $('#city').val();
            //     var industry = $('#industry').val();
            //     var website = $('#website').val();
            //     var about = $('#about').val();

            //     $.post('{{route('employer.company')}}',{'_token':$('input[name=_token]').val(),'name':name,'country':country,'city':city,'industry':industry,'website':website,'about':about}, function(data) {
            //         $('#company_form').load(location.href + ' #company_form');
            //         console.log(data);
            //     });
            // });

            $(document).on('click','#save', function(event) {
                event.preventDefault();
                var name = $('#name').val();
                var country = $('#country').val();
                var city = $('#city').val();
                var industry = $('#industry').val();
                var website = $('#website').val();
                var about = $('#about').val();

                $.post('{{route('employer.company')}}',{'_token':$('input[name=_token]').val(),'name':name,'country':country,'city':city,'industry':industry,'website':website,'about':about}, function(data) {
                    $('#company_form').load(location.href + ' #company_form');
                    console.log(data);
                });
            });
        });
    </script>
@endsection