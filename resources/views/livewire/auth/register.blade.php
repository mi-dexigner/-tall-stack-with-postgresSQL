
    <div class="h-screen flex justify-center items-center">
        
    <form class="w-full max-w-lg" wire:submit='register'>
    <div class="flex justify-between">
    <div class="mb-2">
    <h1 class="text-xl font-bold">Register</h1>
                    <p class="text-sm ">Create an account and start storing your files on the cloud.</p>
                </div>
                <x-common.themeSwitch />
    </div>
    <label class="input input-bordered flex items-center gap-2 mb-4">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
  <input type="text" class="grow" placeholder="Name" id="name" wire:model='name' />
  @error('name')
    <span class="text-red-500">{{ $message }}</span>
   @enderror
</label>
<label class="input input-bordered flex items-center gap-2 mb-4">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
  <input type="text" class="grow" placeholder="Email Address" id="email" wire:model='email'/>
  @error('email')
    <span class="text-red-500">{{ $message }}</span>
   @enderror
</label>
<label class="input input-bordered flex items-center gap-2 mb-4">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
  <input type="password" class="grow" placeholder="Password" id="password" wire:model='password' />
  @error('password')
    <span class="text-red-500">{{ $message }}</span>
   @enderror
</label>
<label class="input input-bordered flex items-center gap-2 mb-4">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
  <input type="password" class="grow" placeholder="Confirm Password" id="cpassword" wire:model='password_confirmation' />
</label>
<div class="mb-2 ">
                <button class="btn btn-warning w-full" type="submit" wire:loading.attr='disabled'>
                    <span class="loading loading-dots loading-xs" wire:loading></span>
                    <span wire:loading.remove>Submit</span>
                </button>
            </div>
            <p class="text-center"> -- OR --</p>
            <p class="text-center">Already have an account ? <a href="{{ route('login') }}" wire:navigate
                    class="text-warning font-bold">Login</a>
    </form>
    </div>
   