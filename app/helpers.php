<?php
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
