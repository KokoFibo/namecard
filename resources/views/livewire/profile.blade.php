<div>
    <div class='flex-col xs:flex'>
        <div class="mt-5 p-5">
            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Name</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='name' />
            </label>
            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='email' />
            </label>
            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Title</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='title' />
            </label>
            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Company</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='company' />
            </label>
            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Department</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='department' />
            </label>
        </div>
        <div class="mt-5 p-5">

            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Address</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='address' />
            </label>
            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Mobile</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='mobile' />
            </label>
            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Profile Picture</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='profilePicture' />
            </label>
            <label class="form-control w-full max-w-xs mb-3">
                <div class="label">
                    <span class="label-text">Background Picture</span>
                </div>
                <input type="text" class="input input-bordered w-full max-w-xs" wire:model='backgroundPicture' />
            </label>
        </div>
    </div>
    <div class='p-5'>
        <button class="btn btn-primary">Update</button>
    </div>
</div>
