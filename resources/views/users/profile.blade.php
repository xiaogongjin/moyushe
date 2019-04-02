@extends("layouts.default")
@section('content')
<selection class="section">
    <div class="columns">
        <div class="column is-three-quarters">
            <p class="bd-notification is-info">
                <code class="html">is-one-quarter</code>
            </p>
        </div>
        <div class="column">
            <p class="has-text-success">Auto</p>
        </div>
    </div>
</selection>

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
@endsection