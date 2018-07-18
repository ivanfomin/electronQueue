<table border="1px black solid">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>counter</th>
        <th>increment</th>
    </tr>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</td>
            <td>{{ $task->counter }}</td>
            <td><a href="{{ route('incr', ['id' => $task->id]) }}">Увеличить</a></td>
        </tr>
    @endforeach
</table>

<p>
    <a href="{{ route('working') }}">Принять в работу</a>
</p>

