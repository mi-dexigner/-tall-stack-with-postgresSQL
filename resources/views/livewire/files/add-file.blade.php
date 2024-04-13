<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <dialog id="addFileModal" class="modal" wire:ignore.self>
    
        <div class="modal-box max-w-xs">
           <div class="flex items-center justify-between">
           <h3 class="font-bold text-lg">AddFile</h3>
           <form method="dialog">
                
            <button class="btn btn-sm btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
        <path d="M18 6 6 18"/>
        <path d="m6 6 12 12"/>
</svg>
            </button>
           </form>
           </div>
            <div class="mt-3">
                <form wire:submit='store' x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">

                <!-- Progress Bar -->
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
                <div class="form-control w-full max-w-xs mb-3">
                <div class="label mb-3">
    <span class="label-text">Title</span>
  </div>
  <input type="text" class="input input-bordered w-full max-w-xs" placeholder="Title" wire:model='title' />
  @error('title')
    <span class="text-red-500">{{ $message }}</span>
  @enderror
</div>
<div class="form-control w-full max-w-xs mb-3">
  <div class="label">
    <span class="label-text">Pick a file</span>
  </div>
  <input type="file" class="file-input file-input-bordered w-full max-w-xs" wire:model='image' accept="image/png,image/jpeg,image/jpg,image/gif,image/webp" />
  @error('image')
   <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
@if ($image)
   <img src="{{ $image->temporaryUrl() }}" class="w-full rounded-md object-contain my-2" />
@endif
<div class="mb-3 w-full max-w-xs mb-3">
                        <button class="btn btn-warning w-full max-w-xs" type="submit" wire:loading.attr='disabled'>
                            <span wire:loading wire:target='image'>Uploading...</span>
                            <span>Upload</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </dialog>
    @script
        <script>
            $wire.on('file-added', (event) => {
                document.getElementById("addFileModal").removeAttribute("open")
            })
        </script>
    @endscript
</div>
