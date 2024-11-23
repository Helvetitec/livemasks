# Livemasks
 Input masks for Laravel Livewire v3

## Usage
### MoneyInput
Add a money Input to your platform
- v1: (model) Livewire Model to update
- v2: (string) Id of the input
- v3: (string) Name of the input
- v4: (string) class from the input
- v5: (boolean) Set the input to required or not
```html
<livewire:livemasks.money wire:model.live='v1' id="v2" name="v3" class="v4" :required="v5"/>
```