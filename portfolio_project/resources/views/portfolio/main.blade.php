@extends('layouts.admin_layout')
    @section('content')
            
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                          
                        <div class="row">
                            <div class="form-group col-md-3 m-3">
                                <h2>Background Image</h2>
                                <img style="height: 30vh" src="{{url($main->bg_img)}}" class="img-thumbnail">
                                <input type="file" class="form-control" id="bg_img" name="bg_img" placeholder="Upload Your Image Here">
                            </div>
                            <div class="form-group col-md-4 m-3">
                                <div>
                                    <lebel for="title"><h4>Title</h4></lebel>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                                </div>
                                <div>
                                    <lebel for="title"><h4>Sub-Title</h4></lebel>
                                    <input type="text" class="form-control" id="sub-title" name="sub_title" value="{{$main->sub_title}}">
                                </div>
                                <div>
                                    <lebel for="title"><h4>Upload Resume</h4></lebel>
                                    <input type="file" class="form-control" id="resume" name="resume"  value="{{$main->resume}}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> 
                    </div>
                </main>
    @endsection
                
