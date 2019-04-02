@extends("layouts.default")
@section('content')
@if(false)
<article class="message is-white">
    <div class="message-body shadow-1 boom">
        <div class="media">
            <div class="media-left">
                <i class="fa fa-gift media-object" style="font-size: 55px; width: 55px; color: #333;"></i>
            </div>
            <div class="media-body" style="line-height: 200%; text-align: center;">
                <div style="font-size: 15px">
                    Roo 官方网站源码 <a href="https://github.com/junicorn/roo" target="_blank">Roo</a> 正式上线！
                </div>
                <div>
                    <code style="padding: 4px 10px; background: #e9eaed; border-radius: 2px;">git clone
                        git@github.com:junicorn/roo.git</code>
                </div>
            </div>
        </div>
    </div>
</article>
@endif
@if(false)
<div class="columns is-mobile node-icon">
    <div class="column">
        <div class="notification shadow-1 is-link has-text-centered">
            <div class="item-icon">
                <a href="${siteUrl('/topics')}" title="聊天室"><i class="fa fa-comments-o"></i></a>
            </div>
            <div>
                <a href="${siteUrl('/topics')}" title="聊天室">聊天室</a>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="notification shadow-1 is-success has-text-centered">
            <div class="item-icon">
                <a href="${siteUrl('/wiki')}" title="摸鱼图"><i class="fa fa-support"></i></a>
            </div>
            <div>
                <a href="${siteUrl('/wiki')}" title="摸鱼图">摸鱼图</a>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="notification shadow-1 is-warning has-text-centered">
            <div class="item-icon">
                <a href="${siteUrl('/go/jobs')}" title="冲啊"><i class="fa fa-users"></i></a>
            </div>
            <div>
                <a href="${siteUrl('/go/jobs')}" title="冲啊">冲啊</a>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="notification shadow-1 is-danger has-text-centered">
            <div class="item-icon">
                <a href="${siteUrl('/popular')}" title="下班了"><i class="fa fa-diamond"></i></a>
            </div>
            <div>
                <a href="${siteUrl('/popular')}" title="下班了">下班了</a>
            </div>
        </div>
    </div>
</div>
@endif
<div class="columns">
    <div class="column home-topic">
        <div class="message is-light">
            <div class="message-header">
                <span class="has-text-left"><span class="icon is-small"><i
                                class="fa fa-first-order"></i></span> 首页主题</span>
                <span class="has-text-right">
                    </span>
            </div>
            <div class="message-body has-text-centered">
               @include("include.posts_data")
            </div>
            <div class="message-header">
                <a class="button is-dark">更多主题...</a>
            </div>
        </div>
    </div>
    @include("partials.sidebar")
</div>


<!--节点导航-->
<div class="message is-light">
    <div class="message-header">
        <span class="has-text-left"><span class="icon is-small"><i class="fa fa-cubes"></i></span> 节点导航</span>
    </div>
    <div class="message-body has-text-centered">
        <div class="row node-list">
            <div class="node media">
                <label class="media-left">摸鱼</label>
                <span class="nodes media-body">
                    <span class="name">
                        <a title="摸鱼图" href="${siteUrl('/go/' + node.slug)}">摸鱼图</a>
                    </span>
                </span>
                <span class="nodes media-body">
                    <span class="name">
                        <a title="段子" href="${siteUrl('/go/' + node.slug)}">段子</a>
                    </span>
                </span>
            </div>
            <div class="node media">
                <label class="media-left">我绿了</label>
                <span class="nodes media-body">
                    <span class="name">
                        <a title="我绿了" href="${siteUrl('/go/' + node.slug)}">我绿了</a>
                    </span>
                </span>
                <span class="nodes media-body">
                    <span class="name">
                        <a title="我被绿了" href="${siteUrl('/go/' + node.slug)}">我被绿了</a>
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>

<!--热门城市-->
<div class="message is-light">
    <div class="message-header">
        <span class="has-text-left"><span class="icon is-small"><i class="fa fa-flag"></i></span> 热门城市</span>
    </div>

    <div class="message-body has-text-centered">
        <a class="tag" title="上海" href="${siteUrl('/go/' + node.slug)}">上海</a>
        <a class="tag" title="北京" href="${siteUrl('/go/' + node.slug)}">北京</a>
        <a class="tag" title="深圳" href="${siteUrl('/go/' + node.slug)}">深圳</a>
        <a class="tag" title="杭州" href="${siteUrl('/go/' + node.slug)}">杭州</a>
    </div>
</div>
@endsection
