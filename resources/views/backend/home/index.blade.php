@extends('layouts.app')

@section('content')
    @include('layouts.header')
@include('layouts.navigator', ['items' => array(['label' =>''])])

    <div class="section_right">
      <div class="pathway threeitems">
         <a href="#" title="" class="linkicon i_up"><span>Menu 1</span></a>
          <a href="#" title="" class="linkicon i_down"><span>Menu 2</span></a>
          <a href="#" title="" class="linkicon i_paper last"><span>Menu 3</span></a>
       </div>

        <div class="infos">
            <h3>Name<span class="small">Information</span></h3>
        </div>
        <div class="maincontent">
            <ul class="listinfos clearfix">
                <li><span class="time">2021/03/01</span><span class="tag">Training</span><a href="#" title="" class="">Training</a></li>
                
            </ul>
            <div class="clearfix">
                <div class="floatright">
                    <a href="#" title="" class="btn">New</a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
