/**
 * Created by Marius on 05/02/14.
 */
$(document).ready(function() {  //when to run (after the load of the html code)

$('#block1').on('mouseover',
		function()
		{
         				$('#block1').css( "background-color", "#C7C7C7" );
                        $('#block1').css( "opacity", "1" );
    

   }

	).on('mouseleave',
			function()
				{
                    $('#block1').css( "background-color", "#F6F6F6" );
                    $('#block1').css( "opacity", "0.8" );
		}
	);

    $('#block2').on('mouseover',
        function()
        {
            $('#block2').css( "background-color", "#C7C7C7" );


        }
    ).on('mouseleave',
        function()
        {
            $('#block2').css( "background-color", "#F6F6F6" );
        }
    );


    $('#block3').on('mouseover',
        function()
        {
            $('#block3').css( "background-color", "#C7C7C7" );


        }
    ).on('mouseleave',
        function()
        {
            $('#block3').css( "background-color", "#F6F6F6" );
        }
    );


    $('#block4').on('mouseover',
        function()
        {
            $('#block4').css( "background-color", "#C7C7C7" );


        }
    ).on('mouseleave',
        function()
        {
            $('#block4').css( "background-color", "#F6F6F6" );
        }
    );


    $('#block5').on('mouseover',
        function()
        {
            $('#block5').css( "background-color", "#C7C7C7" );


        }
    ).on('mouseleave',
        function()
        {
            $('#block5').css( "background-color", "#F6F6F6" );
        }
    );



  
});
