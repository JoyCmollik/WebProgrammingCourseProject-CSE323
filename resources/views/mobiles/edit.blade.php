@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header">
            <div class="border_left"></div>
            <h1>Edit an existing mobile</h1>
        </div>

        <div class="form_container">
            <div class="go-back">
                <a href="/mobiles">Back To Home</a>
            </div>

            <form action="/mobiles/{{ $mobile->id }}" method="POST">
                @csrf
                <!-- {{-- can't update with POST, so we say convert the method to put --}} -->
                @method('PUT')
                
                <div class="input_group_container">

                    <div class="input_container">
                        <input type="text" name="brand" id="brand" class="input_item" value="{{ $mobile->brand }}" autocomplete="off">
                        <label for="brand" class="input_label">Brand</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="model" id="model" class="input_item" value="{{ $mobile->model }}" autocomplete="off">
                        <label for="model" class="input_label">Model</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="processor" id="processor" class="input_item" value="{{ $mobile->processor }}" autocomplete="off">
                        <label for="brand" class="input_label">Processor</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="ram" id="ram" class="input_item" value="{{ $mobile->ram }}" autocomplete="off">
                        <label for="ram" class="input_label">RAM</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="rom" id="rom" class="input_item" value="{{ $mobile->rom }}" autocomplete="off">
                        <label for="brand" class="input_label">ROM</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="gpu" id="gpu" class="input_item" value="{{ $mobile->gpu }}" autocomplete="off">
                        <label for="gpu" class="input_label">GPU</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="display" id="display" class="input_item" value="{{ $mobile->display }}" autocomplete="off">
                        <label for="display" class="input_label">Display</label>
                    </div>
                    <div class="input_container">
                        <input type="text" name="price" id="price" class="input_item" value="{{ $mobile->price }}" autocomplete="off">
                        <label for="price" class="input_label">Price</label>
                    </div>

                </div>

                <div class="button_container">
                    <button type="submit">Update</button>
                </div>

            </form>
        </div>
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

    .container{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .header {
        padding: 0.7em;
        width: 64% !important;
        border-radius: 1em;
        display: flex;
        justify-content: center;
        background: #121212;
    }

    .header h1 {
        font-weight: 700;
        letter-spacing: 0.1em;
        font-size: 2em;
    }
            
    .border_left {
        width: 4px;
        margin-right: 0.8em;
        background: #FF0266;
    }

    .form_container {
        margin-top: 2.5em;
        width: 64%;
        background: #121212;
        height: 470px;
        padding: 1em 2.5em;
        text-align: center;
        border-radius: 1em;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

    .go-back a{
        font-family: 'Noto Sans' , sans-serif;
        text-decoration: none;
        color: #FFFFFF;
        background-color: #none;
        padding: 0.5em 1.2em;
        font-size: 1em;
        border: 1.9px solid #FFFFFF;
        border-radius: 0.28em;
        margin-top: 10px;
        transition: all 0.2s ease-in;
    }

    .go-back a:hover {
        background-color: #7951aa;
        color: #fff;
        box-shadow: 0px 1px 19px 0px rgba(187,134,252,0.73);
        -webkit-box-shadow: 0px 1px 19px 0px rgba(187,134,252,0.73);
        -moz-box-shadow: 0px 1px 19px 0px rgba(26, 4, 9, 0.73);
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
        max-height: 50px;
    }

    .error_list_item {
        list-style-type: none;
        background: rgba(255, 26, 0, 0.1);
        border-radius: 1em;
        padding: 0.4em 0.9em;
        color: #FFF;
        margin: 0.5em;
        font-size: 14.5px
    }

    .error_list_item span {
        color: rgba(255, 26, 0, 0.9);
        margin-right: 4px;
    }


</style>