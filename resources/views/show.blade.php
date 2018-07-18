<table border="1px black solid">
    <tr>
        <th>id</th>
        <th>task_id</th>
        <th>status</th>
        <th>created_at</th>
    </tr>
    @foreach($logs as $log)
        <tr>
            <td>{{ $log->id }}</td>
            <td>{{ $log->task_id }}</td>
            <td>{{ $log->status }}</td>
            <td>{{ $log->created_at }}</td>
        </tr>
    @endforeach
</table>

