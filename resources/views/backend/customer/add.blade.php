@extends('layouts.app')

@section('content')
    @include('layouts.header')
    {{--    @include('layouts.navigator', ['items' => array(['label' =>''])])--}}

    <div class="section_right">
        <form method="get" action="<?php echo URL::to('/customer/save/'); ?>">
       
            <div class="tips"><span class="headtip">😎<br><small>V</small></span><span>V</span></div>
            <div class="maincontent">
                <ul class="tabs clearfix">
                    <li><a href="#" title="" class="active">1</a></li>
                    <li><a href="#" title="">2</a></li>
                </ul>
                </div>
                <div class="form-field clearfix">
                    <label>Age</label>
                    <div class="form-value"><input type="text" name="cust_age" class="" value=""></div>
                </div>
                <div class="form-field clearfix">
                    <label>Birthday</label>
                    <div class="form-value"><input type="date" name="cust_birthday" class="" value=""></div>
                </div>
                <div class="form-field clearfix">
                    <label>Địa chỉ</label>
                    <div class="form-value"><input type="text" name="cust_address" class="" value=""></div>
                </div>
                <div class="form-field clearfix">
                    <label>SĐT</label>
                    <div class="form-value"><input type="number" name="cust_phone" class="" value=""></div>
                </div>
                <div class="infos bottom clearfix">
                    <button class="floatright btn">submit</button>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.footer')
@endsection
