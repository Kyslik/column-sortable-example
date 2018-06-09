<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    @sortablelink('userOwner.id', trans('column-sortable.id'))
    @sortablelink('userOwner.name', 'Name')
    @sortablelink('userOwner.email')
    @sortablelink('phone_number', trans('column-sortable.phone'))
    <table>
        @foreach ($details as $detail)
            <tr>
                <td>{{ $detail->userOwner->id }}</td>
                <td>{{ $detail->userOwner->name }}</td>
                <td>{{ $detail->userOwner->email }}</td>
                <td>{{ $detail->phone_number }}</td>
            </tr>
        @endforeach
    </table>
</div>
{{ $details->appends(\Request::except('page'))->render() }}