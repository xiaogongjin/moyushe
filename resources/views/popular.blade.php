@extends("layouts.default")
@section('content')
<div class="columns">
    <div class="column home-topic">
        <div class="message is-light">
            <div class="message-header">
                <span class="has-text-left"><span class="icon is-small"><i
                                class="fa fa-first-order"></i></span> 精华主题</span>
                <span class="has-text-right">
                    </span>
            </div>
            <div class="message-body has-text-centered">
                @foreach($posts as $item)
                <div class="columns is-mobile">
                    <article class="column media">
                        <figure class="media-left">
                            <p class="image is-48x48">
                                <a href="${siteUrl('u/' + topic.username)}">
                                    <img class="avatar-48" src="https://cdn.v2ex.com/avatar/7891/4952/200419_large.png?m=1499852079">
                                </a>
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p class="topic-title">
                                    <a href="${siteUrl('topic/' + topic.tid)}">{{$item->title}}</a>
                                </p>
                                <p class="topic-meta">
                                    <a class="topic-meta"
                                       href="${siteUrl('node/' + topic.nodeSlug)}">{{$item->content}}</a>
                                    <span> • </span>
                                    <a class="topic-meta" href="${siteUrl('u/' + topic.username)}">{{$item->user->name}}</a>
                                    <span> • </span>
                                    <small>发布于12分钟前</small>
                                    <span> • </span>
                                    @if($item->lastCommentUser)
                                    <small>最后回复来自</small>
                                    <a class="topic-meta" href="${siteUrl('u/' + topic.replyUser)}">{{$item->lastCommentUser->name}}</a>
                                    @else
                                    <small>暂无回复</small>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="media-right" style="line-height: 55px;">
                            <a href="${siteUrl('topic/' + topic.tid + '#reply-' + topic.replyId)}">
                                <span class="tag is-rounded" style="background-color: #aab0c6">{{$item->comment_times}}</span>
                            </a>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="message-header">
                <div class="is-pulled-right">
                    <a class="button is-dark">更多主题...</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection