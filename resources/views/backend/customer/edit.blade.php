@extends('layouts.app')

@section('content')
    @include('layouts.header')
    {{--    @include('layouts.navigator', ['items' => array(['label' =>''])])--}}


    <div class="section_right">
        <form method="get" action="<?php echo URL::to('/customer/save/'); ?>">
            <div class="tips"><span class="headtip">😎<br><small></small></span><span>EditPage</span></div>
            <div class="maincontent">
                <ul class="tabs clearfix">
                    <li><a href="#" title="" class="active">1</a></li>
                    <li><a href="#" title="">2</a></li>
                </ul>
                <div class="form-field clearfix">
                    <label>Name</label>
                    <div class="form-value">
                        <input type="text"  name="cust_name" class="" value="<?php echo $customer['cust_name']?>">
                        <input type="hidden"  name="id" class="" value="<?php echo $customer['id']?>">
                    </div>
                </div>
                <div class="form-field clearfix">
                    <label>AGE</label>
                    <div class="form-value"><input type="text" name="cust_age" class="" value="<?php echo $customer['cust_age']?>"></div>
                </div>
                <div class="form-field clearfix">
                    <label>Brithday</label>
                    <div class="form-value"><input type="number" name="cust_brithday" class="" value="<?php echo $customer['cust_brithday']?>"></div>
                </div>
                <div class="form-field clearfix">
                    <label>Address</label>
                    <div class="form-value"><input type="text" name="cust_address" class="" value="<?php echo $customer['cust_address']?>"></div>
                </div>
                <div class="form-field clearfix">
                    <label>PhoneNumber</label>
                    <div class="form-value"><input type="text" name="cust_phone" class="" value="<?php echo $customer['cust_phone']?>"></div>
                </div>
                <div class="infos bottom clearfix">
                    <button class="floatright btn">submit</button>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.footer')
@endsection
