jQuery(document).ready(function ($) {
	dropzone.options.myDrop = {
		uploadMultiple: true,
		maxFileSize: 10,
		acceptedFiles: 'image/*',

		init: function init() {
			this.on('error', function () {
				alert('Error al cargar el archivo')
			})
		},
	}
})
