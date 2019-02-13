<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
        <title>Technical Test</title>

        
    </head>
    <body>
        <div class="bigcontainer">

        @foreach($data as $key=>$value)
            <?php
            /* $value["h&s"])/12 */
            $motorway=$key;
           $overall = $value["overall"];
           $hands = (($value["h&s"])/12)*817;
           $customer = (($value["customer"])/12)*691;
           $delivery = (($value["delivery"])/12)*565;
           ?>

    <h1>{{$motorway}}</h1>

    <div class="container">
        <svg class="circle-chart" viewbox="0 0 700 700" width="700" height="600" xmlns="http://www.w3.org/2000/svg">

            <circle class="circle-chart__background" stroke="#efefef" stroke-width="10" fill="none" cx="90" cy="160" r="130" />

            <circle class="circle-chart__background" stroke="#efefef" stroke-width="10" fill="none" cx="90" cy="160" r="110" />

            <circle class="circle-chart__background" stroke="#efefef" stroke-width="10" fill="none" cx="90" cy="160" r="90" />

            <circle class="circle-chart__circle" stroke="#0D7D84" stroke-width="10" stroke-dasharray="{{$hands}},817" stroke-linecap="round" fill="none" cx="90" cy="160" r="130" />

            <circle class="circle-chart__circle" stroke="#F15C5B" stroke-width="10" stroke-dasharray="{{$customer}},691" stroke-linecap="round" fill="none" cx="90" cy="160" r="110"  />

            <circle class="circle-chart__circle" stroke="#F1947F" stroke-width="10" stroke-dasharray="{{$delivery}},565" stroke-linecap="round" fill="none" cx="90" cy="160" r="90" />

        <text x="90" y="170" text-anchor="middle" font-size="50px" >{{$overall}}</text>

        <text x="235" y="170" text-anchor="middle" font-size="20px" >0</text>

        <text x="-53" y="170" text-anchor="middle" font-size="20px" >6</text>

        <text x="90" y="15" text-anchor="middle" font-size="20px" >9</text>

        <text x="90" y="315" text-anchor="middle" font-size="20px" >3</text>
        </svg>
    </div>
            
        @endforeach

    </div>
          
          {{-- <div class="container">
                <div id="activeBorder5" class="active-border5">
                        <div id="activeBorder4" class="active-border4" style="background-image:
                        linear-gradient(90deg, transparent 50%, #D3D3D3 50%),
                        linear-gradient({{$hands}}deg, #D3D3D3 50%, transparent 50%);">
                            <div id="activeBorder3" class="active-border3">
                                <div id="activeBorder2" class="active-border2" style="background-image:
                                linear-gradient(90deg, transparent 50%, #D3D3D3 50%),
                                linear-gradient({{$customer}}deg, #D3D3D3 50%, transparent 50%);">
                                <div id="activeBorder1" class="active-border1">
                                        <div id="activeBorder" class="active-border" style="background-image:
                                        linear-gradient(30deg, transparent 50%, #D3D3D3 50%),
                                        linear-gradient(0deg, #D3D3D3 50%, transparent 50%);" >
                                            <div id="circle" class="circle">
                                                <span class="prec 30" id="prec">{{$overall}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>; --}}

    </body>
</html>
