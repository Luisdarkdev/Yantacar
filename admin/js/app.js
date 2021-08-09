jQuery(document).ready(function($){
    Dropezone.options.myDrop = {
        uploadMultiple: false,
        maxFileSize: 2,
        acceptedFiles: 'images/*',
        init: function init(){
            this.on('error', function(){
                alert("Error al subir imagen");
            });
        }

    }


});