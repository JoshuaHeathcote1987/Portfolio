<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Forename</th>
                <th scope="col">Surname</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr class="align-middle">
                    <th scope="row">{{ $index }}</th>
                    <td>
                        <input type="text" value="{{ $user['forename'] }}"
                            @if (!$user['edit'])
                                style="border: none; color: black;" disabled
                            @endif
                        >
                    </td>
                    <td>
                        <input type="text" value="{{ $user['surname'] }}" 
                            @if (!$user['edit'])
                                style="border: none; color: black;" disabled
                            @endif
                        >
                    </td>
                    <td>   
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-warning w-100" wire:click="edit({{ $index }})">Edit</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-danger w-100" wire:click="remove({{ $index }})">Delete</button>
                            </div> 
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-4 col-md-4"></div> 
        <div class="col-lg-4 col-md-4"></div> 
        <div class="col-lg-4 col-md-4">
            <button class="btn btn-outline-success w-100" wire:click="update()">Update</button>
        </div> 
    </div>
</div>