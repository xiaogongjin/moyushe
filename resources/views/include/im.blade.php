<div class="message is-light">
    <div class="message-header">聊天室-大厅</div>
    <div class="message-body" style="background-color: #00b89c;color: white">
        <ul id="chatbox">
            <li></li>
        </ul>
    </div>
    <div class="container">
        <ul id="chatbox">
        </ul>
    </div>
    <form class="form-inline">
        <div class="col-md-6 form-group">
            <input id="sendbox" type="text" class="text" onkeydown="if(event.keyCode==13)return false;" required>
            <button id="sendbtn" type="button" class="btn btn-is-link">发送</button>
        </div>

    </form>
</div>
@push("js")
    <script src="/static/js/im/websocket.js"></script>
@endpush