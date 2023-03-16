<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{$slug}}</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('')}}">Home</a></li>
                <li class="active">{{$slug}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="content-area">
    <div class="container">
        <div class="main-title">
            <h1>Our Gallery</h1>
        </div>
        <div class="row">
            @foreach(\App\Http\Controllers\Web\PageController::getPositionData('positon_top_center',$cat->id,$cat->sub_id) as $key=>$value)
            <div class="col-md-12 col-sm-12 col-xs-12">
              @if($value->status==1)
              <h3 class="title-bg" style="background: #085d7b">{{$value->name}}</h3>
              @endif
              <div class="today-match-teams text-center">
                {!! $value->des_p !!}
              </div>
            </div>
          @endforeach
          @foreach(\App\Http\Controllers\Web\PageController::getPositionData('positon_center',$cat->id,$cat->sub_id) as $key=>$value)
            <div class="col-md-12 col-sm-12 col-xs-12">
              @if($value->status==1)
              <h3 class="title-bg" style="background: #085d7b">{{$value->name}}</h3>
              @endif
              <div class="today-match-teams text-center">
                {!! $value->des_p !!}
              </div>
            </div>
          @endforeach
            <div class="filtr-container row">
                <?php $dataImage = \App\Http\Controllers\Web\PageController::getMatchGalleryDataAll();?>
                @foreach($dataImage as $key=>$value)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  filtr-item" data-category="3">
                    <figure class="portofolio-thumb">
                        <a class="imageGallery_{{$value->id}}" onclick="imageGallery('{{$value->title}}','{{$value->id}}')"><img src="{{url('')}}/{{$value->image}}" alt="img-6" class="img-responsive"></a>
                        <figcaption>
                            <div class="figure-content">
                                <h3 class="title">{{$value->title}}</h3>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="image_des_{{$value->id}} hide">{!! $value->des !!}</div>
                </div>
                @endforeach
            </div>
             @foreach(\App\Http\Controllers\Web\PageController::getPositionData('position_buttom_center',$cat->id,$cat->sub_id) as $key=>$value)
            <div class="col-md-12 col-sm-12 col-xs-12">
              @if($value->status==1)
              <h3 class="title-bg" style="background: #085d7b">{{$value->name}}</h3>
              @endif
              <div class="today-match-teams text-center">
                {!! $value->des_p !!}
              </div>
            </div>
          @endforeach
        </div>
        <div class="text-center">
            <nav aria-label="Page navigation">
                {{ $dataImage->links() }}
            </nav>
        </div>
    </div>
</div>
<div id="myModalImage" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="margin-top: 5%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title title_image">Title</h4>
      </div>
      <div class="modal-body">
        <p class="body_image_gallery">Body</p>
        <div class="image_des_Modal" style="padding: 20px;"> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@section('script')
<script type="text/javascript">
    function imageGallery(title,id){        
        $('#myModalImage').modal();
        $('.title_image').html('');
        $('.body_image_gallery').html('');
        $('.image_des_Modal').html('');
        $('.title_image').html(title);
        $('.body_image_gallery').html($('.imageGallery_'+id).html());
        $('.image_des_Modal').html($('.image_des_'+id).html());
    }
</script>
@endsection