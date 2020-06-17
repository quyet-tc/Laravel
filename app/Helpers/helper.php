<?php
function hello(){
    return "Hello world";
}
if (function_exists("is_admin"))
{
    function is_admin(){
        if (Auth::check()){
            if (Auth::user()->_get("role") == \app\User::ADMIN_ROLE){
                return true;
            }
        }
        return  false;
    }
}
if (!function_exists("format_money")){
    function format_money($money){
        return "$".number_format($money,2);
    }
}
if (!function_exists("notify")) {
    function notify($chanel,$event,$data)
    {
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '30b2c0426835911313f1',
            '5620b9471eeac070f472',
            '1020631',
            $options
        );

        $data['message'] = 'hello world';
        $pusher->trigger($chanel,$event,$data);
    }
}
