<x-app_layout>
    @foreach($user as $user)
    <tr>
        <td>{{$user -> id}}</td>
        <td>{{$user -> name}}</td>
    </tr>
    @endforeach
</x-aap-layout>