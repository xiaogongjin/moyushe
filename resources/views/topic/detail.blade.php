@extends("layouts.default")
@section('content')
<link rel="stylesheet" href="/static/plugins/mditor/css/mditor.min.css"/>
<div class="columns">
    <div class="column">
        <div class="message is-light">
            <div class="message-header">
                <div class="has-text-left">
                    <div style="padding-bottom: 10px;">
                        <a href="${siteUrl('/go/' + topic.nodeSlug)}" title="${topic.nodeTitle}">分类名</a>
                        /
                        <span style="color: #222527;">{{$posts->title}}</span>
                    </div>
                    <div class="topic-head-meta">
                        <a href="${siteUrl('/@' + topic.username)}"
                           title="${topic.username}"><b>{{$posts->user->name}}</b></a> · 发布于 <abbr>8 天前</abbr>
                        ·
                        @if($posts->lastCommentUser)
                        最后由 <a href="${siteUrl('/@' + topic.replyUser)}" title="${topic.replyUser}"><b>{{$posts->lastCommentUser->name}}</b></a>
                        回复于 <abbr>1
                            天前</abbr> ·
                        @endif
                        <span>{{$clicks}}</span> 次阅读
                    </div>
                </div>
                <div class="has-text-right">
                    <p class="image is-48x48">
                        <a href="${siteUrl('/@' + topic.username)}">
                            <img class="avatar-48" src="https://cdn.v2ex.com/avatar/ca0c/8972/288560_large.png?m=1518510592">
                        </a>
                    </p>
                </div>

            </div>
            <div class="content topic-content">
                @markdown($posts->content)
            </div>
            <div class="message-header topic-footer">
                <div class="has-text-left">
                    <span>{{$posts->up_times}} 个赞</span>&nbsp;·&nbsp;
                    <span>收藏</span>&nbsp;·&nbsp;
                    @include('partials.share')
                </div>
            </div>
        </div>

       @include("include.comments_data")

        @if(auth()->check())
        <div class="message is-light">
            <form id="comment-form">
                <div class="bd-snippet-preview" style="padding: 10px;">
                    <input type="hidden" name="owner" value="${login_user.username}"/>
                    <input type="hidden" name="tid" value="${topic.tid}"/>
                    <input type="hidden" name="type" value="comment"/>
                    <input type="hidden" name="csrf_token" value="${csrf_token}"/>

                    <div class="field">
                        <div class="control">
                            <textarea id="comment-editor" name="content" class="textarea" placeholder="请输入评论" required></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button id="comment" type="button" class="button is-link">发布评论</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @else
        <div class="message is-light">
            <div class="message-header">发表评论</div>
            <div class="message-body has-text-centered" style="line-height: 30px;">
                需要 <a class="button is-success is-small" data-no-instant href="${siteUrl('signin')}">登录</a> 后方可回复,
                如果你还没有账号请点击这里 <a class="button is-danger is-small" data-no-instant href="${siteUrl('signup')}">注册</a>
            </div>
        </div>
        @endif
    </div>
    @include('partials.sidebar')
</div>
@endsection

<script type="text/javascript" src="/static/plugins/mditor/js/mditor.min.js"></script>
<script type="text/javascript" src="/static/js/topic.js"></script>
