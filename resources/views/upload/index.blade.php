<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css?v=1') }}">
</head>
<body>
	<div class="progress">
		<div class="progress-bar" role="progressbar" 
			aria-valuenow="60" aria-valuemin="0" 
			aria-valuemax="100">
			<span class="status">0%</span>
	  </div>
	</div>

	<input type="file" name="file" id="file">


	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

	<script type="text/javascript">

	$("#file").on("change", function (e) {
	    var file = $(this)[0].files[0];
	    var upload = new Upload(file);

	    // maby check size or type here with upload.getSize() and upload.getType()

	    // execute upload
	    upload.doUpload();
	});

	var Upload = function (file) {
	    this.file = file;
	};

	Upload.prototype.getType = function() {
	    return this.file.type;
	};
	Upload.prototype.getSize = function() {
	    return this.file.size;
	};
	Upload.prototype.getName = function() {
	    return this.file.name;
	};
	Upload.prototype.doUpload = function () {
	    var that = this;
	    var formData = new FormData();

	    // add assoc key values, this will be posts values
	    formData.append("file", this.file, this.getName());
	    formData.append("upload_file", true);

	    $.ajax({
	        type: "POST",
	        url: "{{ route('upload') }}",
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        xhr: function () {
	            var myXhr = $.ajaxSettings.xhr();
	            if (myXhr.upload) {
	                myXhr.upload.addEventListener('progress', that.progressHandling, false);
	            }
	            return myXhr;
	        },
	        success: function (data) {
	            console.log(data)
	        },
	        error: function (error) {
	            // handle error
	        },
	        async: true,
	        data: formData,
	        cache: false,
	        contentType: false,
	        processData: false,
	        timeout: 60000
	    });
	};

	Upload.prototype.progressHandling = function (event) {
	    var percent = 0;
	    var position = event.loaded || event.position;
	    var total = event.total;
	    var progress_bar_id = ".progress";
	    if (event.lengthComputable) {
	        percent = Math.ceil(position / total * 100);
	    }
	    // update progressbars classes so it fits your code
	    $(progress_bar_id + " .progress-bar").css("width", +percent + "%");
	    $(progress_bar_id + " .status").text(percent + "%");
	};
	</script>
</body>
</html>