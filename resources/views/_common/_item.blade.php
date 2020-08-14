<div class="messages">
@foreach($messages as $message)
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">
                <span>{{ $message->name }}</span> |
                <a href="mailto:">{{ $message->email }}</a>
                <span class="pull-right label label-info">{{ $message->updated_at }}</span>
            </h3>
        </div>
        <div class="panel-body">
            {{ $message->message }}
            <hr/>
        </div>
    </div>
@endforeach

</div>
