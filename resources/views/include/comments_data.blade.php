@if($comments)
<div class="message is-light">
    <div class="message-header">
        <div class="has-text-left">
            <div class="topic-head-meta">
                {{$comments->total()}} 回复 | 最后回复 2017-08-02 16:38:19
            </div>
        </div>
    </div>
    <div class="content">
        @foreach($comments as $comment)
        <article id="reply-${comment.coid}" class="media" style="padding: 8px 10px; margin-top:0;">
            <figure class="media-left" style="padding: 5px 0;">
                <p class="image is-48x48">
                    <a href="${siteUrl('/@' + comment.author)}">
                        <img class="avatar-48" src="https://cdn.v2ex.com/avatar/ca0c/8972/288560_large.png?m=1518510592">
                    </a>
                </p>
            </figure>
            <div class="media-content">
                <div class="topic-head-meta">
                    <a href="${siteUrl('/@' + comment.author)}"><b>{{$comment->user->name}}</b></a> ·
                    回复于 {{$comment->created_at}} · <a href="#reply-${comment.coid}">{{$comment->floor}}楼</a>
                </div>
                <div style="margin-top: 10px;">
                    {{$comment->content}}
                </div>
            </div>
            <div class="media-right" style="line-height: 55px;">
                <!-- TODO: 回复该评论 -->
            </div>
        </article>
        @endforeach
    </div>
</div>
@endif