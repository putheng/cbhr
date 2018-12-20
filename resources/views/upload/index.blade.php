<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css?v=1') }}">
</head>
<body>
	<ul id="lists"></ul>
	<span id="loading" class="hidden">Loading ...</span>

	<input type="file" name="file" id="file"/>


	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

	<script type="text/javascript">

	function deleteFile(id)
	{
		$('li#remove_'+id).remove();
	}

	$("#file").on("change", function (e) {
	    var file = $(this)[0].files[0];
	    var upload = new Upload(file);

	    // maby check size or type here with upload.getSize() and upload.getType()

	    $('#loading').removeClass('hidden');
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
	        url: "{{ route('file.upload') }}",
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        xhr: function () {
	            var myXhr = $.ajaxSettings.xhr();
	            if (myXhr.upload) {
	                myXhr.upload.addEventListener('progress', that.progressHandling, false);
	            }
	            return myXhr;
	        },
	        success: function (data) {
	        	$('#lists').append('<li id="remove_'+ data.id +'">'+ data.name +'&nbsp;&nbsp;<a href="#" onclick="deleteFile('+data.id+');">x</></li>');
	        	 $('#loading').addClass('hidden');
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

	</script>
</body>
</html>