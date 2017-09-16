@extends('layout.admin_main')

@section('title', 'All Users List')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
        <form action="/admin/user-search" method="get">
        {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6 col-lg-offset-1">
                    <input type="text" name="searchQuery" class="form-control" placeholder="Search Keywords" value="{{ old('searchQuery') }}">
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-warning" value="Search">
                        </div>
                    </div>
                </div>
            </div><!-- row ends here=== -->
        </form>
            

            <div class="row top">

<!-- ---------Section for users--------------------------- -->
                <div class="col-lg-11 ">
                @foreach($users as $user)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$user->name}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4"><i class="fa fa-envelope"></i> {{$user->email}}</div> 
                                
                                <div class="col-lg-3"><i class="fa fa-phone"></i> {{$user->phone}}</div>
                                <div class="col-lg-2"><i class="fa fa-user"></i> 
                                    @if($user->seeker == 1)
                                    {{'Job Seeker'}}
                                    @elseif($user->employer == 1)
                                    {{'Employer'}}
                                    @elseif($user->admin == 1)
                                    {{'Administrator'}}
                                    @endif
                                </div> 
                                {{-- <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-10">
                                            <a href="/admin/user/delete/{{$user->id}}" class="btn btn-warning">DELETE</a>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-lg-2">
                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-10">
                                            <a href="/admin/user/role/{{$user->id}}" target="_blank" class="btn btn-default">ROLE</a>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
            <!-- row ends here----------- -->

        </div>
        <!-- First container-fluid ends here -->
    </section>
@endsection
