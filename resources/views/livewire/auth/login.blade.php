
<div class="h-screen flex justify-center items-center">
       
    <form class="w-full max-w-lg" wire:submit='login'>
     <div class="mb-2">
                <x-common.alert />
            </div>
    <div class="mb-2">
                    <h1 class="text-xl font-bold">Login</h1>
                    <p class="text-sm ">Welcome back to My files cloud.</p>
                </div>
    <label class="input input-bordered flex items-center gap-2 mb-4">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
  <input type="text" class="grow" placeholder="Email" wire:model='email' />
</label>
<label class="input input-bordered flex items-center gap-2 mb-4">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
  <input type="password" class="grow" placeholder="Password" wire:model='password'   />
</label>
<div class="mb-2 ">
                <button class="btn btn-warning w-full" type="submit" wire:loading.attr='disabled'>
                    <span class="loading loading-dots loading-xs" wire:loading></span>
                    <span wire:loading.remove>Submit</span>
                </button>
            </div>
            <p class="text-center"> -- OR --</p>
            <p class="text-center">Don't have an account ? <a href="{{ route('register') }}"
                    class="text-warning font-bold" wire:navigate>Register</a>
            </p>
    </form>
    </div>
