<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <h1>{{__('messages.Welcome')}}</h1>
{{--              <p>{{$name}} -- {{$age}}</p>--}}
{{--                <p>{{$obj -> name}} -- {{$obj -> age}} -- {{$obj -> gender}}</p>--}}

                {{--                @if($obj -> name == 'Maya')
                                    <p> True</p>
                                @else
                                <p> False</p>
                                @endif
                --}}

               {{-- @foreach($data as $d)
                    <p>{{$d}}</p>
                @endforeach

                --}}

                {{-- @forelse($data as $d)
                    <p>{{$d}}</p>
                @empty
                    <p>Empty</p>
                @endforelse

                --}}

            </div>
        </div>
    </body>
</html>
