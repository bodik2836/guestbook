<div class="messages">
@foreach($messages as $message)
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">
                <span>{{ $message->name }}</span> | <a href="mailto:">{{ $message->email }}</a>
            </h3>
        </div>
        <div class="panel-body">
            {{ $message->message }}
            <hr/>
            <h4><span class="pull-right label label-info">{{ date_format($message->updated_at, 'd.m.Y H:i') }}</span></h4>
        </div>
    </div>
@endforeach

</div>
