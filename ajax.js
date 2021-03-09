/*
 * Author:           I.A John <ifeoluwa.adewunmi94@gmail.com>
 * Copyright:        (c) 2020, Ifeoluwa-Adewunmi John | All Rights Reserved.
 */

$('#submit').click( function()
{
    var submitFormName = 'form[name=calculator] ';
    var oData = { amount : $(submitFormName + '#userAmount').val() };

    $.get('check.php', oData, function(oOutput)
    {
        $('#amount').text( $(oOutput).find('amount').text() );
        $('#charges').text( $(oOutput).find('charges').text() );
        $('#status').text( $(oOutput).find('status').text() );
    });
});