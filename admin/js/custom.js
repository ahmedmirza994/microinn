
    $(document).ready(function(){

        var ids = [];

        Dropzone.options.myAwesomeDropzone = {
            paramName: '../include/uploadify.php',
            maxFilesize: 20,
            resizeQuality: 0.8,
            resizeWidth: 1000, 
            resizeHeight: 1000,
            resizeMethod: 'contain',
            acceptedFiles: 'image/*',
            init: function () {
                this.on('sending', function(file, xhr, formData){
                });
                this.on('queuecomplete', function (file) {
                    //alert('All files have uploaded');
                });
                this.on('success', function( file, resp ){
                    ids.push(resp);
                    $("#images_ids").val(ids);
                });
                this.on('error', function( e ){
                    console.log('erors and stuff');
                    console.log( e );
                });
            }
        };
    });
		