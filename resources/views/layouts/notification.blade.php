@if(session()->has('notification'))
    @php
        $msg = session()->get('notification.msg');
         $type = session()->get('notification.type');

             switch($type)
                {
                case 'succes':
                $class = ' class="alert alert-danger"';
                break;
                case 'error':
                $class = ' class="alert alert-e alert-dismissible fade in"';
                break;
                case 'info':
                $class = ' class="alert alert-info alert-dismissible fade in"';
                break;
                case 'warning':
                $class = ' class="alert alert-warning alert-dismissible fade in"';
                break;
                default:
                $class = ' class="alert alert-warning alert-dismissible fade in"';
                break;
                }

        $str = "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><div{$class}>".$msg."</div></div>";

        echo $str;
    /*{{session()->forget('notification');}}*/
    @endphp



@endif

@if(session()->has('extranet.notification'))
    @php
        $msg = session()->get('extranet.notification.msg');
         $type = session()->get('extranet.notification.type');

             switch($type)
                {
                case 'succes':
                $class = ' class="alert alert-danger"';
                break;
                case 'error':
                $class = ' class="alert alert-error alert-dismissible fade in"';
                break;
                case 'info':
                $class = ' class="alert alert-info alert-dismissible fade in"';
                break;
                case 'warning':
                $class = ' class="alert alert-warning alert-dismissible fade in"';
                break;
                default:
                $class = ' class="alert alert-warning alert-dismissible fade in"';
                break;
                }

        $str = "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><div{$class}>".$msg."</div></div>";

        echo $str;
    /*{{session()->forget('notification');}}*/
    @endphp



@endif