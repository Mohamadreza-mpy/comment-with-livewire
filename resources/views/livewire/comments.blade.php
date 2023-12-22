<div class="mx-3">
    <h1 style="font-size: 2rem">Comments</h1>
    <div class="my-4 d-flex">
        <form class="my-4 d-flex" wire:submit.prevent="addComment">

            <input type="text" class="w-100 rounded border shadow py-2 px-3 mr-2 my-2" placeholder="Write your comment here..." wire:model.debounce.500ms="newComment">


            <div class="py-2">
                <button type="submit" class="p-2 btn btn-success w-20 rounded shadow text-white">Add</button>
            </div>

        </form>

    </div>
    @if($textNull)
        <label for="" class="text-danger">
            this text is null
        </label>
        @endif
    @foreach($comments as $comment)
    <div class="rounded border shadow p-3 my-2">
        <div class="d-flex justify-content-between my-2">
            <div class="d-flex">
                
                <p>{{ $comment['body'] }}</p>
            </div>
        </div>
        <div class="d-flex justify-content-between my-2">
            <div class="d-flex">
                <button type="button" class="btn btn-danger" wire:click="delete({{$comment['index']}})">Danger</button>
            </div>
        </div>
    </div>
        @endforeach
</div>


