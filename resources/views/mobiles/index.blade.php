@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header">
            <div class="border_left"></div>
            <h1>Mobiles Collection</h1>
        </div>

        <div class="addmobile">
            <a href="/mobiles/create">Add a new mobile</a>
        </div>

        <table class="table_content">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Processor</th>
                    <th>RAM</th>
                    <th>ROM</th>
                    <th>GPU</th>
                    <th>Display</th>
                    <th>Price</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($mobiles as $mobile)
                    <tr>
                        <td id="brand_name">{{ $mobile->brand }}</td>
                        <td>{{ $mobile->model }}</td>
                        <td>{{ $mobile->processor }}</td>
                        <td>{{ $mobile->ram }}GB</td>
                        <td>{{ $mobile->rom }}GB</td>
                        <td>{{ $mobile->gpu }}</td>
                        <td>{{ $mobile->display }}</td>
                        <td class="at_price"><span class="make_me_pink">$</span>{{ $mobile->price }}</td>
                        <td class="button_holder">
                            <a href="/mobiles/{{ $mobile->id }}/edit" class="edit_button">Edit</a>    
                        </td>
                        <td class="button_holder">
                            <form action="/mobiles/{{ $mobile->id }}" method="POST">
                                @csrf
                                @method('delete')
        
                                <button type="submit" class="delete_button">Delete</button>
                            </form>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>   

        <div class="pagination_items">
            {{ $mobiles->links() }}
        </div>
        
    </div>
@endsection

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Convergence&display=swap');

            .header {
                background: #282828;
                padding: 0.7em;
                width: 100% !important;
                border-radius: 1em;
                display: flex;
                justify-content: center;
            }

            .header h1 {
                margin-left: ;
                font-family: 'Convergence', sans-serif;
                font-weight: 700;
                letter-spacing: 0.1em;
                font-size: 2em;
            }
            
            .border_left {
                background: #FF0266;
                width: 4px;
                margin-right: 0.8em;
            }

            .addmobile {
                padding: 1em 0;
                text-align: center;
                margin: 1em 0;
            }

            .addmobile a{
                font-family: 'Noto Sans' , sans-serif;
                text-decoration: none;
                color: #151515;
                background-color: #BB86FC;
                padding: 0.5em 1.2em;
                font-size: 1em;
                border-radius: 0.28em;
                transition: all 0.2s ease-in;
            }

            .addmobile a:hover {
                background-color: #7951aa;
                color: #fff;
                box-shadow: 0px 1px 19px 0px rgba(187,134,252,0.73);
                -webkit-box-shadow: 0px 1px 19px 0px rgba(187,134,252,0.73);
                -moz-box-shadow: 0px 1px 19px 0px rgba(26, 4, 9, 0.73);
            }

            .table_content {
                table-layout: fixed;
                background: #404040;
                border-collapse: collapse;
                width: 100%;
                border-radius: 1em !important;
                border-bottom-left-radius: 0 !important;
                text-align: left;
                overflow: hidden;
            }

            .table_content thead {
                width: 100%;
                background-color: #282828;
            }

            .table_content th {
                text-align: left;
                font-size: 15px;
                padding: 1em 2em 1em 0.8em;
                text-transform: uppercase;
                letter-spacing: 0.2em;
            }

            .table_content tbody tr:nth-of-type(even) {
                background: #474847;
            }

            .table_content td {
                font-size: 17px;
                padding: 1em 0.8em;
                color: #B3B3B3;
            }

            .button_holder {
                padding: 1em 1.5em !important;
            }

            #brand_name {
                text-transform: uppercase;
                color: #fff;
                font-size: 15px;
                letter-spacing: 0.1em;
            }

            .at_price {
                text-align: center;
                color: #FFF !important;
                border-bottom: 2.5px solid #FF0266;
            }

            .make_me_pink {
                color: #FF0266;
            }

            .edit_button {

                text-decoration: none;
                font-family: 'Noto Sans', sans-serif;
                padding: 0.2em 1.4em;
                background: none;
                color: #FFF;
                border: 1.9px #03DAC5 solid;
                border-radius: 0.28em;
                transition: all 0.2s linear;
            }

            .edit_button:hover {
                background-color: #18fce6;
                border-color: #18fce6;
                color: #B3B3B3;
                box-shadow: 1px 1px 10px 1px rgba(24,252,230,0.63);
                -webkit-box-shadow: 1px 1px 10px 1px rgba(24,252,230,0.63);
                -moz-box-shadow: 1px 1px 10px 1px rgba(24,252,230,0.63);
            }

            .delete_container {
               text-align: center !important;
            }

            td form {
                /* to get rid of extra whitespace given by form */
                padding: 0 !important;
                margin: 0 !important;
            }

            .delete_button {
                border: none;
                font-family: 'Noto Sans', sans-serif;
                padding: 0.2em 1em;
                background-color: #FF7597;
                border: 1.9px #FF7597 solid;
                border-radius: 0.28em;
                color: #151515;
                transition: all 0.2s linear;
            }

            .delete_button:hover {
                background-color: #FF0266;
                border-color: #FF0266;
                color: #fff;
                box-shadow: 1px 1px 10px 1px rgba(255,117,151,0.63);
                -webkit-box-shadow: 1px 1px 10px 1px rgba(255,117,151,0.63);
                -moz-box-shadow: 1px 1px 10px 1px rgba(255,117,151,0.63);
            }

            /* pagination properties */
            .page-link:first-child, .page-link:last-child {
                border-top-left-radius: 0 !important;
                border-top-right-radius: 0 !important;
            }

            .page-link {
                color: #FF0266 !important;
                background-color: #282828 !important;
                border: none !important;
            }

            .page-link:hover {
                background: #B3B3B3 !important;
            }

            .page-item.active .page-link {
                background-color: #474847 !important;
                border-color: #FF7597 !important;
            }

        </style>
