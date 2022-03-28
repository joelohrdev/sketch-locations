<div
    x-data
    x-init="
    FilePond.setOptions({
        server: {
            process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
            },
            revert: (filename, load) => {
                @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
            },
        },
    });
    FilePond.create($refs.input)
    "
    wire:ignore
>
    <input type="file" x-ref="input" />
</div>
