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
                <a href="<?php echo URL::to('/user/add')?>" title="" class="btn">Add</a>
            </div>
        </div>
        <div class="maincontent">
            <ul class="listinfos clearfix">
                <?php foreach($data as $row): ?>
                <li>
                    <a href="#" title="" class=""><?php echo $row['id'] ?? ''; ?></a>
                    <span class="time"><?php echo $row['name'] ?? ''; ?></span>
                    <span class="tag"><?php echo $row['email'] ?? ''; ?></span>
                    <a href="#" title="" class=""><?php echo $row['password'] ?? ''; ?></a>
                    <div class="clearfix">
                        <div class="floatright">
                            <div>
                                <a href="<?php echo URL::to('/user/edit/'.$row['id'])?>" title="" class="btn">Edit</a>

                                <a href="<?php echo URL::to('/user/delete/'.$row['id'])?>" title="" class="btn">Delete</a>
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

        <span>{!! $data -> render() !!}</span>
    </div>
    @include('layouts.footer')
@endsection
