@extends("layouts.default")
@section('content')
    <div class="columns">
        <div class="column home-topic">
            <div class="message is-light">
                <div class="message-header">
                    <span class="has-text-left"><span class="icon is-small"><i class="fa fa-fire"></i></span> 最新主题</span>
                </div>
                <div class="message-body has-text-centered">
                   @include('include.posts_data')
                </div>
                <div class="message-header">
                    <nav class="pagination">
                        <a class="pagination-previous" href="${siteUrl('/topics/' + topicPage.prevPage)}">上一页</a>
                        <a class="pagination-next" href="${siteUrl('/topics/' + topicPage.nextPage)}">下一页</a>
                    </nav>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>

@endsection