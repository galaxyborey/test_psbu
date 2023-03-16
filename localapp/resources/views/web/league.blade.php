@extends('layouts.app')

@section('content')
<div class="rs-breadcrumbs sec-color">
  <img src="{{url('storage/images')}}/breadcrumbs/blog.jpg" alt="Breadcrubs" />
  <div class="breadcrumbs-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="page-title" style="text-transform: capitalize;">{{$slug}}</h1>
					<ul>
						<li>
							<a class="active" href="index.html">Home</a>
						</li>
						<li style="text-transform: capitalize;">{{$slug}}</li>
					</ul>
				</div>
			</div>
		</div>
  </div>
</div>
<div class="champion-section-area sec-spacer">
	<div class="container">
		@foreach(\App\Http\Controllers\Web\PageController::getPositionData('positon_top_center',$cat->id,$cat->sub_id) as $key=>$value)
		<div class="col-md-12 col-sm-12 col-xs-12">
			@if($value->status==1)
			<h3 class="title-bg">{{$value->name}}</h3>
			@endif
			<div class="today-match-teams text-center">
				{!! $value->des_p !!}
			</div>
		</div>
		@endforeach		
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<div class="row">
					<div class="col-sm-12 col-xs-12 match-view-tite">
						<h3 class="title-bg">
							{{\App\Http\Controllers\Web\PageController::getLeagueDataActive()->league_name}}
						</h3>
					</div>
				</div>
				<div class="match-list mmb-45">
					<div class="overly-bg"></div>
						<table class="match-table">
							<tbody>
								<tr>
									<td>{{trans('lang.logo')}}</td>
									<td >{{trans('lang.club')}}</td>
									<td class="big-font">P</td>
									<td>W</td>
									<td class="big-font">D</td>
									<td>L</td>
									<td>F</td>
									<td>A</td>
									<td>GD</td>
									<td>PTS</td>
								</tr>
									@foreach(\App\Http\Controllers\Web\PageController::getDetailLeagueData(\App\Http\Controllers\Web\PageController::getLeagueDataActive()->id) as $key=>$value)
									<tr>
										 <td> <img src="{{url('')}}{{$value->logo}}" alt="" width="50px" height="50px" > </td>
										 <td>{{$value->club_name}}</td>
										 <td>{{$value->p}}</td>
										 <td>{{$value->w}}</td>
										 <td>{{$value->d}}</td>
										<td>{{$value->l}}</td>
										 <td>{{$value->f}}</td>
										 <td>{{$value->a}}</td>
										 <td>{{$value->gd}}</td>
										<td>{{$value->pts}}</td>
									</tr>
								@endforeach
							</tbody>
					</table>
				</div>
				<div class="row" >
	              <div class="col-sm-12 col-xs-12 match-view-tite">
	                <h3 class="title-bg" style="margin-top: 10px; margin-bottom: -5px;"> {{trans('lang.result')}}</h3>
	              </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-12">
	                    <div class="match-list">
	                        <div class="overly-bg"></div>
	                        <table class="match-table">
	                            <tbody>
	                              @if(\App\Http\Controllers\Web\PageController::getLeagueDataActive())
	                                @foreach(\App\Http\Controllers\Web\PageController::getMatchResultData(\App\Http\Controllers\Web\PageController::getLeagueDataActive()->id) as $key=>$value)
	                                <tr>
	                                  <td>
	                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo{{$value->id}}" aria-expanded="false">
	                                      <div class="item">
	                                          <div class="col-md-4 col-sm-4 col-xs-12 first">
	                                              <img src="{{asset('')}}{{$value->image_first}}" alt="" width="50px" height="50px">
	                                              <p style="margin:0 !important;">{{$value->team_first}}</p>
	                                          </div>

	                                          <div class="col-md-4 col-sm-4 col-xs-12">
	                                              <p style="margin:0 !important;" class="date">{{date('d / F / Y',strtotime($value->date_match))}} / {{$value->time_match}}</p>
	                                              <span class="vs">VS</span>
	                                              <p style="margin:0 !important;">{{$value->play_location}}</p>
	                                          </div>
	                                          <div class="col-md-4 col-sm-4 col-xs-12 last">
	                                              <img src="{{asset('')}}{{$value->image_second}}" alt="" width="50px" height="50px">
	                                              <p style="margin:0 !important;">{{$value->team_second}}</p>
	                                          </div>
	                                      </div>
	                                    </a>
	                                    <div id="collapseTwo{{$value->id}}" class="panel-collapse collapse" >
	                                      <div class="panel-body">
	                                        @if(count(\App\Http\Controllers\Web\PageController::getScoreData($value->id))>0)
	                                        <table style="border-top:1px solid">
	                                          <tbody>
	                                            @foreach(\App\Http\Controllers\Web\PageController::getScoreData($value->id) as $score)
	                                            <tr>
	                                              <td>{{$score->s_minute}} `</td>
	                                              <td>{{$score->play_left}}</td>
	                                              <td> <img src="{{url('photos/shares/football_icon.png')}}" alt=""> </td>
	                                              <td> {{$score->score}} </td>
	                                              <td> <img src="{{url('photos/shares/football_icon.png')}}" alt=""></td>
	                                              <td> {{$score->play_right}} </td>
	                                            </tr>
	                                            @endforeach
	                                          </tbody>
	                                        </table>
	                                        @endif
	                                      </div>
	                                    </div>
	                                  </td>
	                                </tr>
	                                @endforeach
	                              @endif
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
			</div>
			<div class="col-md-3 col-sm-12">
                <div class="sidebar-area">
                    <div class="cate-box" style="margin-top: 0;">
                        <span class="title-bg" style="margin-bottom: 10px;">{{trans('lang.category')}}</span>
                        <ul>
                        	@foreach(\App\Http\Controllers\Web\PageController::getLeagueDataAll() as $rows)
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{url('/sport/league-table/')}}/{{$rows->slug}}"> {{$rows->league_name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>                    
                    <div class="recent-post-area">
                    <span class="title-bg"> {{trans('lang.recent_post')}}</span>
		            <ul class="news-post" style="margin-top: 5px;">
		              @foreach(\App\Http\Controllers\Web\PageController::getNewsRelated() as $rows)
		                <li>
		                  <div class="row">
		                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
		                          <div class="item-post">
		                              <div class="row">
		                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
		                                      <img src="{{url('/')}}{{$rows->file}}" alt="" title="News image">
		                                  </div>
		                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
		                                      <h4><a href="{{url('/sport/detail')}}/{{$rows->slug}}"> {{$rows->title}}</a></h4>
		                                      <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('d M, Y',strtotime($rows->created_at))}}</span>
		                                  </div>
		                              </div>
		                          </div>
		                      </div>
		                  </div>
		                </li> 
		              @endforeach 
		              </ul>
                    </div>
				</div>
            </div>
		</div>
		@foreach(\App\Http\Controllers\Web\PageController::getPositionData('position_buttom_center',$cat->id,$cat->sub_id) as $key=>$value)
		
		<div class="col-md-12 col-sm-12 col-xs-12">
			@if($value->status==1)
			<h3 class="title-bg">{{$value->name}}</h3>
			@endif
			<div class="today-match-teams text-center">
				{!! $value->des_p !!}
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
