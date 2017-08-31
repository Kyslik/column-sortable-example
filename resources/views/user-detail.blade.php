<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    @sortablelink("user.id", trans('column-sortable.id'))
    @sortablelink('user.name', 'Name')
    @sortablelink('user.email')
    @sortablelink('phone_number', trans('column-sortable.phone'))
    <table>
        @foreach ($details as $detail)
            <tr>
                <td>{{ $detail->user->id }}</td>
                <td>{{ $detail->user->name }}</td>
                <td>{{ $detail->user->email }}</td>
                <td>{{ $detail->phone_number }}</td>
            </tr>
        @endforeach
    </table>
</div>
{{ $details->appends(\Request::except('page'))->render() }}