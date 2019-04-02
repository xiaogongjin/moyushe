@extends("layouts.default")
@section('content')
<div class="columns">
    <div class="column home-topic">
        <div class="message is-light">
            <div class="message-header">
                <span class="has-text-left">节点下的主题主题</span>
            </div>
            <div class="message-body has-text-centered">
                @include("include.posts_data")
            </div>
            <div class="message-header">
                <a class="button is-small is-dark">更多主题...</a>
            </div>
        </div>
    </div>

    @include('partials.sidebar')
</div>


<!--节点导航-->
<div class="message is-light">
    <div class="message-header">
        节点导航
    </div>
    <div class="message-body has-text-centered">
        <div class="row node-list">
            <div class="node media">
                <label class="media-left">Hifone</label>
                <span class="nodes media-body">
                            <span class="name"><a title="站务与公告" href="http://hifone.com/go/announcement">站务与公告</a></span>
                            <span class="name"><a title="反馈" href="http://hifone.com/go/feedback">反馈</a></span>
                            <span class="name"><a title="使用指南" href="http://hifone.com/go/guide">使用指南</a></span>
                      </span>
            </div>
            <div class="node media">
                <label class="media-left">Mobile</label>
                <span class="nodes media-body">
                            <span class="name"><a title="iPhone" href="http://hifone.com/go/iphone">iPhone</a></span>
                            <span class="name"><a title="Android" href="http://hifone.com/go/android">Android</a></span>
                      </span>
            </div>
            <div class="node media">
                <label class="media-left">Lifestyle</label>
                <span class="nodes media-body">
                            <span class="name"><a title="Discovery" href="http://hifone.com/go/discovery">Discovery</a></span>
                            <span class="name"><a title="意欲蔓延" href="http://hifone.com/go/appetency">意欲蔓延</a></span>
                      </span>
            </div>
            <div class="node media">
                <label class="media-left">Technology</label>
                <span class="nodes media-body">
                            <span class="name"><a title="Geek Talks" href="http://hifone.com/go/geek">Geek Talks</a></span>
                            <span class="name"><a title="程序猿" href="http://hifone.com/go/codefarmer">程序猿</a></span>
                            <span class="name"><a title="分享与创造" href="http://hifone.com/go/share">分享与创造</a></span>
                      </span>
            </div>
        </div>
    </div>
</div>

<!--热门城市-->
<div class="message is-light">
    <div class="message-header">热门城市</div>
    <div class="message-body has-text-centered">
        <span class="tag">上海</span>
        <span class="tag">北京</span>
        <span class="tag">广州</span>
        <span class="tag">深圳</span>
        <span class="tag">杭州</span>
        <span class="tag">重庆</span>
        <span class="tag">成都</span>
        <span class="tag">江西</span>
        <span class="tag">西安</span>
        <span class="tag">河北</span>
        <span class="tag">湖南</span>
        <span class="tag">武汉</span>
        <span class="tag">南京</span>
        <span class="tag">大连</span>
    </div>
</div>
@endsection