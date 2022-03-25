@extends('layouts.app')

@section('content')
    @include('layouts.header')
    {{--    @include('layouts.navigator', ['items' => array(['label' =>''])])--}}

    <div class="section_right">

{{--        <div class="pathway threeitems">--}}
{{--            <a href="#" title="" class="linkicon i_up"><span>Menu 1</span></a>--}}
{{--            <a href="#" title="" class="linkicon i_down"><span>Menu 2</span></a>--}}
{{--            <a href="#" title="" class="linkicon i_paper last"><span>Menu 3</span></a>--}}
{{--        </div>--}}

        <div class="infos">
            <h3>Name<span class="small">Information</span></h3>
        </div>
        <div class="clearfix">
            <div class="floatright">
                <a href="<?php echo URL::to('/customer/add') ?>" title="" class="btn">Add</a>
            </div>
        </div>
        <div class="maincontent">
            <ul class="listinfos clearfix">
                <?php foreach($data as $row): ?>
                <li>
                    <a href="#" title="" class=""><?php echo $row['id'] ?? ''; ?></a>
                    <span class="time"> <?php echo $row['cust_name']?? '' ?></span>
                    <span class="tag"><?php echo $row['cust_age']?></span>
                    <span class="tag"><?php echo $row['cust_brithday']?></span>
                    <span class="tag"><?php echo $row['cust_address']?></span>
                    <span class="tag"><?php echo $row['cust_phone']?></span>
                    <a href="#" title="" class=""></a>
                    <div class="clearfix">
                        <div class="floatright">
                            <div>
                                <a href="<?php echo URL::to('/customer/edit/'.$row['id'])?>" title="" class="btn">Edit</a>

                                <a href="<?php echo URL::to('/customer/delete/'.$row['id'])?>" title="" class="btn">Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            {{--            <div class="infos clearfix">--}}
            {{--                <input type="text" name="" value="" placeholder="Name…">--}}
            {{--            </div>--}}
            {{--            <textarea placeholder="Content"></textarea>--}}
        </div>

    </div>
    @include('layouts.footer')
@endsection
