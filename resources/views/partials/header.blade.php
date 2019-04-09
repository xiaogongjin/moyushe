<div class="header">
    <nav class="navbar container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{route("index")}}">
                <img src="/static/images/logo.png" alt="摸鱼社" width="48" height="48">
                <span style="color: #9829f0"> 摸鱼社</span>
            </a>

            <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
              <span class="icon" style="color: #333;">
                <i class="fa fa-github"></i>
              </span>
            </a>

            <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
              <span class="icon" style="color: #55acee;">
                <i class="fa fa-twitter"></i>
              </span>
            </a>

            <div class="navbar-burger burger" data-target="navMenuExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenuExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item " href="{{route("index")}}">
                    <span class="emoji">🦌&nbsp;</span>
                    首页
                </a>
                <a class="navbar-item " href="{{route("posts_index",['category'=>1])}}">
                    <span class="emoji">🤛&nbsp;</span>
                    摸鱼图
                </a>
                <a class="navbar-item " href="{{route("posts_index",['category'=>2])}}">
                    <span class="emoji">💁&nbsp;</span>
                    大家都在摸
                </a>
                <a class="navbar-item " href="{{route("posts_index",['category'=>3])}}">
                    <span class="emoji">🎨&nbsp;</span>
                    LIVE
                </a>
                <a class="navbar-item " href="{{route("posts_index",['category'=>4])}}">
                    <span class="emoji">❤️&nbsp;</span>
                    酷站
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item search-bar">
                    <form id="search-form">
                        <div class="control has-icons-left">
                            <input class="input" placeholder="搜索本站内容">
                            <span class="icon is-small is-left">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </form>
                </div>
                @if(!auth()->check())
                <a class="navbar-item is-hidden-desktop-only" href="{{siteUrl('/register')}}">
                    注册
                </a>
                <a class="navbar-item is-hidden-desktop-only" href="{{siteUrl('/login')}}">
                    登录
                </a>
                @else
                <a class="navbar-item is-hidden-desktop-only" href="${siteUrl('/notice')}">
                    <i class="fa fa-bell"></i>
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link is-active" id="uname" href="javascript:void(0);">
                        {{auth()->user()->name}}
                    </a>
                    <div class="navbar-dropdown ">
                        <a class="navbar-item " href="${siteUrl('/@' + login_user.username)}">
                            我的主页
                        </a>
                        <hr class="navbar-divider"/>
                        <a class="navbar-item" href="${siteUrl('/setting')}">
                            个人设置
                        </a>
                        <a class="navbar-item " href="${siteUrl('/favorites')}">
                            我的收藏
                        </a>
                        <hr class="navbar-divider"/>
                        <a data-no-instant class="navbar-item is-hidden-desktop-only" href="{{siteUrl('/logout')}}">
                            注销
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </nav>
</div>
