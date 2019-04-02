@foreach($posts as $item)
    <article class="media">
        <figure class="media-left">
            <p class="image is-48x48">
                <a href="${siteUrl('/@' + topic.username)}" title="${topic.username}">
                    <img class="avatar-48" src="https://cdn.v2ex.com/avatar/7891/4952/200419_large.png?m=1499852079">
                </a>
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p class="topic-title">
                    <a href="${siteUrl('/topic/' + topic.tid)}" title="${topic.title}">{{$item->title}}</a>
                </p>
                <p class="topic-meta">
                    <a class="topic-meta" href="${siteUrl('/node/' + topic.nodeSlug)}" title="${topic.nodeTitle}">{{$item->content}}</a>
                    <span> • </span>
                    <a class="topic-meta" href="${siteUrl('/@' + topic.username)}" title="${topic.username}">{{$item->user->name}}</a>
                    <span> • </span>
                    <small>发布于12分钟前</small>
                    <span> • </span>
                    @if($item->lastCommentUser)
                        <small>最后回复来自</small>
                        <a class="topic-meta" href="${siteUrl('/@' + topic.replyUser)}" title="${topic.replyUser}">{{$item->lastCommentUser->name}}</a>
                    @else
                        <small>暂无回复</small>
                    @endif
                </p>
            </div>
        </div>
        <div class="media-right" style="line-height: 55px;">
            <a href="${siteUrl('/topic/' + topic.tid + '#reply-' + topic.replyId)}" title="查看评论">
                <span class="tag is-rounded" style="background-color: #aab0c6">{{$item->comment_times}}</span>
            </a>
        </div>
    </article>
@endforeach