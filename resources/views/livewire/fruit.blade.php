<div>
    <form wire:submit.prevent="submit" method="post">
          @csrf
           @error('name') <span>{{ $message }}</span> @enderror
           <input wire:model="name" type="text" class="input-update" value= "{{ old('name') }}" name="name">
           <input type="submit" name="submit" value="追加" class="update" />
    </form>
</div> 
