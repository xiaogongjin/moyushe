@extends("layouts.default")
@section('content')
<link rel="stylesheet" href="/static/plugins/mditor/css/mditor.min.css"/>
<div class="columns">
    <div class="column home-topic">
        <div class="message is-light">
            <div class="message-header">
                <div class="is-left">
                    <a href="">首页</a> / <span>发布新主题</span>
                </div>
            </div>
            <div class="message-body">
                <form id="topic-form">
                    <div class="bd-snippet-preview ">

                        <input type="hidden" name="nodeTitle" id="nodeTitle"/>
                        <input type="hidden" name="textType" id="textType" value="1"/>
                        <input type="hidden" name="csrf_token" value="{{csrf_token()}}"/>

                        <div class="field">
                            <div class="control">
                                <input class="input" id="title" name="title" type="text" placeholder="请输入主题标题" required/>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <div class="select" style="vertical-align: sub;">
                                    <select id="nodeSlug" name="nodeSlug">
                                        <option value="" selected>请选择节点</option>
                                        #for(item : nodes)
                                        <optgroup label="${item.title}">
                                            #for(node : item.children)
                                            <option value="${node.slug}">${node.title}</option>
                                            #end
                                        </optgroup>
                                        #end
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <textarea id="editor" name="content" class="textarea" placeholder="请输入主题内容" style="height: 300px"
                                          required></textarea>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button id="publish-btn" type="submit" class="button is-link">发布主题</button>
                            </div>
                            <div class="control">
                                <a href="{{route("index")}}" class="button">取消发布</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    @include('partials.sidebar')
</div>
@endsection

<script type="text/javascript" src="/static/plugins/mditor/js/mditor.min.js"></script>
<script type="text/javascript" src="/static/plugins/jquery.validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="/static/plugins/jquery.validation/localization/messages_zh.min.js"></script>
<script type="text/javascript" src="/static/js/topic.js"></script>

