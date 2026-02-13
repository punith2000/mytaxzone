@foreach($messages as $msg)
    <div style="background: {{ $msg->is_read ? '#fff' : '#d4edda' }}; padding:10px; margin-bottom:5px;">
        [{{ $msg->created_at }}] {{ $msg->message }}
        @if(!$msg->is_read)
            <a href="{{ route('admin.message.read', $msg->id) }}">Mark as read</a>
        @endif
    </div>
@endforeach
