<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    @sortablelink('id', trans('column-sortable.id'), ['joe' => 'doe', 'jane' => 'doe'], ['class' => 'abc', 'rel' => 'nofollow', 'disabled' => 'disabled'])
    @sortablelink('name', 'Name')
    @sortablelink('nick_name', 'nick')
    @sortablelink('email')
    @sortablelink('detail.phone_number', trans('column-sortable.phone'))
    @sortablelink('company.name', 'Name')
    @sortablelink('company.country', 'Country')
    @sortablelink('address')
    <table>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->detail->phone_number }}</td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->company->name }}</td>
                <td>{{ $user->company->country }}</td>
                <td>{{ $user->detail->address }}</td>
            </tr>
        @endforeach
    </table>
</div>
{{ $users->appends(\Request::except('page'))->render() }}
