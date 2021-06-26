@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header">
            <div class="border_left"></div>
            <h1>Add a new mobile</h1>
        </div>

        <div class="form_container">
            <form action="/mobiles" method="POST">
                @csrf

                <div class="input_group_container">

                    <div class="input_container">
                        <input type="text" name="brand" id="brand" class="input_item" placeholder="Brand name" autocomplete="off">
                        <label for="brand" class="input_label">Brand</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="model" id="model" class="input_item" placeholder="Model of the phone" autocomplete="off">
                        <label for="model" class="input_label">Model</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="processor" id="processor" class="input_item" placeholder="Processor" autocomplete="off">
                        <label for="brand" class="input_label">Processor</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="ram" id="ram" class="input_item" placeholder="RAM" autocomplete="off">
                        <label for="ram" class="input_label">RAM</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="rom" id="rom" class="input_item" placeholder="ROM" autocomplete="off">
                        <label for="brand" class="input_label">ROM</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="gpu" id="gpu" class="input_item" placeholder="GPU" autocomplete="off">
                        <label for="gpu" class="input_label">GPU</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="display" id="display" class="input_item" placeholder="Display" autocomplete="off">
                        <label for="display" class="input_label">Display</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="price" id="price" class="input_item" placeholder="Price" autocomplete="off">
                        <label for="price" class="input_label">Price</label>
                    </div>

                </div>

                <div class="button_container">
                    <button type="submit">Submit</button>
                </div>
            </form>

        </div>

        @if ($errors->any())
                <div class="error_list">
                    @foreach ($errors->all() as $error)
                        <li class="error_list_item">{{ $error }}</li>
                    @endforeach
                </div>
            @endif
    </div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Convergence&display=swap');
    
    * {
        font-family: 'Convergence', sans-serif;
    }

    body {
        background: #282828 !important;
    }

    .header {
                background: #121212;
                padding: 0.7em;
                width: 64% !important;
                border-radius: 1em;
                display: flex;
                justify-content: center;
            }

    .header h1 {
            /* font-family: 'Lato', sans-serif; */
            font-weight: 700;
            letter-spacing: 0.1em;
            font-size: 2em;
        }
            
    .border_left {
            background: #FF0266;
            width: 4px;
            margin-right: 0.8em;
        }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form_container {
        margin-top: 2.5em;
        width: 64%;
        background: #121212;
        height: 400px;
        padding: 1em 2.5em;
        text-align: center;
        border-radius: 1em;
        display: flex;
        justify-content: center;
    }

    .input_group_container {
        margin-top: 1.9em;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 2em;
        grid-row-gap: 1em;
    }

    .input_container {
        position: relative;
        width: 20em;
        height: 3em;
    }

    .input_item {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #FFF;
        border-radius: 1em;
        color: #FFF;
        outline: none;
        padding: 1.25em;
        background: none;
        transition: all 0.4s ease;
    }

    .input_item:hover {
        border-color: #FF7597;
    }

    .input_item:focus {
        border-color: #FF0266;
    }

    .input_label {
        position: absolute;
        left: 1em;
        top: -0.7em;
        font-size: 0.8em;
        padding: 0 0.5em;
        color: #FFF;
        cursor: text;
        border-radius: 1em;
        background: #404040; 
    }

    .button_container {
        margin-top: 2.5em;
    }

    .button_container button {
        background: #FF0266;
        border: none;
        padding: 0.7em 2.5em;
        letter-spacing: 0.4em;
        font-weight: bold;
        border-radius: 1em;
        color: #B3B3B3;
        text-transform: uppercase;
        transition: all 0.4s ease;
    }

    .button_container button:hover {
        transform: translateY(-4px);
        color: #FFFFFF;
    }

    .error_list {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .error_list_item {
        list-style-type: none;
        background: #FF7597;
        border-radius: 1em;
        padding: 0.4em 1em;
        color: FFF;
        margin: 0.5em;
    }


</style>