

@foreach($user->results as $comment)
    <li class="listcomment {{$comment->id}}" id="{{$comment->id}}"> <div>
        <div class="fbimgContainer span1">
            <img src="{{$comment->image}}" class="fbimg">
        </div>
        <div class="span6">
            <a href="{{$comment->facebooklink}}" class="fblink" target="_blank">{{$comment->name}}</a>
            (
            <span class="commentmeta">
                <?php 
                    $format = 'Y-m-d H:i:s';
                    $date = DateTime::createFromFormat($format, $comment->created_at);
                ?>
                {{$date->format('M d ,Y')}}
                {{$date->format(' H:i')}}
            </span>
            )
        </div>
        <div class="span6">
            <p>{{$comment->body}}</p>
        </div>
        </div>
        <div class="span7"><hr></div>
    </li>
@endforeach
