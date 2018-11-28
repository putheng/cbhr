<?php
if(!function_exists('setLoadToken')){
    function setLoadToken(){
        $token = str_random(199);
        session()->put('setLoadToken', $token);
        return $token;
    }
}

if(!function_exists('checkLoadToken')){
    function checkLoadToken($token){
        return session()->get('setLoadToken') == $token;
    }
}

if(!function_exists('getCategory')){
    function getCategory($title, $category)
    {
        $query = App\Models\Category::whereNotNull('parent_id')->get();

        $filter = $query->where('name', $category);

        $count = $filter->count();

        if($count == 0){

            $explode = array_map('strtolower', explode('/', $category));
            $collect = collect();

            foreach($explode as $key => $value){
                $q = App\Models\Category::whereNotNull('parent_id')
                            ->where('name', 'LIKE', '%'. $value .'%')
                            ->get();
                if($q->count()){
                    $collect = $collect->merge($q);
                }
            }

            if($collect->count()){
                $category = $collect->first();
            }else{
                $explode = array_map('strtolower', explode('-', str_slug($title)));

                foreach($explode as $key => $value){
                    $q = App\Models\Category::whereNotNull('parent_id')
                                ->where('name', 'LIKE', '%'. $value .'%')
                                ->get();
                    if($q->count()){
                        $collect = $collect->merge($q);
                    }
                }

                if($collect->count()){
                    $category = $collect->first();
                }else{
                    $category = App\Models\Category::find(108);
                }

            }

        }elseif($count >= 1){
            $category = $filter->first();
        }

        return $category;
    }
}

if(!function_exists('post_today')){
    function post_start($format = 'Y-m-d'){
        return Carbon\Carbon::now()->format($format);
    }
}

if(!function_exists('post_expireday')){
    function post_expire($format = 'Y-m-d'){
        return Carbon\Carbon::now()->addDays('30')->format($format);
    }
}


if(!function_exists('role_url')){
    function role_url()
    {
        if(!auth()->check()){
            return '/';
        }
        
        return '/'. optional(auth()->user()->roles()->first())->name;
    }
}

if(!function_exists('clear_filter')){
    function clear_filter($value = []){
        return route('listing.search', 
            array_except(
                request()->query(),
                $value
            )
        );
    }
}

if(!function_exists('date_tomorrow')){
    function date_tomorrow(){
        return Carbon\Carbon::tomorrow()->format('Y-m-d');
    }
}

if(!function_exists('day_of_month')){
    function day_of_month()
    {
        $data = [];
        for ($x = 1; $x <= date('t'); $x++) {
            $data[] = $x;
        }
        
        return json_encode($data);
    }
}

if (!function_exists('on_page')) {
    function on_page($path)
    {
        return request()->is($path);
    }
}

if (!function_exists('return_if')) {
    function return_if($condition, $value)
    {
        if ($condition) {
            return $value;
        }
    }
}

if(!function_exists('email_protected')){
    function email_protected($value)
    {
		if(!empty($value)){
			$obscured = null;
			$identifier = md5(uniqid(true));

			$charset = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
			$key = str_shuffle($charset);

			for ($i = 0; $i < strlen($value); $i++) {
				$obscured .= $key[strpos($charset, $value[$i])];
			}

		$output = <<<EOT
			<span id="{$identifier}">[email protected]</span>
			<script>
				(function (k, o) {
					var c = k.split('').sort().join('');
					var r = '';

					for (var i = 0; i < o.length; i = i + 1) {
						r += c.charAt(k.indexOf(o.charAt(i)));
					}
					
					document.getElementById('{$identifier}').innerText = r;
				})('{$key}', '{$obscured}');
			</script>
EOT;

			return trim(preg_replace('/\s+/', ' ', $output));
		}
    }
}

    
function after($thiss, $inthat){
    if (!is_bool(strpos($inthat, $thiss))){
        return substr($inthat, strpos($inthat, $thiss)+ strlen($thiss));
    }
}

function after_last ($thiss, $inthat){
    if (!is_bool(strrevpos($inthat, $thiss)))
    return substr($inthat, strrevpos($inthat, $thiss)+strlen($thiss));
}

function before ($thiss, $inthat){
    return substr($inthat, 0, strpos($inthat, $thiss));
}

function before_last ($thiss, $inthat){
    return substr($inthat, 0, strrevpos($inthat, $thiss));
}

function between ($thiss, $that, $inthat){
    return before ($that, after($thiss, $inthat));
}

function between_last ($thiss, $that, $inthat){
 return after_last($thiss, before_last($that, $inthat));
}

function strrevpos($instr, $needle){
    $rev_pos = strpos (strrev($instr), strrev($needle));
    if ($rev_pos===false) return false;
    else return strlen($instr) - $rev_pos - strlen($needle);
}

function getAddressFromLatLogn($lat, $lng){
    $url = "https://maps.google.com/maps/api/geocode/json?latlng=". $lat .','.$lng ."&sensor=true&key=AIzaSyAS38E8kJ3jRwUZy-WvQWrovzP1sBuyM7s";

    $client = new GuzzleHttp\Client;

    $response = $client->request('GET', $url);
    return $response->getBody();
}

function getLatLongFromAddress($address){

    $address = str_replace('#', '', $address);
    $url = "https://maps.google.com/maps/api/geocode/json?address=$address&sensor=true&key=AIzaSyAS38E8kJ3jRwUZy-WvQWrovzP1sBuyM7s";

    $client = new GuzzleHttp\Client;

    $response = $client->request('GET', $url);
    return $response->getBody();
}

function filter_split($filters, $string, $length = 1){
    $array = [];
    foreach($filters as $key => $filter){
        $split_filter = str_split($filter, $length);
        $count = 0;
        foreach ($split_filter as $value) {
            if(strpos($string, $value) !== false){
                $count++;
            }
            $array[$filter] = $count;
        }
    }

    arsort($array);
    $collect = collect($array);
    $first = $collect->first();

    $filters = $collect->filter(function($value, $key) use ($first){
        return $value == $first;
    });
    if($filters->count() > 1){
        $length = ($length + 1);
        $filters = array_keys($filters->toArray());
        return filter_split($filters, $string, $length);
    }
    return $filters->toArray();
}

function filter_split_child($filters, $string, $length = 1){
    $array = [];
    foreach($filters as $children){
        $split_chilt = str_split($children, 2);
        $count = 0;
        foreach ($split_chilt as $value) {
            if(strpos($string, $value) !== false){
                $count++;
            }
            $array[$children] = $count;
        }
    }
    arsort($array);
    $collect = collect($array);
    $first = $collect->first();

    $filters = $collect->filter(function($value, $key) use ($first){
        return $value == $first;
    });

    if($filters->count() > 1){
        $length = ($length + 1);
        $filters = array_keys($filters->toArray());

        $array = [];
        foreach($filters as $filter){
            $split_filter = str_split($filter, 4);
            $c = 0;
            foreach ($split_filter as $value) {
                if(strpos($string, $value) !== false){
                    $count++;
                }
                $array[$filter] = $count;
            }
        }

        arsort($array);
        
        return $array->toArray();;
    }

    return $filters->toArray();;
}

