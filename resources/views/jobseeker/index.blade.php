@extends('layout.seeker_main')

@section('title', 'Home')

@section('content')
    <section id="home_first_section" class="top">
        <div class="container-fluid">
            <h1 class="first_sec_h1">Build the Future of Bangladesh</h1>
            <div class="container home_search">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <form class="form-inline">
                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keywords (i.e job title)">
                          </div>
                          <div class="form-group">
                             <select name="city" class="form-control">
                                <option>Select a Country</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-default">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row col-lg-offset-1">
                <div class="col-lg-2 h1home">
                    <h1>Find</h1>
                    <a href="#">Search by Category</a>
                </div>
                <div class="col-lg-2 h1home">
                    <h1>Your</h1>
                    <a href="">Search by Industry</a>
                </div>
                <div class="col-lg-2 h1home">
                    <h1>Dream</h1>
                    <a href="">Search by Company</a>
                </div>
                 <div class="col-lg-2 h1home" style="padding-bottom: 70px;">
                     <h1>Job</h1>
                     <a href="">Search by City</a>
                 </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 more_btn">
                    <a href="" class="btn btn-warning btn-lg">Find More Jobs Here</a>
                </div>
            </div>
        </div>
    </section>
@endsection