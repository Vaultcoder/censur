<html>
<head>
    <title>NewsPaper</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('master.css')}}">
     
</head>
<body>
    <div class="wrapper">
        <div class="wrapper-menu">
            <div class="home-button"><span><img height="100%" width="100%" src="{!!asset('img/home.png')!!}  "></span></div>
            <div class="second-home-button"><p class="text-fix">Indien</p></div>
            <div class="second-home-button"><p class="text-fix">Kina</p></div>
            <div class="second-home-button"><p class="text-fix">Syrien</p></div>
            <div class="second-home-button"><p class="text-fix">Vietnam</p></div>
        </div>
        <div class="header">
            <div class="header-title"><span>Blekinge Tekniska Högskolans Tidning</span></div>
        </div>
        <div class="site-menu">
            <div class="site-menu-box">
                <div class="main-menu-button"><div class="menu-text">MENY</div></div>
                <div class="main-menu-button"><div class="menu-text">MINA VAL</div></div>
                <div class="main-menu-button"><div class="menu-text">NYHETSDYGNET</div></div>
                <div class="main-menu-button"><div class="menu-text">KONTAKT</div></div>
                <div class="main-menu-button"><div class="menu-text">ALLT OM BTH</div></div>
                <div  class="main-menu-button" style="float: right;"><img style="height:40px;"src="{!!asset('img/search.png')!!}"></div>
            </div>
        </div>
        <div class="hot-news">
            <div class="hot-news-box">

                <div class="arrow-button">
                    Just Nu
                    <span class="arrow-tip-container">
                        <span class="arrow-tip">
                            <span class="arrow-tip-grad">
                            </span>
                        </span>
                    </span>
                </div>

            </div>
        </div>
            <div class="site-content">
                                @foreach ($swe as $sweden)
                <div class="main-content">
                    <div class="news">
                        <div class="main-news">
                            <div class="main-news-pic">
                                <img height="100%" width="100%" src="{!!asset($sweden->picture)!!}">
                            </div>
                            <div class="main-news-text">
                                {!! $sweden->title !!}
                                {!! $sweden->text !!}
                            </div>
                        </div>
                    </div>
                </div>
                                @endforeach
                <div class="sep-content">
                    <div class="news-now">
                        <div class="news-now-title">
                            title
                        </div>
                        <div class="news-now-pic">
                            pic
                        </div>
                        <div class="news-now-text">
                            text
                        </div>
                    </div>
                    <div class="news-now">
                        <div class="news-now-title">
                            title
                        </div>
                        <div class="news-now-pic">
                            pic
                        </div>
                        <div class="news-now-text">
                            text
                        </div>
                    </div>
                </div>
                <div class="our-news">
                    <div class="our-change">
                        <div class="our-change-pic">
                  
                        </div>
                        <div class="our-change-tzxzext">
                            text
                        </div>
                    </div>
                    <div class="break"></div>
                     <div class="our-change">
                        <div class="our-change-pic">
                            pic
                        </div>
                        <div class="our-change-tzxzext">
                            text
                        </div>
                    </div>
                    <div class="break"></div>
                     <div class="our-change">
                        <div class="our-change-pic">
                            pic
                        </div>
                        <div class="our-change-tzxzext">
                            text
                        </div>
                    </div>
                    <div class="break"></div>
                </div>
            </div>
            <div class="news-colection">
                nyheters samling
            </div>
            <div class=footer>
                footer

                        @if ($home == null)
                                troll
                        @elseif ($home != null)
                                @foreach($home as $person)
                                <label class="key">User ID</label>
                                <label class="data">{{ $person->id }}</label>
                                
                                <label class="key">Person</label>
                                <label class="data">{{ $person->name, $person->email}}</label>
                                @endforeach
                        @endif 

                     @foreach ($try as $try)
                                <p>{!! $try !!}</p>

                        @endforeach 


    
            </div>
    </div>
<script type="text/javascript">  
var a = '1';
var b = '2';
var c = '3';
var d = '4';
$(document).keydown(function(e) {
    switch(e.which) {
        case 90: // z    37 left
            var selected = a;
            troll(selected);
        break;
        case 88: //         38 up
            var selected = b;
            troll(selected);
        break;
        case 67: //       39 right
            var selected = c;
            troll(selected);
        break;
        case 86: //      40 down
            var selected = d;
            troll(selected);
        break;
        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});
function troll(selected){

    console.log('troll');
    console.log(selected);

setTimeout(function(e){
    var home = '<?php echo URL::to('home'); ?>';
    $.ajax(
    {
        url: home,
        type: 'GET',
        dataType: 'html',
        data: {id: selected}, 
    }).done( 
        function(data) 
        {
            $('body').html(data);
        });       
  },0);}

</script>
</body>
</html>


