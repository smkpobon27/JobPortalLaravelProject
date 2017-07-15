@extends('layout.employer_main')

@section('title', 'Create new company')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container-fluid">
            <h3 style="text-align:center;"><strong>Create a New Company</strong></h3>
            <br>
            <div class="row">
                <div class="col-lg-2">
                    <img src="../images/header_image.png" alt="..." class="img-thumbnail img-responsive" style="height: 180px; width: 500px;">
                    <br>
                    <input type="file" name="image">
                    <br>
                    <button class="btn btn-primary" id="upload">UPLOAD</button>
                </div>
                <div class="col-lg-10">
                    <!-- -----------------First section------------------ -->
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Name: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Company name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Country: </label>
                            <div class="col-sm-10">
                                <select name="cars" class="form-control">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">City: </label>
                            <div class="col-sm-10">
                                <select name="cars" class="form-control">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Select Company Industry: </label>
                            <div class="col-sm-10">
                                <select name="cars" class="form-control">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Website: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Website address">
                            </div>
                        </div>
                        <div class="col-sm-10 col-sm-offset-2">
                            <textarea class="form-control" rows="4" cols="20" id="inputEmail3" placeholder="Write something about your Company"></textarea>
                            <br>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-warning">Save</button>
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
    </section>
@endsection