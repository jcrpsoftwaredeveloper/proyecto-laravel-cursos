@props(['users'])

<div class="flex flex-wrap m-1 md:m-2">
    @foreach($users as $user)
        <div class="md:w-1/3 lg:w-1/4 p-3">
            <div class="w-full h-full border">
                <div class="p-1">
                    <p class="font-bold">{{Str::upper($user->name)}}</p>
                    <p>{{Str::limit($user->email,75)}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

