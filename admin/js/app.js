Dropzone.options.myDropzone= {
    url: 'inservehiculo.php',
    autoProcessQueue: false,
    uploadMultiple: false,  
    maxFiles: 1,
    maxFilesize: 1,
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("nummatricula", jQuery("#nummatricula").val());
            formData.append("nommodelo", jQuery("#nommodelo").val());
            formData.append("kvehiculo", jQuery("#kvehiculo").val());
            formData.append("cvehiculo", jQuery("#cvehiculo").val());
            formData.append("evehiculo", jQuery("#evehiculo").val());
            
        });
    }
}