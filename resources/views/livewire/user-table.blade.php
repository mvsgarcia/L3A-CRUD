<div>

    <table class="flex w-full min-w-full divide-y divide-gray-200">
    
        <tbody class="w-full overflow-y-auto divide-y-8 divide-white overscroll-y-auto h-80">
            @foreach ($users as $user)
            <tr class="flex items-center w-full h-16 px-4 space-x-2 text-xs md:h-20 md:space-x-10 lg:px-8 2xl:space-x-16 bg-brand-2 md:text-sm">
    
                <td class="w-20 py-4 text-gray-900 break-words md:w-32 2xl:w-40">
                    {{ $user->name }}
                </td>
    
                <td class="w-20 py-4 text-gray-900 break-words md:w-32 2xl:w-40">
                    {{ $user->email }}
                </td>
    
                <td class="w-10 py-4 text-gray-500 md:w-16 2xl:w-20">
    
                    {{$user->admin == true ? 'Admin' : "User"}}
    
                </td>
    
                <td class="w-4 py-4 text-gray-500 md:w-8 2xl:w-10">
    
                    <a href="{{ route('users.edit', $user->id) }}"><img class="" src="{{asset('edit-icon.png')}}"
                            alt="Edit Icon"></a>
    
                </td>
    
                <td class="w-4 py-4 text-gray-500 md:w-8 2xl:w-10">
    
                    <form method="POST" action="{{ route('users.destroy',$user->id) }}">
                        @method('delete')
                        @csrf
                        <button type="submit"><img src="{{asset('delete-icon.png')}}" alt="Delete Icon"></button>
                    </form>
    
                </td>
    
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
