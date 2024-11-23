<div>
    <input x-data="mask{{ $id }}('{{ $id }}', '{{ $currencySign }}')" class="{{ $class }}" x-on:blur="getValue()" id="{{ $id }}" name="{{ $name }}" type="text" @if($required) required @endif @if($disabled) disabled @endif />
    @script
        <script>
                    Alpine.data('mask{{ $id }}', (inputId, currencySign) => ({
                        inputElement: document.getElementById(inputId),
                        inputMask: null,
                        init() {
                            this.inputMask = IMask(
                                this.inputElement,
                                {
                                    mask: currencySign + 'num',
                                    blocks: {
                                        num: {
                                            mask: Number,
                                            scale: 2,
                                            padFractionalZeros: true,
                                            thousandsSeparator: '',
                                            radix: ',',
                                            mapToRadix: ['.']
                                        }
                                    }
                                }
                            );
                            this.inputMask.unmaskedValue = $wire.unmaskedValue + "";
                            this.inputMask.updateValue();
                        },
                        getValue() {
                            $wire.unmaskedValue = this.inputMask.unmaskedValue;
                        },
                    }));
        </script>
    @endscript
</div>
