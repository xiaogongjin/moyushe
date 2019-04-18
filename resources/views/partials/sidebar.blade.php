<div class="column is-one-quarter">
    <div class="message is-light">
        @if(!auth()->check())
        <div class="message-header">Roo - 每日赠言</div>
        <div class="message-body">
            <h6 class="subtitle is-6">
                巧者劳而智者忧 无能者无所求
            </h6>
        </div>
        @else
        <div class="message-header">Roo 社区</div>
        <div class="message-body has-text-centered">
            <h6 class="subtitle is-6">
                <a class="button is-danger" href="{{route("posts_new")}}">
                    <span class="icon">
                      <i class="fa fa-pencil-square-o"></i>
                    </span>
                    <span>发布主题</span>
                </a>
            </h6>
        </div>
        @endif
    </div>
    @if(!auth()->check())
    <div class="message is-light">
        <div class="message-header">摸鱼社</div>
        <div class="message-body has-text-centered">
            <a class="button is-danger is-outlined" data-no-instant href="{{siteUrl('signup')}}">马上注册</a>
            <a class="button is-info is-outlined" data-no-instant href="{{siteUrl('login')}}">登录Roo</a>
        </div>
    </div>
    @endif
    @if(\Illuminate\Support\Facades\Request::route()->getName() == 'index')
        @include('include.im')
    @endif
    <div class="message is-light">
        <div class="message-header">友情链接</div>
        <div class="message-body has-text-centered">
            <a href="https://github.com/biezhi" title="轻量级JavaWeb框架 - Blade" target="_blank">
                <img width="180" src="/static/images/icon-blade.png" />
            </a>
            <hr/>
        </div>
    </div>


    <div class="message is-light">
        <div class="message-header">站点统计</div>
        <div class="message-body">
            <span>社区会员: 1 人</span><hr/>
            <span>主题数: 2 个</span><hr/>
            <span>回帖数: 2 条</span>
        </div>
    </div>

</div>