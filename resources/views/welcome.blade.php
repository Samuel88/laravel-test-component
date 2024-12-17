<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Laravel Component</title>
</head>
<body>
    @php
        $title = "Titolo del messaggio"    
    @endphp
    <x-alert type="error">
        <x-slot:title class="test">
            Titolo del messaggio
        </x-slot>

        Testo del messaggio
    </x-alert>
    <x-option value="ciao" label="ciaoLabel"/>
</body>
</html>