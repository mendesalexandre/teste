     <form class="flex flex-col rounded-md bg-white w-1/4 p-7 shadow-lg" wire:submit.prevent="login">
         <span class="text-gray-800">E-mail</span>
         <input type="text" name="email" id="email" class="w-full border-2 outline-none my-2 rounded-sm p-3"
             wire:model="email">
         @error('email')
             <span class="error">{{ $message }}</span>
         @enderror
         <span class="text-gray-800">Senha</span>
         <input type="password" name="password" id="password" class="w-full border-2 outline-none my-2 rounded-sm p-3"
             wire:model="password">
         @error('password')
             <span class="error">{{ $message }}</span>
         @enderror
         <button class="bg-blue-600 w-full text-white p-2 rounded-sm my-2 self-end">Entrar</button>
     </form>
