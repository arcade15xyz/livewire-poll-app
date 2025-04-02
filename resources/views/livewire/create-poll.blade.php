<div>
    <form wire:submit.prevent = "createPoll">
        <label>Poll Title</label>

        <input type="text" wire:model.live="title" placeholder="Enter the title">
        @error('title')
            <div class=" text-red-500">{{ $message }}</div>
        @enderror

        <div class="mt-4 mb-4">
            <button class="btn" wire:click.prevent = "addOption">Add Option</button>
        </div>

        <div >
            @foreach($options as $index => $option)
                <div class="mb-4">
                    <label for="">Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" wire:model.live="options.{{ $index }}" placeholder="Enter the options"/>
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                    @error("options.{$index}")
                        <div class=" text-red-500">{{ $message }}</div>
                    @enderror
                </div>

            @endforeach
        </div>
        <button type="submit" class="btn">Create Poll</button>
    </form>

</div>
