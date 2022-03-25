@extends('layouts.app')

@section('content')
    @include('layouts.header')
    {{--    @include('layouts.navigator', ['items' => array(['label' =>''])])--}}


    <div class="section_right">
        <form method="get" action="<?php echo URL::to('/user/save/'); ?>">
            <div class="tips"><span class="headtip">😎<br><small>V</small></span><span>V</span></div>
            <div class="maincontent">
                <ul class="tabs clearfix">
                    <li><a href="#" title="" class="active">1</a></li>
                    <li><a href="#" title="">2</a></li>
                </ul>
                <div class="form-field clearfix">
                    <label>FullName</label>
                    <div class="form-value">
                        <input type="text"  name="name" class="" value="<?php echo $user['name']?>">
                        <input type="hidden"  name="id" class="" value="<?php echo $user['id']?>">
                    </div>
                </div>
                <div class="form-field clearfix">
                    <label>Email</label>
                    <div class="form-value"><input type="email" name="email" class="" value="<?php echo $user['email']?>"></div>
                </div>
                <div class="form-field clearfix">
                    <label>Password</label>
                    <div class="form-value"><input type="password" name="password" class="" value="<?php echo $user['password']?>"></div>
                </div>
                {{--                <div class="form-field clearfix">--}}
                {{--                    <label>2</label>--}}
                {{--                    <div class="form-value">--}}
                {{--                        <div class="half"><small>2</small><br>--}}
                {{--                            <input type="text" name="" class="" value=""></div>--}}
                {{--                        <div class="half last"><small>2</small><br>--}}
                {{--                            <select name="">--}}
                {{--                                <option value=""></option>--}}
                {{--                            </select></div>--}}
                {{--                        <div class="full"><small>22</small><br>--}}
                {{--                            <input type="text" name="" class="" value=""></div>--}}
                {{--                        <div class="full"><small>222</small><br>--}}
                {{--                            <input type="text" name="" class="" value=""></div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}


                <div class="infos bottom clearfix">
                    <button class="floatright btn">submit</button>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.footer')
@endsection
