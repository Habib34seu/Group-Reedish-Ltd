<link href="{{asset('frontend/css/rkl.css')}}" rel="stylesheet" type="text/css"/>
@extends('index_about')
@section('content')
<style type="text/css">
    #prodctcontant{
        height: 180;
        width: 272px;
        /*border: 1px solid;*/
        float: left;
        border-right:   1px solid gray;
        border-bottom:    1px solid gray;
        overflow: hidden;
        margin-left: 300px;

    }
    h1{
        color: black;
        padding: 8px;
    }
    #prodctalbum{
        padding-top: 10px;

        float: left;
        padding: 10px;
        height: auto;
        /*background-color: red;*/
        color: black;
        border: 1px solid;
margin-left:7px;
    }
    #pdescription{
        min-height: 185px;
        width: 420px;
        float: left;
        background-color:red ;
        padding: 8px;
        margin-left: 10px;

    }
    #link:hover{
        color: black;
    }   </style> 
<section class="section1">

    <div class="container clearfix">

        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">

            <h4 class="title"></h4>

            <div id="message"></div>


                <div id="prodctalbum">
                    <a class="group1" href="{{asset('images/certificates/1595479420.jpg')}}"> 
                        <img src="{{asset('images/certificates/1595479420.jpg')}}" height="150px" width="250px" style=" border: 1px solid" rel="#mies1"></a>
                    <br><b>OEKO TEX CERTIFICATE</b>
                </div>

                <div id="prodctalbum">
                    <a class="group1" href="{{asset('images/certificates/1405316987.jpg')}}"> 
                        <img src="{{asset('images/certificates/1405316987.jpg')}}" height="150px" width="250px" style=" border: 1px solid" rel="#mies1"></a>
                    <br><b>BKMEA</b>
                </div>

            <div class="clearfix"></div>

            <div class="divider"></div>
        </div><!-- end content -->

    </div><!-- end container -->

</section><!-- end section -->

@endsection

<!-- 
 -->