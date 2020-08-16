//$('#modal-regular').modal('show');
CKEDITOR.plugins.add( 'uploadBtn',
{
	init: function( editor )
	{
		editor.addCommand( 'insertu_image',
		{
			exec : function( editor )
			{
				//var timestamp = new Date();
				//editor.insertHtml( 'Hii' );
				$('.mediacenter').fadeIn();
				var vl;
				$('.mediainsert').on('click', function(){
					$('.mediacenter').fadeOut();
					vl = $('.mediainput').val();
					//alert(vl);
					$('.mediastart').slideUp();
		      $('.mediainsert').slideUp();
		      $('.mediainput').slideUp().val('');
		       $('.prgs').css('width', '0%').html('0%');
		       $('.progress').slideUp();
		       $('.mediacenter').fadeOut();
					editor.insertHtml( '<img src="'+vl+'" />' );
				});
				$('.mediaimg').on('click', function(e){
		      e.preventDefault();
		      var timg = $(this).find('img').attr('src');
					$('.mediacenter').fadeOut();
					editor.insertHtml( '<img src="'+timg+'" />' );
					editor.stop();
		    });

			}
		});
		editor.ui.addButton( 'uploadBtn',
		{
			label: 'الصور',
			command: 'insertu_image',
			 toolbar: 'insert',
			icon: this.path + 'upload.png'
		} );
	}
} );
