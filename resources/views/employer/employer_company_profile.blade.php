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
                                    <option value="Bangladesh"@if($company->country == "Bangladesh"){{'selected="selected"'}}@endif>Bangladesh</option>
                                    <option value="India"@if($company->country == "India"){{'selected="selected"'}}@endif>India</option>
                                    <option value="USA"@if($company->country == "USA"){{'selected="selected"'}}@endif>USA</option>
                                    <option value="Australia"@if($company->country == "Australia"){{'selected="selected"'}}@endif>Australia</option>
                                    <option value="Canada"@if($company->country == "Canada"){{'selected="selected"'}}@endif>Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-2 control-label">City: </label>
                            <div class="col-sm-10">
                                <select name="city" id="city" class="form-control">
                                    <option value="Dhaka"@if($company->city == "Dhaka"){{'selected="selected"'}}@endif>Dhaka</option>
                                    <option value="Rajshahi"@if($company->city == "Rajshahi"){{'selected="selected"'}}@endif>Rajshahi</option>
                                    <option value="Chittagong"@if($company->city == "Chittagong"){{'selected="selected"'}}@endif>Chittagong</option>
                                    <option value="Khulna"@if($company->city == "Khulna"){{'selected="selected"'}}@endif>Khulna</option>
                                    <option value="Sylhet"@if($company->city == "Sylhet"){{'selected="selected"'}}@endif>Sylhet</option>
                                    <option value="Barisal"@if($company->city == "Barisal"){{'selected="selected"'}}@endif>Barisal</option>
                                    <option value="Dinajpur"@if($company->city == "Dinajpur"){{'selected="selected"'}}@endif>Dinajpur</option>
                                    <option value="Bogra"@if($company->city == "Bogra"){{'selected="selected"'}}@endif>Bogra</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="industry" class="col-sm-2 control-label">Select Company Industry: </label>
                            <div class="col-sm-10">
                                <select name="industry" id="industry" class="form-control">
                                    <option value="Bank"@if($company->industry == "Bank"){{'selected="selected"'}}@endif>Bank</option>
                                    <option value="IT/Software"@if($company->industry == "IT/Software"){{'selected="selected"'}}@endif>IT/Software</option>
                                    <option value="NGO"@if($company->industry == "NGO"){{'selected="selected"'}}@endif>NGO</option>
                                    <option value="Insurance company"@if($company->industry == "Insurance company"){{'selected="selected"'}}@endif>Insurance company</option>
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